<template>
    <layout>
        <div class="p-4 sm:ml-64 mr-2">
            <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
                <Breadcrumb :breadcrumb-items="breadcrumb" ></Breadcrumb>


                <DefaultSkeletons v-if="loading" :skeletonName="skeletonName" :counter="10"></DefaultSkeletons>
                <div v-else="!loading">

                    <div class="relative overflow-x-auto shadow-md mt-10">
                        <div class="flex justify-between items-center bg-gray-50 border-2 border-gray-100 ">
                            <div class="px-2 flex justify-between items-center">  Edit Post </div>
                            <a href="/posts"
                               class="px-2.5 py-2 mr-2 mb-2 text-white border border-blue-500 bg-blue-400 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-500 dark:focus:ring-gray-800">Back</a>
                        </div>


                        <div class="grid gap-6 mb-6 px-2 py-2 md:grid-cols-3">
                            <div class="relative z-0">
                                <select v-model="post.category_id" id="category"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                    <option value="" selected>Choose a Category</option>
                                    <option :value="item.id" v-for="item in categories">{{item.name}}</option>
                                </select>

                                <p v-if="errors && errors.category_id"  class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-medium">{{   errors.category_id[0]}}!</span>
                                </p>
                            </div>

                            <div class="relative z-0">
                                <input v-model="post.title"  type="text" id="post_title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="post_title" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title <span class="text-red-500 px-2 text-3 font-bold ">*</span> </label>
                                <p v-if="errors && errors.title"  class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-medium">{{   errors.title[0]}}!</span>
                                </p>
                            </div>

                            <div class="relative z-0">
                                <input v-model="post.caption"  type="text" id="post_caption" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" />
                                <label for="post_caption" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Caption </label>
                                <p v-if="errors && errors.caption"  class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-medium">{{   errors.caption[0]}}!</span>
                                </p>
                            </div>

                        </div>

                        <div class="grid gap-6 mb-6 px-2 py-2 md:grid-cols-3">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p>
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                                <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" required>
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                                <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                            </div>
                            <div>
                                <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                                <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
                            </div>

                        </div>

                        <div class="grid gap-6 mb-6 px-2 py-2 md:grid-cols-4">
                            <div>
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p>
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                                <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> Some error message.</p>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" required>
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                                <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                            </div>
                            <div>
                                <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                                <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
                            </div>

                        </div>


                        <div class="px-2 py-2 flex justify-center items-center">
                            <button type="button" class="mx-2 text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancel</button>

                            <button type="submit" class="mx-2 text-white bg-red-700 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

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
    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';


    export default {
        name: "Tags",
        components: { Link , layout , Footer ,DefaultSkeletons,GridLayout,Breadcrumb },
        props:['slug'],
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
                breadcrumb : 'Post Edit' ,
                posts : [] ,
                post :{
                    category_id:"" , title:"", caption:"",
                },
                categories:[],
            }
        },
        methods:{
            fetch(){
                axios.post( '/api/fetch-post/'+this.slug ).then( (response) =>{
                    if( response.status ){
                        this.posts =  response.data.data;
                    }
                });
            },
            fetchCategory(){
                axios.post( '/api/fetch-categories' ).then( (response) =>{
                    if( response.status ){
                        this.categories =  response.data.data;
                    }
                });
            },
            delete(id){
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete('/api/post-destroy/'+id ,  {}).then( (respnse)=>{
                            if( respnse.status === 200 ){
                                toast.success('Tag Deleted Successfully');
                                this.fetchTags();
                            }
                        }).catch( (error) =>{
                            toast.warning('Unable to deleted post!');
                        })
                    }
                })
            },
            reset(){
                this.category = { name:'',id:'',status:false } ;
            },
            update(){
                this.loading = true ;
                axios.post( '/api/create-post' ,this.post ).then( (response )=>{
                    if( response.status === 200 ){
                        this.loading = false ;
                        this.addNew = false;
                        toast.success('New Tag Added!');
                        this.fetchTags();
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
            debounceSearch: _.debounce(function (e) {
                this.fetch();
            }, 1000)

        },
        created(){
            this.fetch();
            this.fetchCategory();
        },
        watch:{
            'search_post_items' : {
                handler: 'debounceSearch'
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