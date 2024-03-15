<template>
    <button @click="loadChat" class="my-2 px-2 py-2 border border-gray-200 ml-5 rounded-md bg-gray-300 hover:bg-gray-200 "> Load Chat</button>

    <div id="chartdiv" class="w-[500px] h-[300px] flex justify-center items-center my-2 px-2 py-2 border border-gray-200 rounded-md"></div>
</template>

<script>
    import * as am5 from "@amcharts/amcharts5";
    import * as am5map from "@amcharts/amcharts5/map";
    import am5themes_Animated from "@amcharts/amcharts5/themes/Animated";
    import am5geodata_worldLow from "@amcharts/amcharts5-geodata/worldLow";

    export default {
        name: "HeatMap.vue",
        component:['am5themes_Animated','am5geodata_worldLow'],
        data(){
            return {
                geolocation :[],
                loadingMap :true,
            }
        },
        methods:{
            loadChat(){
                // Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
                var root = am5.Root.new("chartdiv");

// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                    am5themes_Animated.new(root)
                ]);

// Create the map chart
// https://www.amcharts.com/docs/v5/charts/map-chart/
                var chart = root.container.children.push(
                    am5map.MapChart.new(root, {
                        panX: "rotateX",
                        panY: "translateY",
                        projection: am5map.geoMercator(),
                    })
                );

                chart.set("zoomControl", am5map.ZoomControl.new(root, {
                }));


// Create main polygon series for countries
// https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
                var polygonSeries = chart.series.push(
                    am5map.MapPolygonSeries.new(root, {
                        geoJSON: am5geodata_worldLow,
                        exclude: ["AQ"]
                    })
                );

                polygonSeries.mapPolygons.template.setAll({
                    fill:am5.color(0xdadada)
                });


// Create point series for markers
// https://www.amcharts.com/docs/v5/charts/map-chart/map-point-series/
                var pointSeries = chart.series.push(am5map.ClusteredPointSeries.new(root, {}));


// Set clustered bullet
// https://www.amcharts.com/docs/v5/charts/map-chart/clustered-point-series/#Group_bullet
                pointSeries.set("clusteredBullet", function(root) {
                    var container = am5.Container.new(root, {
                        cursorOverStyle:"pointer"
                    });

                    var circle1 = container.children.push(am5.Circle.new(root, {
                        radius: 8,
                        tooltipY: 0,
                        fill: am5.color(0xff8c00)
                    }));

                    var circle2 = container.children.push(am5.Circle.new(root, {
                        radius: 12,
                        fillOpacity: 0.3,
                        tooltipY: 0,
                        fill: am5.color(0xff8c00)
                    }));

                    var circle3 = container.children.push(am5.Circle.new(root, {
                        radius: 16,
                        fillOpacity: 0.3,
                        tooltipY: 0,
                        fill: am5.color(0xff8c00)
                    }));

                    var label = container.children.push(am5.Label.new(root, {
                        centerX: am5.p50,
                        centerY: am5.p50,
                        fill: am5.color(0xffffff),
                        populateText: true,
                        fontSize: "8",
                        text: "{value}"
                    }));

                    container.events.on("click", function(e) {
                        pointSeries.zoomToCluster(e.target.dataItem);
                    });

                    return am5.Bullet.new(root, {
                        sprite: container
                    });
                });

// Create regular bullets
                pointSeries.bullets.push(function() {
                    var circle = am5.Circle.new(root, {
                        radius: 6,
                        tooltipY: 0,
                        fill: am5.color(0xff8c00),
                        tooltipText: "{title}"
                    });

                    return am5.Bullet.new(root, {
                        sprite: circle
                    });
                });
// Set data
                var cities = this.geolocation;

                for (var i = 0; i < cities.length; i++) {
                    var city = cities[i];
                    addCity(city.longitude, city.latitude, city.title);
                }

                function addCity(longitude, latitude, title) {
                    pointSeries.data.push({
                        geometry: { type: "Point", coordinates: [longitude, latitude] },
                        title: title
                    });
                }

// Make stuff animate on load
                chart.appear(1000, 100);
            },
           async fetchGeoLocation(){
              await  axios.post('/api/fetch-geo-location' ).then(  ( resource )=>{
                    if( resource.status === 200  ){
                        this.geolocation =  resource.data;
                        this.loadingMap = false;

                        if(  document.getElementById('chartdiv')   ) {
                              this.loadChat();
                        }

                    }
                });
            }
        },
        created(){
            console.log(' created Loaded...');
            this.fetchGeoLocation();
        },
        mounted(){
            console.log(' mounted Loaded...');
          if(  document.getElementById('chartdiv')   ) {
            //  this.loadChat();
          }
        },
        setup(){
            console.log(' setup Loaded...');
        }

    }
</script>

<style scoped>

</style>