<template>
    <layout>
        <div class="w-full family-inter">
            <div class="w-full h-20 justify-between flex items-center border-b border-gray-300">
                <div class="">
                    <div class="text-2xl font-semibold text-gray-900">{{ page_data.title }}</div>
                    <div class="text-sm font-normal text-gray-600 mt-0.5">Added: {{ page_data.created_at }}</div>
                </div>
                <div class="flex items-center">
<!--                    <button class="px-4 py-2 rounded-lg h-10 border-2 border-gray-300 flex items-center focus:outline-none ml-2">-->
<!--                        <div class="text-vs text-gray-500 font-medium mr-2">Select Platforms</div>-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-500">-->
<!--                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />-->
<!--                        </svg>-->
<!--                    </button>-->
                    <button @click.prevent="openScheduledModel = true" class="px-4 py-2 rounded-lg h-10 bg-[#4E5BA6] border-2 border-[#4E5BA6] flex items-center focus:outline-none ml-4">
                        <div class="text-vs text-white font-medium">Preview & Schedule</div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-white ml-2 rotate-45">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                        </svg>
                    </button>

                </div>
            </div>
<!--            <div class="py-5 w-full flex items-center justify-between">-->
<!--                <div class="text-base font-semibold text-gray-900">Preview</div>-->
<!--                <div class="flex items-center">-->
<!--                    <div class="w-10 h-10 flex items-center cursor-pointer">-->
<!--                        <img class="w-9 h-9 object-contain m-auto" src="/project-assets/images/twitter.png">-->
<!--                    </div>-->
<!--                    <div class="w-10 h-10 flex items-center cursor-pointer mx-2.5">-->
<!--                        <img class="w-9 h-9 object-contain m-auto" src="/project-assets/images/circle.png">-->
<!--                    </div>-->
<!--                    <div class="w-10 h-10 flex items-center cursor-pointer">-->
<!--                        <img class="w-9 h-9 object-contain m-auto" src="/project-assets/images/linkedin.png">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="w-full grid grid-cols-3 gap-4">
                <div class="col-span-2 ">

<!--                    <div class="text-3xl font-extrabold opacity-20 text-gray-700 ml-10">Write a headline....</div>-->

<!--                    <div class="flex items-center">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-gray-400 cursor-pointer">-->
<!--                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />-->
<!--                        </svg>-->
<!--                        <input class="text-base font-normal text-gray-500 ml-2.5" placeholder="What would you like to share?">-->
<!--                    </div>-->
<!--                    <p>{{page_data.content}}</p>-->

                    <textarea class="w-full mt-12 h-64" v-html="page_data.content"></textarea>

<!--                    <editor :config="config" :html="page_data.content"></editor>-->

                </div>
                <div class="w-full py-8 px-4">
                    <div class="rounded-xl px-3 py-1 bg-gray-200 grid grid-cols-3 gap-2">
                        <div class="hover:bg-white rounded-xl w-full py-0.5 flex items-center cursor-pointer" v-on:click="toggleTab(1)" :class="{'bg-white' :openTab ===1, 'bg-transparent' :openTab !==1}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-700 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>
                        </div>
                        <div class="hover:bg-white rounded-xl w-full py-0.5 flex items-center cursor-pointer" v-on:click="toggleTab(2)" :class="{'bg-white' :openTab ===2, 'bg-transparent' :openTab !==2}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 text-gray-700 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                            </svg>
                        </div>
                        <div class="hover:bg-white rounded-xl w-full py-0.5 flex items-center cursor-pointer" v-on:click="toggleTab(3)" :class="{'bg-white' :openTab ===3, 'bg-transparent' :openTab !==3}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-700 mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                            </svg>

                        </div>
                    </div>
                    <div v-if="openTab === 1" class="w-full mt-6">
                        <div class="flex items-center">
                            <div class="w-8 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                    <path stroke="#475467" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14 17 3-3-3-3m-4-4-3 3 3 3m12-1c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10Z"/>
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-gray-600 tracking-wide ml-3">Last synced @ 30, Aug 2023 12:30 PM</div>

                        </div>
                        <div class="flex items-center my-5">
                            <div class="w-8 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                    <path stroke="#475467" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.546 9.925c.373-.664.685-1.263.878-1.72.933-2.216.01-4.764-2.247-5.804-2.257-1.04-4.524.038-5.518 2.12-1.902-1.305-4.44-1.114-5.84.923-1.398 2.037-.96 4.698.957 6.15.87.659 2.59 1.63 4.21 2.494m8.311-2.338c-.422-2.268-2.352-3.927-4.781-3.476-2.43.451-4.001 2.643-3.673 5.025.264 1.914 1.72 6.404 2.283 8.095.077.23.116.346.192.427.066.07.154.12.248.143.107.025.226 0 .465-.048 1.745-.358 6.362-1.342 8.152-2.07 2.227-.907 3.376-3.362 2.515-5.693-.86-2.331-3.226-3.171-5.4-2.403Z"/>
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-gray-600 tracking-wide ml-3">Liked Highlights (2)</div>

                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="#475467" class="w-5 h-5 rotate-45">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-gray-600 tracking-wide ml-3">Move Highlights to Post</div>
                        </div>
                        <div class="flex items-center my-5">
                            <div class="w-8 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="#475467" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-gray-600 tracking-wide ml-3">Summarise it for me</div>

                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="#475467" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-gray-600 tracking-wide ml-3">Re-sync now</div>

                        </div>
                        <div class="flex items-center my-5">
                            <div class="w-8 h-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="#475467" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-gray-600 tracking-wide ml-3">In Trash (1)</div>

                        </div>
                    </div>
                    <div v-if="openTab === 2" class="w-full mt-6">
                        <div v-for="ele in highlights" class="w-full bg-gray-200 p-4 rounded-[16px] my-2">
                            <div class="w-full flex items-center">
                                <div class="w-9 h-9 flex items-center rounded-md">
                                    <img class="w-8 h-8 m-auto object-contain rounded-md" src="/project-assets/images/tOne.png">
                                </div>
                                <div class="ml-2">
                                    <div class="text-vs font-medium text-gray-900">{{ ele.idea.title }}</div>
                                    <div class="text-xs font-normal text-gray-600">@ {{ ele.idea.author }}</div>
                                </div>
                            </div>
                            <div>
                                <div class="text-vs font-normal text-gray-600 tracking-wide mt-5">{{ ele.desc }}</div>
                                <div class="w-full flex justify-between items-center mt-4">
                                    <div class="flex items-center">
                                        <div class="px-2 py-1 rounded bg-gray-100 text-gray-700 text-xs font-medium border-2 border-gray-300 flex items-center">{{ ele.tags }}
                                            <span class="ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-500 cursor-pointer">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-4 h-4 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-700">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 h-4 cursor-pointer mx-2.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-700">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 h-4 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-700">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="openTab === 3" class="w-full mt-6">
                        <div class="w-full bg-gray-200 p-4 rounded-[16px]">
                            <div class="w-full flex items-center">
                                <div class="w-9 h-9 flex items-center rounded-md">
                                    <img class="w-8 h-8 m-auto object-contain rounded-md" src="/project-assets/images/tOne.png">
                                </div>
                                <div class="ml-2">
                                    <div class="text-vs font-medium text-gray-900">First-Time Digital Writer</div>
                                    <div class="text-xs font-normal text-gray-600">@ Nitseditor</div>
                                </div>
                            </div>
                            <div class="text-vs font-normal text-gray-600 tracking-wide my-6">The essential pack for first-time Digital Writers.</div>
                            <div class="w-full flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="px-2 py-1 rounded bg-gray-100 text-gray-700 text-xs font-medium border-2 border-gray-300 flex items-center">Tweet</div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-4 h-4 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 h-4 cursor-pointer mx-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 h-4 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 p-4 rounded-[16px] mt-4">
                            <div class="w-full flex items-center">
                                <div class="w-9 h-9 flex items-center rounded-md">
                                    <img class="w-8 h-8 m-auto object-contain rounded-md" src="/project-assets/images/tTwo.png">
                                </div>
                                <div class="ml-2">
                                    <div class="text-vs font-medium text-gray-900">Audience Building Machine</div>
                                    <div class="text-xs font-normal text-gray-600">@ Nitseditor</div>
                                </div>
                            </div>
                            <div class="text-vs font-normal text-gray-600 tracking-wide my-6">Grow your audience at warp speed. Mouthwatering openers for your content.</div>
                            <div class="w-full flex justify-between items-center">
                                <div class="flex items-center">
                                    <div class="px-2 py-1 rounded bg-gray-100 text-gray-700 text-xs font-medium border-2 border-gray-300 flex items-center">Linkedin</div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-4 h-4 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 h-4 cursor-pointer mx-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 h-4 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div v-if="openScheduledModel" class="w-full h-screen bg-gray-800 bg-opacity-25 fixed inset-0">
                <div class="h-full w-full flex items-center">
                    <div class="w-[560px] rounded-md bg-white shadow m-auto">
                        <div class="h-14 flex w-full px-4 items-center justify-between border-b border-gray-200">
                            <h1 class="text-2xl font-medium text-gray-800"></h1>
                            <div @click.prevent="openScheduledModel = false" class="rounded-md h-5 w-5 flex items-center bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 m-auto text-gray-700">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-full p-4 h-96 overflow-y-auto">
                            <div class="w-full mt-5">
                                <Multiselect class="h-full"
                                             v-model="platform"
                                             :options="optionPlatform"
                                             :searchable="true"
                                             placeholder="Select Platform"
                                             :closeOnSelect="true"
                                />
                            </div>
                            <div class="w-full mt-5">
                                <h2 class="text-small font-medium text-gray-700">Select Date and Time</h2>
<!--                                <datepicker-->
<!--                                    v-model="selected"-->
<!--                                    :locale="locale"-->
<!--                                    :upperLimit="to"-->
<!--                                    :lowerLimit="from"-->
<!--                                    :clearable="true"-->
<!--                                />-->
                                <VueDatePicker v-model="date"></VueDatePicker>

                                <!--                                <p class="text-vs font-normal text-gray-600">Lorem ipsum dolor set amet d'costa....</p>-->
                            </div>

                            <div class="w-full flex items-center justify-center mt-5">
                                <button class="w-full px-4 h-9 rounded-lg bg-gray-100 border-2 border-[#9E77ED] focus:outline-none text-md text-primary font-semibold" @click.prevent="SaveScheduled()">Save</button>
                                <!--                                <button class="w-full px-4 h-9 rounded-lg bg-primary border-2 border-[#9E77ED] focus:outline-none text-md text-white font-semibold ml-4">Beta</button>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </layout>
</template>

<script>
import Layout from "../Components/Menus/Layout.vue";
import Editor from "../Components/Editor/Editor.vue";
import Swal from "sweetalert2";
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'

import Multiselect from '@vueform/multiselect';

export default {
    name: "PostEditor",
    components: {Editor, Layout, VueDatePicker, Multiselect},
    props:['page_data', 'highlights'],
    data(){
        return{
            config: {
                save: this.save
            },
            openTab: 1,
            openScheduledModel:false,
            date:'',
            platform: '',
            optionPlatform : [],
        }
    },
    methods:{
        fetchPlatform(){
            axios.get( '/api/platform').then(response => {
                if(response.status === 200) {
                    this.optionPlatform = response.data.data.map(a => ({
                        value: a.id,
                        label: a.name
                    }))
                }
            }).catch((error) => {
                this.errors = error.response.data.errors
            })
        },
        SaveScheduled(){
            const payload = {
                post_id:this.page_data.id,
                platform: this.platform,
                date: this.date
            }
            axios.post( "/api/post/scheduled", payload).then(response => {
                if(response.status === 200) {
                    window.open('/schedules', '_self');
                    this.openScheduledModel = false

                }
            })
        },
        toggleTab(tabNumber){
            this.openTab = tabNumber
        },
        save(content) {
            console.log(content)

            const payload = {content: content}
            axios.put( "/api/posts/"+this.page_data.id, payload).then(response => {
                if(response.status === 200) {

                }
            })
        },
    },
    created() {
        this.fetchPlatform();
        console.log(this.page_data)
    }
}
</script>

<style src="@vueform/multiselect/themes/default.css"></style>

<style scoped>
.text-vs{
    font-size: 13px;
}
</style>
