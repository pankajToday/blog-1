<template>
    <div class="w-full  overflow-hidden bg-white">
        <div v-if="loginPage" class="w-full grid grid-cols-2">
            <div class="w-full flex flex-col h-full">
                <div class="w-[360px] mx-auto py-20">
                    <div class="w-full flex  items-center px-4">
                        <div class="w-full flex items-center">
                            <!--<img class="m-auto w-40 h-auto object-contain" :src="asset('project-assets/images/NitsEditorLogo.png')">-->
                        </div>
<!--                        <div class="text-[20px] font-semibold text-gray-900 ml-2">NITSEDITOR</div>-->
                    </div>
                    <div class="w-full mt-12">
                        <div class="text-3xl font-semibold text-gray-900">Log in</div>
                        <div class="text-base font-normal text-gray-700 mt-2">Welcome back! Please enter your details.</div>
                    </div>
                    <div class="w-full mt-6">
                        <div class="w-full">
                            <label class="text-sm font-medium text-gray">Email</label>
                            <input v-model="form.email" type="email" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your email">
                            <span v-if="errors && errors.email && errors.email[0]" class="text-red-500 text-small ">{{errors.email[0]}}</span>
                        </div>
                        <div class="w-full mt-4">
                            <label class="text-sm font-medium text-gray">Password</label>
                            <input v-model="form.password" type="password" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your password">
                            <span v-if="errors && errors.password && errors.password[0]" class="text-red-500 text-small ">{{errors.password[0]}}</span>
                        </div>
                        <div class="w-full flex items-center justify-between mt-2.5">
                            <div class="flex items-center">
                                <input v-model="form.remember" type="checkbox" class="rounded w-4 h-4 border border-gray-400">
                                <div class="text-gray font-medium text-sm ml-2">Remember for 30 days</div>
                            </div>
                            <div @click.prevent="forgetPass = true ; loginPage = false" class="text-sm font-medium text-[#6941C6] cursor-pointer">Forgot password</div>
                        </div>
                        <button @click.prevent="submit" class="w-full rounded-md bg-primary text-white text-sm font-medium px-4 py-2 mt-[17px] focus:outline-none">Sign in</button>
                    </div>

                    <div class="text-gray-600 text-sm font-normal text-center mt-5">Don’t have an account? <span><a href="/sign-up" class="text-primary font-semibold">Sign up</a></span></div>
                </div>
                <div class="w-full mt-auto h-12 flex items-center px-8 mt-4">
                    <div class="hidden text-sm text-gray-600">© -- App 2023</div>
                </div>
            </div>
            <div class="w-full bg-cover bg-no-repeat h-full flex items-center relative" style="background: linear-gradient(45deg, #42307D 0%, #7F56D9 100%);">
                <!--<img class="absolute top-[-20px] right-0 z-20" :src="asset('project-assets/images/Line-pattern-up.png')">
                <img class="absolute bottom-[-328px] left-0 z-20" :src="asset('project-assets/images/Line-pattern-up.png')">-->
                <div class="w-[520px] m-auto z-50">
                    <div class="">
                        <!--<img class="" :src="asset('project-assets/images/login-slider.png')">-->
                    </div>
                    <div class="mt-12 w-full">
                        <div class="text-xl font-medium text-white text-center">Welcome to your new dashboard</div>
                        <div class="text-base font-medium text-[#E9D7FE] text-center mt-3">Sign in to explore changes we’ve made.</div>
                    </div>
                    <div class="flex items-center justify-between px-32 mt-20">
                        <div class="w-6 h-6 rounded-full flex items-center hover:bg-[#9E77ED] cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-white m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="text-[#9E77ED] w-3 h-3" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 31.955 31.955" fill="currentColor" fill-rule="evenodd">
                            <path d="M27.25 4.655c-6.254-6.226-16.37-6.201-22.594.051-6.227 6.254-6.204 16.37.049 22.594 6.256 6.226 16.374 6.203 22.597-.051 6.224-6.254 6.203-16.371-.052-22.594z" fill="currentColor" fill-rule="evenodd"/>
                                <path d="m13.288 23.896-1.768 5.207c2.567.829 5.331.886 7.926.17l-.665-5.416a8.382 8.382 0 0 1-5.493.039zM8.12 13.122l-5.645-.859a13.856 13.856 0 0 0 .225 8.143l5.491-1.375a8.391 8.391 0 0 1-.071-5.909zm20.643-1.789-4.965 1.675a8.39 8.39 0 0 1-.247 6.522l5.351.672a13.868 13.868 0 0 0-.139-8.869zm-17.369-8.45 1.018 5.528a8.395 8.395 0 0 1 6.442-.288l1.583-5.137a13.855 13.855 0 0 0-9.043-.103z" fill="currentColor" fill-rule="evenodd" />
                                <circle cx="15.979" cy="15.977" r="6.117" fill="currenrColor" fill-rule="evenodd"/>
                        </svg>
                            <svg class="text-white w-3 h-3" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 31.955 31.955" fill="currentColor" fill-rule="evenodd">
                            <path d="M27.25 4.655c-6.254-6.226-16.37-6.201-22.594.051-6.227 6.254-6.204 16.37.049 22.594 6.256 6.226 16.374 6.203 22.597-.051 6.224-6.254 6.203-16.371-.052-22.594z" fill="currentColor" fill-rule="evenodd"/>
                                <path d="m13.288 23.896-1.768 5.207c2.567.829 5.331.886 7.926.17l-.665-5.416a8.382 8.382 0 0 1-5.493.039zM8.12 13.122l-5.645-.859a13.856 13.856 0 0 0 .225 8.143l5.491-1.375a8.391 8.391 0 0 1-.071-5.909zm20.643-1.789-4.965 1.675a8.39 8.39 0 0 1-.247 6.522l5.351.672a13.868 13.868 0 0 0-.139-8.869zm-17.369-8.45 1.018 5.528a8.395 8.395 0 0 1 6.442-.288l1.583-5.137a13.855 13.855 0 0 0-9.043-.103z" fill="currentColor" fill-rule="evenodd" />
                                <circle cx="15.979" cy="15.977" r="6.117" fill="currenrColor" fill-rule="evenodd"/>
                        </svg>
                            <svg class="text-[#9E77ED] w-3 h-3" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 31.955 31.955" fill="currentColor" fill-rule="evenodd">
                            <path d="M27.25 4.655c-6.254-6.226-16.37-6.201-22.594.051-6.227 6.254-6.204 16.37.049 22.594 6.256 6.226 16.374 6.203 22.597-.051 6.224-6.254 6.203-16.371-.052-22.594z" fill="currentColor" fill-rule="evenodd"/>
                                <path d="m13.288 23.896-1.768 5.207c2.567.829 5.331.886 7.926.17l-.665-5.416a8.382 8.382 0 0 1-5.493.039zM8.12 13.122l-5.645-.859a13.856 13.856 0 0 0 .225 8.143l5.491-1.375a8.391 8.391 0 0 1-.071-5.909zm20.643-1.789-4.965 1.675a8.39 8.39 0 0 1-.247 6.522l5.351.672a13.868 13.868 0 0 0-.139-8.869zm-17.369-8.45 1.018 5.528a8.395 8.395 0 0 1 6.442-.288l1.583-5.137a13.855 13.855 0 0 0-9.043-.103z" fill="currentColor" fill-rule="evenodd" />
                                <circle cx="15.979" cy="15.977" r="6.117" fill="currenrColor" fill-rule="evenodd"/>
                        </svg>
                            <svg class="text-[#9E77ED] w-3 h-3" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 31.955 31.955" fill="currentColor" fill-rule="evenodd">
                            <path d="M27.25 4.655c-6.254-6.226-16.37-6.201-22.594.051-6.227 6.254-6.204 16.37.049 22.594 6.256 6.226 16.374 6.203 22.597-.051 6.224-6.254 6.203-16.371-.052-22.594z" fill="currentColor" fill-rule="evenodd"/>
                                <path d="m13.288 23.896-1.768 5.207c2.567.829 5.331.886 7.926.17l-.665-5.416a8.382 8.382 0 0 1-5.493.039zM8.12 13.122l-5.645-.859a13.856 13.856 0 0 0 .225 8.143l5.491-1.375a8.391 8.391 0 0 1-.071-5.909zm20.643-1.789-4.965 1.675a8.39 8.39 0 0 1-.247 6.522l5.351.672a13.868 13.868 0 0 0-.139-8.869zm-17.369-8.45 1.018 5.528a8.395 8.395 0 0 1 6.442-.288l1.583-5.137a13.855 13.855 0 0 0-9.043-.103z" fill="currentColor" fill-rule="evenodd" />
                                <circle cx="15.979" cy="15.977" r="6.117" fill="currenrColor" fill-rule="evenodd"/>
                        </svg>
                        </div>
                        <div class="w-6 h-6 rounded-full flex items-center hover:bg-[#9E77ED] cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 text-white m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="forgetPass" class="w-full flex">
            <div class="mx-auto max-w-4xl">
                <div class="w-full flex justify-center items-center " style="padding-top: 66px">
                    <!--<img class="object-contain w-[56px] h-[56px]" :src="asset('project-assets/images/icon/forget-pass.png')">-->
                </div>
                <div class="mt-8 w-full">
                    <div class="font-semibold text-center" style="font-size: 30px">Forgot password?</div>
                    <div class="text-base font-normal text-gray-600 text-center mt-3">No worries, we’ll send you reset instructions.</div>
                </div>
                <div class="w-full mt-4">
                    <label class="text-sm font-medium text-gray">Email*</label>
                    <input type="email" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your email">
                    <span v-if="errors && errors.email && errors.email[0]" class="text-red-500 text-small ">{{errors.email[0]}}</span>
                </div>
                <button class="w-full rounded-md bg-primary text-white text-base font-semibold px-4 py-2 mt-5 focus:outline-none">Reset Password</button>
                <div @click.prevent="loginPage = true ; forgetPass = false" class="flex justify-center items-center mt-4 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-4 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    <div class="text-sm font-semibold text-gray-600 ml-1.5">Back to log in</div>
                </div>

            </div>
        </div>
    </div>
</template>


<style scoped>

</style>

<script >
   /* https://tailwind-elements.com/docs/standard/components/scroll-back-to-top-button/*/

   import { toast } from 'vue3-toastify';
   import 'vue3-toastify/dist/index.css';


   export default {
    name: "login",
    props:[''],
    data(){
        return{
            form : {
                email: 'guest@example.com',
                password: 'password',
                remember: true,
            },
            loginPage:true,
            forgetPass:false,
            errors:"",
        }
    },
    methods:{
        submit() {
            let payload = { email:this.form.email , password: this.form.password , remember:this.form.remember };
            axios.post('/api/login',  payload).then(response => {
                if (response.status === 202) {
                    window.location ='/home';
                }
            }).catch((error) => {
                if (error.response.status === 401) {
                   toast.error('Login Failed!');
                }
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors;
                    toast.error('Login Input Error!');
                }
            })
        },
        signUp() {
            axios.post('/sign-up/',this.form).then(response => {
                if (response.status === 200) {
                    window.location ='/login';
                }
            }).catch((error) => {
                if (error.response.status === 500) {
                    Swal.fire(
                        'Oops!',
                        'Unable to login!'
                    )
                }
                console.log(error.response.data.errors)
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors;
                }
            })
        },
        reset(){

        }
    },
    created(){}

};
</script>
