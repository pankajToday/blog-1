<template>
    <div class="m-3 px-3 py-2 bg-gray-50 border border-gray-200">
        <div class="flex justify-between items-center ">
            <div >Upload File </div>
            <div class="">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
            </div>
        </div>
        <div class="m-2">

            <div class="w-full flex gap-6 mt-4">
                <div class="w-1/3">
                    <div class="md:w-[480px] bg-white border w-full rounded-md p-2 m-auto">
                        <div class="py-1.5 w-full flex items-center justify-between border-b">
                            <div class="text-sm font-semibold text-gray-700">Choose Image File</div>
                            <div @click.prevent="videoBox = false" class="w-4 h-4 rounded flex items-center bg-red-500 text-white cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 m-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-1 w-full rounded-md flex items-center justify-center relative border-2 border-dashed border-[#94a3b8] w-[250px]" :class="{'h-64' : user_img, 'h-40' : !user_img}">
                            <div class="flex items-center justify-center">
                                <div class="space-y-1">
                                    <svg v-if="!user_img" class="mx-auto w-8 h-8 text-gray-500"
                                         aria-hidden="true" fill="none" stroke="currentColor"
                                         viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </svg>
                                    <div v-else class="w-[150px] h-[150px] flex items-center">
                                        <img class="object-contain w-[150px] h-[150px]" :src="user_img">
                                    </div>

                                    <div class="flex justify-center mt-16 text-xs ">
                                        <label class="relative cursor-pointer border-2 border-gray-400 rounded-md px-2 py-1 font-medium hover:text-indigo-600 text-gray-800 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Select Image file</span>
                                            <input ref="files" @input="onSelectedFiles" accept=".jpg,.jpeg,.png" type="file" name="files" multiple class="sr-only">
                                        </label>
                                    </div>

                                    <p class="text-[11px] text-gray-600">Maximum upload file size: 4MB.</p>
                                    <div class="text-vvs font-medium text-gray-700 mb-1 text-red-500">  {{errors && errors.user_img?errors.user_img[0]:""}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/3">
                    <div class="flex items-center w-full h-full">
                        <div class="md:w-[480px] bg-white border w-full rounded-md p-2 m-auto">
                            <div class="py-1.5 w-full flex items-center justify-between border-b">
                                <div class="text-sm font-semibold text-gray-700">Choose Video</div>
                                <div @click.prevent="videoBox = false" class="w-4 h-4 rounded flex items-center bg-red-500 text-white cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 m-auto">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full mt-1.5 px-2 py-2 rounded-md flex items-center justify-center relative border-2 border-dashed border-[#94a3b8] ">
                                <div class="items-center justify-center">
                                    <div v-if="user_video">
                                        <video muted controls class="w-full h-auto max-w-full" >
                                            <source :src="user_video"   type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="space-y-1">
                                        <div  v-if="!user_video" >
                                            <svg class="mx-auto w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                                                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                            </svg>
                                        </div>
                                        <div class="flex justify-center mt-16 text-xs ">
                                            <label class="relative cursor-pointer border-2 border-gray-400 rounded-md px-2 py-1 font-medium hover:text-indigo-600 text-gray-800 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Select Image file</span>
                                                <input ref="files" @input="onSelectedVideoFiles" accept=".mp4,.avi,.mov" type="file" name="files" multiple class="sr-only">
                                            </label>
                                        </div>
                                        <p class="text-[11px] text-gray-600">video file (mp4 ,avi)to 5MB</p>
                                    </div>
                                    <div class="text-vvs font-medium mb-1 text-red-500"> {{errors && errors.image_link?errors.image_link[0]:""}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</template>
<script>
    import { initFlowbite } from 'flowbite'
    import Swal from 'sweetalert2'
    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';


    export default {
        name:"file-uploader",
        components:{},
        data(){
            return{
                user_img:"",
                user_video:"",
                videoBox:"",
                errors:"",
                media:[],

            }
        },
        methods:{
            onSelectedFiles($event) {
                let files = [...$event.target.files];
                this.uploadFiles(files,'image');
            },
            onSelectedVideoFiles($event) {
                let files = [...$event.target.files];
                this.uploadFiles(files,'video');
                // this.$refs.files.value = null;
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
            }


        },
    }
</script>

<style scoped>

</style>