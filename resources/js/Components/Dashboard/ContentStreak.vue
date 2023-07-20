<template>
    <div class="w-full ">
        <div class="rounded-[12px] border border-gray-300 px-4 py-2">
            <div class="flex justify-between items-center h-12 border-b border-gray-300">
                <div class="text-small font-semibold">Your content streaks</div>
                <div class="flex items-center">
                    <button class="ml-2.5 px-2 py-1.5 border-2 border-gray-300 rounded-md text-vvs font-medium">Detailed reports</button>
                </div>
            </div>
            <div class="w-full bg-white mt-4">
                <img class="object-contain w-full" :src="asset('project-assets/images/dots.png')">
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "ContentStreak"
}
</script>

<style scoped>

</style>
