<template>
    <layout>
        <div class="w-full h-16 justify-between flex items-center border-b border-gray-300">
            <div class="">
                <div class="md:text-2xl text-lg font-semibold text-gray-900">Frequesntly Asked Questions</div>
                <div class="text-vs font-normal text-gray-600 md:mt-0.5">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
            </div>

        </div>
        <div class="flex justify-between mt-6">
            <div class="relative w-1/2">
                <input class="py-2 px-3 font-normal text-base text-ruby-500 w-full border shadow-light border-ruby-300 rounded-lg" type="text" placeholder="search..">
                <span class="absolute w-4 h-4 top-3 right-4 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/search-icon.svg)"></span>
            </div>
            <button class="bg-[#4E5BA6] py-2.5 px-5 justify-center border border-[#D0D5DD] flex items-center gap-3 rounded-lg shadow-light">
                <span class="text-white text-sm leadin-5 font-semibold">Got Questions Reach Us Out</span>
<!--                <span class="w-6 h-6 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/circle-arrow.svg)"></span>-->
            </button>
        </div>
        <div class="bg-white mt-4 rounded-lg p-16">

            <div class="flex justify-between gap-18">
                <div class="w-2/4">
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <h4 class="text-xl font-semibold mb-6">Buying Product</h4>
                        <div class="flex items-center mb-4">
                            <div @click.prevent="openFaq1 = ! openFaq1" class="w-8 h-6 flex items-center cursor-pointer">
                                <svg :class="{'block' :openFaq1 , 'hidden' : !openFaq1}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <svg :class="{'hidden' :openFaq1 , 'block' : !openFaq1}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-3">How does it work?</h5>
                        </div>
                        <p v-if="openFaq1" class="ml-10 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <div class="flex items-center mb-4">
                            <div @click.prevent="openFaq2 = ! openFaq2" class="w-8 h-6 flex items-center cursor-pointer">
                                <svg :class="{'block' :openFaq2 , 'hidden' : !openFaq2}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <svg :class="{'hidden' :openFaq2 , 'block' : !openFaq2}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-3">Do I need a designer to use Admin Theme ?</h5>
                        </div>
                        <p v-if="openFaq2" class="ml-10 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <div class="flex items-center mb-4">
                            <div @click.prevent="openFaq2 = ! openFaq2" class="w-8 h-6 flex items-center cursor-pointer">
                                <svg :class="{'block' :openFaq2 , 'hidden' : !openFaq2}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <svg :class="{'hidden' :openFaq2 , 'block' : !openFaq2}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-3">What do I need to do to start selling?</h5>
                        </div>
                        <p v-if="openFaq2" class="ml-10 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="pb-3">
                        <div class="flex items-center mb-4">
                            <div @click.prevent="openFaq2 = ! openFaq2" class="w-8 h-6 flex items-center cursor-pointer">
                                <svg :class="{'block' :openFaq2 , 'hidden' : !openFaq2}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <svg :class="{'hidden' :openFaq2 , 'block' : !openFaq2}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-3">How much does Extended license cost?</h5>
                        </div>
                        <p v-if="openFaq2" class="ml-10 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>

                </div>
                <div class="w-2/4">
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <h4 class="text-xl font-semibold mb-6">Installation</h4>
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">What platforms are compatible?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">How many people can it support?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">How long is the warrianty?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="pb-3">
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">How fast is the installation?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-between gap-18 mt-8">
                <div class="w-2/4">
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <h4 class="text-xl font-semibold mb-6">User Roles</h4>
                        <div class="flex items-center mb-4">
                            <div @click.prevent="openFaq1 = ! openFaq1" class="w-8 h-6 flex items-center cursor-pointer">
                                <svg :class="{'block' :openFaq1 , 'hidden' : !openFaq1}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <svg :class="{'hidden' :openFaq1 , 'block' : !openFaq1}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">How does it work?</h5>
                        </div>
                        <p v-if="openFaq1" class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">Do I need a designer to use Admin Theme ?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">What do I need to do to start selling?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="pb-3">
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">How much does Extended license cost?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                </div>
                <div class="w-2/4">
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <h4 class="text-xl font-semibold mb-6">Reports Generation</h4>
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">What platforms are compatible?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">How many people can it support?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="border-b border-dashed border-[#D0D5DD] mb-3 pb-3">
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">How long is the warrianty?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                    <div class="pb-3">
                        <div class="flex items-center mb-4">
                            <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/open-icon.svg)"></span>
                            <h5 class="font-semibold text-lg text-ruby-700 ml-4">How fast is the installation?</h5>
                        </div>
                        <p class="ml-9 text-sm font-medium text-ruby-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from "@/Components/Menus/AppLayout.vue";

export default {
    name: "NewDashboard",
    components: {Layout},
    data(){
        return{
            openFaq1: true,
            openFaq2: false,
        }
    }
}
</script>
