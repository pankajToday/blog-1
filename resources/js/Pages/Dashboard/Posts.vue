<template>
    <layout>
        <div class="p-4 sm:ml-64 mr-2">
            <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
                <Breadcrumb :breadcrumb-items="breadcrumb" ></Breadcrumb>


                <DefaultSkeletons v-if="loading" :skeletonName="skeletonName" :counter="10"></DefaultSkeletons>
                <div v-else="!loading">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                        <div class="flex justify-between items-center">
                            <div class="px-2 pb-4 bg-white dark:bsearch_category_itemsg-gray-900">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative mt-1">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                    </div>
                                    <input v-model="search_post_items" type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                </div>
                            </div>

                            <a href="/post-create" target="_blank" type="button"
                                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Add New</a>
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
                                     Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Posted By
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Posted Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                               <tr v-for="( post ,index ) in posts" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input v-model="post.uid" id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{post.title.length > 40?post.title.slice(0,40)+' ...':post.title}}
                                    </th>
                                   <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       {{post.category?post.category.name:"-"}}
                                   </th>

                                   <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       {{post.status}}
                                   </th>
                                   <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       {{post.posted_by_user?post.posted_by_user.first_name +' '+post.posted_by_user.last_name:"-"}}
                                   </th>
                                   <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       {{post.published_at}}
                                   </th>
                                    <td class="px-6 py-4">
                                        <a href="#" @click="editTag(post.id)" class="font-medium text-blue-600 dark:text-blue-500 mr-2 hover:underline">Edit</a>
                                        <a href="#" @click="deleteTag(post.id)" class="font-medium text-blue-600 dark:text-red-500 ml-2 hover:underline">Delete</a>
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
        name: "Tags",
        components: { Link , layout , Footer ,DefaultSkeletons,GridLayout,Breadcrumb },
        data(){
            return{
                addNew :false ,
                editTagFlag:false ,
                errors:[],
                title : 'My Blog Admin v.1',
                authUser : this.$page.props.auth.user,
                skeletonName : "default" ,
                loading : false ,
                search_post_items:"" ,
                breadcrumb : 'Tags All' ,
                posts : [] ,
                post :{ id:'',title:'', },
                page : 1 ,
            }
        },
        methods:{
            fetchPosts(){
                axios.post('api/fetch-posts',{search:this.search_post_items,page:this.page}).then( (response) =>{
                    if( response.status ){
                       this.posts =  response.data.data;
                    }
                });
            },
            deleteTag(id){
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete('api/post-destroy/'+id ,  {}).then( (respnse)=>{
                            if( respnse.status == 200 ){
                                toast.success('Post Deleted Successfully');
                                this.fetchPosts();
                            }
                        }).catch( (error) =>{
                            toast.warning('Unable to deleted post!');
                        })
                    }
                })
            },
            editTag(id){
              return this.$inertia.get('/post/'+id);         
              },
            reset(){
                this.category = { name:'',id:'',status:false } ;
            },
            saveNew(){
                this.loading = true ;
                axios.post( '/api/create-post' ,this.post ).then( (response )=>{
                    if( response.status === 200 ){
                        this.loading = false ;
                        this.addNew = false;
                        toast.success('New Post Added!');
                        this.fetchPosts();
                        this.reset();
                    }
                } ).catch( (error) =>{
                    if(error && error.response && error.response.status === 422)
                    {
                        this.errors = error.response.data.errors;
                    }

                    toast.error('Something went wrong!');
                });
            },
            updateTag(){
                this.loading = true ;
                axios.post( '/api/create-post' ,this.post ).then( (response )=>{
                    if( response.status === 200 ){
                        this.loading = false ;
                        this.editTagFlag = false ; 
                        toast.success('Post Updated!');
                        this.fetchPosts();
                    }
                } ).catch( (error) =>{
                    this.loading = false ;
                    if(error && error.response && error.response.status === 422)
                    {
                        this.errors = error.response.error;
                        console.log(  'error' ,  this.errors );
                    }

                    toast.error('Something went wrong!');
                });
            }


        },
        created(){
            this.fetchPosts();
        },
        watch:{
            'search_post_items' : {
                handler(){
                    setTimeout( ()=>{
                        this.fetchPosts();
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