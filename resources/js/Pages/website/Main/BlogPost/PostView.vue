<template>
    <HeadTag  />
    <HeaderNav :title="headerTitle" />

    <section id="posts" class="posts mt-[80px]">
        <div class="container" >
            <div class="row g-5">
                <div class="col-lg-9 g-5 " style="padding-right: 5px;">
                    <div class="border-2 border-gray-200 rounded-md p-3">
                        <div class="flex align-items-center author">
                            <div class="photo">
                                <img :src="post.posted_by_img?post.posted_by_img:asset('zenBlog/img/person-1.jpg')"
                                     alt="User Image" class="img-fluid" style="width: 100px;">
                            </div>
                            <div class="name">
                                <h1> {{post.title}}</h1>
                                <h4>{{post.caption}}</h4>
                            </div>

                            <button class="ml-[60px] flex justify-between items-right py-4 cursor-pointer"  @click="copyShareableLink('https://uscelebrities.xyz/'+post.seo_url)" title="click here for share.">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-share" viewBox="0 0 23 23">
                                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                                </svg>
                            </button>
                        </div>

                        <div class="mt-2 ">
                            <img :src="post.feature_image"
                                 alt="User Image" class="w-full rounded-md img-fluid" >
                        </div>
                        <div class="mt-2" v-html="post.article_content"></div>

                        <div  class="mt-2 block">
                            <div class="m-3">Tags</div>
                            <div class="flex items-center">
                                <div v-for="(tag,indexTag ) in post.tags" :key="indexTag" class="my-2 mx-2 px-2 py-2 flex bg-blue-200 border rounded-md" >
                                    <a :href="'tag/'+tag" target="_blank" class="">{{tag}}</a>
                                </div>
                            </div>
                        </div>

                        <div  class="mt-2  block">
                            <div class="m-3">Keywords</div>
                            <div class="flex items-center">
                                <div v-for="( keyword,indexKeywords ) in post.keywords" :key="indexKeywords" class="my-2 mx-2 px-2 py-2 flex bg-blue-200 border rounded-md" >
                                    <a :href="'keywords/'+keyword" target="_blank" class="">{{keyword}}</a>
                                </div>
                            </div>
                        </div>

                        <div class="w-full flex my-3 text-lg font-semibold ">
                            <div class="px-2 items-left">
                                Posted By : {{post.posted_by_name}}
                            </div>
                            <div class="px-2 items-left">
                                Posted On : {{post.forHumans}}
                            </div>
                            <button class="px-2 flex justify-between items-right pt-[8px] cursor-pointer"  @click="copyShareableLink('https://uscelebrities.xyz/'+post.seo_url)" title="click here for share.">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-share" viewBox="0 0 23 23">
                                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                                </svg>
                            </button>
                        </div>


                    </div>

                </div>
                <div class="col-lg-3 g-5" style="padding-left: 5px;">
                    <div class="border-2 border-gray-200 xs-mt-[10px] rounded-md">
                        <TrendingPostComp :title="headerTitle"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <FooterSection :title="headerTitle"/>


</template>


<script>
    import Swal from 'sweetalert2';

    import  HeadTag from '../Component/Head.vue';
    import  HeaderNav from '../Component/Header.vue';
    import  FooterSection from '../Component/Footer.vue';
    import TrendingPostComp from "../Component/TrendingPost.vue";

    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';

    export default {
        name: "PostViwPage",
        components: {HeadTag ,HeaderNav,TrendingPostComp,FooterSection },
        props:['title','postData'],
        data(){
            return{
                // authUser:this.$page.props.auth.user,
                post:"",
                headerTitle :'Tech Blog',
            }
        },
        methods:{
            copyShareableLink(url){
                navigator.clipboard.writeText(url).then(function() {
                     toast.success("URL Copied!");
                }, function() {
                    toast.warn('Unable to copy URL!')
                });
            }
        },
        created(){
            this.post = this.postData.data

        }
    }
</script>


<style scoped>
 .post-content{
     margin-left: 14rem ;
     margin-right: 14rem;
     width: 100%;
     padding: 5px;
 }

.side-section{
    max-width: 250px !important;
    min-width: 200px !important;
    margin-left: 2px;

}
.post-section{
    margin-right: 2px;
    max-width: 800px !important;
    min-width: 750px !important;
    padding: 10px;
}
</style>
