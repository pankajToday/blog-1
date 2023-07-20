<template>
    <div class="w-full p-4 rounded-xl border border-red-300 mt-3">
        <div class="w-full flex justify-between">
            <div class="flex">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-red-600 m-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="text-vs font-semibold text-red-800">There was a problem with that action</div>
                    <div class="text-vs font-normal text-red-600 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.</div>

                    <div class="flex items-center mt-4">
                        <div class="text-vs font-semibold text-red-600">Learn more</div>
                        <div class="flex items-center cursor-pointer ml-10 text-red-600">
                            <div class="text-vs font-semibold ">View changes</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-4 ml-1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 cursor-pointer text-red-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
</template>

<script>
export default {
    name: "DangerAlert"
}
</script>

<style scoped>

</style>
