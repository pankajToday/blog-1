<template>
    <section id="posts" class="posts">
        <div class="container" >
            <div class="row g-5">
                <div id="left-block" class=" col-lg-4">
                    <div v-if="leftSidePosts && leftSidePosts.data && leftSidePosts.data.length"
                         v-for="(leftSidePost ,leftIndex) in leftSidePosts.data" :key='leftIndex' class="post-entry-1 lg">
                        <a  :href="'post/'+leftSidePost.seo_url" target="_blank" >
                            <img :src="leftSidePost.post_image?leftSidePost.post_image:asset('project-assets/images/website/post-images/pxfuel.com (2).jpg')" :alt="'post image'+leftIndex"
                                 class="img-fluid">
                        </a>
                        <div class="post-meta">
                            <span class="date">{{leftSidePost.category_name}}</span>
                            <span class="mx-1">&bullet;</span>
                            <span>{{leftSidePost.posted_at}}</span>
                        </div>
                        <h2 >
                            <a class="text-[1.9rem]" :href="'post/'+leftSidePost.seo_url" target="_blank">{{leftSidePost.title}}</a>
                        </h2>
                        <p class="mb-4 d-block"> {{leftSidePost.article_content.length>200?leftSidePost.article_content.slice(0,200)+' ...Read More':leftSidePost.article_content}}</p>

                        <div class="d-flex align-items-center author">
                            <div class="photo"><img :src="leftSidePost.posted_by_img?leftSidePost.posted_by_img:asset('zenBlog/img/person-1.jpg')" alt="User Image" class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">{{leftSidePost.posted_by}}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="center-block" class=" col-lg-8">
                    <div class="row g-5">

                      <div id="center-block-1" class="col-lg-4 border-start custom-border">
                            <div  v-if="centerBlockPosts && centerBlockPosts.A && centerBlockPosts.A.length"
                                  v-for="(blockA ,centerIndexA ) in centerBlockPosts.A" :key='centerIndexA' class="post-entry-1">
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
                                    <a :href="'/post/'+blockA.seo_url"  class="text-[1.8rem]" target="_blank">{{blockA?blockA.title:""}}</a>
                                </h2>
                            </div>
                        </div>

                        <div id="center-block-2" class=" col-lg-4 border-start custom-border">
                            <div v-if="centerBlockPosts && centerBlockPosts.B && centerBlockPosts.B.length"
                                 v-for="(blockB ,centerIndexB ) in centerBlockPosts.B"  :key='centerIndexB' class="post-entry-1">
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
                        </div>


                        <!-- Trending Section -->
                        <div id="center-block-3" class=" col-lg-4">
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

                                </ul>
                            </div>

                        </div> <!-- End Trending Section -->
                    </div>
                </div>
            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->
</template>



<script>
    export default {
        name: "MainPostPage",
        components: { },
        data: () => ({
            leftSidePosts:[],
            centerBlockPosts:[],
            trendingPosts:[],
        }),
        methods:{
            fetch(){
                const payload ={}
                axios.post('/api/home/post/left-side/2', payload).then(response => {
                    if(response.status === 200) {
                        this.leftSidePosts = response.data;
                    }
                }).catch((e)=>{
                    console.log('Left Side Post Issue ',e.response.data)
                })

                axios.post('/api/home/post/left-side/8', payload).then(response => {
                    if(response.status === 200) {
                        this.centerBlockPosts['A'] = response.data.data.slice(0,4);
                        this.centerBlockPosts['B'] = response.data.data.slice(4,8);
                    }
                }).catch((e)=>{
                    console.log('Center Side Post Issue ',e.response.data)
                })

                axios.post('/api/home/post/left-side/8', payload).then(response => {
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