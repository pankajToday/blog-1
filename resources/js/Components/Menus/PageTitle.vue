<template>
    <div class="w-full h-16 justify-between flex items-center border-b border-gray-300">
        <div class="">
            <div class="md:text-2xl text-lg font-semibold text-gray-900">{{ title }}</div>
            <div class="text-xs font-normal text-gray-600 md:mt-0.5">{{ brief }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PageTitle",
    props:['title', 'brief']
}
</script>

<style scoped>

</style>
