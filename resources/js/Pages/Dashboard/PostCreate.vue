<template>
    <layout>
        <div class="p-4 sm:ml-40 md:ml-1 mr-2">
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

                        <div class="grid gap-6 mb-6 px-2 py-2 md:grid-cols-1">
                            <div   class="">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>

                                <Multiselect
                                        v-model="post.category_id"
                                        placeholder="Select Category"
                                        :options="categories"
                                />

                                <p v-if="errors && errors.category_id"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.category_id[0]}}
                                </p>
                            </div>

                            <div class="">
                                <label for="post_title" class="w-full py-2 px-2 rounded-md text-sm text-gray-900 border-gray-300">Title <span class="text-red-500 px-2 text-3 font-bold ">*</span> </label>
                                <input v-model="post.title"  type="text" id="post_title" class="w-full py-2 px-2 rounded-md text-sm text-gray-900 border-gray-300" placeholder="Title" />
                                <p v-if="errors && errors.title"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.title[0]}}
                                </p>
                            </div>

                            <div class="">
                                <label for="post_caption" class="w-full py-2 px-2 rounded-md text-sm text-gray-900 border-gray-300">Caption </label>
                                <input v-model="post.caption"  type="text" id="post_caption" class="w-full py-2 px-2 rounded-md text-sm text-gray-900 border-gray-300" placeholder="Caption" />
                                <p v-if="errors && errors.caption"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.caption[0]}}
                                </p>
                            </div>

                            <div class="">
                                <label for="short_description" class="w-full py-2 px-2 rounded-md text-sm text-gray-900 border-gray-300">Short Description </label>
                                <textarea v-model="post.short_description" rows="7" cols="10" id="short_description" class="w-full py-2 px-2 rounded-md text-sm text-gray-900 border-gray-300" placeholder="Short description" ></textarea>
                                <p v-if="errors && errors.short_description"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.short_description[0]}}
                                </p>
                            </div>

                            <div class="">
                                <label for="feature_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Feature Image</label>

                                <div class="grid grid-cols-2 text-center bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <div class="">
                                        <div class="mt-4 flex items-center justify-center border border-gray-200"  v-if="this.filelist.length" v-cloak >
                                            <div v-if="post && post.feature_image" class="text-sm p-1" >
                                                <img :src="post.feature_image" class="w-[200px] h-[200px] m-2">
                                                <p v-if="post && post.feature_image_name" class="w-full flex justify-center items-center px-2 py-2 my-2 " > {{post.feature_image_name}}</p>
                                                <button  @click="remove"  class="ml-2 px-2 py-2 rounded-md border border-gray-200 bg-red-500 text-white hover:bg-gray-300 hover:text-black" type="button" title="Remove file">Remove</button>
                                            </div>
                                        </div>
                                        <div v-else class="flex items-center justify-center">
                                            <img :src="asset('project-assets/images/default-featured-image.png')" class="w-[200px] h-[200px] m-2">
                                        </div>
                                    </div>
                                    <div  @dragover="dragover" @dragleave="dragleave" @drop="drop" class="flex items-center justify-center border border-gray-200 rounded-md">
                                        <div class="w-full">
                                            <input type="file" multiple name="fields[feature_image][]" id="feature_image"
                                                   class="w-px h-px opacity-0 overflow-hidden absolute" @change="onChange" ref="file" accept=".pdf,.jpg,.jpeg,.png" />

                                            <label for="feature_image" class="w-full px-3 py-2 block cursor-pointer">
                                                <div>
                                                    <span class="underline">click here</span> or drop files in here
                                                </div>
                                            </label>
                                        </div>
                                        <p v-if="errors && errors.feature_image"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                            {{   errors.post.feature_image[0]}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div   class="">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Article</label>
                                <SummernoteEditor :editorContent="post.article_content"  class="" />
                                <p v-if="errors && errors.feature_image"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.feature_image[0]}}
                                </p>
                            </div>


                            <div   class="">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>

                               <!-- <Multiselect
                                        mode="tags"
                                        v-model="post.tags"
                                        placeholder="search tags"
                                        :close-on-select="false"
                                        :filter-results="false"
                                        :min-chars="3"
                                        :resolve-on-load="false"
                                        :delay="0"
                                        :searchable="true"
                                        :options="async (q)=>{
                                           await fetchTags(q); return await  tagList;
                                          }"
                                />-->
                                <Multiselect
                                        :searchable="true"
                                        :multiple="true"
                                        :taggable="true"
                                        @search-change="debounceTags"
                                        placeholder="Type to search or add tag"
                                        v-model="post.tags"
                                        v-bind="tagListSelect"></Multiselect>

                                <p v-if="errors && errors.tags"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.tags[0]}}
                                </p>
                            </div>

                            <div   class="">
                                <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keywords</label>

                               <!-- <Multiselect
                                        v-model="post.keywords"
                                        :searchable="true"
                                        :multiple="true"
                                        :taggable="true"
                                        @search-change="debouncekeywords"
                                        placeholder="Type to search or add tag"
                                />-->
                                <Multiselect
                                        v-model="post.keywords"
                                        v-bind="keywordSelect"
                                        :searchable="true"
                                        :multiple="true"
                                        :taggable="true"
                                        @search-change="debouncekeywords"
                                        placeholder="Type to search or add tag"
                                ></Multiselect>

                                <p v-if="errors && errors.keywords"  class="mt-2 text-sm text-red-600 dark:text-red-500 font-medium">
                                    {{   errors.post.keywords[0]}}
                                </p>
                            </div>



                        </div>


                            <div class="px-2 py-2 flex justify-center items-center">
                                <button type="button" class="mx-2 text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancel</button>
                                <button  @click.prevent="submit"  type="submit" class="mx-2 text-white bg-red-700 hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
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
    import Drawer from "../../Components/Drawer.vue";
    import postPageElements from './DashboardLayouts/AddPostPageElements.vue';
    import SummernoteEditor from '../../Components/Editor/SummernoteEditor.vue';
    import Multiselect from '@vueform/multiselect'
    import  '@vueform/multiselect/themes/default.css';


    export default {
        name: "PostCreate",
        components: { Link , layout , Footer ,DefaultSkeletons,GridLayout,Breadcrumb,Drawer,postPageElements,SummernoteEditor ,
            Multiselect },
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
                post :{
                    id:'',title:'',category_id:[1,4,6],caption:"",feature_image:"",feature_image_name:'@credit',article_content:"this is my first content..",
                    short_description:"", tags:[] ,keywords:[], meta_description:""
                },
                categories:[],
                filelist: "", // Store our uploaded files,
                media:[],
                isDrawerOpen: false,
                tagList:[],
                keywordList:[],
                tagListSelect: {
                    mode: 'tags',
                    value: [],
                    closeOnSelect: false,
                    options: [],
                    searchable: true,

                },
                keywordSelect: {
                    mode: 'tags',
                    value: [],
                    closeOnSelect: false,
                    options: [],
                    searchable: true,
                    createOption: true
                },

            }
        },
        methods:{
            fetchCategory(){
              axios.post('/api/fetch-categories',{}).then( (resource) =>{
                  if( resource.status === 200 ){
                      resource.data.data.forEach((item,index)=>{
                          this.categories.push({label:item.name,value:item.id})
                      });
                  }
              });
            },
            onChange() {
                this.filelist = this.$refs.file.files;
                this.uploadFiles( this.filelist , 'image');

            },
            remove(i) {
               // this.filelist.splice(i, 1);
                let payload ={post_id:'',fileURL : this.post.feature_image};
                axios.post('/api/remove-uploaded-file',payload).then((resource)=>{
                    if(resource.status === 200 && resource.data.status === 'success'){
                        this.post.feature_image_name ="@credit";
                        this.post.feature_image="";
                    }

                }).catch( (error)=>{
                    console.log(error)
                })

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
            async fetchTags(query){
                let payload={ search :query};
                this.tagList =[];
                if(query){
                    this.tagListSelect.options=[];
                }
                await axios.post('/api/tags-search', payload).then( (resource) =>{
                    if( resource.status === 200 ){
                        resource.data.forEach((d,i)=>{
                            this.tagList[i]={label:d.name,value:d.id};
                        });
                        this.tagListSelect.options =this.tagList;
                    }
                }).catch((error)=>{

                })

            },
            async fetchkeywords(query){
                let payload={ search :query};
                this.keywordList =[];

                if(query){
                    this.keywordSelect.options=[];
                }
                await axios.post('/api/keyword-search', payload).then( (resource) =>{
                    if( resource.status === 200 ){
                        resource.data.forEach((d,i)=>{
                            this.keywordList[i]={label:d.name,value:d.id};
                        });
                        this.keywordSelect.options = this.keywordList;
                    }
                }).catch((error)=>{

                })

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
            debouncekeywords: _.debounce(function (e) {
                if(e){
                    this.fetchkeywords(e);
                }
            }, 1000),
            debounceTags: _.debounce(function (e) {
                if(e){
                    this.fetchTags(e);
                }
            }, 1000),


        },
        created(){
            this.post.category_id=[1,5];
            // Get Summernote data.
            eventBus.$on('editorContents', (data)=> {
               this.post.article_content = data ; console.log(data)
            });
        },
        watch:{

        },
        mounted(){
            initFlowbite();
            this.fetchCategory();
            this.fetchTags();
            this.loading =true;
            setTimeout( ()=>{ this.loading =false ;} , 1000 );

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

    }
    .note-editable p {
        text-align: left !important;
        /*height: 350px !important;*/

    }
</style>