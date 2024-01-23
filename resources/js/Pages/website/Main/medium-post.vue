
<template>
        <HeadTag  />
        <HeaderNav :title="headerTitle" />

        <main id="main">
            <section>
                <div class="container" >
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <h1 class="page-title">{{feed.title}}</h1>
                            <h6>Post direct from Medium REST-API.</h6>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="d-md-flex post-entry-2 half">
                        <div class="me-4 thumbnail profile-img">

                        </div>
                        <div class="ps-md-5 mt-4 mt-md-0">
                            <p>
                                Publishing technical articles on Medium has been an enlightening endeavor for me. Reflecting on my recent programming challenges,
                                I observed that the responses from the community on certain topics were less than ideal, often proving to
                                be frustrating rather than constructive. When grappling with specific issues and seeking solutions, the
                                overall experience fell short of expectations. Recognizing this gap, I am motivated to invest my efforts in
                                this domain to contribute a lucid perspective that can genuinely assist and benefit the broader audience.
                            <h5> <a href="https://ankuprsdpkp.medium.com" target="_blank">Posts : Visit</a></h5>
                            </p>
                        </div>
                    </div>

                    <div class="trending px-5">
                            <ul class="trending-post">
                                <li :id="'post-'+Number(index+1)" v-if="posts && posts.length"
                                    v-for="(trendingPost , trendingPostIndex ) in posts" :key="trendingPostIndex">
                                    <a  :href="trendingPost.link" target="_blank">
                                        <span class="number">{{trendingPostIndex+1}}</span>
                                        <h3 class="px-5">{{trendingPost.title}}</h3>
                                        <span class="author px-5">{{trendingPost.pubDate}}</span>
                                        <div class="d-flex align-items-center author">
                                            <div class="photo">
                                                <img :src="asset('zenBlog/img/person-1.jpg')"
                                                     alt="User Image" class="img-fluid">
                                            </div>
                                            <div class="name">
                                                <h3 class="m-0 p-0 px-1">{{trendingPost.author}}</h3>
                                            </div>
                                        </div>
                                        <div class="px-5 mt-2">
                                            <h3 class="m-0 p-0 px-1">
                                                <span class="mx-1 px-3 py-1 border border-gray-100 rounded-md" v-for="tag in trendingPost.categories">{{tag}}</span>
                                            </h3>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>

                </div>
            </section>
        </main>

        <FooterSection :title="headerTitle"/>
</template>


<script>
    import  HeadTag from './Component/Head.vue';
    import  HeaderNav from './Component/Header.vue';
    import  FooterSection from './Component/Footer.vue';
    import Swal from 'sweetalert2';

    export default {
        name: "medium-post.vue",
        components: {HeadTag ,HeaderNav,FooterSection },
        props:['title'],
        data(){
            return{
                // authUser:this.$page.props.auth.user,
                headerTitle :'Medium Post',
                feed:{},
                posts:[],
            }
        },
        methods:{
            fetchPost(){
                axios.post('/api/fetch-mediun-posts', {}).then( resource=>{
                    if( resource.status === 200 && resource.data.status === 'ok'){
                        this.feed = resource.data.feed;
                        this.posts =resource.data.items;
                    }
                }).catch( error=>{
                    Swal.fire('Warning!' ,'Something went wrong with Medium!');
                })
            }
        },
        created(){
            this.fetchPost();

            //console.log(this.authUser)
        }
    }
</script>

<style scoped>
.profile-img{
    background-image: url("../project-assets/images/aboutus2.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 250px;
}
    .short-story{
        width: 1200px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        max-height: 500px;
    }

</style>