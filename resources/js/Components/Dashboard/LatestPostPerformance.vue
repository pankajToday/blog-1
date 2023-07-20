<template>
    <div class="w-full my-4">
        <div class="rounded-[12px] border border-gray-300 p-4">
            <div class="flex justify-between items-center h-11 border-gray-300 border-b">
                <div class="text-small font-semibold">Your latest post performance</div>
                <div class="flex items-center">
                    <Link href="/posts" class="ml-2.5 px-2 py-1.5 border border-gray-300 rounded-md text-xs font-medium">View all</Link>
                </div>
            </div>

            <div class="w-full mt-2.5">
                <table  class="w-full">
                    <thead class="bg-gray-100 w-full">
                    <tr class="w-full border-b border-gray-300 bg-gray-100">
                        <th class="px-2.5 py-1.5 text-xs font-medium text-gray-600 text-left" >Post</th>
                        <th class="px-2.5 py-1.5 text-xs font-medium text-gray-600 text-left" >Date published</th>
                        <th class="px-2.5 py-1.5 text-xs font-medium text-gray-600 text-left" >Platform</th>
                        <th class="px-2.5 py-1.5 text-center" >
                            <div class="flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-gray-500 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                        </th>
                        <th class="px-2.5 py-1.5 text-center" >
                            <div class="flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-gray-500 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 14.25l6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0c1.1.128 1.907 1.077 1.907 2.185zM9.75 9h.008v.008H9.75V9zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm4.125 4.5h.008v.008h-.008V13.5zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                            </div>
                        </th>
                        <th class="px-2.5 py-1.5 text-center" >
                            <div class="flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4.5 h-4.5 text-gray-500 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>
                            </div>
                        </th>
                        <th class="px-2.5 py-1.5 text-center w-28" >
                            <div class="flex justify-center items-center">

                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="w-full">
                    <tr v-for="(ele, index) in tableData" :key="index" class="border-b border-gray-300 bg-white">
                        <td class="py-4 px-2">
                            <div class="w-full flex items-center">
<!--<<<<<<< HEAD-->
<!--                                <div class="w-9 h-9 flex items-center">-->
<!--                                    <img class="w-8 h-8 m-auto object-contain" :src="asset('project-assets/images/tOne.png')">-->
<!--                                </div>-->
<!--=======-->
<!--                                <div class="w-9 h-9 flex items-center">-->
<!--                                    <img class="w-8 h-8 m-auto object-contain" src="/project-assets/images/tOne.png">-->
<!--                                </div>-->
<!--&gt;>>>>>> 252bf412963c75dc5ca9c8f9a7941b05b0361436-->
                                <div class="ml-2">
                                    <div class="text-vs font-medium text-gray-900">{{ ele.title }}</div>
                                    <div class="text-vs font-normal text-gray-600">@ {{ ele.user }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-2 text-vs text-gray-600 font-normal ">{{ ele.published }}</td>
                        <td class="py-4 px-2 text-vs text-gray-900 font-medium flex items-center h-full">
                            <img class="w-8 h-8 object-contain rounded" :src="asset('project-assets/images/linkedin.png')">
                        </td>
                        <td class="py-4 px-2 text-vs text-gray-600 font-normal text-center">0</td>
                        <td class="py-4 px-2 text-vs text-gray-600 font-normal text-center">0</td>
                        <td class="py-4 px-2 text-vs text-gray-600 font-normal text-center">0</td>
                        <td class="py-4 px-2 w-28">
                            <div class="w-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4.5 h-4.5 text-gray-500 cursor-pointer">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3.5 h-3.5 text-gray-500 cursor-pointer ml-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                                </svg>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
    name: "LatestPostPerformance",
    components: {
        Link
    },
    data(){
        return{
            loading: false,
            tableData:[],
            errors:{}
        }
    },
    methods:{
        fetchData(){
            this.loading = true
            axios.post( '/api/latest-post', {}).then(response => {
                if(response.status === 200) {
                    this.tableData = response.data.data
                    this.loading = false
                }
            }).catch((error) => {
                this.errors = error.response.data.errors
                this.loading = false;
            })
        },
    },
    created() {

    }
}
</script>

<style scoped>

</style>
