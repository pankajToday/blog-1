<template>
    <header class="w-full md:py-4 py-3 border-b border-[#F2F4F7]">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="bg-no-repeat bg-contain w-[142px] h-7 md:w-[116px] md:h-9 lg:mr-10 md:mr-8 block md:mt-2" style="background-image: url(project-assets/images/website/logo/nits-logo.png);"></a>
                    <div class="hidden md:flex">
                        <a class="text-small text-[#475467] hover:text-[#7F56D9] font-semibold lg:mr-8 md:mr-4" href="#">Home</a>
                        <a href="#" class="flex items-center text-[#475467] hover:text-[#7F56D9] lg:mr-8 md:mr-4">
                            <span class="text-small font-semibold">Products</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <a href="#" class="flex items-center text-[#475467] hover:text-[#7F56D9] lg:mr-8 md:mr-4">
                            <span class="text-small font-semibold">Resources</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <a class="text-small text-[#475467] hover:text-[#7F56D9] font-semibold lg:mr-8 md:mr-4" href="#">Pricing</a>
                    </div>
                </div>
                <div class="md:flex hidden items-center gap-3">
                    <a class="text-small font-semibold py-2 px-[18px] rounded-lg text-[#475467] hover:bg-gray-100" href="#">Log in</a>
                    <a class="text-sm text-white bg-[#7F56D9] font-semibold py-2 px-[18px] rounded-lg" href="#">Sign up</a>
                </div>
                <button class="p-2 rounded text-[#344054] md:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "WebHeader"
}
</script>

<style scoped>

</style>
