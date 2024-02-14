<template>
    <layout>
        <div class="p-4 sm:ml-40 mr-2">
            <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
                <Breadcrumb :breadcrumb-items="breadcrumb" ></Breadcrumb>


                <DefaultSkeletons v-if="loading" :skeletonName="skeletonName" :counter="10"></DefaultSkeletons>
                <div v-else="!loading">

                    <div class="relative overflow-x-auto shadow-md mt-10">
                        <div class="flex justify-between items-center bg-gray-50 border-2 border-gray-100 ">
                            <div class="px-2 flex justify-between items-center">  Add New Post </div>
                            <a href="/posts"
                                class="px-2.5 py-2 mr-2 mb-2 text-white border border-blue-500 bg-blue-400 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-500 dark:focus:ring-gray-800">Back</a>
                        </div>


                        <div class="grid gap-6 mb-6 px-2 py-2 md:grid-cols-3">
                            <div class="relative z-0">
                                <select v-model="post.category_id" id="category" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                    <option value="" selected>Choose a Category</option>
                                    <option :value="item.id" v-for="item in categories">{{item.name}}</option>
                                </select>

                                <p v-if="errors && errors.category_id"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.category_id[0]}}
                                </p>
                            </div>

                            <div class="relative z-0">
                                <input v-model="post.title"  type="text" id="post_title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="post_title" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title <span class="text-red-500 px-2 text-3 font-bold ">*</span> </label>
                                <p v-if="errors && errors.title"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.title[0]}}
                                </p>
                            </div>

                            <div class="relative z-0">
                                <input v-model="post.caption"  type="text" id="post_caption" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" />
                                <label for="post_caption" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Caption </label>
                                <p v-if="errors && errors.caption"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.caption[0]}}
                                </p>
                            </div>

                        </div>

                        <div class="grid gap-6 mb-6 px-2 py-2 md:grid-cols-3">
                            <div class="relative z-0">
                                <label for="feature_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Feature Image</label>

                                <div class=" flex items-center justify-center text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="" @dragover="dragover" @dragleave="dragleave" @drop="drop">
                                        <input type="file" multiple name="fields[feature_image][]" id="feature_image"
                                               class="w-px h-px opacity-0 overflow-hidden absolute" @change="onChange" ref="file" accept=".pdf,.jpg,.jpeg,.png" />

                                        <label for="feature_image" class="px-3 py-2 block cursor-pointer">
                                            <div>
                                                <span class="underline">click here</span> or drop files in here
                                            </div>
                                        </label>
                                        <ul class="mt-4" v-if="this.filelist.length" v-cloak >
                                            <li class="text-sm p-1" v-for="file in filelist">
                                                <img :src="post.feature_image" class="w-[200px] h-[200px] m-2">
                                               {{file.name}}<button class="ml-2" type="button" @click="remove(filelist.indexOf(file))" title="Remove file">remove</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <p v-if="errors && errors.feature_image"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                        {{   errors.post.feature_image[0]}}
                                    </p>
                                </div>



                            </div>

                        </div>

                        <div class="mb-3 px-2 py-2">
                            <div class=" z-0">
                                <label for="feature_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Article</label>

                                <div class=" flex items-center justify-center text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <Editor  :api-key="tymcKey"
                                             :init="tymcConfig"
                                             initial-value="Welcome to TinyMCE!"
                                             v-model="post.article_content"
                                    />
                                    <p v-if="errors && errors.feature_image"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                        {{   errors.post.feature_image[0]}}
                                    </p>
                                </div>



                            </div>

                        </div>



                        <div class="px-2 py-2 flex justify-center items-center">
                            <button type="button" class="mx-2 text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancel</button>

                            <button  @click.prevent="submit"  type="submit" class="mx-2 text-white bg-red-700 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>


                            <button  @click.prevent="toggleDrawer"  type="button" class="mx-2 text-white bg-red-700 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Click Drawer</button>
                        </div>


                        <!--<Drawer :is-open="isDrawerOpen" :speed="500">
                            <div class="mt-2 flex justify-between items-center">
                                <span class="px-2 py-2 mt-1 font-medium text-bold"> Add Elements</span>
                                <button @click="closeDrawer" type="button" class="mx-2 mt-2 text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-2 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</button>
                            </div>
                            <div>
                                <h2>Drawer Slot here</h2>
                            </div>

                        </Drawer>-->

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
    import Editor from '@tinymce/tinymce-vue'
    import Drawer from "../../Components/Drawer.vue";
    import postPageElements from './DashboardLayouts/AddPostPageElements.vue';

    export default {
        name: "Tags",
        components: { Link , layout , Footer ,DefaultSkeletons,GridLayout,Breadcrumb,Editor,Drawer,postPageElements },
        data(){
            return{
                addNew :false ,
                editTagFlag:false ,
                errors:[],
                title : 'My Blog Admin v.1',
                authUser : this.$page.props.auth.user,
                skeletonName : "default" ,
                loading : true ,
                breadcrumb : 'Post|Add New' ,
                posts : [] ,
                post :{ id:'',title:'',category_id:"",caption:"",feature_image:"",article_content:"" },
                categories:[],
                filelist: [], // Store our uploaded files,
                media:[],
                tymcKey:import.meta.env.VITE_TINYMCE_KEY,
                tymcConfig:{
                    toolbar_mode: 'sliding',
                    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                    mergetags_list: [
                        { value: 'First.Name', title: 'First Name' },
                        { value: 'Email', title: 'Email' },
                    ],
                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
                },
                isDrawerOpen: false,
            }
        },
        methods:{
            fetchCategory(){
              axios.post('/api/fetch-categories',{}).then( (resource) =>{
                  if( resource.status === 200 ){
                      this.categories = resource.data.data;
                  }
              });
            },
            onChange() {
                this.filelist = [...this.$refs.file.files];
                this.uploadFiles( this.filelist , 'image');
                console.log(    this.filelist )
            },
            remove(i) {
                this.filelist.splice(i, 1);
            },
            dragover(event) {
                event.preventDefault();
                // Add some visual fluff to show the user can drop its files
                if (!event.currentTarget.classList.contains('bg-green-300')) {
                    event.currentTarget.classList.remove('bg-gray-100');
                    event.currentTarget.classList.add('bg-green-300');
                }
            },
            dragleave(event) {
                // Clean up
                event.currentTarget.classList.add('bg-gray-100');
                event.currentTarget.classList.remove('bg-green-300');
            },
            drop(event) {
                event.preventDefault();
                this.$refs.file.files = event.dataTransfer.files;
                this.onChange(); // Trigger the onChange event manually
                // Clean up
                event.currentTarget.classList.add('bg-gray-100');
                event.currentTarget.classList.remove('bg-green-300');
            },
            uploadFiles(files ,type) {
                let file = files[0];
                let form = new FormData;
                let date = (new Date()).getTime();
                form.append('file', file);
                form.append('file_name', date);

                axios.post( '/api/upload-file', form, {
                    onUploadProgress: (event) => {
                        // media.progress = Math.round(event.loaded * 100 / event.total);
                    },
                }).then(({data}) => {
                    if( type === 'image' ){
                        this.post.feature_image =data.url
                        this.post.feature_image_name ='Image ' + data.file_name,
                        this.media.push( {
                            id:'',
                            file_name:'Image ' + data.file_name,
                            mime_type: data.type,
                            url:data.url
                        });
                        this.user_img =data.url;
                    }
                    if( type === 'video'){
                        this.media.push( {
                            id:'',
                            file_name:'Video '+ data.file_name,
                            mime_type:data.type,
                            url:data.url
                        });
                        this.user_video =data.url;
                    }
                }).catch((error) => {
                    console.log(error)
                    /*if (error?.response.status === 422) {
                        this.errors[0]['user_img'] = error.response.data.errors.file[0];
                        console.log(this.errors,error.response.data.errors);
                    }*/
                });
            },
            uploadMultipleFiles(files ,type) {
                let file = files[0];
                let form = new FormData;
                let date = (new Date()).getTime();
                form.append('file', file);
                form.append('file_name', date);

                axios.post( '/api/upload-file', form, {
                    onUploadProgress: (event) => {
                        // media.progress = Math.round(event.loaded * 100 / event.total);
                    },
                }).then(({data}) => {
                    if( type === 'image' ){
                        this.post.feature_image =data.url
                        this.post.feature_image_name ='Image ' + data.file_name,
                            this.media.push( {
                                id:'',
                                file_name:'Image ' + data.file_name,
                                mime_type: data.type,
                                url:data.url
                            });
                        this.user_img =data.url;
                    }
                    if( type === 'video'){
                        this.media.push( {
                            id:'',
                            file_name:'Video '+ data.file_name,
                            mime_type:data.type,
                            url:data.url
                        });
                        this.user_video =data.url;
                    }
                }).catch((error) => {
                    console.log(error)
                    /*if (error?.response.status === 422) {
                        this.errors[0]['user_img'] = error.response.data.errors.file[0];
                        console.log(this.errors,error.response.data.errors);
                    }*/
                });
            },
            submit(){
                this.loading =true;
                axios.post('/api/create-post',this.post ).then((response)=>{
                    if( response.status === 200  && response.data.status === 'success'){
                        Swal.fire('Success','Post is added.','success');
                        this.loading =false;
                    }
                    else{
                        Swal.fire('Warning','Unable to add post.','error');
                        this.loading =false;
                    }
                }).catch( (error)=>{
                    if( error.response.status === 500 ){
                        Swal.fire('Warning','Something went wrong!','error');
                    }
                    this.loading =false;
                })
            },

           /* toggleDrawer() {
                let actionScreenX= window.innerWidth -20;
                if( event.clientX >= actionScreenX ){
                    this.isDrawerOpen = true;
                }
            },

            closeDrawer() {
                this.isDrawerOpen = false;
            },*/

        },
        created(){
            this.fetchCategory();


        },
        watch:{

        },
        mounted(){
            initFlowbite();

            this.loading =true;
            setTimeout( ()=>{ this.loading =false } , 1000 );

           /* // manage Drawer Event.
            window.addEventListener('mousemove', (event) => {
                this.toggleDrawer();
            });*/
        },

    }
</script>

<style scoped>
    [v-cloak] {
        display: none;
    }
    @media (min-width: 1024px) {
        #sample {
            display: flex;
            flex-direction: column;
            place-items: center;
            width: 100%;
        }
    }
</style>