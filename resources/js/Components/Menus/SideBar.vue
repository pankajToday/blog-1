<template>
    <div class="lg:w-[270px] md:w-[180px] border-r border-gray-100 h-screen overflow-y-auto fixed top-0 left-0 flex flex-col h-full py-5 bg-white">
        <div class="w-full flex  items-center px-4">
            <div class="w-full">
                <img class="m-auto w-36 h-auto" :src="asset('project-assets/images/NitsEditorLogo.png')">
            </div>
        </div>
        <div class="px-4 w-full mt-4">
            <div class="w-full " >
                <div class="">
                    <Link href="/dashboard" :class="{ 'bg-gray-100': $page.url.startsWith('/dashboard') }" class="text-gray-900 w-full h-8 flex items-center rounded-md px-4 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <div class="text-vs cursor-pointer font-medium ml-3 family-poppins">Dashboard</div>
                    </Link>

                    <Link href="/category" :class="{ 'bg-gray-100': $page.url.startsWith('/category') }" class="hover:bg-gray-100 text-gray-700 w-full h-8 flex items-center rounded-md px-4 cursor-pointer mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>
                        <div class="text-vs  cursor-pointer font-medium ml-3 family-poppins">Category</div>
                    </Link>
                    <Link href="/category-type" :class="{ 'bg-gray-100': $page.url.startsWith('/category-type') }" class="hover:bg-gray-100 text-gray-700 w-full h-8 flex items-center rounded-md px-4 cursor-pointer mt-2">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        <div class="text-vs  cursor-pointer font-medium ml-3 family-poppins">Type</div>
                    </Link>
                    <Link href="/product" :class="{ 'bg-gray-100': $page.url.startsWith('/product') }" class="hover:bg-gray-100 text-gray-700 w-full h-8 flex items-center rounded-md px-4 cursor-pointer mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <div class="text-vs  cursor-pointer font-medium ml-3 family-poppins">Product</div>
                    </Link>

                </div>


            </div>
        </div>
        <div class="w-full mt-auto px-4">
            <div class="mt-6">
                <Link href="/support" :class="{ 'bg-gray-100': $page.url.startsWith('/support') }" class="hover:bg-gray-100 text-gray-700 w-full h-8 flex items-center rounded-md px-4 cursor-pointer mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796a3.765 3.765 0 00-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 01-1.388.88m2.268-2.268l4.138 3.448m0 0a9.027 9.027 0 01-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0l-3.448-4.138m3.448 4.138a9.014 9.014 0 01-9.424 0m5.976-4.138a3.765 3.765 0 01-2.528 0m0 0a3.736 3.736 0 01-1.388-.88 3.737 3.737 0 01-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 01-1.652-1.306 9.027 9.027 0 01-1.306-1.652m0 0l4.138-3.448M4.33 16.712a9.014 9.014 0 010-9.424m4.138 5.976a3.765 3.765 0 010-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 011.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 00-1.652 1.306A9.025 9.025 0 004.33 7.288" />
                    </svg>
                    <div class="text-vs  cursor-pointer font-medium ml-3 family-poppins">Help And Support</div>
                </Link>
                <Link href="/settings" :class="{ 'bg-gray-100': $page.url.startsWith('/settings') }" class="hover:bg-gray-100 text-gray-700 w-full h-8 flex items-center rounded-md px-4 cursor-pointer mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div class="text-vs  cursor-pointer font-medium ml-3 family-poppins">Settings</div>
                </Link>
            </div>
            <div v-if="addBox" class="w-full mt-4 rounded-md bg-gray-100 p-4">
                <div class="w-full flex justify-between">
                    <div class="text-vs font-semibold text-gray-900 mt-2">Monthly budget</div>
                    <svg @click.prevent="addBox = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4 text-gray-500 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div class="mt-1 w-full text-xs font-normal text-gray-600">You’re at 80% of your budget.</div>
                <div class="w-full mt-2">
                    <div class="w-full h-2 flex items-center rounded-full bg-gray-300">
                        <div class="bg-primary w-44 h-2 rounded-full"></div>
                    </div>
                </div>
                <div class="w-full flex items-center mt-4">
                    <div class="text-xs font-semibold text-gray-600 cursor-pointer">Dismiss</div>
                    <div class="text-xs font-semibold text-primary ml-4 cursor-pointer">Upgrade Plan</div>
                </div>
            </div>

            <div class="border border-t my-2"></div>
            <div class="w-full flex justify-between mt-4 ">
                <div class="flex items-center">
                    <div class="w-9 h-9 rounded-full">
                        <img class="w-9 h-9 rounded-full object-cover" :src="asset('project-assets/images/icon/user.png')">
                    </div>
                    <div class="ml-2">
                        <div class="text-vs font-semibold text-gray-900">{{ name }}</div>
                        <div class="text-vs font-normal text-gray-700">{{ email }}</div>
                    </div>
                </div>
                <div class="cursor-pointer">
                    <svg @click.prevent="logout" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-gray-800 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                    </svg>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
    name: "SideBar",
    components: {
        Link
    },
    data(){
        return{
            addBox : true,
        }
    },
    methods:{
        logout() {
            this.$inertia.post(route('logout'));
        },
    },
    computed: {
        name(){
            return this.$page.props.auth.user.first_name + ' ' +  this.$page.props.auth.user.last_name;
        },
        email(){
            return this.$page.props.auth.user.email;
        }
    }
}
</script>

<style scoped>
/* width */
::-webkit-scrollbar {
    width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #6b7280;

    border-radius: 6px
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #9E77ED;
}
</style>
