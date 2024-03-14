<template>
    <section id="posts" class="posts">
        <div class="container" >
            <div class="row g-5">
                <div id="left-block" class=" col-lg-4">
                    <div class="w-full flex flex-center justify-center px-2 py-1 my-2 text-wrap text-xl rounded-md border border-gray-300 bg-gray-200  text-slate-950 font-semibold text-center">Weekend Post</div>
                    <div v-if="weekendPosts && weekendPosts.data && weekendPosts.data.length"
                         v-for="(leftSidePost ,leftIndex) in weekendPosts.data" :key='leftIndex'
                         class="mb-3 border-b border-gray-200 pb-2">

                        <div class="post-meta">
                            <span class="font-medium">{{leftSidePost.category_name}}</span>
                            <span class="mx-1">&bullet;</span>
                            <h2 >
                                <a class="text-xl" :href="'post/'+leftSidePost.seo_url" target="_blank">{{leftSidePost.title}}</a>
                            </h2>
                        </div>

                        <a  :href="'post/'+leftSidePost.seo_url" target="_blank" class="flex items-center justify-center" >
                            <img :src="leftSidePost.feature_image?leftSidePost.feature_image:asset('project-assetsg/imaes/website/post-images/pxfuel.com (2).jpg')" :alt="'post image'+leftIndex"
                                 class="test img-fluid" style="max-height: 180px !important; max-width: 180px; " >
                        </a>
                        <p class="mb-4 d-block"> {{leftSidePost.short_description.length>200?leftSidePost.short_description.slice(0,200)+' ...Read More':leftSidePost.short_description}}</p>

                        <div class="flex justify-between items-center">
                            <div class="d-flex align-items-center author">
                                <div class="inline-flex">
                                    <div class="photo">
                                        <img :src="leftSidePost.posted_by_img?leftSidePost.posted_by_img:asset('project-assets/images/user.jpg')" alt="User Image" class="img-fluid">
                                    </div>
                                    <div class="name mt-[13px]">
                                        <h3 class="m-0 p-0">{{leftSidePost.posted_by}}</h3>
                                    </div>
                                </div>
                            </div>
                            <span class="flex items-center">{{leftSidePost.posted_at}}</span>
                        </div>
                    </div>
                    <div v-else class="px-2 py-2 text-xs">No post found!</div>
                </div>

                <div id="center-block" class=" col-lg-8">
                    <div class="row g-5">

                      <div id="center-block-1" class="col-lg-4 border-start custom-border">
                          <div class="w-full flex flex-center justify-center px-2 py-1 my-2 text-wrap text-xl rounded-md border border-gray-300 bg-gray-200  text-slate-950 font-semibold text-center">Top Treading</div>
                            <div  v-if="topTrendingPosts && topTrendingPosts.length"
                                  v-for="(blockA ,centerIndexA ) in topTrendingPosts" :key='centerIndexA' class="mb-3 border-b border-gray-200 pb-2">
                                <a  :href="'/post/'+blockA.seo_url" target="_blank" >
                                    <img :src="blockA.post_image ? blockA.post_image : asset('zenBlog/img/post-landscape-2.jpg')"
                                         alt="post image" class="img-fluid">
                                </a>
                                <div class="post-meta">
                                    <span class="date">{{blockA.category_name?blockA.category_name:""}}</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>{{blockA.posted_at?blockA.posted_at:""}}</span>
                                </div>
                                <h2>
                                    <a :href="'/post/'+blockA.seo_url"  class="text-[1.8rem] test" target="_blank">{{blockA?blockA.title:""}}</a>
                                </h2>
                            </div>
                            <div v-else class="px-2 py-2 text-xs">No post found!</div>
                        </div>

                      <div id="center-block-2" class=" col-lg-4 border-start custom-border">
                          <div class="w-full flex flex-center justify-center px-2 py-1 my-2 text-wrap text-xl rounded-md border border-gray-300 bg-gray-200  text-slate-950 font-semibold text-center">Latest</div>
                            <div v-if="latestPosts  && latestPosts.length"
                                 v-for="(blockB ,centerIndexB ) in latestPosts"  :key='centerIndexB' class="mb-3 border-b border-gray-200 pb-2">
                                <a  :href="'/post/'+blockB.seo_url" target="_blank" >
                                    <img :src="blockB.post_image ? blockB.post_image : asset('zenBlog/img/post-landscape-2.jpg')"
                                         alt="post image" class="img-fluid">
                                </a>
                                <div class="post-meta">
                                    <span class="date">{{blockB.category_name?blockB.category_name:""}}</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>{{blockB.posted_at?blockB.posted_at:""}}</span>
                                </div>
                                <h2>
                                    <a :href="'/post/'+blockB.seo_url"  class="text-[1.8rem]" target="_blank">{{blockB?blockB.title:""}}</a>
                                </h2>
                            </div>
                          <div v-else class="px-2 py-2 text-xs">No post found!</div>
                        </div>

                        <!-- Trending Section -->
                      <div id="center-block-3" class="col-lg-4">
                        <TrendingPostComp />
                      </div>
                    <!-- End Trending Section -->
                    </div>
                </div>
            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->
</template>



<script>
    import TrendingPostComp from "./TrendingPost.vue";
    export default {
        name: "MainPostPage",
        components: {TrendingPostComp },
        data: () => ({
            leftSidePosts:[],
            latestPosts:[],
            topTrendingPosts:[],
            weekendPosts:[],
            trendingPosts:[],
        }),
        methods:{
            fetch(){
                const payload ={}
                axios.post('/api/home/post/weekend/8', payload).then(response => {
                    if(response.status === 200) {
                        this.weekendPosts = response.data;
                    }
                }).catch((e)=>{
                    console.log('Left Side Post Issue ',e.response.data)
                })

                axios.post('/api/home/post/trending/8', payload).then(response => {
                    if(response.status === 200) {
                        this.topTrendingPosts = response.data.data;
                    }
                }).catch((e)=>{
                    console.log('Center Side Post Issue ',e.response.data)
                })

                axios.post('/api/home/post/latest/8', payload).then(response => {
                    if(response.status === 200) {
                        this.latestPosts = response.data.data;
                    }
                }).catch((e)=>{
                    console.log('Center latest Post Issue ',e.response.data)
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