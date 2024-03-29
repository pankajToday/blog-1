<template>
    <section id="posts" class="posts">
        <div class="container" >
            <div class="row g-5">
                <div id="left-block" class=" col-lg-3">
                    <div id="" class="w-full border-start custom-border">
                        <h3 class="px-2 py-3 my-2 text-black p-20 border border-b flex justify-center  ">Latest</h3>
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
                </div>

                <div id="center-block" class=" col-lg-9">
                    <div class="row g-5">
                      <div id="infinite-list"  class="col-lg-8 border-start custom-border">
                          <div v-if="!allPostLoading">
                              <div  v-if="allPosts && allPosts.data && allPosts.data.length"
                                    v-for="(blockA ,centerIndexA ) in allPosts.data" :key='centerIndexA' class="w-full mb-3 border-b border-gray-200 pb-2">
                                  <div class="post-meta">
                                      <span class="date">{{blockA.category_name?blockA.category_name:""}}</span>
                                      <span class="mx-1">&bullet;</span>
                                      <span>{{blockA.posted_at?blockA.posted_at:""}}</span>
                                  </div>
                                  <h2>
                                      <a :href="'/post/'+blockA.seo_url"  class="text-[1.8rem] test" target="_blank">{{blockA?blockA.title:""}}</a>
                                  </h2>

                                  <a  :href="'/post/'+blockA.seo_url" target="_blank" class="w-full  flex justify-center">
                                      <img :src="blockA.post_image ? blockA.post_image : asset('zenBlog/img/post-landscape-2.jpg')"
                                           alt="post image" class="w-[280px] h-[280px] img-fluid  border-transparent rounded-md">
                                  </a>

                                  <h3  class="text-base font-normal my-3 textLimit">
                                      {{blockA.short_description ?blockA.short_description:""}}
                                  </h3>
                                  <div class="flex justify-end items-center my-1 ">
                                      <span @click="'/post/'+blockA.seo_url" v-if="blockA.short_description && blockA.short_description.length >550 " class=" px-2 py-1 border border-gray-100 rounded-md cursor-pointer hover:bg-gray-200 ">Read More </span>
                                  </div>
                              </div>
                              <div v-else class="px-2 py-2 text-xs">No post found!</div>

                              <pagination v-if="allPosts && allPosts.data && allPosts.data.length" :meta="allPosts.meta" :links="allPosts.links" location="posts"></pagination>
                          </div>
                          <div v-else class="px-2 py-2 text-xs">Loading post....</div>


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
    import Pagination from "@/Components/Table/Pagination.vue";
    import {eventBus} from "../../../../events.js";


    export default {
        name: "MainPostPage",
        components: {TrendingPostComp,Pagination },
        data: () => ({
            latestPosts:[],
            allPage:1,
            allPosts:[],
            allPostLoading:true,

        }),
        methods:{
            allPost(){
                const payload ={page:this.allPage}
                axios.post('/api/home/post/all/3', payload).then(response => {
                    if(response.status === 200) {
                        this.allPosts = response.data;

                        if( this.allPosts )
                        {this.allPage++;}

                        this.allPostLoading =false;
                    }
                }).catch((e)=>{
                    this.allPostLoading =false;
                    console.log('All post not loaded. ',e.response.data)
                })
            },
            fetch(){
                const payload ={}
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
            this.allPost();
            this.fetch();

            eventBus.$on('posts_pagination', (data) => {
                this.page = data
                this.allPost();
            })
        },


    }
</script>


<style scoped   >
    .textLimit{
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        /* truncate to 4 lines */
        -webkit-line-clamp: 4;
    }

</style>