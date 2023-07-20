<template>
    <div class="w-full text-center">
        <div v-if="!loading">
            <table v-if="tableData.data && tableData.data.length" class="w-full">
                <thead class="bg-gray-100 w-full">
                <tr class="w-full border-b border-gray-300 bg-gray-100">
                    <template v-for="header in tableColumns" :key='header.key'>
                        <th class="p-2.5 text-xs font-medium text-gray-600 text-center" :class="header.style">
                            <div v-if="header.key === 'index'">
<!--                                <index></index>-->
                                <input v-model="checkAll" type="checkbox" class="rounded w-4 h-4 border border-gray-300  focus:outline-none">
                            </div>
                            <div v-else-if="header.key === 'action'">
                                <div class="flex justify-center">
                                    <div class="family-poppins text-gray-500 text-sm font-medium  cursor-pointer flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div v-else class="flex">
                                <div class="p-2.5 text-xs font-medium text-gray-600 text-center flex justify-center w-full">
                                    <span class="my-auto">{{ header.title }}</span>
                                    <span ><svg class="h-3.5 w-3.5 mt-0.5 ml-0.5 cursor-pointer " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 1L5 8h10l-5-7zm0 18l5-7H5l5 7z"/></svg></span>
                                </div>
                            </div>
                        </th>
                    </template>
                </tr>
                </thead>
                <tbody class="w-full">
                <tr class="border-b border-gray-300 bg-white w-full" v-for="(item, index) in tableData.data">
                    <template v-for="header in tableColumns">
                        <td>
                            <div class="w-full family-poppins text-sm px-4 py-2 text-gray-800 font-normal text-center">
                                <slot :name="header.key" :field="header.key" :item="item" :index="index"></slot>
                            </div>
                        </td>
                    </template>
                </tr>
                </tbody>
            </table>
            <pagination v-if="tableData && tableData.data && tableData.data.length" :meta="tableData.meta" :links="tableData.links" :location="location"></pagination>
        </div>
        <nits-spinner v-else class="mx-auto item-center"></nits-spinner>
    </div>
</template>

<script>
import NitsSpinner from "./NitsSpinner.vue";
import {eventBus} from "../../../models/events.js";
import Pagination from "./Pagination.vue";
import Index from "./Columns/Index.vue";

export default {
    name: "TableView",
    components: {Index, Pagination, NitsSpinner},
    props: ['tableColumns', 'tableData', 'loading', 'location'],
    data(){
        return{
            selected: [],
        }
    },
    computed: {
        checkAll: {
            get: function () {
                return this.tableData.data ? this.selected.length === this.tableData.data.length : false;
            },
            set: function (value) {
                var selected = [];

                if (value) {
                    this.tableData.data.forEach(function (user) {
                        selected.push(user.id);
                    });
                }
                this.selected = selected;
                eventBus.$emit(this.location +'_select_all', selected);
            }
        }
    }
}
</script>

<style scoped>

</style>
