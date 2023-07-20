<template>
    <div class="grid grid-cols-4 gap-8 p-8">
        <div>
            <div class="relative mb-5">
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5">Team member</h2>
                <div class="relative">
                    <input @click="openDropdown()" class="w-full py-2.5 pl-3.5 pr-10 font-normal text-base text-ruby-500 rounded-lg border border-[#D0D5DD] cursor-pointer" readonly style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);" :value="selected_value">
                    <span :class="{'rotate-180': active, 'rotate-0' : !active }" class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
                </div>
                <div v-if="active" id="dropdown" class="absolute top-[75px] z-10 bg-white left-0 w-full rounded-lg overflow-hidden pr-1 py-1 border border-ruby-200 shadow">
                    <div class="overflow-y-auto h-64">
                        <div v-for="(item, index) in options" :key="index" @click="selectOption(item)" class="w-full py-2 px-6 text-sm font-normal text-ruby-900 hover:bg-ruby-100 cursor-pointer">{{item.name}}</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5">Team member</h2>
                <div class="relative">
                    <input @click="openDropdown2()" class="w-full py-2.5 pl-3.5 pr-10 font-normal text-base text-ruby-500 rounded-lg border border-[#D0D5DD] cursor-pointer" readonly style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);" :value="selected_value2">
                    <span :class="{'rotate-180': active2, 'rotate-0' : !active2 }" class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
                </div>
                <div v-if="active2" id="dropdown" class="absolute top-[75px] z-10 bg-white left-0 w-full rounded-lg overflow-hidden pr-1 py-1 border border-ruby-200 shadow">
                    <div class="overflow-y-auto h-64">
                        <div v-for="(item, index) in options2" :key="index" @click="selectOption2(item)" class="w-full py-2 px-6 text-sm font-normal text-ruby-900 hover:bg-ruby-100 cursor-pointer">{{item.name}}</div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left focus:ring-2 focus:ring-ruby-200">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-4">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative focus:ring-2 focus:ring-ruby-200 text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900">Olivia Rhye</span> @olivia</p>
                </button>
                <div class="bg-white w-full rounded-lg px-2 py-1 border border-ruby-200 shadow mt-1">
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900">Olivia Rhye</span> @olivia</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900">Lana Steiner</span> @lana</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900">Demi Wilkinson</span> @demi</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900">Candice Wu</span> @candice</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900">Natali Craig</span> @natali</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1 pl-6"><span class="font-medium text-base text-ruby-900"></span>Select team member</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left focus:ring-2 focus:ring-ruby-200">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left focus:ring-2 focus:ring-ruby-200">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <div class="bg-white w-full rounded-lg px-2 py-1 border border-ruby-200 shadow mt-1">
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/profile-icon.png);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-4">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-2.5 left-2.5 bg-contain bg-no-repeat inline-block w-6.5 h-6.5" style="background-image: url(project-assets/images/website/women.png);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-8">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-6">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative focus:ring-2 focus:ring-ruby-200 text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-2.5 left-2.5 bg-contain bg-no-repeat inline-block w-6.5 h-6.5" style="background-image: url(project-assets/images/website/women.png);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-8">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-4">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative focus:ring-2 focus:ring-ruby-200 text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-2.5 left-2.5 bg-contain bg-no-repeat inline-block w-6.5 h-6.5" style="background-image: url(project-assets/images/website/women.png);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-8">Olivia Rhye</span> @olivia</p>
                </button>
                <div class="bg-white w-full rounded-lg px-2 py-1 border border-ruby-200 shadow mt-1">
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/women.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/man.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/women3.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/man2.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/women4.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/man3.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-4">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-4">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-4">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-6">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left focus:ring-2 focus:ring-ruby-200">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-4">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-4">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative focus:ring-2 focus:ring-ruby-200 text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-4">Olivia Rhye</span> @olivia</p>
                </button>
                <div class="bg-white w-full rounded-lg px-2 py-1 border border-ruby-200 shadow mt-1">
                    <div class="flex items-center mt-2.5">
                        <span class="top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="top-4.5 left-2.5 bg-[#12B76A] rounded inline-block w-2 h-2"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1 pl-6"><span class="font-medium text-base text-ruby-900"></span>Search</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left focus:ring-2 focus:ring-ruby-200">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left focus:ring-2 focus:ring-ruby-200">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <div class="bg-white w-full rounded-lg px-2 py-1 border border-ruby-200 shadow mt-1">
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="bg-contain bg-no-repeat w-3.5 h-3.5 inline-block" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1 pl-6"><span class="font-medium text-base text-ruby-900"></span>Search</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left focus:ring-2 focus:ring-ruby-200">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <p class="text-sm leading-5 font-normal text-ruby-600 mt-2">This is a hint text to help user.</p>
            </div>
            <div>
                <h2 class="text-sm text-ruby-700 leading-5 font-medium mb-1.5 mt-5">Team member</h2>
                <button class="py-1.5 pl-3 w-full rounded-lg border border-[#D0D5DD] cursor-pointers relative text-left focus:ring-2 focus:ring-ruby-200">
                    <span class="material-symbols-outlined absolute top-3 right-2.5 text-ruby-500 transform duration-300">expand_more</span>
                    <span class="absolute top-3.5 left-2.5 bg-contain bg-no-repeat inline-block w-3.5 h-3.5" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span>
                    <p class="font-normal text-base text-ruby-500 py-1"><span class="font-medium text-base text-ruby-900 pl-6">Olivia Rhye</span> @olivia</p>
                </button>
                <div class="bg-white w-full rounded-lg px-2 py-1 border border-ruby-200 shadow mt-1">
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/women.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/man.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/women3.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/man2.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/women4.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                    <div class="flex items-center mt-2.5">
                        <span class="bg-contain bg-no-repeat w-6.5 h-6.5 inline-block" style="background-image: url(project-assets/images/website/man3.png);"></span>
                        <p class="font-normal text-base text-ruby-500"><span class="font-medium text-base text-ruby-900 pl-3">Phoenix Baker</span> @phoenix</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "404-Page",
    data(){
        return{
            active: false,
            selected_value: 'Select your option',
            options:[
                {name:'@olivia'},
                {name:'Hello Bro'},
                {name:'Hello Friends'},
                {name:'Hello Father'},
                {name:'Hello Mother'},
                {name:'Hello brother'},
                {name:'Hello brother'},
                {name:'Hello brother'},
                {name:'Hello brother'}
            ],
            active2: false,
            selected_value2: 'Select your option',
            options2:[
                {name:'@olivia'},
                {name:'Hello Bro'},
                {name:'Hello Friends'},
                {name:'Hello Father'},
                {name:'Hello Mother'},
                {name:'Hello brother'},
                {name:'Hello brother'},
                {name:'Hello brother'},
                {name:'Hello brother'}
            ]
        }
    },
    methods:{
        openDropdown(){
            this.active = true;
        },
        selectOption(item){
            this.selected_value = item.name; 
            this.active =false;
        },
        openDropdown2(){
            this.active2 = true;
        },
        selectOption2(item){
            this.selected_value2 = item.name; 
            this.active2 =false;
        }
    }
}
</script>

<style scoped>

</style>