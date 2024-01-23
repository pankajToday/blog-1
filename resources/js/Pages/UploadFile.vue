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
            <div>
                <div class="mu-container" :class="isInvalid?'mu-red-border':''">

                    <div class="mu-elements-wraper">

                        <!--UPLOAD BUTTON-->
                        <div class="mu-plusbox-container">
                            <label for="mu-file-input" class="mu-plusbox"> test
                                <svg
                                        class="mu-plus-icon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="1em"
                                        height="1em"
                                        preserveAspectRatio="xMidYMid meet"
                                        viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path
                                                d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1zm1 15a1 1 0 1 1-2 0v-3H8a1 1 0 1 1 0-2h3V8a1 1 0 1 1 2 0v3h3a1 1 0 1 1 0 2h-3v3z"
                                                fill="currentColor"/>
                                    </g>
                                </svg>
                            </label>
                            <input @change="fileChange" id="mu-file-input" type="file" accept="image/*" multiple hidden>
                        </div>

                        <!--IMAGES PREVIEW-->

                        <div v-for="(image, index) in savedMedia" :key="index" class="mu-image-container">
                            <img :src="location +'/'+ image.name" alt=""  class="mu-images-preview">
                            <button @click="removeSavedMedia(index)" class="mu-close-btn" type="button">
                                <svg
                                        class='mu-times-icon'
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="0.65em"
                                        height="0.65em"
                                        preserveAspectRatio="xMidYMid meet"
                                        viewBox="0 0 352 512">
                                    <path
                                            d="m242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28L75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256L9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"
                                            fill="currentColor"
                                    />
                                </svg>
                            </button>
                        </div>
                        <div v-for="(image, index) in addedMedia" :key="index" class="mu-image-container">
                            <img :src="image.url" alt=""  class="mu-images-preview">
                            <button @click="removeAddedMedia(index)" class="mu-close-btn" type="button">
                                <svg
                                        class='mu-times-icon'
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="0.65em"
                                        height="0.65em"
                                        preserveAspectRatio="xMidYMid meet"
                                        viewBox="0 0 352 512">
                                    <path
                                            d="m242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28L75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256L9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"
                                            fill="currentColor"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <div v-for="(image, index) in addedMedia" :key="index" class="mu-mt-1">
                        <input type="text" name="added_media[]" :value="image.name" hidden>
                    </div>
                    <div v-for="(image, index) in removedMedia" :key="index" class="mu-mt-1">
                        <input type="text" name="removed_media[]" :value="image.name" hidden>
                    </div>
                    <div v-if="allMedia.length" class="mu-mt-1">
                        <input type="text" name="media" value="1" hidden>
                    </div>
                </div>
            </div>

            <!--<Uploader
                    server="/api/upload"
                    :media="media.saved"
                    path="/storage/media"
                    @add="addMedia"
                    @remove="removeMedia"
            />-->
        </div>
    </div>


</template>
<script>
    import { initFlowbite } from 'flowbite'
    import Swal from 'sweetalert2'
    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';
    /*import Uploader from 'vue-media-upload';*/

    export default {
        name:"file-uploader",
        components:{

        },
        props:{
            server: {
                type: String,
                default: '/api/upload-file'
            },
            isInvalid: {
                type: Boolean,
                default: false
            },
            media:{
                type: Array,
                default: []
            },
            location:{
                type: String,
                default: ''
            },
            max:{
                type: Number,
                default: null
            },
            maxFilesize:{
                type: Number,
                default: 4
            },
            warnings:{
                type: Boolean,
                default: true
            }
        },
        mounted() {
            this.init()
        },
        data(){
            return{
                addedMedia:[],
                savedMedia:[],
                removedMedia:[],
                isLoading:true
            }
        },
        methods:{
            init(){
                this.savedMedia = this.media

                this.savedMedia.forEach((image, index) => {
                    if(!this.savedMedia[index].url){
                        this.savedMedia[index].url = this.location + "/" + image.name
                    }
                });

                setTimeout(() => this.isLoading = false, 1000)

                this.$emit('init', this.allMedia)
            },
            async fileChange(event){
                this.isLoading = true
                let files = event.target.files

                for(var i=0; i < files.length; i++){
                    if(!this.max || this.allMedia.length < this.max){
                        if(files[i].size <= this.maxFilesize*1000000){
                            let formData = new FormData
                            let url = URL.createObjectURL(files[i])
                            formData.set('image', files[i])

                            const {data} = await axios.post(this.server, formData,files)
                            console.log('test 1',this.server,formData)
                            let addedImage = {url:url, name:data.name, size:files[i].size, type:files[i].type}
                            this.addedMedia.push(addedImage)

                            this.$emit('change', this.allMedia)
                            this.$emit('add', addedImage, this.addedMedia)
                        }else{
                            this.$emit('maxFilesize', files[i].size)
                            if(this.warnings){
                                alert('The file you are trying to upload is too big. \nMaximum Filesize: '+ this.maxFilesize +'MB')
                            }
                            break;
                        }
                    }
                    else{
                        console.log('test 2')
                        this.$emit('max')
                        if(this.warnings){
                            alert('You have reached the maximum number of files that you can upload. \nMaximum Files: '+ this.max)
                        }
                        break;
                    }
                }
                event.target.value = null
                this.isLoading = false
            },
            removeAddedMedia(index){
                let removedImage = this.addedMedia[index]
                this.addedMedia.splice(index,1)

                this.$emit('change', this.allMedia)
                this.$emit('remove', removedImage, this.removedMedia)
            },
            removeSavedMedia(index){
                let removedImage = this.savedMedia[index]
                this.removedMedia.push(removedImage)
                this.savedMedia.splice(index,1)

                this.$emit('change', this.allMedia)
                this.$emit('remove', removedImage, this.removedMedia)
            },

        },
        computed:{
            allMedia(){
                return [...this.savedMedia, ...this.addedMedia];
            }
        },
        emits: [
            'init',
            'change',
            'add',
            'remove',
            'max',
            'maxFilesize'
        ],

    }

    /*export default {
        name: "UploadFile",
        components: { Uploader },
        data(){
            return{
                errors:[],
                media: [],
                mediaUpdate: {
                    saved: [
                        { id: 1, name: '123_image.jpg' },
                        { id: 2, name: '456_image.jpg' },
                    ],
                    added: [],
                    removed: []
                }

            }
        },
        methods:{
            changeMedia(media){
                this.media = media;

                console.log(this.media)
            },
            addMedia(addedImage, addedMedia){
                this.mediaUpdate.added = addedMedia
            },
            removeMedia(removedImage, removedMedia){
                this.mediaUpdate.removed = removedMedia
            }

        },
        created(){
        // https://github.com/saimow/vue-media-upload?ref=madewithvuejs.com
        },
        watch:{

        },
        mounted(){
            initFlowbite();
        },

    }*/


</script>

<style scoped>

</style>