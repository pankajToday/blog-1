<template>
    <div class="w-full">
        <side-bar></side-bar>
        <div class="w-full lg:pl-[280px] md:pl-[180px] bg-gray-50">
            <div class="px-8 py-4" style="">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>

import SideBar from "./SideBar.vue";
export default {
    name: "Layout",
    components: {SideBar}
}
</script>

<style scoped>

</style>
