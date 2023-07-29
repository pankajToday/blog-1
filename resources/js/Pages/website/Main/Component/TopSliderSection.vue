<template>
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" >
            <div class="row">
                <div class="col-12"> <!-- -->
                    <Carousel class="mt-3" :autoplay="5000" :wrap-around="true" >
                        <Slide v-for="(slide,index) in sliderPosts.data" :key="index">
                            <div class="w-[100%] h-[450px] flex carousel__item">
                                <div class="swiper-slide">
                                    <a  :href="'/post/'+slide.seo_url" target="_blank" class="img-bg d-flex align-items-end"
                                       :style="{ backgroundImage: `url('${slide.post_image}')` }" >
                                        <div class="img-bg-inner">
                                            <h2>{{slide.title}}</h2>
                                            <p>{{slide.caption}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </Slide>

                        <template #addons>
                            <Pagination />
                        </template>
                    </Carousel>
                </div>
            </div>
        </div>

    </section><!-- End Hero Slider Section -->

</template>

<script>
    import 'vue3-carousel/dist/carousel.css'
    import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
    export default {
        name: "SliderPage",
        components: {
            Carousel,
            Slide,
            Pagination,
            Navigation,
        },
        data: () => ({
            sliderPosts:[],
        }),
        methods:{
            fetch(){
                const payload ={}
                axios.post('/api/home/slider-post', payload).then(response => {
                    if(response.status === 200) {
                        this.sliderPosts = response.data;
                    }
                }).catch((e)=>{
                    console.log('Slider Issue ',e.response.data)
                })
            },

        },
        created(){
            this.fetch();
        }

    }
</script>


<style scoped   >

</style>