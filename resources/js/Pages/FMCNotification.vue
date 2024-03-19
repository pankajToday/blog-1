<template>
    <HeadTag  />
    <HeaderNav :title="headerTitle" />

    <div class="w-full  md:mx-auto py-3 px-3 border-gray-100 border-2 rounder-full bg-white dark:bg-gray-900" style="margin-top: 100px" >
        <div class="w-full flex justify-center items-center py-3 px-3 border-gray-100 border-2 rounder-full">
            <div>
                <h1 class="m-2"> Firebase Notification </h1>
                <form  method="POST">
                    <div class="form-group">
                        <label>Title</label>
                        <input v-model="nTitle" type="text" class="form-control" name="title" placeholder="Add Title">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea v-model="nBody" class="form-control" name="body" placeholder="add your message"></textarea>
                    </div>
                    <button @click.prevent="sendNotification" type="submit" class="btn btn-primary m-2">Send Notification</button>

                    <button @click.prevent="startFCM" type="submit" class="btn btn-danger m-2">Get Device Token</button>
                </form>
            </div>

        </div>
    </div>


    <FooterSection :title="headerTitle"/>


    <!--<img class="w-[100%] h-[50%]" :src="asset('project-assets/img/bg-masthead.jpg')">-->
</template>

<script>
    import  HeadTag from './website/Main/Component/Head.vue';
    import  HeaderNav from './website/Main/Component/Header.vue';
    import  TopSlider from './website/Main/Component/TopSliderSection.vue';
    import  CategoryPostSection from './website/Main/Component/CategoryPost.vue';
    import  FooterSection from './website/Main/Component/Footer.vue';
    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';
    import firebase from "firebase/compat/app";
    import "firebase/compat/messaging";

  
    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: import.meta.env.VITE_API_KEY ,
        authDomain: import.meta.env.VITE_AUTH_DOMAIN ,
        projectId: import.meta.env.VITE_PROJECT_ID ,
        storageBucket:import.meta.env.VITE_STORAGE_BUCKET ,
        messagingSenderId:import.meta.env.VITE_MESSAGING_SENDER_ID,
        appId:import.meta.env.VITE_APP_ID ,
        measurementId: import.meta.env.VITE_MEASUREMENT_ID,
    };

    // Initialize Firebase Cloud Messaging and get a reference to the service
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();


    export default {
        name: "MainPage",
        components: {HeadTag ,HeaderNav,TopSlider,CategoryPostSection,FooterSection},
        props:['title'],
        data(){
            return{
                // authUser:this.$page.props.auth.user,
                headerTitle :'Tech Blog',
                nBody:'',
                nTitle:'',
                currentToken:"",
                attempt:0,
            }
        },
        methods:{
            startFCM() {
                messaging.getToken({ vapidKey:import.meta.env.VITE_VAPIKEY })
                    .then((currentToken) => {
                    if (currentToken) {
                        axios.post('/api/fmc-save-token', {
                            token: currentToken
                        }).then((res) => {
                            this.currentToken =currentToken;
                            console.log('response done')
                        }).catch(function (err) {
                            console.log('User Chat Token Error', err);
                        });
                    }

                }).catch(function (error) {
                    toast.success("Unable to get access token. Try again! " )
                    if(this.attempt < 3 )
                    {
                        this.attempt++;
                        console.log('attempt ' + this.attempt )
                        this.startFCM();
                        return ;
                    }

                    console.log('Error' , error);
                });
            },
            sendNotification(){
                let payload ={
                    title:this.nTitle,
                    body:this.nBody,
                };
                axios.post('/api/send-notification',payload ).then((response)=>{
                    if( response.data.success === 1 ){
                        toast.success("Notification send. <br /> Id :"+response.data.multicast_id )
                    }
                    if( response.data.failure === 1 ){
                        toast.warn("Notification Failed. <br /> Id :"+response.data.multicast_id )
                    }
                });
            },
            showNotification(){
                messaging.onMessage( (payload)=> {
                    const title = payload.notification.title;
                    const options = {
                        body: payload.notification.body,
                        icon: payload.notification.icon,
                    };
                    new Notification(title, options);
                    toast.info(title)
                    console.log('Message received. ');
                });
            },
            requestPermission() {
                toast.success("Please Allow our notification!" );
                Notification.requestPermission().then((permission) => {
                    if (permission === 'granted') {

                        let payload ={
                            data:Notification,

                        };
                        axios.post('/api/fmc-granted',payload ).then((response)=>{
                            if( response.data.success === 200 ){
                                toast.success("Notification permission granted." );
                            }
                        });

                        console.log('Notification permission granted.u ',Notification);
                        return ;

                    }
                    toast.error('Please allow notification!')

                })
            },
            getMachineId() {
                let machineId = localStorage.getItem('MachineId');
                if (!machineId) {
                    machineId = crypto.randomUUID();
                    localStorage.setItem('MachineId', machineId);

                    let payload={
                        device_id :  machineId,
                        extra : ''
                    };
                    axios.post('/api/device-log',payload ).then((response)=>{
                       //
                    });

                }
                toast.error('Please allow notification!')
                return machineId;
            }



        },
        created(){
            this.showNotification();
            this.requestPermission();


            eventBus.$on('editorContents', ()=> {
              console.log('accept') ;
              this.startFCM();
            });
        }
    }
</script>


<style scoped>

</style>
