<template>
    <div  v-if="notifyBox" class="w-full fixed top-[0%] right-[1%] z-[999] flex justify-center p-8" style="" >
        <div class="grid grid-cols-1  bg-indigo-500  rounded-lg shadow-lg text-white">
            <div class="flex w-full mb-2 px-4 pt-4 items-center">
                <div class="w-full">
                    <h4 class="mb-2 font-bold">{{title}} Notification</h4>
                    <p>Please subscribe to receive the newest updates. </p>
                </div>
                <div class="w-12">
                    <div class="text-2xl p-2 bg-indigo-600 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full mb-2 px-[10%] md:px-[20%] py-2">
                <button @click="startFCM" class="mx-1 px-4 border border-gray-100 rounded-md bg-gray-100 text-black front-xl font-medium"> Accept</button>
                <button @click="startFCM" class="mx-1 px-4 border border-red-400 rounded-md bg-red-600 text-white front-xl font-medium"> Cancel</button>
            </div>
        </div>

    </div>
</template>

<script>
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
        name: "PushNotification.vue",
        props:['title'],
        data(){
            return{
                notifyBox:true,
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
                                this.notifyBox =false;
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
                })
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
                Notification.requestPermission().then((permission) => {
                    if (permission === 'granted') {
                        console.log('Notification permission granted.');
                        return ;

                    }
                    toast.error('Please allow notification!')

                })
            },

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