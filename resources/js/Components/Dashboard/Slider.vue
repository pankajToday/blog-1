<template>
    <div class="w-full mt-4 border border-gray-300 shadow rounded-[12px] bg-white p-4">
        <div class="text-small font-medium text-gray-900">What would you like to do today?</div>
        <div class="w-full my-2.5 border-b border-gray-300"></div>
        <div class="w-full mt-4 grid grid-cols-4 gap-4">
            <div v-for="ele in templateData" class="w-full rounded-[12px] border border-gray-300 flex flex-col shadow">
                <div class="w-full h-[170px] rounded-t-[12px] bg-pink-500 relative">
                    <img class="w-full h-[170px] object-contain rounded-t-[12px]" :src="ele.template.image">
<!--                    <div class="w-full absolute h-[170px] rounded-t-[12px] bg-gray-800 bg-opacity-40 top-0 left-0">-->
<!--                        <div class="w-full h-full flex items-center">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-white m-auto">-->
<!--                                <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="px-4 mt-2">
                    <div class="w-10 h-10 border-gray-300 border-2 rounded flex items-center">
                        <img class="w-8 h-8 object-contain rounded m-auto" :src="asset('project-assets/images/linkedin.png')">
                    </div>
                    <div class="mt-2.5">
                        <div class="text-sm text-gray-900 font-medium">{{ele.template.title}}</div>
                        <div class="text-xs text-gray-600 font-normal">{{ele.template.brief.substring(0,70)}}</div>
                    </div>
                </div>
                <div class="flex items-center w-full p-4 mt-auto">

                    <button @click.prevent="unlockTemplate = true" @click="templateDetails(ele.template)" class="w-full px-4 h-9 rounded-lg bg-primary border-2 border-[#9E77ED] flex justify-center items-center focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4.5 h-4.5 text-white">
                            <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
                        </svg>
                        <div class="text-xs text-white font-semibold ml-2">Go Pro to Unlock</div>
                    </button>
                </div>
            </div>
        </div>

        <div v-if="unlockTemplate" class="w-full h-screen bg-gray-800 bg-opacity-25 fixed inset-0">
            <div class="h-full w-full flex items-center">
                <div class="w-[560px] rounded-md bg-white shadow m-auto">
                    <div class="h-14 flex w-full px-4 items-center justify-between border-b border-gray-200">
                        <h1 class="text-2xl font-medium text-gray-800">{{title}}</h1>
                        <div @click.prevent="unlockTemplate = false" class="cursor-pointer rounded-md h-5 w-5 flex items-center bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 m-auto text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full p-4 ">
                        <div class="w-full h-96 overflow-y-auto">
                            <h2 class="text-small font-medium text-gray-700" v-html="content"></h2>
                            <!--                                <p class="text-vs font-normal text-gray-600">Lorem ipsum dolor set amet d'costa....</p>-->
                        </div>

                        <div class="w-full flex items-center justify-center">
                            <button class="w-full px-4 h-9 rounded-lg bg-gray-100 border-2 border-[#9E77ED] focus:outline-none text-md text-primary font-semibold" @click.prevent="generateContent(template_id, content)">Generate Content</button>
                            <!--                                <button class="w-full px-4 h-9 rounded-lg bg-primary border-2 border-[#9E77ED] focus:outline-none text-md text-white font-semibold ml-4">Beta</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "Slider",
    data(){
        return{
            loading: false,
            templateData:[],
            templateLoading:false,
            unlockTemplate:false,
            template_id:'',
            title:'',
            content:'',
        }
    },
    methods:{
        templateDetails(ele){
            this.errors =null
            this.unlockTemplate = true
            this.template_id = ele.id
            this.title = ele.title
            this.content = ele.content
        },
        fetchTemplate(){
            this.loading = true
            axios.post( '/api/top-templates', {}).then(response => {
                if(response.status === 200) {
                    this.templateData = response.data.data
                    this.loading = false
                }
            }).catch((error) => {
                this.errors = error.response.data.errors
                this.loading = false;
            })
        },
        generateContent(template_id, content){
            const payload = {
                template_id: template_id,
                prompt: content
            }
            axios.post( '/api/template/content', payload).then(response => {
                if(response.status === 200) {
                    let post = response.data.data
                    //redirect to posts/:post_id
                    window.open('/posts/'+post.id, '_blank');
                    this.unlockTemplate = false
                }
            })
        },
    },
    created() {

    }
}
</script>

<style scoped>

</style>
