<template>
    <header id="header"  class=" header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{asset('zenBlog/img/logo.png')}}" alt=""> -->
                <h1>{{title}}</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Blog</a></li>
                    <!--<li class="dropdown"><a href="category.html"><span>Categories</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="search-result.html">Search Result</a></li>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>-->

                    <li><a href="/ai" title="Artificial intelligence">AI</a></li>
                    <li><a href="/about-us">About</a></li>
                    <li><a href="/contact-us">Contact</a></li>

                    <li><a href="/login">Sign-In</a></li>
                   <!-- <li><a href="/sign-up">Sign-Up</a></li>-->
                    <li><a href="/push-notification">Notification</a></li>
                    <li><a href="/medium">Medium Posts</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="position-relative">
                <!--<a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                <a href="#" class="mx-2"><span class="bi-instagram"></span></a>-->

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="#" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->

            </div>

        </div>

    </header><!-- End Header -->

    <PushNotification />
</template>


<script>
import PushNotification from "../../../../Components/PushNotification.vue";
    export default {
        name: "HeaderPage",
        components:{PushNotification},
        props:['title'],
        data(){
            return{
            }
        },
        methods:{
        },
        created(){
        }
    }
</script>


<style scoped>

</style>