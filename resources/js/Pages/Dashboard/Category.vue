<template>
    <layout>
        <div class="p-4 sm:ml-64 mr-2">
            <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
                <Breadcrumb :breadcrumb-items="breadcrumb" ></Breadcrumb>


                <DefaultSkeletons v-if="loading" :skeletonName="skeletonName" :counter="10"></DefaultSkeletons>
                <div v-else="!loading">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                        <div class="pb-4 bg-white dark:bsearch_category_itemsg-gray-900">
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative mt-1">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input v-model="search_category_items" type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                            </div>
                        </div>
                        <table id="categoryTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                     name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Sub Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Order
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                               <tr v-for="( category ,index ) in categories" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input v-model="category.id" id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{category.name}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{category && category.sub_category && category.sub_category.length? "Yes":"No"}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ category.category_order}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{category.status}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" @click="editCategory(category)" class="font-medium text-blue-600 dark:text-blue-500 mr-2 hover:underline">Edit</a>
                                        <a href="#" @click="deleteCategory(category.id)" class="font-medium text-blue-600 dark:text-red-500 ml-2 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';



    export default {
        name: "Dashboard",
        components: { Link , layout , Footer ,DefaultSkeletons,GridLayout,Breadcrumb },
        data(){
            return{
                title : 'My Blog Admin v.1',
                authUser : this.$page.props.auth.user,
                skeletonName : "default",
                loading : false,
                search_category_items:"",
                breadcrumb : 'Category All',
                search_itemsL : "",
                categories : [],
                sub_categories :[],
                page : 1 ,

            }
        },
        methods:{
            fetchCategory(){
                axios.post('api/fetch-categories',{search:this.search_category_items,page:this.page}).then( (response) =>{
                    if( response.status ){
                       this.categories =  response.data.data;
                    }
                });
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
            deleteCategory(id){
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete('api/category-destroy/'+id ,  {}).then( (respnse)=>{
                            if( respnse.status == 200 ){
                                toast.success('Category Deleted Successfully');
                                this.fetchCategory();
                            }
                        }).catch( (error) =>{
                            toast.warning('Unable to deleted category!');
                        })
                    }
                })
            },
            editCategory(editCategory){}


        },
        created(){
            this.fetchCategory();
        },
        watch:{
            'search_category_items' : {
                handler(){
                    setTimeout( ()=>{
                        this.fetchCategory();
                    },1000);
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