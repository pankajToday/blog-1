<template>
        <!--<div class="w-full family-inter overflow-x-hidden">
            <page-title :title="'Welcome back, '+ name" :brief="'Measure your content ROI and track and report website traffic.'"></page-title>
        </div>-->

    <div class="md:container md:mx-auto bg-gray-100">
        <!--<div class="w-full border-gray-500 rounded-md ">
            <div class="layout md:w-[250px] xs:w-auto">
                <div class="logo xs:hidden border-2 bg-white-100 p-5 inline-block">
                    <img :src="asset('project-assets/images/logo/usablogger-high-resolution-logo.png')"
                         class="object-center w-[90px] rounded-md hover:shadow-lg transform transition hover:-translate-y-2 " />
                    <span class="xs:hidden site-title"> {{title}} </span>
                </div>

                <div class="md:hidden flex items-center px-5 py-5">
                    <button @click="toggleMenu" class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                             x-show="!showMenu"
                             fill="none"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                        >
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <div class="xs:hidden left-menu text-small text-[4rem] text-black px-5 py-5">Home</div>

                &lt;!&ndash; mobile menu &ndash;&gt;
                <div class="xs:hidden mobile-menu xs:w-[150px] z-10">
                    <ul class="">
                        <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
                        <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
                        <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
                        <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            &lt;!&ndash; Navbar goes here &ndash;&gt;
            <nav class="w-full h-screen bg-white shadow-lg">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="flex justify-between">
                        <div class="flex space-x-7">
                            &lt;!&ndash; Primary Navbar items &ndash;&gt;
                            <div class="xs:hidden md:flex items-center space-x-1">
                                <a href="" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Home</a>
                                <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Services</a>
                                <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">About</a>
                                <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact Us</a>
                            </div>
                        </div>
                        &lt;!&ndash; Secondary Navbar items &ndash;&gt;
                        <div class="hidden md:flex items-center space-x-3 ">
                            <a href="" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
                            <a href="" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign Up</a>
                        </div>

                    </div>
                </div>

            </nav>
        </div>-->

        <!-- mobile menu button -->

           <section class="Breadcrumb w-full flex px-2 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
                <div class="w-full flex justify-between">
                    <nav class="w-40p h-40p px-2 py-2 mr-5 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
                        <button @click="toggleMenu" class="outline-none mobile-menu-button inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                                 x-show="!showMenu"
                                 fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                            >
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </nav>
                    <div class="mr-5">
                        <a href="#" class="inline-flex items-center text-sm font-medium  font-semibold text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            {{title}}
                        </a>
                    </div>
                    <div class="cursor-pointer mr-5">
                        <img :src="asset('project-assets/images/logo/usablogger-high-resolution-logo.png')"
                             class="object-center xs:w-47p md:w-9 w-60p rounded-md" />
                    </div>

                </div>
            </section>
        <!-- Breadcrumb -->
        <section class="Breadcrumb flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Flowbite</span>
                    </div>
                </li>
            </ol>
        </section>

        <section class="page-content w-full  dark:bg-gray-900">
            <div class="w-auto m-5 px-5 py-5 border-2 border-gray-500 rounded-md bg-gray-100" >
                <h1>  Site body </h1>
                <div class="text-lg">
                    <div class="inline-flex">
                        <img data-tooltip-target="tooltip-jese" class="w-10 h-10 m-5 rounded" :src="asset('project-assets/images/website/peoples/person-1.jpg')" alt="Medium avatar">
                    </div>
                    <div class="inline-flex">
                        <img data-tooltip-target="tooltip-roberta" class="w-10 h-10 m-5 rounded" :src="asset('project-assets/images/website/peoples/person-2.jpg')" alt="Medium avatar">
                    </div>
                    <div class="inline-flex">
                        <img data-tooltip-target="tooltip-bonnie" class="w-10 h-10 m-5 rounded" :src="asset('project-assets/images/website/peoples/person-3.jpg')"  alt="Medium avatar">
                    </div>

                    <p class="p-5"> The container class also includes responsive variants like md:container by default that allow
                    you to make something behave like a container at only a certain breakpoint and up:

                    The container class also includes responsive variants like md:container by default that allow you
                    to make something behave like a container at only a certain breakpoint and up:

                    The container class also includes responsive variants like md:container by default that allow you
                    to make something behave like a container at only a certain breakpoint and up:
                   </p>
                </div>

            </div>
        </section>


        <!--footer -->
        <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                        <img  :src="asset('project-assets/images/logo/usablogger-high-resolution-logo.png')" class="h-8 mr-3" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{title}}</span>
                    </a>
                    <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
            </div>
        </footer>


    </div>


</template>

<script>



import PageTitle from "../../Components/Menus/PageTitle.vue";


import { Link } from '@inertiajs/vue3';

export default {
    name: "Dashboard",
    components: {Link , PageTitle },
    data(){
        return{
         authUser : this.$page.props.auth.user ,
        title:"Blog V-0.1",
        }
    },
    methods:{
        toggleMenu(){
            let x = document.querySelector(".mobile-menu");
            x.classList.toggle("xs:hidden");
        },
    },
    created(){},
    mounted(){ },
    computed:{
        name(){
            return this.authUser.first_name + ' ' +  this.authUser.last_name;
        }
    },

}
</script>

<style scoped>

</style>
