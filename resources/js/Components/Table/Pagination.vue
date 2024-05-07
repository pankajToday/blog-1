<template>
    <div class="w-full flex justify-between items-center mt-4 py-2">
        <button @click.prevent="callPage(prevPage)" class="py-1.5 px-2 border rounded-lg border-[#D0D5DD] font-semibold text-xs flex items-center shadow text-gray-600">
            <span class="material-symbols-outlined md:mr-3 text-base rotate-180">arrow_forward</span>
            <span class="hidden md:block">Previous</span>
        </button>
        <ul class="flex">
            <li v-if="currentPage !== 1 && nextPage !== 1 && currentPage !== 2" class="mr-1">
                <a  @click.prevent="goToPage(1)" class="rounded py-2 px-3 h-8 mt-1 pt-1 text-sm font-medium inline-block bg-gray-700 text-white hover:bg-gray-700 hover:text-white focus:border-gray-500 transition ease-in-out duration-150" href="#">
                    1
                </a>
            </li>
            <li v-if="prevPage && prevPage>1" class="mr-1">
                <a class="rounded mt-1 py-1 px-2 inline-block text-gray-600 hover:bg-gray-700 hover:text-white bg-transparent" href="#">
                    <svg class="inline-block pb-1 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.001 7.8a2.2 2.2 0 100 4.402A2.2 2.2 0 0010 7.8zm-7 0a2.2 2.2 0 100 4.402A2.2 2.2 0 003 7.8zm14 0a2.2 2.2 0 100 4.402A2.2 2.2 0 0017 7.8z"/>
                    </svg>
                </a>
            </li>
            <li v-if="prevPage" class="mr-1">
                <a @click.prevent="goToPage(prevPage)" class="text-sm font-medium rounded py-2 px-3 h-8 mt-1 pt-1 inline-block text-gray-600 bg-transparent hover:bg-gray-700 hover:text-white focus:border-gray-500 transition ease-in-out duration-150" href="#">
                    {{ prevPage }}
                </a>
            </li>
<!--            <li class="mr-1">-->
<!--                <a class="rounded py-2 px-3 h-8 mt-1 pt-1 text-sm font-medium inline-block bg-gray-700 text-white hover:bg-gray-700 hover:text-white focus:border-gray-500 transition ease-in-out duration-150" href="#">-->
<!--                    {{ currentPage }}-->
<!--                </a>-->
<!--            </li>-->
            <li v-if="nextPage" class="mr-1">
                <a @click.prevent="goToPage(nextPage)" class="rounded text-sm font-medium py-2 px-3 h-8 mt-1 pt-1 inline-block text-gray-600 hover:bg-gray-700 hover:text-white focus:border-gray-500 transition ease-in-out duration-150" href="#">
                    {{ nextPage }}
                </a>
            </li>
            <li v-if="currentPage !== lastPage && nextPage !== lastPage" class="mr-1">
                <a class="rounded mt-1 py-1 px-2 inline-block text-gray-600 hover:bg-gray-700 hover:text-white bg-transparent" href="#">
                    <svg class="inline-block pb-1 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.001 7.8a2.2 2.2 0 100 4.402A2.2 2.2 0 0010 7.8zm-7 0a2.2 2.2 0 100 4.402A2.2 2.2 0 003 7.8zm14 0a2.2 2.2 0 100 4.402A2.2 2.2 0 0017 7.8z"/>
                    </svg>
                </a>
            </li>
            <li v-if="currentPage !== lastPage && nextPage !== lastPage" class="mr-1">
                <a @click.prevent="goToPage(lastPage)" class="rounded text-sm font-medium py-2 px-3 h-8 mt-1 pt-1 inline-block text-gray-600 bg-transparent hover:bg-gray-700 hover:text-white focus:border-gray-500 transition ease-in-out duration-150" href="#">
                    {{ lastPage }}
                </a>
            </li>
        </ul>
        <button @click.prevent="callPage(nextPage)" class="py-1.5 px-2 border rounded-lg border-[#D0D5DD] font-semibold text-xs flex items-center text-gray-600" >
            <span class="hidden md:block">Next</span>
            <span class="material-symbols-outlined md:ml-3 text-base">arrow_forward</span>
        </button>
    </div>
</template>

<script>
import  {eventBus} from "../../events.js";

export default {
    name: "Pagination",
    props:{
        meta: {
            type: Object,
        },
        links: {
            type: Object
        },
        location:{
            type: String
        }
    },
    methods:{
        callPage(page_no) {
            eventBus.$emit(this.location+'_pagination', page_no);
        },
        goToPage(page_no){
            if(page_no === this.meta.last_page || page_no >= this.meta.last_page)
                eventBus.$emit(this.location+'_pagination', this.meta.last_page);
            else
                eventBus.$emit(this.location+'_pagination', page_no);
        }
    },
    computed: {
        currentPage() {
            if(this.meta)
                return this.meta.current_page
        },
        prevPage() {
            if(this.meta)
            {
                if(this.meta.current_page > 1)
                    return this.meta.current_page -1;
                else
                    return false;
            }
        },
        nextPage() {
            if(this.meta)
            {
                if(this.meta.current_page < this.meta.last_page)
                    return this.meta.current_page + 1;
                else
                    return false;
            }
        },
        lastPage() {
            if(this.meta)
                return this.meta.last_page
        },
        firstPage() {
            if(this.meta)
                return this.meta.from
        }

    },
}
</script>

<style scoped>

</style>
