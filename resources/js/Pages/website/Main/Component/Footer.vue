<template>
    <footer id="footer" class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <h3 class="footer-heading">About Tech Blog  </h3>
                        <p>In today's digital age, businesses are constantly seeking ways to stand out from the competition
                            and connect with their target audience effectively. One powerful tool that can help achieve these
                            goals is blogging. In our blog, we will explore the significance of US Celerity, the importance
                            of blogging for businesses, and how to get in touch with US Celerity.</p>
                        <p><a href="/about-us" class="footer-link-more">Learn More</a></p>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Navigation</h3>
                        <ul class="footer-links list-unstyled">
                            <li><a href="/"><i class="bi bi-chevron-right"></i> Blog</a></li>
                            <li><a href="/about-us"><i class="bi bi-chevron-right"></i> About us</a></li>
                            <li><a href="/contact-us"><i class="bi bi-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                    <div v-if="categoryList && categoryList.length" class="col-6 col-lg-2">
                        <h3 class="footer-heading">Categories</h3>
                        <ul class="footer-links list-unstyled">
                            <li v-for="(category ) in categoryList">
                                <a href="#" @click="fetchPostByCategory(category.name)"><i class="bi bi-chevron-right"></i> {{category.name}}</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="footer-heading">Recent Posts</h3>

                        <ul v-if="!loading" class="footer-links footer-blog-entry list-unstyled">
                            <li  v-for="(recentPost ,indexR ) in recentPostList.data" >
                                <a :href="'/post/'+recentPost.seo_url" class="d-flex align-items-center">
                                    <img :src="recentPost.post_image?recentPost.post_image:asset('zenBlog/img/post-sq-1.jpg')" :alt="'img-'+(indexR+1)" class="img-fluid me-3">
                                    <div>
                                        <div class="post-meta d-block">
                                            <span class="date">{{recentPost.category_name}}</span>
                                            <span class="mx-1">&bullet;</span>
                                            <span>{{recentPost.posted_at}}</span></div>
                                        <span>{{recentPost.posted_by}}</span>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright">
                            © Copyright <strong><span>{{title}}</span></strong>. All Rights Reserved
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </footer>


</template>
<script>
    export default {
        name: "FooterPage2",
        components: { },
        data: () => ({
            title:"Tech Blog",
            loading:false,
            categoryList:[],
            recentPostList:[],
        }),
        methods:{
            fetchRecentPost(){
                this.loading =true;
                const payload ={}
                axios.post('/api/home/recent-post', payload).then(response => {
                    if(response.status === 200) {
                        this.recentPostList = response.data;
                        this.loading =false;
                    }
                }).catch((e)=>{
                    this.loading =false;
                    console.log('Recent Post Issue ',e.response.data)
                })
            },
            fetchCategory(){
                const payload ={}
                axios.post('/api/home/category-list', payload).then(response => {
                    if(response.status === 200) {
                        this.categoryList = response.data;
                    }
                }).catch((e)=>{
                    console.log('Categories Issue ',e.response.data)
                })
            },
            fetchPostByCategory(name){
                const payload ={l:5}
                axios.post('/api/home/category/'+name, payload).then(response => {
                    if(response.status === 200) {
                        this.recentPostList = response.data;
                    }
                }).catch((e)=>{
                    console.log('Categories Issue ',e.response.data)
                })
            },



        },
        created(){
            this.fetchRecentPost();
            this.fetchCategory();
        }

    }

   /* https://tailwindtemplates.io/templates?theme=lexicon*/
</script>


<style scoped  lang="scss" >
    #notifyBox{
        position: fixed; z-index: 999; top: 0%; right: 40%;
    }

</style>