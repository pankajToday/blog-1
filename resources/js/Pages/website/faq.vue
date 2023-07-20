<template>
    <div class="w-full">
        <web-header></web-header>
        <div class="w-full py-16">
            <div class="max-w-3xl mx-auto">
                <div class="w-full md:px-4">
                    <div class="text-sm leading-18 font-semibold text-pearl-700 md:mb-2 mb-1 text-center">Support</div>

                    <h1 class="lg:text-4xl md:text-3xl text-xl font-semibold leading-[72px] text-ruby-900 md:mb-6 mb-3 text-center">FAQs</h1>
                    <p class="font-normal md:text-base text-sm text-ruby-600 text-center">Need something cleared up? Here are our most frequently asked questions.</p>
                    <div class="w-full mt-6 flex justify-center items-center">
                        <div class="relative">
                            <input class="py-2 pl-10 pr-3.5 text-vs leading-6 rounded-lg font-normal border border-[#D0D5DD] focus:outline-none" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05); width: 250px;" placeholder="Search" type="type">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 absolute top-3 left-3 absolute text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-12 flex justify-center flex-col" style="padding: 0px 50px">
                    <div class="w-full p-6 rounded-2xl flex " :class="{'bg-gray-100' :faqBox1 , 'bg-transparent' :!faqBox1}">
                        <div @click.prevent="faqBox1 = !faqBox1" class="w-6 h-6 flex items-center cursor-pointer">
                            <svg :class="{'hidden' :faqBox1 , 'flex' :!faqBox1}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <svg :class="{'flex' :faqBox1 , 'hidden' :!faqBox1}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-semibold">Is there a free trial available?</div>
                            <div v-if="faqBox1" class="text-small font-medium text-ruby-600 mt-2">Yes, you can try us for free for 30 days. If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</div>
                        </div>
                    </div>
                    <div class="w-full p-6 rounded-2xl flex mt-4" :class="{'bg-gray-100' :faqBox2 , 'bg-transparent' :!faqBox2}">
                        <div @click.prevent="faqBox2 = !faqBox2" class="w-6 h-6 flex items-center cursor-pointer">
                            <svg :class="{'hidden' :faqBox2 , 'flex' :!faqBox2}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <svg :class="{'flex' :faqBox2 , 'hidden' :!faqBox2}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-semibold">Can I change my plan later?</div>
                            <div v-if="faqBox2" class="text-small font-medium text-ruby-600 mt-2">Yes, you can try us for free for 30 days. If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</div>
                        </div>
                    </div>
                    <div class="w-full p-6 rounded-2xl flex mt-4" :class="{'bg-gray-100' :faqBox3 , 'bg-transparent' :!faqBox3}">
                        <div @click.prevent="faqBox3 = !faqBox3" class="w-6 h-6 flex items-center cursor-pointer">
                            <svg :class="{'hidden' :faqBox3 , 'flex' :!faqBox3}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <svg :class="{'flex' :faqBox3 , 'hidden' :!faqBox3}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-semibold">What is your cancellation policy?</div>
                            <div v-if="faqBox3" class="text-small font-medium text-ruby-600 mt-2">Yes, you can try us for free for 30 days. If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</div>
                        </div>
                    </div>
                    <div class="w-full p-6 rounded-2xl flex mt-4" :class="{'bg-gray-100' :faqBox4 , 'bg-transparent' :!faqBox4}">
                        <div @click.prevent="faqBox4 = !faqBox4" class="w-6 h-6 flex items-center cursor-pointer">
                            <svg :class="{'hidden' :faqBox4 , 'flex' :!faqBox4}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <svg :class="{'flex' :faqBox4 , 'hidden' :!faqBox4}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-500 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <div class="text-base font-semibold">Can other info be added to an invoice?</div>
                            <div v-if="faqBox4" class="text-small font-medium text-ruby-600 mt-2">Yes, you can try us for free for 30 days. If you want, we’ll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container">
                <div class="my-12 border-gray-300 border-b w-full"></div>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="w-full">
                        <div class="w-full md:px-8">
                            <div class="bg-white text-sm leading-18 font-semibold text-pearl-700 md:mb-2 mb-1">Case Study</div>

                            <h1 class="lg:text-3xl md:text-2xl text-xl font-semibold leading-[72px] text-ruby-900">How we helped Hourglass</h1>
                            <div class="my-8 border-gray-300 border-b w-full"></div>

                            <p class="font-normal md:text-base text-sm text-ruby-600">Mi tincidunt elit, id quisque ligula ac diam, amet. Vel etiam suspendisse morbi eleifend faucibus eget vestibulum felis. Dictum quis montes, sit sit. Tellus aliquam enim urna, etiam.</p>
                            <p class="font-normal md:text-base text-sm text-ruby-600 mt-4">Eget quis mi enim, leo lacinia pharetra, semper. Eget in volutpat mollis at volutpat lectus velit, sed auctor. Porttitor fames arcu quis fusce augue enim. Quis at habitant diam at. Suscipit tristique risus, at donec. In turpis vel et quam imperdiet. Ipsum molestie aliquet sodales id est ac volutpat.</p>


                            <h2 class="lg:text-2xl md:text-xl text-lg font-semibold leading-[64px] text-ruby-900 mt-6">Closing more clients</h2>
                            <p class="font-normal md:text-base text-sm text-ruby-600 mt-4">Dolor enim eu tortor urna sed duis nulla. Aliquam vestibulum, nulla odio nisl vitae. In aliquet pellentesque aenean hac vestibulum turpis mi bibendum diam. Tempor integer aliquam in vitae malesuada fringilla.</p>
                            <div class="flex items-center gap-3 mt-6">
                                <button class="bg-white py-2 px-5 text-ruby-700 text-sm font-semibold border border-[#D0D5DD] rounded-md" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">Chat to us</button>
                                <button class="py-2 px-5 text-white text-sm font-semibold bg-pearl-600 rounded-md">Read case study</button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-12">
                        <div class="w-full bg-no-repeat bg-cover h-[494px] w-full flex" style="background-image: url(/project-assets/images/fredi.png)">
                            <div class="w-full h-40 bg-gray-400 bg-opacity-70 mt-auto px-4 py-3.5 lg:py-4 md:py-6">
                                <div class="lg:flex justify-between w-full">
                                    <div class="flex space-x-1 order-1 lg:order-last mb-3 lg:mb-0">
                                        <svg v-for="index in 5" :key="index" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white">
                                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-4xl font-bold text-white">Alisa Hester</div>
                                        <div class="text-sm font-semibold text-white mt-4 lg:mt-6">PM, Hourglass</div>
                                        <div class="text-sm font-normal text-white mt-1">Web Design Agency</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:hidden block border-ruby-600 border-t pt-16 mt-16">
                    <h5 class="text-3xl font-semibold text-ruby-900">Join 4,000+ startups growing with Untitled</h5>
                    <div class="flex mt-8">
                        <img class="w-7 h-7" src="project-assets/images/website/icons/check-icon.png" alt="img">
                        <p class="ml-3 font-normal text-ruby-600 text-base">30-day free trial</p>
                    </div>
                    <div class="flex mt-4">
                        <img class="w-7 h-7" src="project-assets/images/website/icons/check-icon.png" alt="img">
                        <p class="ml-3 font-normal text-ruby-600 text-base">Peronalized onboarding</p>
                    </div>
                    <div class="flex mt-4">
                        <img class="w-7 h-7" src="project-assets/images/website/icons/check-icon.png" alt="img">
                        <p class="ml-3 font-normal text-ruby-600 text-base">Access to all features</p>
                    </div>
                    <button class="bg-white mt-8 py-3 w-full text-ruby-700 text-base font-semibold border border-[#D0D5DD] rounded-lg" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">Learn more</button>
                    <button class="py-3 w-full text-white text-base font-semibold bg-pearl-600 rounded-lg mt-8">Get started</button>
                    <img class="w-full h-auto mt-12" src="project-assets/images/website/man-see.png">
                </div>
            </div>
            <div class="w-full bg-gray-100 mt-12 hidden md:block">
                <div class="container pt-12 pb-60">
                    <div class="text-sm leading-18 font-semibold text-pearl-700 md:mb-2 mb-1 text-center">Get started</div>

                    <h1 class="lg:text-3xl md:text-2xl text-xl font-semibold leading-[72px] text-ruby-900 md:mb-6 mb-3 text-center">Start your 30-day free trial</h1>
                    <p class="font-normal md:text-base text-sm text-ruby-600 text-center">Join over 4,000+ startups already growing with Untitled.</p>
                    <div class="flex items-center justify-center gap-3 mt-6">
                        <button class="bg-white py-2 px-5 text-ruby-700 text-sm font-semibold border border-[#D0D5DD] rounded-md" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">Learn more</button>
                        <button class="py-2 px-5 text-white text-sm font-semibold bg-pearl-600 rounded-md">Get Started</button>
                    </div>

                </div>
            </div>
            <div class="w-full container hidden md:block -mt-48">
                <div class="bg-no-repeat bg-cover h-[410px]" style="background-image: url(/project-assets/images/chair.png)"></div>
            </div>
        </div>
        <footer class="bg-ruby-800">
            <div class="container py-12">
                <div class="lg:flex justify-between">
                    <div>
                        <a href="#" class="bg-no-repeat bg-contain w-36 h-9.5 inline-block mb-8" style="background-image: url(project-assets/images/website/logo/untitled-Logo.png);"></a>
                    </div>
                    <div class="max-w-[370px] md:max-w-full">
                        <div class="md:flex block items-center mt-4">
                            <input class="md:w-[229px] w-full h-11 py-2.5 px-3.5 rounded-lg font-normal text-base border border-[#D0D5DD] block" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);" placeholder="Enter your email" type="email">
                            <button class="py-2.5 md:px-3.5 w-full md:w-auto bg-[#7F56D9] rounded-lg text-white font-semibold mt-4 md:mt-0 md:ml-4">Subscribe</button>
                        </div>
                        <p class="font-normal text-base mt-12 md:mt-16 text-ruby-300">© 2077 Untitled UI. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import WebHeader from "@/Components/Website/Menus/WebHeader.vue";

export default {
    name: "faq",
    components: {WebHeader},
    data(){
        return{
            faqBox1: true,
            faqBox2: false,
            faqBox3: false,
            faqBox4: false,
            faqBox5: false,
        }
    }
}
</script>

<style scoped>

</style>
