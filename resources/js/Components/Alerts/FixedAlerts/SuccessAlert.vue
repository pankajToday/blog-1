<template>
    <div class="w-full p-4 rounded-xl border border-green-300 mt-3">
        <div class="w-full flex justify-between">
            <div class="flex">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-600 m-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="text-vs font-semibold text-green-800">Successfully updated profile</div>
                    <div class="text-vs font-normal text-green-600 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.</div>

                    <div class="flex items-center mt-4">
                        <div class="text-vs font-semibold text-green-600">Learn more</div>
                        <div class="flex items-center cursor-pointer ml-10 text-green-600">
                            <div class="text-vs font-semibold ">View changes</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-4 ml-1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 cursor-pointer text-green-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
</template>

<script>
export default {
    name: "SuccessAlert"
}
</script>

<style scoped>

</style>
