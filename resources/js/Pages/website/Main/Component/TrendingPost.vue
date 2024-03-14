<template>
    <!-- Trending Section -->
    <!--<div id="center-block-3" class="col-lg-4">


    </div> -->
    <div class="trending">
        <h3>Trending</h3>
        <ul class="trending-post">
            <li :id="'trending-'+Number(trendingPostIndex+1)" v-if="trendingPosts && trendingPosts.length"
                v-for="(trendingPost , trendingPostIndex ) in trendingPosts" :key="trendingPostIndex">
                <a  :href="'/post/'+trendingPost.seo_url" target="_blank">
                    <span class="number">{{trendingPostIndex+1}}</span>
                    <h3>{{trendingPost.title}}</h3>
                    <span class="author">{{trendingPost.posted_by}}</span>
                    <div class="d-flex align-items-center author">
                        <div class="photo">
                            <img :src="trendingPost.posted_by_img?trendingPost.posted_by_img:asset('zenBlog/img/person-1.jpg')"
                                 alt="User Image" class="img-fluid">
                        </div>
                        <div class="name">
                            <h3 class="m-0 p-0">{{trendingPost.posted_by}}</h3>
                        </div>
                    </div>
                </a>
            </li>
            <li v-else class="px-2 py-2 text-xs">No post found!</li>

        </ul>
    </div>
    <!-- End Trending Section -->
</template>



<script>
    export default {
        name: "TrendingPostPage",
        components: { },
        data: () => ({
            trendingPosts:[],
        }),
        methods:{
            fetch(){
                axios.post('/api/home/post/side-trending/8', {}).then(response => {
                    if(response.status === 200) {
                        this.trendingPosts = response.data.data;
                    }
                }).catch((e)=>{
                    console.log('Trending Post Issue ',e.response.data)
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