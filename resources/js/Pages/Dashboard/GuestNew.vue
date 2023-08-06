<template>
<layout>
    <div class="p-4 sm:ml-64 mr-2">
        <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
            <Breadcrumb :breadcrumb-items="breadcrumb" ></Breadcrumb>


            <DefaultSkeletons v-if="loading" :skeletonName="skeletonName" :counter="10"></DefaultSkeletons>
            <div v-if="!loading">

                <div  class="xs:grid xs:grid-cols-1 sm:grid sm:grid-cols-2 md:grid md:grid-cols-3 lg:grid-cols-4 gap-4 m-4">
                    <div  class="w-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Post : 67</h5>
                        </a>
                       <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div  class="w-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Traffic : 1098k/Month</h5>
                        </a>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>

                </div>

                <GridLayout></GridLayout>


            </div>

        </div>

        <Footer class="mt-14 w-full" />
    </div>

</layout>

</template>

<script>
    import { Link } from '@inertiajs/vue3';
    import { initFlowbite } from 'flowbite'
    import layout from "./DashboardLayouts/AppLayout.vue"
    import Footer from "./DashboardLayouts/Footer.vue";
    import DefaultSkeletons from "./DashboardLayouts/Skeletons/Default.vue";
    import GridLayout from "./DashboardLayouts/GridPage.vue";
    import Breadcrumb from './DashboardLayouts/Breadcrumb.vue';




    export default {
        name: "Dashboard",
        components: { Link , layout , Footer ,DefaultSkeletons,GridLayout,Breadcrumb },
        data(){
            return{
                title: 'My Blog Admin v.1',
                authUser: this.$page.props.auth.user,
                skeletonName:"default",
                loading:false,
                breadcrumb:'Page|Contact|New text',

            }
        },
        created(){
          //  console.log('auth' , this.authUser)
        },
        watch:{
            'navbarDefault':{
                handler(){
                    //console.log('navbarDefault '+ this.navbarDefault)
                }
            }
        },
        mounted(){
            initFlowbite();
            this.loading =true;
            setTimeout( ()=>{ this.loading =false } , 1000 )
        },

    }
</script>

<style scoped>

</style>