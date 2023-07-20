<template>
    <div class="w-[30%] p-4 rounded-xl border border-gray-300 mt-3">
        <div class="flex justify-between items-center">
            <div class="w-7 h-7 flex items-center border-gray-300 border rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-600 m-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                </svg>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 cursor-pointer text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="w-full mt-4">
            <div class="text-vs font-semibold text-gray-800">We’ve just released a new feature</div>
            <div class="text-vs font-normal text-gray-600 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.</div>

            <div class="flex items-center mt-4">
                <div class="text-vs font-semibold text-gray-600">Learn more</div>
                <div class="flex items-center cursor-pointer ml-10 text-indigo-600">
                    <div class="text-vs font-semibold ">View changes</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-4 ml-1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AlertTertiary"
}
</script>

<style scoped>

</style>
