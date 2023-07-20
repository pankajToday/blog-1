<template>
    <div class="w-full">
        <web-header></web-header>
            <div class="md:flex items-center justify-between">
                <div class="container mt-16 md:mt-0 md:max-w-[585px] text-center md:text-left">
                    <div class="bg-white text-sm leading-18 font-semibold text-pearl-700 md:mb-2 mb-1">404 error</div>
                    <h1 class="lg:text-6xl md:text-4xl text-3xl font-semibold leading-[72px] text-ruby-900 md:mb-4 mb-2">Under maintenance</h1>
                    <p class="font-normal text-xl text-ruby-600 md:mb-8 mb-4 xl:pr-44">The page you’re looking for is currently under maintenance and will be back soon. Stay tuned!</p>
                    <div class="md:flex items-center gap-3">
                        <button class="py-2 w-full md:w-auto md:px-5 text-white text-sm font-semibold bg-pearl-600 rounded-lg md:order-last mb-3 md:mb-0">Sign ups</button>
                        <button class="bg-white py-2 w-full md:w-auto md:px-5 border border-[#D0D5DD] flex items-center justify-center gap-2 rounded-lg" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-ruby-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>
                            <span class="text-ruby-700 text-sm font-semibold">Demo</span>
                        </button>
                    </div>
                    <img class="md:hidden block w-full h-auto mt-16" src="project-assets/images/website/MacBook-Pro.png">
                </div>
                <div>
                    <img class="w-[650px] h-auto hidden md:block" src="project-assets/images/website/404-home.png" alt="desktop">
                </div>
            </div>
        <div class="w-full py-4 container">
            <div class="w-full md:my-16 my-8 border-gray-300 border-t"></div>
            <div class="w-full">
                <div class="w-full">
                    <p class="text-pearl-700 text-center text-base font-semibold mb-3">Latest blogs</p>
                    <h6 class="text-ruby-900 text-center font-semibold text-4xl mb-5">Untitled blog</h6>
                    <p class="text-ruby-600 text-center text-xl font-normal">Interviews, tips, guides, industry best practices, and news.</p>
                </div>
                <div class="flex flex-wrap justify-between pt-16">
                    <div class="xl:w-[384px] lg:w-[30%] sm:w-[48%] w-full mt-12 md:mt-0">
                        <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-banner-main.jpg" alt="blog">
                        <div>
                            <p class="text-sm font-semibold text-pearl-700 mb-4">Design</p>
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold text-2xl text-ruby-900">UX review presentations</h3>
                                <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                            </div>
                            <p class="text-base font-normal leading-6 text-ruby-600 mb-6">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
                            <div class="flex items-center">
                                <img class="w-10 h-10" src="project-assets/images/website/women.png" alt="women">
                                <div class="ml-3">
                                    <p class="font-semibold text-sm text-ruby-900">Olivia Rhye</p>
                                    <p class="font-normal text-sm text-ruby-600">20 Jan 2022</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-6">
                                <div class="px-2.5 py-[3px] bg-indigo-100 text-indigo-600 rounded-full text-vs font-semibold">Design</div>
                                <div class="px-2.5 py-[3px] bg-blue-100 text-blue-600 rounded-full text-vs font-semibold">Research</div>
                                <div class="px-2.5 py-[3px] bg-pink-100 text-pink-600 rounded-full text-vs font-semibold">Presentation</div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:w-[384px] lg:w-[30%] sm:w-[48%] w-full mt-12 md:mt-0">
                        <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-Migrating.jpg" alt="blog">
                        <div>
                            <p class="text-sm font-semibold text-pearl-700 mb-4">Product</p>
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold text-2xl text-ruby-900">Migrating to Linear 101</h3>
                                <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                            </div>
                            <p class="text-base font-normal leading-6 text-ruby-600 mb-6">Linear helps streamline software projects, sprints, tasks, and bug tracking. Here’s how to get started.</p>
                            <div class="flex items-center">
                                <img class="w-10 h-10" src="project-assets/images/website/man.png" alt="man">
                                <div class="ml-3">
                                    <p class="font-semibold text-sm text-ruby-900">Phoenix Baker</p>
                                    <p class="font-normal text-sm text-ruby-600">19 Jan 2022</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-6">
                                <div class="px-2.5 py-[3px] bg-teal-100 text-teal-600 rounded-full text-vs font-semibold">Product</div>
                                <div class="px-2.5 py-[3px] bg-pink-100 text-pink-600 rounded-full text-vs font-semibold">Tools</div>
                                <div class="px-2.5 py-[3px] bg-red-100 text-red-600 rounded-full text-vs font-semibold">SaaS</div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:w-[384px] lg:w-[30%] w-full mt-12 lg:mt-0">
                        <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-computer.jpg" alt="blog">
                        <div>
                            <p class="text-sm font-semibold text-pearl-700 mb-4">Software Engineering</p>
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold text-2xl text-ruby-900">Building your API Stack</h3>
                                <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                            </div>
                            <p class="text-base font-normal leading-6 text-ruby-600 mb-6">The rise of RESTful APIs has been met by a rise in tools for creating, testing, and managing them.</p>
                            <div class="flex items-center">
                                <img class="w-10 h-10" src="project-assets/images/website/women2.svg" alt="women">
                                <div class="ml-3">
                                    <p class="font-semibold text-sm text-ruby-900">Lana Steiner</p>
                                    <p class="font-normal text-sm text-ruby-600">18 Jan 2022</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-6">
                                <div class="px-2.5 py-[3px] bg-green-100 text-green-600 rounded-full text-vs font-semibold">Software Development</div>
                                <div class="px-2.5 py-[3px] bg-pink-100 text-pink-600 rounded-full text-vs font-semibold">Tools</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full mt-12 mb-24 flex justify-center items-center">
                    <button class="px-5 py-2.5 rounded-md text-small font-semibold text-white bg-purple-600 hover:bg-purple-800 focus:outline-none">View all posts</button>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="py-12 bg-pearl-900">
            <div class="container md:flex justify-between">
                <div>
                    <h5 class="text-xl md:leading-44 font-semibold text-white mb-5">Join our newsletter</h5>
                    <p class="text-lg md:text-base md:leading-30 font-normal text-pearl-200 sm:mb-8 md:mb-0">We’ll send you a nice letter once per week. No spam.</p>
                </div>
                <div class="md:flex items-start mt-8 sm:mt-10 lg:mt-0 max-w-[370px] md:max-w-full">
                    <div>
                        <input class="sm:w-[360px] w-full h-12 py-3 px-3.5 rounded-lg font-normal text-base border border-[#D0D5DD] mb-1.5 sm:mb-4 md:mb-1.5" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);" placeholder="Enter your email" type="email">
                    </div>
                    <button class="py-3 sm:px-5 w-full md:w-auto bg-[#7F56D9] rounded-lg text-white font-semibold mt-4 md:mt-0 md:ml-4">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="bg-pearl-800">
            <div class="container">
                <div class="py-16 flex flex-wrap lg:flex-nowrap justify-between gap-16">
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
                <div class="sm:flex justify-between border-pearl-600 border-t pt-8 pb-12">
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
    </footer>
</template>

<script>
import WebHeader from "@/Components/Website/Menus/WebHeader.vue";

export default {
    name: "404-Page",
    components: {WebHeader}
}
</script>

<style scoped>

</style>