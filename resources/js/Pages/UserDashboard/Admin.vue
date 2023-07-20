<template>
    <layout>
        <div class="w-full family-inter overflow-x-hidden">

            <page-title :title="'Welcome back, '+ name" :brief="'Measure your content ROI and track and report website traffic.'"></page-title>

            <div class="w-full py-4 justify-between flex items-center border-b">
                <div class="flex items-center">
                    <button class="px-3 py-1.5 rounded-l-md text-xs bg-gray-50 font-medium text-gray-600 border-l-2 border-t-2 border-b-2 border-gray-300">90 days</button>
                    <button class="px-3 py-1.5 text-xs font-medium text-gray-600  border-2 border-gray-300 hover:bg-gray-100">30 days</button>
                    <button class="px-3 py-1.5 text-xs font-medium text-gray-600 border-y-2  border-r-2 border-gray-300 hover:bg-gray-100">7 days</button>
                    <button class="px-3 py-1.5 rounded-r-md text-xs font-medium text-gray-600 border-r-2 border-t-2 border-b-2 border-gray-300 hover:bg-gray-100">Today</button>
                </div>

                <div class="flex items-center">

                    <div>
                        <Datepicker v-model="date" :format="dateFormat" autoApply placeholder="Select date"></Datepicker>
                    </div>

                    <Link href="/templates" class="px-3 h-9 rounded-lg bg-primary border-2 border-[#9E77ED] flex items-center focus:outline-none ml-2">
                        <div class="text-vs text-white font-medium">Start a post</div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-white ml-2 rotate-45">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                        </svg>
                    </Link>
                </div>
            </div>
            <div class="w-full grid grid-cols-12 gap-4">
                <div v-for="(widget, index) in widgets" :class="widget.class">
                    <component :is="widget.component" :key="index"></component>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from "../../Components/Menus/Layout.vue";
import Statistics from "../../Components/Dashboard/Statistics.vue";
import Slider from "../../Components/Dashboard/Slider.vue";
import RecentHighlight from "../../Components/Dashboard/RecentHighlight.vue";
import WordCloud from "../../Components/Dashboard/WordCloud.vue";
import LatestPostPerformance from "../../Components/Dashboard/LatestPostPerformance.vue";
import ContentStreak from "../../Components/Dashboard/ContentStreak.vue";
import PageTitle from "../../Components/Menus/PageTitle.vue";
import Datepicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
import { Link } from '@inertiajs/vue3';

export default {
    name: "Dashboard",
    components: {Link, Datepicker, PageTitle, ContentStreak, LatestPostPerformance, RecentHighlight, Slider, Statistics, Layout, WordCloud},
    data(){
        return{
            date: null,
            widgets:[
                {component:'Statistics', class:'col-span-12'},
                {component:'Slider', class:'col-span-12'},
                {component:'WordCloud', class:'col-span-6'},
                {component:'RecentHighlight', class:'col-span-6'},
                {component:'LatestPostPerformance', class:'col-span-12'},
                {component:'ContentStreak', class:'col-span-12'},
            ],
            dateFormat: (date) => {
                const day = date.getDate();
                const month = date.getMonth() + 1;
                const year = date.getFullYear();

                return `${day}-${month}-${year}`;
            },
        }
    },
    computed:{
        name(){
            return this.$page.props.auth.user.first_name + ' ' +  this.$page.props.auth.user.last_name;
        }
    },

}
</script>

<style scoped>

</style>
