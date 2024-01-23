<template>
    <HeadTag  />
    <HeaderNav :title="headerTitle" />

    <section id="posts" class="posts mt-[80px]">
        <div class="container" >
            <div class="row g-5">
                <div id="center-block" class="col-lg-12">
                    <div class="row g-5">
                        <div class="col-lg-9  border-2 border-gray-200">

                            <div class="row mt-2">
                                <div class="col-lg-8">
                                    <textarea  v-model="inputText" class="form-control" placeholder="Enter your text for convert in to voice" ></textarea>
                                </div>
                                <div class="col-lg-2">
                                    <select v-model="selectedLan" class="form-control">
                                        <option value="" selected> Select Language </option>
                                        <option value="en" > English </option>
                                        <option value="hi" >Hindi </option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <button type="button" @click="convertVoice" class="form-control">Convert</button>
                                </div>
                            </div>

                            <div class="row g-5 mt-5">
                                <div class="col-lg-4">Result</div>
                                <div class="col-lg-8 py-2 px-2 border-2 borer-gray-200">
                                    <span class="w-full ">{{resultOutput}} </span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3">
                            <TrendingPostComp />
                        </div>
                    </div>
                </div>
            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->

    <FooterSection :title="headerTitle"/>

</template>

<script>
    import Swal from 'sweetalert2';
    import  HeadTag from '../Component/Head.vue';
    import  HeaderNav from '../Component/Header.vue';
    import  CategoryPostSection from '../Component/CategoryPost.vue';
    import  FooterSection from '../Component/Footer.vue';
    import TrendingPostComp from "../Component/TrendingPost.vue";

    export default {
        name: "MainPage",
        components: {HeadTag ,HeaderNav,CategoryPostSection,FooterSection,TrendingPostComp },
        props:['title'],
        data(){
            return{
                // authUser:this.$page.props.auth.user,
                headerTitle :'Tech Blog',
                inputText:"नमस्कार पंकज जी आज मई आपके आवाज में बात करुँगी।",
                selectedLan:"",
                resultOutput:"",
                'test' : 'https://rapidapi.com/rahilkhan224/api/text-to-speech-neural-google'
            }
        },
        methods:{
            destroy (id) {
                Swal.fire({
                    title: 'Are you sure?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.post('/api/subscription-delete/'+id).then(response => {
                            if (response.status === 200) {
                                Swal.fire({
                                    position: 'center',
                                    icon: 'success',
                                    title: 'Plan Deleted successfully!',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                this.$inertia.get('subscription-list');
                            }
                        }).catch((error) => {
                            if (error.response.status === 500) {
                                Swal.fire(
                                    'Oops!',
                                    'Unable To Delete Plan!'
                                )
                            }
                        })
                    }
                });

            },
           async convertVoice(){
               const options = {
                   method: 'GET',
                   url: 'https://text-to-speech-api3.p.rapidapi.com/speak',
                   params: {
                       text: 'नमस्कार पंकज जी आज मई आपके आवाज में बात करुँगी। ',
                       lang: 'hi'
                   },
                   headers: {
                       'X-RapidAPI-Key': 'd472812f88mshff5571b61650c6bp1382bajsn88113d03e88f',
                       'X-RapidAPI-Host': 'text-to-speech-api3.p.rapidapi.com'
                   }
               };
               try {
                   const response = await axios.request(options);
                   console.log(response.data);
               } catch (error) {
                   console.error(error);
               }
            }


        },
        created(){
            //console.log(this.authUser)
        }
    }
</script>


<style scoped>

</style>
