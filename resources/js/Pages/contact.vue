<template>
    <div class="w-full">
        <web-header></web-header>
        <div class="w-full py-12">
            <div class="w-full">
                <div class="text-sm leading-18 font-bold text-pearl-700 md:mb-2 mb-1 text-center">Contact us</div>
                <h1 class="lg:text-4xl md:text-3xl text-4xl font-semibold leading-[72px] text-ruby-900 md:mb-6 mb-3 text-center">Get in touch</h1>
                <p class="font-normal md:text-base text-sm text-ruby-600 text-center">we'd love to hear from you. please fill out this from.</p>
            </div>
            <div class="md:max-w-2xl container md:mx-auto mt-12">
                <div class="w-full sm:px-24">
                    <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="w-full">
                            <h2 class="text-vs font-medium text-gray-700 mb-1">First Name</h2>
                            <input type="name" class="px-3 py-2 w-full border border-gray-300 rounded-md text-vs font-medium text-gray-700 focus:outline-none" placeholder=" First name">
                        </div>
                        <div class="w-full">
                            <h2 class="text-vs font-medium text-gray-700 mb-1">Last Name</h2>
                            <input type="name" class="px-3 py-2 w-full border border-gray-300 rounded-md text-vs font-medium text-gray-700 focus:outline-none" placeholder="Last name">
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <h2 class="text-vs font-medium text-gray-700 mb-1">Email</h2>
                        <input type="email" class="px-3 py-2 w-full border border-gray-300 rounded-md text-vs font-medium text-gray-700 focus:outline-none" placeholder="you@company.com">
                    </div>
                    <div class="w-full mt-4">
                        <h2 class="text-vs font-medium text-gray-700 mb-1">Phone number</h2>
                        <div class="flex items-center">
                            <select class="px-3 py-2 w-20 border border-gray-300 rounded-l-md text-vs font-medium text-gray-700 focus:outline-none">
                                <option class="contry">Ind</option>
                                <option class="contry">USco</option>
                                <option class="contry">pak</option>
                                <option class="contry">dub</option>
                            </select>
                            <input type="number" class="px-3 py-2 w-full border-r border-l-none border-gray-300 rounded-r-md text-vs font-medium text-gray-700 focus:outline-none" placeholder="012345789">
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <h2 class="text-vs font-medium text-gray-700 mb-1">Message</h2>
                        <textarea class="px-3 py-2 w-full border border-gray-300 rounded-md text-vs font-medium text-gray-700 focus:outline-none" type="text" placeholder=" live use a message..." ></textarea>
                    </div>
                    <div class="w-full mt-2 flex items-center">
                        <input type="checkbox" class="border border-gray-300 rounded-sm w-3.5 h-3.5" name="check" id="check-box">
                        <h2 class="text-xs font-medium text-gray-700 ml-2.5">You agree to our friendly <a class="hover:text-indigo-600 cursor-pointer underline" href="#">privacy policy</a></h2>
                    </div>
                    <button class="w-full py-2 px-5 text-white text-vs font-semibold bg-pearl-600 rounded-md mt-4">Send message</button>
                </div>
            </div>
            <div class="w-full bg-gray-100 pt-12 my-10">
                <div class="container">
                    <div class="w-full md:flex items-center md:px-12">
                        <div class="md:sw-[40%] w-full">
                            <h3 class="text-sm leading-18 font-bold text-pearl-700 mb-3 md:mb-1">Contact us</h3>
                            <h1 class="lg:text-3xl md:text-2xl md:text-lg text-3xl font-semibold md:leading-[64px] text-ruby-900 md:mb-3">Chat to our friendly team</h1>
                            <p class="font-normal md:text-base text-sm text-ruby-600">we'd love to hear from you! please get in Touch.</p>
                        </div>
                        <div class="md:ml-10 mt-16">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[18px] h-[18px] mt-[3px] text-purple-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <div class="ml-2.5">
                                    <h1 class="text-small font-semibold">Melbourne</h1>
                                    <p class="text-vs font-normal text-ruby-700">100 Flinders Street, Melbourne VIC 3000 AU</p>
                                </div>
                            </div>
                            <div class="flex md:mt-4 mt-16">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-[18px] h-[18px] mt-[3px] text-purple-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <div class="ml-2.5">
                                    <h1 class="text-small font-semibold">Sydney</h1>
                                    <p class="text-vs font-normal text-ruby-700">100 George Street, Sydney NSW 2000 AU</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="w-full mt-6">
                        <img src="/project-assets/images/contact.png" alt="sorry server down">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="py-12 px-6 bg-gray-100 rounded-lg">
                    <div class="text-sm leading-18 font-semibold text-pearl-700 md:mb-2 mb-1 text-center">Get started</div>
                    <h1 class="lg:text-3xl md:text-2xl text-3xl font-semibold leading-[72px] text-ruby-900 md:mb-6 mb-3 text-center">Start your 30-day free trial</h1>
                    <p class="font-normal md:text-base text-lg text-ruby-600 text-center">Join over 4,000+ startups already growing with Untitled.</p>
                    <div class="md:flex items-center justify-center gap-3 mt-6">
                        <button class="py-2 px-5 text-white text-sm md:w-auto w-full font-semibold bg-pearl-600 rounded-md md:order-last mb-4 md:mb-0">Get Started</button>
                        <button class="bg-white py-2 px-5 text-ruby-700 md:w-auto w-full text-sm font-semibold border border-[#D0D5DD] rounded-md" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-pearl-800">
        <div class="pt-16 pb-12 container">
            <div class="text-center">
                <h6 class="text-3xl font-semibold text-white mb-4">No long-term contracts. No catches. Simple.</h6>
                <p class="text-xl font-normal text-pearl-200">Start your 30-day free trial. Cancel anytime.</p>
                <div class="md:flex items-center justify-center mt-10 gap-3">
                    <button class="py-2 px-5 mt-3 md:mt-0 text-white md:w-auto w-full text-sm font-semibold bg-pearl-600 rounded-lg md:order-last mb-4 md:mb-0">Get started</button>
                    <button class="bg-white py-2 px-5 text-ruby-700 md:w-auto w-full text-sm font-semibold border border-[#D0D5DD] rounded-md justify-center flex items-center gap-3 shadow-light">
                        <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/play-icon.svg)"></span>
                        <span class="text-ruby-700 text-sm font-semibold">View Demo</span>
                    </button>
                </div>
            </div>
            <div class="sm:flex justify-between border-t border-pearl-600 pt-16 mb-16 mt-16">
                <div>
                    <div class="max-w-sm">
                        <a href="#" class="bg-no-repeat bg-contain w-36 h-9.5 inline-block mb-8" style="background-image: url(project-assets/images/website/logo/untitled-Logo.png);"></a>
                        <p class="font-normal text-base text-pearl-200 mb-8">Design amazing digital experiences that create more happy in the world.</p>
                    </div>
                    <div class="md:flex grid grid-cols-2 md:items-center gap-3 md:gap-8">
                        <a class="text-base text-pearl-200 font-semibold hover:text-white" href="#">Overview</a>
                        <a class="text-base text-pearl-200 font-semibold hover:text-white" href="#">Features</a>
                        <a class="text-base text-pearl-200 font-semibold hover:text-white" href="#">Pricing</a>
                        <a class="text-base text-pearl-200 font-semibold hover:text-white" href="#">Careers</a>
                        <a class="text-base text-pearl-200 font-semibold hover:text-white" href="#">Help</a>
                        <a class="text-base text-pearl-200 font-semibold hover:text-white" href="#">Privacy</a>
                    </div>
                </div>
                <div class="mt-16 sm:mt-0">
                    <p class="font-medium text-base text-white mb-4">Get the app</p>
                    <a class="mb-4 w-[135px] h-10 bg-no-repeat bg-contain block" style="background-image: url(project-assets/images/website/logo/g-play-logo.png)"></a>
                    <a class="w-[135px] h-10 bg-no-repeat bg-contain block" style="background-image: url(project-assets/images/website/logo/app-store-logo.png)"></a>
                </div>
            </div>
            <div class="sm:flex justify-between border-pearl-600 border-t pt-8">
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
    </footer>
</template>

<script>
import WebHeader from "@/Components/Website/Menus/WebHeader.vue";
import Dashboard from "@/Pages/Dashboard.vue";
import IdeasContent from "@/Pages/IdeasContent.vue";


export default {
    name: "contact",
    components: { IdeasContent, Dashboard, WebHeader},

}
</script>

<style scoped>

</style>
