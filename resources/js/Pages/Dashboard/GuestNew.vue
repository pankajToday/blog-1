<template>
<layout>
    <div class="p-4 sm:ml-64 md:ml-auto mr-2">
        <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
            <Breadcrumb :breadcrumb-items="breadcrumb" ></Breadcrumb>


            <DefaultSkeletons v-if="loading" :skeletonName="skeletonName" :counter="10"></DefaultSkeletons>
            <div v-else="!loading">

                <div  class="mb-3 xs:grid xs:grid-cols-1 sm:grid sm:grid-cols-2 md:grid md:grid-cols-3 lg:grid-cols-4 gap-4 m-4">
                    <div  class="w-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Post : {{stats?stats.posts:0}}</h5>
                        </a>
                       <a href="/posts" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div  class="w-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Category : {{stats?stats.category:0}}</h5>
                        </a>
                        <a href="/categories" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div  class="w-[200px] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Monthly Visits : {{stats?stats.monthly_Visits:0}}</h5>
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

                <div class="postTable mb-3 ">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="w-full my-3  px-2 py-2 border-gray-300 bg-gray-100 rounded-md text-xl "> All Posts </div>
                        <div class="flex items-center justify-between pb-4">
                            <div>
                                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                                    </svg>
                                    Last 30 days
                                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                                        <li>
                                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-1" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last day</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-2" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 7 days</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-3" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 30 days</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-4" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last month</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="filter-radio-example-5" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last year</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                            </div>
                        </div>
                        <table v-if="!topPostLoading" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    User
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                     Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(post, index) in topPost" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4">

                                    <div class="flex items-center space-x-4">
                                        <img class="w-10 h-10 rounded-full" :src="post.post_by.user_img" alt="">
                                        <div class="font-medium dark:text-white">
                                            <div>{{post.post_by.first_name}} {{post.post_by.last_name}}</div>
                                        </div>
                                    </div>
                                </td>
                                <th scope="row" class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{post.post_date}}
                                </th>
                                <td class="">
                                    {{post.title}}
                                </td>
                                <td class="">
                                    {{post.post_category.name}}
                                </td>

                                <td class="">
                                    {{post.status}}
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="categoryList mb-3 ">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="w-full px-2 py-2 border-gray-300 bg-gray-100 rounded-md text-xl "> All Top Category </div>
                        <div class="flex items-center justify-between my-2 px-3">
                            <div class="grid grid-cols-7 gap-2 my-3 mx-2">
                                <div  v-for="(category , tagIndex) in topCategory" >
                                    <a :href="'/categories/'+category.name">
                                        <div class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        {{category.id}}
                                        <span  v-if="category.post_count > 0"  class="inline-flex items-center justify-center w-6 h-6 ml-2 text-xs font-semibold text-blue-800 bg-white rounded-full">{{category.post_count}}</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tagList mb-3 ">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="w-full px-2 py-2 border-gray-300 bg-gray-100 rounded-md text-xl "> All Top Tags</div>
                        <div class="flex items-center justify-between my-2 px-3">
                            <div class="grid grid-cols-4 gap-5 my-3 mx-2">
                                <div   v-for="(tag , tagIndex) in topTags" >
                                  <a :href="'/tags/'+tag.name">
                                    <div class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        {{tag.name}}
                                        <span  v-if="tag.post_tags_count > 0"  class="inline-flex items-center justify-center w-6 h-6 ml-2 text-xs font-semibold text-blue-800 bg-white rounded-full">{{tag.post_tags_count}}</span>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="keywordsList mb-3 ">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="w-full px-2 py-2 border-gray-300 bg-gray-100 rounded-md text-xl "> All Top Keywords </div>
                        <div class="flex items-center justify-between  my-2 px-3">
                            <div class="grid grid-cols-7 gap-2 my-3 mx-2">
                                <div v-for="(topKeyword , topKeywordIndex) in topKeywords" >
                                    <a :href="'/keywords/'+topKeyword.name">
                                        <span   class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">
                                            {{topKeyword.name}}
                                            <span v-if="topKeyword.post_keywords_count>0" class="inline-flex items-center justify-center w-6 h-6 ml-2 text-xs font-semibold text-blue-800 bg-white rounded-full">{{topKeyword.post_keywords_count}}</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <Footer class="mt-14 w-full" />
    </div>


</layout>

</template>

<script>
    import { Link } from '@inertiajs/vue3';
    import { initFlowbite } from 'flowbite'
    import Swal from 'sweetalert2'
    import layout from "./DashboardLayouts/AppLayout.vue"
    import Footer from "./DashboardLayouts/Footer.vue";
    import DefaultSkeletons from "./DashboardLayouts/Skeletons/Default.vue";
    import GridLayout from "./DashboardLayouts/GridPage.vue";
    import Breadcrumb from './DashboardLayouts/Breadcrumb.vue';




    export default {
        name: "GuestDashboard",
        components: { Link , layout , Footer ,DefaultSkeletons,GridLayout,Breadcrumb },
        data(){
            return{
                title: 'My Blog Admin v.1',
                authUser: this.$page.props.auth.user,
                skeletonName:"default",
                loading:false,
                breadcrumb:'',
                topPost:[],
                topPostLoading:false,
                topTags:[],
                topCategory:[],
                topKeywords:[],
                stats:{},
            }
        },
        methods:{
            getTopPost(){
                this.topPostLoading = true;
                axios.post('/api/dashboard/top-post/10').then( (response)=>{
                    if( response.status === 200 )
                    {
                        this.topPost =  response.data.data;
                        this.topPostLoading = false;
                    }
                }).catch( (error)=>{
                    toast.warn('Something went wrong during fetch top post!');
                } )
            },
            getTopCategory(){
                this.loading = false;
                axios.post('/api/dashboard/top-category/30').then( (response)=>{
                    if( response.status === 200 )
                    {
                        this.topCategory =  response.data;
                        this.loading = false;
                    }
                }).catch( (error)=>{
                    toast.warn('Something went wrong during fetch top post!');
                    this.loading = false;
                } )
            },
            getTopKeywords(){
                this.loading = true;
                axios.post('/api/dashboard/top-keywords/30').then( (response)=>{
                    if( response.status === 200 )
                    {
                        this.topKeywords =  response.data;
                        this.loading = false;
                    }
                }).catch( (error)=>{
                    toast.warn('Something went wrong during fetch top post!');
                    this.loading = false;
                } )
            },
            getTopTags(){
                this.loading = true;
                axios.post('/api/dashboard/top-tags/15').then( (response)=>{
                    if( response.status === 200 )
                    {
                        this.topTags =  response.data;
                        this.loading = false;
                    }
                }).catch( (error)=>{
                    toast.warn('Something went wrong during fetch top post!');
                    this.loading = false;
                } )
            },
            editPost(val){},
            removePost(val){
                Swal.fire({
                    title: 'Do you want to delete the post?',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        axios.post('/api/post-remove/'+val).then( (response)=>{
                            if( response.status === 200 )
                            {
                                this.getTopPost();
                                this.loading = false;
                            }
                        }).catch( (error)=>{
                            toast.warn('Something went wrong during delete top post!');
                            this.loading = false;
                        } )
                    }
                })
            },
            dashboardStats(){
              axios.post('/api/dashboard/dashboard-stats').then((resource)=>{
                  if( resource.status === 200 && resource.data.status === 'success'){
                      this.stats ={
                          posts : resource.data.posts,
                          category :  resource.data.category,
                          monthly_Visits: resource.data.monthly_Visits,
                      }
                  }

              })
            },
        },
        created(){
            this.getTopPost();
            this.getTopCategory();
            this.getTopKeywords();
            this.getTopTags();
            this.dashboardStats();
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