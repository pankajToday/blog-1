<template>
    <footer class="bg-[#F9FAFB] w-full">
        <div class="container">
            <div class="md:py-24 py-16 lg:flex justify-between">
                <div>
                    <h5 class="text-30 md:text-4xl md:leading-44 font-semibold text-[#101828] mb-5">Sign up for our newsletter</h5>
                    <p class="text-lg md:text-xl md:leading-30 font-normal text-[#475467] sm:mb-8 md:mb-0">Be the first to know about releases and industry news and insights.</p>
                </div>
                <div class="md:flex items-start mt-8 sm:mt-10 lg:mt-0 max-w-[370px] md:max-w-full">
                    <div>
                        <input class="sm:w-[360px] w-full h-12 py-3 px-3.5 rounded-lg font-normal text-base border border-[#D0D5DD] mb-1.5 sm:mb-4 md:mb-1.5" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);" placeholder="Enter your email" type="email">
                        <p class="text-sm md:text-base leading-5 font-normal text-[#475467]">We care about your data in our <a href="#" class="underline">privacy policy.</a></p>
                    </div>
                    <button class="py-3 sm:px-5 w-full md:w-auto bg-[#7F56D9] rounded-lg text-white font-semibold mt-4 md:mt-0 md:ml-4">Subscribe</button>
                </div>
            </div>
            <div class="lg:flex justify-between md:py-16 py-12 border-b border-[#EAECF0]">
                <div>
                    <a href="#" class="bg-no-repeat bg-contain w-36 h-9.5 inline-block mb-8" style="background-image: url(project-assets/images/website/logo/nits-logo.png);"></a>
                    <div class="md:flex grid grid-cols-2 md:items-center gap-3 md:gap-8">
                        <a class="text-base text-[#475467] font-semibold hover:text-[#7F56D9]" href="#">Overview</a>
                        <a class="text-base text-[#475467] font-semibold hover:text-[#7F56D9]" href="#">Features</a>
                        <a class="text-base text-[#475467] font-semibold hover:text-[#7F56D9]" href="#">Pricing</a>
                        <a class="text-base text-[#475467] font-semibold hover:text-[#7F56D9]" href="#">Careers</a>
                        <a class="text-base text-[#475467] font-semibold hover:text-[#7F56D9]" href="#">Help</a>
                        <a class="text-base text-[#475467] font-semibold hover:text-[#7F56D9]" href="#">Privacy</a>
                    </div>
                </div>
                <div class="max-w-[370px] md:max-w-full mt-12 md:mt-10 lg:mt-0">
                    <label class="font-semibold text-sm text-[#101828]">Stay up to date</label>
                    <div class="md:flex block items-center mt-4 sm:mb-8 lg:mb-0">
                        <input class="md:w-[229px] w-full h-11 py-2.5 px-3.5 rounded-lg font-normal text-base border border-[#D0D5DD] block" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);" placeholder="Enter your email" type="email">
                        <button class="py-2.5 md:px-3.5 w-full md:w-auto bg-[#7F56D9] rounded-lg text-white font-semibold mt-4 md:mt-0 md:ml-4">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-between items-center py-8">
                <p class="text-base leading-6 font-normal text-[#667085] order-last md:order-first">© 2077 Untitled UI. All rights reserved.</p>
                <div class="mb-4 sm:mb-0">
                    <div class="flex items-center gap-4">
                        <a href="#" class="text-base leading-6 font-normal text-[#667085] hover:text-[#7F56D9]">Terms</a>
                        <a href="#" class="text-base leading-6 font-normal text-[#667085] hover:text-[#7F56D9]">Privacy</a>
                        <a href="#" class="text-base leading-6 font-normal text-[#667085] hover:text-[#7F56D9]">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: "WebFooter"
}
</script>

<style scoped>

</style>
