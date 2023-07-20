<template>
    <div class="w-full p-4 rounded-xl border border-yellow-300 mt-3">
        <div class="w-full flex justify-between">
            <div class="flex">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-yellow-600 m-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="text-vs font-semibold text-yellow-800">Just to let you know this might be a problem</div>
                    <div class="text-vs font-normal text-yellow-600 mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.</div>

                    <div class="flex items-center mt-4">
                        <div class="text-vs font-semibold text-yellow-600">Learn more</div>
                        <div class="flex items-center cursor-pointer ml-10 text-yellow-600">
                            <div class="text-vs font-semibold ">View changes</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-4 ml-1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 cursor-pointer text-yellow-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
</template>

<script>
export default {
    name: "WarningAlert"
}
</script>

<style scoped>

</style>
