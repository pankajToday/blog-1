<template>
    <div class="w-full h-auto overflow-hidden bg-white">
        <div class="w-full grid grid-cols-2">
            <div class="w-full flex flex-col h-full">
                <div class="w-[350px] mx-auto py-12">
                    <div class="w-full flex  items-center px-4">
                        <div class="w-full flex items-center">
                            <img class="m-auto w-40 h-auto object-contain" :src="asset('project-assets/images/NitsEditorLogo.png')">
                        </div>
<!--                        <div class="text-[20px] font-semibold text-gray-900 ml-2">NITSEDITOR</div>-->
                    </div>
                    <div class="w-full mt-8">
                        <div class="text-3xl font-semibold text-gray-900">Sign Up</div>
                        <div class="text-base font-normal text-gray-700 mt-2">Welcome back! Please enter your details.</div>
                    </div>
                    <div class="w-full mt-4">
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">First Name <span class="text-red-600">*</span></label>
                            <input v-model="form.first_name" type="text" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your first name">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['first_name']">{{errors['first_name'][0]}}</p>
                        </div>
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">Last Name <span class="text-red-600">*</span></label>
                            <input v-model="form.last_name" type="text" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your last name">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['last_name']">{{errors['last_name'][0]}}</p>
                        </div>
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">Email <span class="text-red-600">*</span></label>
                            <input v-model="form.email" type="email" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your email">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['email']">{{errors['email'][0]}}</p>
                        </div>
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">Mobile <span class="text-red-600">*</span></label>
                            <input v-model="form.mobile" type="email" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your email">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['email']">{{errors['email'][0]}}</p>
                        </div>
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">Password <span class="text-red-600">*</span></label>
                            <input v-model="form.password" type="password" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your password">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['password']">{{errors['password'][0]}}</p>
                        </div>
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">Confirm Password <span class="text-red-600">*</span></label>
                            <input v-model="form.confirm_password" type="password" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your password">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['password']">{{errors['password'][0]}}</p>
                        </div>
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">Location </label>
                            <input v-model="form.location" type="text" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your location">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['location']">{{errors['location'][0]}}</p>
                        </div>
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">City </label>
                            <input v-model="form.city" type="text" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your city">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['city']">{{errors['city'][0]}}</p>
                        </div>
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">State </label>
                            <input v-model="form.state" type="text" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your state">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['state']">{{errors['state'][0]}}</p>
                        </div>
                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray">Pin </label>
                            <input v-model="form.pin" type="text" class="rounded-md px-4 py-2 focus:outline-none mt-1 w-full border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" placeholder="Enter your pin">
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['pin']">{{errors['pin'][0]}}</p>
                        </div>

                        <div class="w-full mt-1">
                            <label class="text-sm font-medium text-gray mr-3">Accept All Terms & Conditions. <span class="text-red-600">*</span></label>
                            <input v-model="form.terms" type="checkbox" class="rounded-md focus:outline-none mt-1  border border-gray-400 text-base font-normal text-gray placeholder-[#667085]" >
                            <p class="text-red-600 mt-1 text-xs italic" v-if="errors && errors['terms']">{{errors['terms'][0]}}</p>
                        </div>
                    </div>

                    <button @click.prevent="submit" class="w-full rounded-md bg-primary text-white text-sm font-medium px-4 py-2 mt-[17px] focus:outline-none">Sign Up</button>

                    <div v-if="success" class="mt-4 italic text-sm text-blue-700">{{ success }}</div>

                    <div class="text-gray-600 text-sm font-normal text-center mt-5">Already signed up? <span><a href="/login" class="text-primary font-semibold">Click here</a></span></div>
                </div>
                <div class="w-full mt-auto h-12 flex items-center px-8 mt-4">
                    <div class="text-sm text-gray-600">© -- App 2023</div>
                </div>
            </div>
            <div class="w-full bg-cover bg-no-repeat h-full flex items-center relative" style="background: linear-gradient(45deg, #42307D 0%, #7F56D9 100%);">
                <img class="absolute top-[-20px] right-0 z-20" :src="asset('project-assets/images/Line-pattern-up.png')">
                <img class="absolute bottom-[-328px] left-0 z-20" :src="asset('project-assets/images/Line-pattern-up.png')">
                <div class="w-[520px] m-auto z-50">
                    <div class="">
                        <img class="" :src="asset('project-assets/images/login-slider.png')">
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

    </div>
</template>

<script>
     import Swal from "sweetalert2";
    // import {Link} from "@inertiajs/inertia-vue3";

    export default {
        name: "Signup",
        // components: {'InertiaLink': Link},
        data(){
            return{
                controlBox: false,
                // asset_url: process.env.MIX_ASSET_URL,
                showForgetPassword : false,
                showLogin: true,
                form:{
                    first_name: '',
                    last_name: '',
                    email:'',
                    password:'',
                    confirm_password:'',
                    mobile:"",
                    location :"",
                    city:"",
                    state:'',
                    pin:'',
                    terms:''

                },
                errors:{},
                success:''
            }
        },
        methods:{
            submit(){
                const payload = {
                    first_name: this.form.first_name,
                    last_name: this.form.last_name,
                    email: this.form.email,
                    mobile:this.form.mobile ,
                    password: this.form.password,
                    confirm_password:this.form.confirm_password,
                    location :this.form.location,
                    city:this.form.city,
                    state:this.form.state,
                    pin:this.form.pin,
                    terms:this.form.terms
                }
                axios.post('/api/signup', payload).then(response => {
                    if (response.status === 200) {
                        this.errors = {}
                        this.form = {}

                        // this.success = response.data.message
                        this.success = 'Email verification link has been sent to your registered email. Please verify your email to login!!';

                    }
                }).catch((error) => {
                    if (error.response.status === 422){
                        this.errors = error.response.data.errors
                    }
                })
            },
        }
    }
</script>

<style scoped>

</style>

