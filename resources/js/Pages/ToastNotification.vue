<template>
    <div class="w-full">
        <div class="w-full">
            <H1 class="w-full flex justify-between items-right py-3 px-3 mt-5 mb-5  bg-gray-100 text-lg font-semibold "> Show Toast Notification </H1> <br/>

            <p class="bg-gray-200 text-black py-3 px-4 border-gray-100 mt-5 mb-5 rounded-md"> Import this Css and JS in your file.</p>
            <p class="bg-gray-200 text-black py-3 px-4 border-gray-100  mt-5 mb-5 rounded-md">
                <code class=""> import { toast } from 'vue3-toastify'; <br> <br/>
                import 'vue3-toastify/dist/index.css'; </code>
            </p>
            <p class="bg-gray-200 text-black py-3 px-4 border-gray-100 mt-5 mb-5  rounded-md"> Use like this wasy </p>
            <p class="bg-gray-800 text-white py-3 px-4 border-gray-100  mt-5 mb-5 rounded-md">
                <code class="">
                    toast('Wow so easy !');<br> <br/>

                    toast("Default Notification !");<br> <br/>

                    toast.success("Success Notification !", {
                    position: toast.POSITION.TOP_CENTER,
                    });<br> <br/>

                    toast.error("Error Notification !", {
                    position: toast.POSITION.TOP_LEFT,
                    });<br> <br/>

                    toast.warn("Warning Notification !", {
                    position: toast.POSITION.BOTTOM_LEFT,
                    });<br> <br/>

                    toast.info("Info Notification !", {
                    position: toast.POSITION.BOTTOM_CENTER,
                    });<br> <br/>

                    toast("Custom Style Notification with css class!", {
                    position: toast.POSITION.BOTTOM_RIGHT,
                    className: 'foo-bar',
                    });<br> <br/>
                </code>
            </p>

            <p class="bg-gray-100 text-black py-3 px-4 border-gray-100  mt-5 mb-5 rounded-md">
               <a href="https://vue3-toastify.js-bridge.com/usage/positioning-toast.html"
                  target="_blank"> Source URL :: https://vue3-toastify.js-bridge.com/usage/positioning-toast.html</a>
            </p>
        </div>
    </div>
</template>

<script>
    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "firebase/app";
    import { getAnalytics } from "firebase/analytics";


    export  default {
        name:"ToastNotification",
        data(){
            return{}
        },
        methods:{
            showAlert(){
                toast('Wow so easy !');

                toast("Default Notification !");

                toast.success("Success Notification !", {
                    position: toast.POSITION.TOP_CENTER,
                });

                toast.error("Error Notification !", {
                    position: toast.POSITION.TOP_LEFT,
                });

                toast.warn("Warning Notification !", {
                    position: toast.POSITION.BOTTOM_LEFT,
                });

                toast.info("Info Notification !", {
                    position: toast.POSITION.BOTTOM_CENTER,
                });

                toast("Custom Style Notification with css class!", {
                    position: toast.POSITION.BOTTOM_RIGHT,
                    className: 'foo-bar',
                });
            },
            firebase(){

                // TODO: Add SDKs for Firebase products that you want to use
                // https://firebase.google.com/docs/web/setup#available-libraries

                // Your web app's Firebase configuration
                // For Firebase JS SDK v7.20.0 and later, measurementId is optional
                const firebaseConfig = {
                    apiKey: "AIzaSyCoOUPvo6Bt_ukX__V4J-PHtT7if197a7Q",
                    authDomain: "push-notification-demo-be89b.firebaseapp.com",
                    projectId: "push-notification-demo-be89b",
                    storageBucket: "push-notification-demo-be89b.appspot.com",
                    messagingSenderId: "1019444162193",
                    appId: "1:1019444162193:web:bf6fafc8aff5cefbc49930",
                    measurementId: "G-QVXKJWZYL5"
                };

                // Initialize Firebase
                const app = initializeApp(firebaseConfig);
                const analytics = getAnalytics(app);
            }
        },
        created(){

        }

    }



</script>