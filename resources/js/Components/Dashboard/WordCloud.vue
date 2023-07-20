<template>
    <div class="w-full grid grid-cols-1 gap-4 mt-4">
        <div class="rounded-[12px] border border-gray-300">
            <div class="flex justify-between items-center px-4 h-12 border-gray-300 border-b">
                <div class="text-small font-semibold">Word Cloud</div>
                <div class="flex items-center">
                    <div class="text-vs font-medium">Ideas</div>
                    <button class="ml-2.5 px-2 py-1 border border-gray-300 rounded-md text-vs font-semibold">Posts</button>
                </div>
            </div>
            <!--                        <div class="w-full border-gray-300 border"></div>-->
            <div class="w-full flex items-center bg-white rounded-b-[12px]">
<!--<<<<<<< HEAD-->
<!--                <img class="mx-auto object-contain rounded-md h-[428px]" :src="asset('project-assets/images/remote.png')">-->
<!--=======-->
                <vue3-word-cloud
                    style="
                    height: 480px;
                    width: 640px;
                  "
                    :words="[['romance', 19], ['horror', 3], ['fantasy', 7], ['adventure', 3]]"
                    :color="([, weight]) => weight > 10 ? 'DeepPink' : weight > 5 ? 'RoyalBlue' : 'Indigo'"
                    font-family="Roboto"
                />
<!--                <img class="mx-auto object-contain rounded-md h-[428px]" src="/project-assets/images/remote.png">-->
<!--&gt;>>>>>> 252bf412963c75dc5ca9c8f9a7941b05b0361436-->
            </div>
        </div>
    </div>
</template>

<script>
import Vue3WordCloud from 'vue3-word-cloud';

export default {
    name: "WordCloud",
    components: {Vue3WordCloud}
}
</script>

<style scoped>

</style>
