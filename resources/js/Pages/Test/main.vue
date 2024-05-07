<template>
    <div class="bg-gray-200 w-full border border-gray-100 px-3 pr-3">

        <div class="mx-2 my-3 px-2 py-2 bg-white rounded-md">  <h1 class="block text-sm font-medium leading-6 text-gray-900">Ads Compare </h1></div>


        <div class="mx-2 px-2 py-2 flex justify-between items-center">
            <div class="w-[40%]">
                <label for="listA" class="block text-sm font-medium leading-6 text-gray-900">List A</label>
                <div class="mt-2 rounded-md shadow-sm">
                    <textarea v-model="listA" id="listA" cols="20" rows="20" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>
            <div class="w-auto">
                <button @click="compareList" type="button" class="w-full text-sm text-slate-500 mr-4 py-2 px-4 rounded-md border-0
                      text-sm font-semibold bg-violet-50 text-violet-700 hover:bg-violet-100" >Compare</button>
            </div>
            <div class="w-[40%]">
                <label for="listA" class="block text-sm font-medium leading-6 text-gray-900">List B</label>
                <div class="mt-2 rounded-md shadow-sm">
                    <textarea v-model="listB" id="listB" cols="20" rows="20" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>
        </div>


        <div v-if="!loading " class="mx-2 my-3 px-2 py-2 bg-white rounded-md">  <h1 class="block text-sm font-medium leading-6 text-gray-900">Result </h1></div>

        <div v-if="!loading "  class="mx-2 px-2 py-2 flex justify-between ">
            <!--<div class="w-full">
                <label class="block text-sm font-medium leading-6 text-gray-900"></label>
                <div   class="mt-2 rounded-md shadow-sm">
                    <div v-for="(section ) in resultData">
                        <div v-for="(sectionItems,sectionName) in section">
                            <p  class="px-1 py-2 my-1 font-bold text-medium"> {{sectionName.toUpperCase()}}</p>

                            <div v-for="(items,key) in sectionItems">
                                <p  class="px-1 py-2 mx-3">{{key}}</p>
                                <div  v-if="items && items.length"   v-for="(item) in items">
                                    <p class="px-1 py-2 mx-5 text-vs text-green-600"> {{item}}</p>

                                </div>
                                <p v-else  class="px-1 py-2 mx-5 text-vs text-red-600"> No match found!</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="w-full mx-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Not In List A</label>
                <div   class="mt-2 shadow-sm bg-white rounded-md border-gray-200">
                    <div v-if="resultData.missing_a && resultData.missing_a.length"
                         v-for="item in resultData.missing_a">
                        <p class="px-1 py-2 mx-5 text-vs text-green-600"> {{item}}</p>
                    </div>
                    <p v-else  class="px-1 py-2 mx-5 text-vs text-red-600"> No match found!</p>
                </div>
            </div>
            <div class="w-full mx-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Not In List B</label>
                <div   class="mt-2 shadow-sm bg-white rounded-md border-gray-200">
                    <div v-if="resultData.missing_b && resultData.missing_b.length"
                         v-for="item in resultData.missing_b">
                        <p class="px-1 py-2 mx-5 text-vs text-green-600"> {{item}}</p>
                    </div>
                    <p v-else  class="px-1 py-2 mx-5 text-vs text-red-600"> No match found!</p>
                </div>
            </div>
            <div class="w-full mx-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Common Ads</label>
                <div   class="mt-2 shadow-sm bg-white rounded-md border-gray-200">
                    <div v-if="resultData.common_items && resultData.common_items.length"
                         v-for="item in resultData.common_items">
                        <p class="px-1 py-2 mx-5 text-vs text-green-600"> {{item}}</p>
                    </div>
                    <p v-else  class="px-1 py-2 mx-5 text-vs text-red-600"> No match found!</p>
                </div>
            </div>

        </div>


    </div>
</template>

<script>
    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';


    export default {
        name: "main.vue",
        components:{toast},
        data(){
            return{
                loading:false,
                resultData:[],
                listA:"#Google Start\n" +
                    "google.com, pub-7641565019577886, DIRECT, f08c47fec0942fa0\n" +
                    "google.com, pub-8609501543919728, DIRECT, f08c47fec0942fa0\n" +
                    "#Google End\n" +
                    "\n" +
                    "#ABM Start\n" +
                    "andbeyond.media, 140993, DIRECT\n" +
                    "152media.info, 152M10, RESELLER\n" +
                    "152media.info, 152m361, RESELLER\n" +
                    "33across.com, 0010b00002cGp2AAAS, RESELLER, bbea06d9c4d2853c\n" +
                    "33across.com, 0010b00002T3JniAAF, RESELLER, bbea06d9c4d2853c\n" +
                    "33across.com, 0013300001cG13gAAC, DIRECT, bbea06d9c4d2853c\n" +
                    "33across.com, 0013300001jlr99AAA, RESELLER, bbea06d9c4d2853c\n" +
                    "33across.com, 0015a00002oUk4aAAC, RESELLER, bbea06d9c4d2853c\n" +
                    "33across.com, 0015a00003DKg9ZAAT, RESELLER, bbea06d9c4d2853c\n" +
                    "aceex.io, 491, RESELLER, b1cf3c874d5c6682\n" +
                    "adagio.io, 1056, RESELLER\n" +
                    "adagio.io, 1207, DIRECT\n"+
                    "#ABM End\n" ,

                listB:"#Google Start\n" +
                    "google.com, pub-7641565019577886, DIRECT, f08c47fec0942fa0\n" +
                    "google.com, pub-8609501543919728, DIRECT, f08c47fec0942fa0\n" +
                    "#Google End\n" +
                    "\n" +
                    "#ABM Start\n" +
                    "andbeyond.media, 140993, DIRECT\n" +
                    "152media.info, 152M10, RESELLER\n" +
                    "152media.info, 152m361, RESELLER\n" +
                    "33across.com, 0010b00002cGp2AAAS, RESELLER, bbea06d9c4d2853c\n" +
                    "33across.com, 0010b00002T3JniAAF, RESELLER, bbea06d9c4d2853c\n" +
                    "33across.com, 0013300001cG13gAAC, DIRECT, bbea06d9c4d2853c\n" +
                    "33across.com, 0013300001jlr99AAA, RESELLER, bbea06d9c4d2853c\n" +
                    "33across.com, 0015a00002oUk4aAAC, RESELLER, bbea06d9c4d2853c\n" +
                    "33across.com, 0015a00003DKg9ZAAT, RESELLER, bbea06d9c4d2853c\n" +
                    "aceex.io, 491, RESELLER, b1cf3c874d5c6682\n" +
                    "adagio.io, 1056, RESELLER\n" +
                    "adagio.io, 1207, DIRECT\n"+
                     "#ABM End\n" ,
            }
        },
        methods:{
            compareList(){
                this.loading =true;
                axios.post('/api/ads-compare-list',{list_a:this.listA, list_b:this.listB}).then((response)=>{
                    if( response.status === 200 && response.data.status === 'success' ){
                      toast.success('we are ready to display result.');
                      this.resultData = response.data.data;
                      console.log(this.resultData)
                    }
                    else{
                        toast.warning('we are unable to display result')
                    }
                    this.loading =false;
                }).catch((errors)=>{
                    this.loading =false;
                    console.log(errors)
                    toast.warning('Something went wrong!')
                });
            }
        },
        created(){
            console.log('Ok');
        }
    }
</script>

<style scoped>

</style>