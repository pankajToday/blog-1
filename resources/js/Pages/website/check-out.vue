<template>
    <layout>
        <main class="bg-ruby-50 pb-14">
            <section>
                <div class="pb-5 border-b border-[#EAECF0]">
                    <h1 class="text-3xl font-semibold text-ruby-900">Checkout</h1>
                    <p class="text-base text-ruby-600 font-normal mt-1">We believe NitsEditor should be accessible to all</p>
                </div>
            </section>
            <section>
                <div class="flex mt-16 gap-4 px-44">
                    <div class="w-1/2">
                        <div class="flex items-center pb-2 gap-2">
                            <h2>Discovery</h2>
                            <span class="py-0.5 px-2.5 bg-pearl-100 rounded-full text-sm font-medium text-pearl-600">Recommended</span>
                        </div>
                        <div class="border border-[#EAECF0] w-[250px]"></div>
                        <div class="flex items-end mt-2">
                            <p class="text-5xl text-ruby-900 font-semibold">$600</p>
                            <p class="text-base font-medium text-ruby-600">4 months</p>
                        </div>
                        <p class="mt-5 text-sm font-normal text-ruby-800">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                        <div class="flex gap-5 items-center mt-2.5">
                            <span class="material-symbols-outlined fill text-pearl-600 text-2xl">check_circle</span>
                            <p class="text-sm font-medium text-ruby-800">Lorem Ipsum is simply dummy text</p>
                        </div>
                        <div class="flex gap-5 items-center mt-2.5">
                            <span class="material-symbols-outlined fill text-pearl-600 text-2xl">check_circle</span>
                            <p class="text-sm font-medium text-ruby-800">Lorem Ipsum is simply dummy text</p>
                        </div>
                        <div class="flex gap-5 items-center mt-2.5">
                            <span class="material-symbols-outlined fill text-pearl-600 text-2xl">check_circle</span>
                            <p class="text-sm font-medium text-ruby-800">Lorem Ipsum is simply dummy text</p>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <div>
                        <label class="block text-base font-medium text-ruby-700 mb-1">Card holder’s name:</label>
                        <div>
                            <input class="bg-white w-full py-3 p-3 rounded-md outline-none border border-[#D0D5DD]"  style="box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="mt-7">
                        <label class="block text-base font-medium text-ruby-700 mb-1">Card number</label>
                        <div class="relative">
                            <img class="w-10 h-auto absolute top-2.5 left-4" src="project-assets/images/website/icons/Payment-icon.png">
                            <input class="bg-white w-full py-3 pl-16 pr-12 rounded-md outline-none border border-[#D0D5DD]"  style="box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;" placeholder="Card number">
                            <a href="#"><span class="material-symbols-outlined absolute top-3 right-4 text-ruby-500">help</span></a>
                        </div>
                    </div>
                    <div class="flex mt-7 gap-3">
                        <div class="w-1/2">
                            <label class="block text-base font-medium text-ruby-700 mb-1">Expiry</label>
                            <div>
                                <input class="bg-white w-full py-3 p-3 rounded-md border border-[#D0D5DD]" type="date" style="box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;" placeholder="Card number">
                            </div>
                        </div>
                        <div class="w-1/2">
                            <label class="block text-base font-medium text-ruby-700 mb-1">CVC</label>
                            <div class="relative">
                                <input class="bg-white w-full py-3 p-3 rounded-md border border-[#D0D5DD]" type="password" style="box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;" placeholder="***">
                                <a href="#"><span class="material-symbols-outlined absolute top-3 right-4 text-ruby-500">help</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-7">
                        <label class="block text-base font-medium text-ruby-700 mb-1">Discount Code:</label>
                        <div>
                            <input class="bg-white w-full py-3 p-3 rounded-md border border-[#D0D5DD]" type="number" style="box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;" placeholder="Discount Code:">
                        </div>
                    </div>
                    <div class="mt-10">
                        <button @click="openModal=true" class="w-full text-base text-white bg-pearl-600 font-semibold py-3 rounded-md">Verify</button>
                    </div>
                    <p class="mt-5 text-sm font-normal text-ruby-800">A small refundable fee will be charged to verify your card details</p>
                    </div>
                </div>
            </section>
            <div v-if="openModal || openFailedModal" @click="openModal=false" class="bg-black/50 fixed top-0 left-0 w-full h-screen z-40"></div>
                <div v-if="openModal" class="bg-white w-[500px] fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50 rounded-2xl py-8 px-8">
                <div class="flex justify-center">
                    <div class=" w-[50px] h-[50px] flex items-center justify-center rounded-full bg-[#bbf7d0]">
                        <span class="material-symbols-outlined fill text-3xl text-[#047857]">check_circle</span>
                    </div>
                </div>
                <h2 class="text-center text-2xl font-semibold text-ruby-800 mt-5">Payment Successfull!</h2>
                <div class="flex justify-between items-center border-t-2 border-dashed border-ruby-300 pt-5 mt-7">
                    <p class="text-base font-normal text-ruby-400">Subtotal</p>
                    <p class="text-base font-semibold text-ruby-800">$560.00</p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <p class="text-base font-normal text-ruby-400">Discount</p>
                    <p class="text-base font-semibold text-ruby-800">$490.00 (15%)</p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <p class="text-base font-normal text-ruby-400">Ref number</p>
                    <p class="text-base font-semibold text-ruby-800">0000084849494</p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <p class="text-base font-normal text-ruby-400">Payment Method</p>
                    <p class="text-base font-semibold text-ruby-800">Bank transfer</p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <p class="text-base font-normal text-ruby-400">Sender name</p>
                    <p class="text-base font-semibold text-ruby-800">Rashmika Lane</p>
                </div>
                <div class="flex justify-between items-center mt-4 border-dashed border-b-2 border-ruby-300 pb-5">
                    <p class="text-base font-normal text-ruby-400">Subtotal</p>
                    <p class="text-base font-semibold text-ruby-800">+$40.00</p>
                </div>
                <div class="flex justify-between items-center mt-7">
                    <p class="text-xl font-semibold text-ruby-800">Amount</p>
                    <p class="text-3xl font-medium text-ruby-800">$490.00 (15%)</p>
                </div>
            </div>
            <div v-if="openFailedModal" class="bg-white w-[500px] fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50 rounded-2xl py-8 px-8">
                <div class="text-center">
                    <div class="flex items-center justify-center gap-3">
                        <h2 class="text-2xl font-semibold text-ruby-800">Payment not Successfull!</h2>
                        <div class="flex justify-center">
                            <div class=" w-[45px] h-[45px] flex items-center justify-center rounded-full bg-[#fca5a5]">
                                <span class="material-symbols-outlined fill text-2xl text-[#dc2626]">cancel</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-lg font-normal text-ruby-600 mt-3">Sorry, this payment couldn't be proccessed</p>
                    <img class="inline-block mt-5 w-[250px] h-auto" src="project-assets/images/website/payment-faild.png">
                </div>
                <button class="text-base text-white bg-pearl-600 font-semibold py-2.5 w-full rounded-lg" href="#">Try Collecting Again</button>
                <button class="text-base text-ruby-600 border border-ruby-300 font-semibold py-2.5 w-full rounded-lg mt-5" href="#">Back To Order</button>
            </div>
        </main>
    </layout>
</template>
<script>
// import WebHeader from "@/Components/Website/Menus/WebHeader.vue";

// export default {
//     name: "checkout",
//     components: {WebHeader},
//     data(){
//         return{
//             openModal: false,
//             openFailedModal: false,
//         }
//     }
// }
import Layout from "@/Components/Menus/Layout.vue";

export default {
    name: "checkout",
    components: {Layout}
    // data(){
    //     return{
    //         openModal: false,
    //         openFailedModal: true,
    //     }
    // }
    }
</script>

<style scoped>

</style>