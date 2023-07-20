<template>
    <layout>
    <!--<header class="w-full md:py-6 py-5 border-b border-[#F2F4F7] font-inter">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="bg-no-repeat bg-contain w-[142px] h-8 md:w-36 md:h-9.5 lg:mr-10 md:mr-8 block" style="background-image: url(project-assets/images/website/logo/nits-logo.png);"></a>
                    <div class="hidden md:flex">
                        <a class="text-base text-[#475467] hover:text-[#7F56D9] font-semibold lg:mr-8 md:mr-4" href="#">Home</a>
                        <a href="#" class="flex items-center text-[#475467] hover:text-[#7F56D9] lg:mr-8 md:mr-4">
                            <span class="text-base  font-semibold">Products</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <a href="#" class="flex items-center text-[#475467] hover:text-[#7F56D9] lg:mr-8 md:mr-4">
                            <span class="text-base font-semibold">Resources</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <a class="text-base text-[#475467] hover:text-[#7F56D9] font-semibold lg:mr-8 md:mr-4" href="#">Pricing</a>
                    </div>
                </div>
                <div class="md:flex hidden items-center gap-3">
                    <a class="text-base font-semibold py-2.5 px-[18px] rounded-lg text-[#475467] hover:bg-gray-100" href="/login">Log in</a>
                    <a class="text-base text-white bg-[#7F56D9] font-semibold py-2.5 px-[18px] rounded-lg" href="/sign-up">Sign up</a>
                </div>
                <button class="p-2 rounded text-[#344054] md:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </header>-->

    <!--<header class="w-full md:py-6 py-5 bg-ruby-50 border-b border-[#F2F4F7] font-inter z-30">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="bg-no-repeat bg-contain w-[142px] h-8 md:w-36 md:h-9.5 lg:mr-10 md:mr-8 block" style="background-image: url(/project-assets/images/NitsEditorLogo.png);"></a>
                    <div class="hidden md:flex">
                        <a class="text-base text-ruby-600 hover:text-pearl-600 font-semibold lg:mr-8 md:mr-4" href="#">Features</a>
                        <a class="text-base text-ruby-600 hover:text-pearl-600 font-semibold lg:mr-8 md:mr-4" href="#">How it works</a>
                        <a class="text-base text-ruby-600 hover:text-pearl-600 font-semibold lg:mr-8 md:mr-4" href="#">Blog</a>
                        &lt;!&ndash; <a href="#" class="flex items-center text-ruby-600 hover:text-pearl-600 lg:mr-8 md:mr-4">
                            <span class="text-base  font-semibold">Products</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <a href="#" class="flex items-center text-ruby-600 hover:text-pearl-600 lg:mr-8 md:mr-4">
                            <span class="text-base font-semibold">Resources</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a> &ndash;&gt;
                        &lt;!&ndash; <a class="text-base text-ruby-600 hover:text-pearl-600 font-semibold lg:mr-8 md:mr-4" href="#">Pricing</a> &ndash;&gt;
                    </div>
                </div>
                <div class="md:flexX items-center gap-3 hidden">
                    <a class="text-base font-medium py-2 px-[15px] rounded-lg text-ruby-600 hover:bg-gray-100" href="/login">Log in</a>
                    <a class="text-base text-white bg-pearl-600 font-medium py-2 px-[15px] rounded-lg" href="/sign-up">Sign up</a>
                </div>
                <button class="p-2 rounded text-ruby-700 md:hiddenX hidden">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </header>-->

        <div class="w-full family-inter bg-white">
            <div class="w-full h-16 justify-between flex items-center ">
                <div class="ml-3">
                    <div class="text-2xl font-semibold text-gray-900">Subscription</div>
                </div>
            </div>
            <main>
        <section>
            <div class="flex m-1 justify-center  mt-20 ">
                <label class="switch mt-[9px]">
                    <input v-if="current_plan" @click="switchSubscription" type="checkbox" checked>
                    <input v-else @click="switchSubscription" type="checkbox">
                    <span class="slider round"></span>
                </label>
                <div class="text-[22px] font-medium text-gray-700 ml-2">{{subscription_label}}</div>
            </div>

            <div class="container flex gap-4 justify-between items-center mt-8  break-words">
                <div  id="freePlan" class="bg-white w-4/12 rounded-md overflow-hidden box-shadow-c"  style="">
                    <div class="w-full text-center pt-10 relative grid">
                        <h2 class="text-3xl font-bold text-pearl-900 mt-5">$0</h2>
                        <p class="text-xl font-semibold text-[#002633] mt-5">{{packageFree.name}}</p>
                        <p class="text-base font-medium text-ruby-600 mt-3 hidden">Per Month/Per User</p>
                    </div>
                    <div class="bg-pearl-900 w-full pt-28 pb-10 mt-11">
                        <div class="flex gap-2 items-center justify-center" v-for="freeItem in packageFree.detail">
                            <span class="material-symbols-outlined text-white text-2xl">{{freeItem.item_access == 1?"done":"close"}}</span>
                            <p class="text-base font-normal text-white">{{freeItem.item}}</p>
                        </div>
                        <div class="flex justify-center">

                            <button @click="paySubscription(current_plan.id , packageFree.id)"  class="bg-white px-6 py-2 text-base font-semibold text-pearl-900 rounded-md mt-5" >
                                <div v-if="current_plan && current_plan.id == packageFree.id" class="px-1 py-1 w-[25px]" >
                                    <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path d="M10.219,1.688c-4.471,0-8.094,3.623-8.094,8.094s3.623,8.094,8.094,8.094s8.094-3.623,8.094-8.094S14.689,1.688,10.219,1.688 M10.219,17.022c-3.994,0-7.242-3.247-7.242-7.241c0-3.994,3.248-7.242,7.242-7.242c3.994,0,7.241,3.248,7.241,7.242C17.46,13.775,14.213,17.022,10.219,17.022 M15.099,7.03c-0.167-0.167-0.438-0.167-0.604,0.002L9.062,12.48l-2.269-2.277c-0.166-0.167-0.437-0.167-0.603,0c-0.166,0.166-0.168,0.437-0.002,0.603l2.573,2.578c0.079,0.08,0.188,0.125,0.3,0.125s0.222-0.045,0.303-0.125l5.736-5.751C15.268,7.466,15.265,7.196,15.099,7.03"></path>
                                    </svg>
                                </div>
                                <span class="mt-[0.3rem]">   {{current_plan && current_plan.id == packageFree.id?'Current Package':(current_plan && current_plan.id > packageFree.id ?"Downgrade Package":"Upgrade Package" )}}</span>
                            </button>

                            <button @click="paySubscription(1 , packageFree.id)" class="hidden bg-white px-6 py-2 text-base font-semibold text-pearl-900 rounded-md mt-5">Get started</button>

                        </div>
                    </div>
                </div>

                <div v-if="packages && packages.length" v-for="(packageObj ,index) in packages" id="paidPlan-1" class="bg-white w-4/12 rounded-md overflow-hidden box-shadow-c" style="">
                    <div class="w-full text-center pt-10 relative">
                        <h2 class="text-3xl font-bold text-pearl-900 mt-5">${{packageObj.price}}</h2>
                        <p class="text-xl font-semibold text-[#002633] mt-5">{{packageObj.name}}</p>
                        <p class="text-base font-medium text-ruby-600 mt-3 hidden ">Per Month/Per User</p>
                    </div>
                    <div class="bg-pearl-900 w-full pt-28 pb-10 mt-11">

                        <div v-if="packageObj.detail" v-for="packageItem in packageObj.detail" class="flex gap-2 items-center justify-center">
                            <span class="material-symbols-outlined text-white text-2xl">{{packageItem.item_access == 1?'done':'close'}}</span>
                            <p class="text-base font-normal text-white">{{packageItem.item}}</p>
                        </div>

                        <div class="flexC justify-center hidden">
                            <button class="bg-white px-6 py-2 text-base font-semibold text-pearl-900 rounded-md mt-5">Get started</button>
                        </div>

                        <div v-if="index == 0 " class="flex justify-center">
                            <!-- 2nd Higher Package  -->
                            <div class="flex m-2.5 justify-center">
                                <button  @click="paySubscription( current_plan.id , packageObj.id)" type="button" class="flex bg-white px-6 py-2 text-base font-semibold text-pearl-900 rounded-md mt-5" >
                                    <div v-if="current_plan && current_plan.id == packageObj.id" class="px-1 py-1 w-[35px]" >
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M10.219,1.688c-4.471,0-8.094,3.623-8.094,8.094s3.623,8.094,8.094,8.094s8.094-3.623,8.094-8.094S14.689,1.688,10.219,1.688 M10.219,17.022c-3.994,0-7.242-3.247-7.242-7.241c0-3.994,3.248-7.242,7.242-7.242c3.994,0,7.241,3.248,7.241,7.242C17.46,13.775,14.213,17.022,10.219,17.022 M15.099,7.03c-0.167-0.167-0.438-0.167-0.604,0.002L9.062,12.48l-2.269-2.277c-0.166-0.167-0.437-0.167-0.603,0c-0.166,0.166-0.168,0.437-0.002,0.603l2.573,2.578c0.079,0.08,0.188,0.125,0.3,0.125s0.222-0.045,0.303-0.125l5.736-5.751C15.268,7.466,15.265,7.196,15.099,7.03"></path>
                                        </svg>
                                    </div>
                                    <span class="mt-[0.3rem]">{{current_plan && current_plan.id == packageObj.id?'Current Package':(current_plan && current_plan.id > packageObj.id ?"Downgrade Package":"Upgrade Package" )}}</span>
                                </button>
                            </div>
                        </div>
                        <div v-else  class="flex justify-center">
                            <!-- Higher Package  -->
                            <div class="flex m-2.5 justify-center ">
                                <button @click="paySubscription(current_plan.id , packageObj.id)" class="flex bg-white px-6 py-2 text-base font-semibold text-pearl-900 rounded-md mt-5" >
                                    <div v-if="current_plan && current_plan.id == packageObj.id" class="px-1 py-1 w-[35px]" >
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M10.219,1.688c-4.471,0-8.094,3.623-8.094,8.094s3.623,8.094,8.094,8.094s8.094-3.623,8.094-8.094S14.689,1.688,10.219,1.688 M10.219,17.022c-3.994,0-7.242-3.247-7.242-7.241c0-3.994,3.248-7.242,7.242-7.242c3.994,0,7.241,3.248,7.241,7.242C17.46,13.775,14.213,17.022,10.219,17.022 M15.099,7.03c-0.167-0.167-0.438-0.167-0.604,0.002L9.062,12.48l-2.269-2.277c-0.166-0.167-0.437-0.167-0.603,0c-0.166,0.166-0.168,0.437-0.002,0.603l2.573,2.578c0.079,0.08,0.188,0.125,0.3,0.125s0.222-0.045,0.303-0.125l5.736-5.751C15.268,7.466,15.265,7.196,15.099,7.03"></path>
                                        </svg>
                                    </div>
                                    <span class="mt-[0.3rem]">{{current_plan && current_plan.id == packageObj.id ? 'Current Package':"Upgrade Package" }}</span>
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>
        </div>
<!--    <footer>
        <div class="py-24 bg-ruby-50 mt-28">
            <div class="container md:flex justify-between">
                <div>
                    <h5 class="text-30 md:text-4xl md:leading-44 font-semibold text-[#101828] mb-5">Sign up for our newsletter</h5>
                    <p class="text-lg md:text-xl md:leading-30 font-normal text-[#475467] sm:mb-8 md:mb-0">Be the first to know about releases and industry news and insights.</p>
                </div>
                <div class="md:flex items-start mt-8 sm:mt-10 lg:mt-0 max-w-[370px] md:max-w-full">
                    <div>
                        <input class="sm:w-[360px] w-full h-12 py-3 px-3.5 rounded-lg font-normal text-base border border-[#D0D5DD] mb-1.5 sm:mb-4 md:mb-1.5 box-shadow-c" style=";" placeholder="Enter your email" type="email">
                        <p class="text-sm md:text-base leading-5 font-normal text-[#475467]">We care about your data in our <a href="#" class="underline">privacy policy.</a></p>
                    </div>
                    <button class="py-3 sm:px-5 w-full md:w-auto bg-[#7F56D9] rounded-lg text-white font-semibold mt-4 md:mt-0 md:ml-4">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="bg-ruby-800">
            <div class="container">
                <div class="hidden md:flexXX justify-between py-16XX border-ruby-600 border-b">
                    <div class="">
                        <h6 class="text-3xl font-semibold text-white mb-4">Start your 30-day free trial</h6>
                        <p class="font-normal text-ruby-200 text-xl">Join over 4,000+ startups already growing with Untitled.</p>
                    </div>
                    <div class=" md:flexXX items-center max-w-[370px] md:max-w-full">
                        <button class=" py-3 md:px-5 w-full md:w-auto text-white text-base font-semibold bg-pearl-600 rounded-lg md:order-last mt-8 md:mt-0 mb-4 md:mb-0 md:ml-3">Get started</button>
                        <button class=" bg-white w-full py-3 md:px-5 md:w-auto text-ruby-700 text-base font-semibold border border-[#D0D5DD] rounded-lg" style="">Chat to us</button>
                    </div>
                </div>
                <div class="hidden py-16 flex flex-wrap lg:flex-nowrap justify-between gap-16 ">
                    <div>
                        <img class="w-[142px] h-auto mb-8" src="project-assets/images/website/logo/untitled-Logo.png" alt="untitled">
                        <p class="font-normal text-base text-ruby-200">Design amazing digital experiences that create more happy in the world.</p>
                    </div>
                    <div class="md:basis-[190px] basis-[120px]">
                        <p class="font-semibold text-sm text-ruby-300 mb-4">Product</p>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Overview</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Features</a>
                        <div class="flex items-start mb-3">
                            <a href="#" class="block text-ruby-200 font-semibold text-base">Solutions</a>
                            <div class="py-0.5 px-2 text-white font-medium text-xs rounded-2xl ml-2" style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.3);">New</div>
                        </div>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Tutorials</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Pricing</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Releases</a>
                    </div>
                    <div class="md:basis-[190px] basis-[120px]">
                        <p class="font-semibold text-sm text-ruby-300 mb-4">Company</p>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">About us</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Careers</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Press</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">News</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Media kit</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Contact</a>
                    </div>
                    <div class="md:basis-[190px] basis-[120px]">
                        <p class="font-semibold text-sm text-ruby-300 mb-4">Resources</p>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Blog</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Newsletter</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Events</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Help centre</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Tutorials</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Support</a>
                    </div>
                    <div class="md:basis-[190px] basis-[120px]">
                        <p class="font-semibold text-sm text-ruby-300 mb-4">Social</p>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Twitter</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">LinkedIn</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Facebook</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">GitHub</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">AngelList</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Dribbble</a>
                    </div>
                    <div class="md:basis-[190px] basis-[120px]">
                        <p class="font-semibold text-sm text-ruby-300 mb-4">Legal</p>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Terms</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Privacy</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Cookies</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Licenses</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Settings</a>
                        <a href="#" class="block text-ruby-200 font-semibold text-base mb-3">Contact</a>
                    </div>
                </div>
                <div class="sm:flex justify-between border-ruby-600 border-t pt-8 pb-12">
                    <div class="gap-6 flex sm:order-last mt-8 sm:mt-0 md:ml-3">
                        <a href="#" class="bg-no-repeat bg-contain w-6 h-6 inline-block" style="background-image: url(project-assets/images/website/icons/twitter-icon.png);"></a>
                        <a href="#" class="bg-no-repeat bg-contain w-6 h-6 inline-block" style="background-image: url(project-assets/images/website/icons/linkden-icon.svg);"></a>
                        <a href="#" class="bg-no-repeat bg-contain w-6 h-6 inline-block" style="background-image: url(project-assets/images/website/icons/facebook-icon.svg);"></a>
                        <a href="#" class="bg-no-repeat bg-contain w-6 h-6 inline-block" style="background-image: url(project-assets/images/website/icons/github-icon.png);"></a>
                        <a href="#" class="bg-no-repeat bg-contain w-6 h-6 inline-block" style="background-image: url(project-assets/images/website/icons/two-finger.png);"></a>
                        <a href="#" class="bg-no-repeat bg-contain w-6 h-6 inline-block" style="background-image: url(project-assets/images/website/icons/football-icon.png);"></a>
                    </div>
                    <p class="font-normal text-base mt-6 sm:mt-0 text-ruby-300">© 2077 Untitled UI. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>-->
    </layout>
</template>

<script>
    import Layout from "../../Components/Menus/Layout.vue";
    import Swal from 'sweetalert2'

    export default {
        name: "Subscription-Price",
        components: {Layout},
        props:['page_data','current_plan'],
        data(){
            return{
                authUser:this.$page.props.auth.user,
                upgradeButton:'Upgrade Package',
                subscription_type:"monthly",
                subscription_label:"Monthly",
                packageFree:[],
                packages:[],


            }
        },
        methods:{
            switchSubscription(){
                if( this.subscription_type === 'monthly')
                {
                    this.subscription_type = 'yearly';
                    this.subscription_label ="Yearly";
                }
                else{
                    this.subscription_type = 'monthly';
                    this.subscription_label ="Monthly";
                }

                this.showPackage(this.subscription_type);
            },
            showPackage(val){
                this.packages=[];
                this.page_data.forEach( (item,index) =>{
                    if( item.type == 'monthly' && item.price == '0'  ){
                        this.packageFree=item;
                    }
                    else  if( item.type == val && item.price != '0'  ){
                        this.packages.push( item ) ;
                    }

                });
            },
            paySubscription(currentPlanId, planId){
                if( currentPlanId != planId ){
                    let randId =Math.random().toString(36).slice(2, 9);
                    let payload ={s:planId,u:this.authUser.id};
                    //this.$inertia.get('/subscription-payment/razorpay',payload);
                    window.location = '/payment-subscription/razorpay?s='+planId+'&u='+this.authUser.id;
                }
            },
        },
        created(){
            this.subscription_type =this.current_plan?this.current_plan.type:'monthly';
            this.subscription_label =  this.subscription_type == 'monthly'?"Monthly":"Yearly";
            this.showPackage(this.subscription_type);
        }
    }
</script>

<style scoped>
    .box-shadow-c{
        box-shadow: 5px 8px 30px rgba(5, 13, 54, 0.05);
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 36px;
        height: 18px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 15px;
        width: 15px;
        left: 4px;
        bottom: 1.7px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #0075FF;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #0075FF;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(24px);
        -ms-transform: translateX(15px);
        transform: translateX(15px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>