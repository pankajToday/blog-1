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
                                    <input v-model="search_keyword_items" type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                                </div>
                            </div>

                            <button @click.prevent="addNew = true; " type="button"
                                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Add New</button>
                        </div>

                        <table id="keywordTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                               <tr v-for="( keyword ,index ) in keywords" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input v-model="keyword.id" id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{keyword.name}}
                                    </th>
                                   <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       {{keyword.status}}
                                   </th>
                                    <td class="px-6 py-4">
                                        <a href="#" @click="editKeyword(keyword)" class="font-medium text-blue-600 dark:text-blue-500 mr-2 hover:underline">Edit</a>
                                        <a href="#" @click="deleteKeyword(keyword.id)" class="font-medium text-blue-600 dark:text-red-500 ml-2 hover:underline">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <Footer class="mt-14 w-full" />
        </div>

        <!-- Main modal -->
        <div v-if="addNew"  class="w-full h-screen inset-0 fixed bg-gray-800 bg-opacity-25" style="z-index: 99;">
            <div class="w-full h-full flex justify-center items-center">
                <!-- Modal content -->
                <div class="bg-white w-[600px] rounded-2xl p-6"  style="z-index: 99;">
                    <button @click="addNew =false;" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Keyword</h3>
                        <div class="space-y-6" >
                            <div>
                                <label for="keyword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" id="keyword" v-model="keyword.name" maxlength="50" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                       placeholder="Keyword Name">
                                <span v-if="errors && errors.name && errors.name[0]" class="text-small text-red-500 px-2">{{errors.name[0]}}</span>
                            </div>
                            <div>
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <div class="flex">
                                    <div class="flex items-center mr-4">
                                        <input  type="radio" value="1" v-model="keyword.status" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Active</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input type="radio" value="0" v-model="keyword.status" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inactive</label>
                                    </div>
                                </div>
                                <span v-if="errors && errors.status" class="text-small text-red-500 px-2">{{errors.status[0]}}</span>
                            </div>

                            <div class="flex gap-6 mt-5">
                                <button @click.prevent="addNew = false" class="py-3 w-1/2 text-sm font-medium text-white rounded-md bg-[#00637b]">Cancel</button>
                                <button @click.prevent="saveNew"  class="py-3 w-1/2 text-sm font-medium text-white rounded-md bg-red-500">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="editKeywordFlag"  class="w-full h-screen inset-0 fixed bg-gray-800 bg-opacity-25" style="z-index: 99;">
            <div class="w-full h-full flex justify-center items-center">
                <!-- Modal content -->
                <div class="bg-white w-[600px] rounded-2xl p-6"  style="z-index: 99;">
                    <button @click="editKeywordFlag =false;" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Keyword</h3>
                        <div class="space-y-6" >
                            <div>
                                <label for="keyword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" id="keyword_c" v-model="keyword.name" maxlength="50" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Keyword Nme" required>
                                <span v-if="errors && errors.name" class="text-small text-red-500 px-2">{{errors.name[0]}}</span>
                            </div>

                            <div>
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                <div class="flex">
                                    <div class="flex items-center mr-4">
                                        <input id="inline-radio_c" type="radio" value="1" v-model="keyword.status" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Active</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="inline-2-radio_c" type="radio" value="0" v-model="keyword.status" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inactive</label>
                                    </div>
                                </div>
                                <span v-if="errors && errors.status" class="text-small text-red-500 px-2">{{errors.status[0]}}</span>
                            </div>

                            <div class="flex gap-6 mt-5">
                                <button @click.prevent="editKeywordFlag = false" class="py-3 w-1/2 text-sm font-medium text-white rounded-md bg-[#00637b]">Cancel</button>
                                <button @click.prevent="updateKeyword"  class="py-3 w-1/2 text-sm font-medium text-white rounded-md bg-red-500">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        name: "Keywords",
        components: { Link , layout , Footer ,DefaultSkeletons,GridLayout,Breadcrumb },
        data(){
            return{
                addNew :false ,
                editKeywordFlag:false ,
                errors:[],
                title : 'My Blog Admin v.1',
                authUser : this.$page.props.auth.user,
                skeletonName : "default" ,
                loading : false ,
                search_keyword_items:"" ,
                breadcrumb : 'Keywords All' ,
                keywords : [] ,
                keyword :{ id:'',name:'', },
                page : 1 ,
            }
        },
        methods:{
            fetchKeywords(){
                axios.post('api/fetch-keywords',{search:this.search_keyword_items,page:this.page}).then( (response) =>{
                    if( response.status ){
                       this.keywords =  response.data.data;
                    }
                });
            },
            deleteKeyword(id){
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete('api/keyword-destroy/'+id ,  {}).then( (respnse)=>{
                            if( respnse.status == 200 ){
                                toast.success('Keyword Deleted Successfully');
                                this.fetchKeywords();
                            }
                        }).catch( (error) =>{
                            toast.warning('Unable to deleted keyword!');
                        })
                    }
                })
            },
            editKeyword(editKeyword){
                this.keyword ={
                    id: editKeyword.id,
                    name:editKeyword.name,
                    status:editKeyword.status.toLowerCase() === 'active'?1:0,
                };
                this.editKeywordFlag = true ;
            },
            reset(){
                this.category = { name:'',id:'',status:false } ;
            },
            saveNew(){
                this.loading = true ;
                axios.post( '/api/create-keyword' ,this.keyword ).then( (response )=>{
                    if( response.status === 200 ){
                        this.loading = false ;
                        this.addNew = false;
                        toast.success('New Keyword Added!');
                        this.fetchKeywords();
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
            updateKeyword(){
                this.loading = true ;
                axios.post( '/api/create-keyword' ,this.keyword ).then( (response )=>{
                    if( response.status === 200 ){
                        this.loading = false ;
                        this.editKeywordFlag = false ; 
                        toast.success('Keyword Updated!');
                        this.fetchKeywords();
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
            this.fetchKeywords();
        },
        watch:{
            'search_keyword_items' : {
                handler(){
                    setTimeout( ()=>{
                        this.fetchKeywords();
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