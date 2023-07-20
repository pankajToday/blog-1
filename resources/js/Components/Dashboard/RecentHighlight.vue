<template>
    <div class="w-full grid grid-cols-1 gap-4 mt-4">
        <div class="rounded-[12px] border border-gray-300">
            <div class="flex justify-between items-center border-gray-300 border-b px-4 h-12">
                <div class="text-small font-semibold">Your recent highlights</div>
                <div class="flex items-center">
                    <div class="text-xs font-medium">Ideas</div>
                </div>
            </div>
            <div class="w-full flex items-center justify-between p-4">
                <div class="w-full flex items-center">
                    <div class="">
                        <img class="m-auto w-9 h-9 object-contain rounded-full" :src="asset('project-assets/images/nitish.png')">
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-semibold text-gray-700">Nitish Kumar</div>
                        <div class="text-vvs font-medium text-gray-500">Medium</div>
                    </div>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-gray-700 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-gray-700 ml-4 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </div>
            </div>
            <div class="w-full p-4 flex items-center">
                <div class="">
                    <div class="w-10 h-10 rounded-full flex items-center border border-gray-300 cursor-pointer hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-w-5 h-5 text-gray-500 m-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </div>
                </div>
                <div class="px-8">
                    <div class="text-small font-normal text-gray-600 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers? How do you create compelling presentations that wow your colleagues and impress your managers? How do you create compelling presentations that wow your colleagues and impress your managers? How do you create compelling presentations that wow your colleagues and impress your managers? How do you create compelling presentations that wow your colleagues and impress your managers?</div>
                </div>
                <div class="">
                    <div class="w-10 h-10 rounded-full flex items-center border border-gray-300 cursor-pointer hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-500 rotate-180 m-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-full flex items-center p-4">
                <div class="rounded py-1 px-2 border border-gray-300 flex items-center">
                    <div class="w-[5px] h-[5px] bg-green-700 rounded-full"></div>
                    <div class="text-xs font-medium text-gray-700 mx-2">MVP Development</div>
                    <div class="ml-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3.5 h-3.5 text-gray-600 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>
                <div class="rounded py-1 px-2 border border-gray-300 flex items-center ml-4">
                    <div class="w-[5px] h-[5px] bg-green-700 rounded-full"></div>
                    <div class="text-xs font-medium text-gray-700 mx-2">Idea Validation</div>
                    <div class="ml-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3.5 h-3.5 text-gray-600 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RecentHighlight"
}
</script>

<style scoped>

</style>
