<template>
    <div class="w-full mt-4 lg:grid lg:grid-cols-3 lg:gap-4">
        <div class="col-span-2 md:grid md:grid-cols-2 md:gap-4">
            <div class="w-full h-[160px] border-2 bg-white shadow flex flex-col border-gray-300 rounded-[12px] p-4">
                <div class="w-full flex items-center justify-between">
                    <div class="text-small text-theme font-medium">Views</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-gray-500 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                    </svg>
                </div>
                <div class="w-full flex items-center mt-7">
                    <div class="w-[60%] flex flex-col">
                        <div class="text-xl font-semibold text-theme family-inter">20.8k</div>
                        <div class="mt-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                            </svg>
                            <div class="text-vs font-medium text-green-700 ml-1">12% <span class="text-[#475467] ml-1.5">vs last month</span></div>
                        </div>
                    </div>
                    <div class="w-[40%] flex items-center">
                        <img class="object-contain" :src="asset('project-assets/images/chart-1.png')">
                    </div>
                </div>
            </div>
            <div class="w-full h-[160px] border-2 bg-white shadow flex flex-col border-gray-300 rounded-[12px] p-4 mt-2.5 md:mt-0">
                <div class="w-full flex items-center justify-between">
                    <div class="text-small text-theme font-medium">Engagement Rate</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-gray-500 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                    </svg>
                </div>
                <div class="w-full flex items-center mt-7">
                    <div class="w-[60%] flex flex-col">
                        <div class="text-xl font-semibold text-theme">26.4%</div>
                        <div class="mt-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 rotate-180 text-red-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                            </svg>
                            <div class="text-vs font-medium text-red-700 ml-1">2% <span class="text-[#475467] ml-1.5">vs last month</span></div>
                        </div>
                    </div>
                    <div class="w-[40%] flex items-center">
                        <img class="object-contain" :src="asset('project-assets/images/chart-2.png')">
                    </div>
                </div>
            </div>
            <div class="w-full h-[160px] border-2 bg-white shadow flex flex-col border-gray-300 rounded-[12px] p-4 mt-2.5 md:mt-0">
                <div class="w-full flex items-center justify-between">
                    <div class="text-small text-theme font-medium">Ideas Collected</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-gray-500 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                    </svg>
                </div>
                <div class="w-full flex items-center mt-7">
                    <div class="w-[60%] flex flex-col">
                        <div class="text-xl font-semibold text-theme">3,000</div>
                        <div class="mt-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                            </svg>
                            <div class="text-vs font-medium text-green-700 ml-1">12% <span class="text-[#475467] ml-1.5">vs last month</span></div>
                        </div>
                    </div>
                    <div class="w-[40%] flex items-center">
                        <img class="object-contain" :src="asset('project-assets/images/chart-1.png')">
                    </div>
                </div>
            </div>
            <div class="w-full h-[160px] border-2 bg-white shadow flex flex-col border-gray-300 rounded-[12px] p-4 mt-2.5 md:mt-0">
                <div class="w-full flex items-center justify-between">
                    <div class="text-small text-theme font-medium">Published</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-gray-500 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                    </svg>
                </div>
                <div class="w-full flex items-center mt-7">
                    <div class="w-[60%] flex flex-col">
                        <div class="text-xl font-semibold text-theme">50</div>
                        <div class="mt-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 rotate-180 text-red-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                            </svg>
                            <div class="text-vs font-medium text-red-700 ml-1">2% <span class="text-[#475467] ml-1.5">vs last month</span></div>
                        </div>
                    </div>
                    <div class="w-[40%] flex items-center">
                        <img class="object-contain" :src="asset('project-assets/images/chart-2.png')">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full mt-4 lg:mt-0">
            <div class="w-full h-[340px] border-2 bg-white shadow flex flex-col border-gray-300 rounded-[12px]">
                <div class="w-full flex items-center p-3">
                    <div class="w-10 h-10 rounded-full bg-[#F9F5FF] flex items-center">
                        <div class="w-7 h-7 rounded-full flex items-center m-auto bg-[#FAE0FA]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 m-auto text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-small text-theme font-medium ml-3">Earned Media Value</div>
                </div>
                <div class="w-full flex items-center px-3">
                    <div class="w-[60%] flex flex-col">
                        <div class="text-xl font-semibold text-theme family-inter">$141</div>
                        <div class="text-vvs font-medium text-gray-600">21 Mar -> 27 Mar</div>
                        <div class="mt-4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                            </svg>
                            <div class="text-vs font-medium text-green-700 ml-1">10% <span class="text-[#475467] ml-1.5">vs last month</span></div>
                        </div>
                    </div>
                    <div class="w-[40%] flex items-center">
                        <img class="object-contain" :src="asset('project-assets/images/chart-1.png')">
                    </div>
                </div>
                <div class="w-full flex items-center justify-end p-3">
                    <div class="">
                        <div class="text-xl font-semibold text-gray-600 family-inter text-right">$10</div>
                        <div class="text-vvs font-medium text-gray-600">21 Mar -> 27 Mar</div>
                    </div>
                </div>
                <div class="w-full border-b border-gray-300"></div>
                <div class="w-full p-3">
                    <div class="w-full">
                        <div class="text-small text-gray-900 font-medium">Cost Per Mile</div>
                        <div class="text-vvs text-gray-600 font-medium">Drag the button on the slider to change the CPM</div>
                    </div>
                    <div class="w-full flex justify-between items-center mt-3">
                        <div class="w-[80%]">
                            <input type="range" class="mt-2 w-full">
                        </div>
                        <div class="ml-6">
                            <div class="text-xl font-semibold text-gray-900 family-inter">$10</div>
                            <div class="text-vvs font-medium text-gray-600">CPM</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Statistics"
}
</script>

<style scoped>

</style>
