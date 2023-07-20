<template>
    <header class="w-full md:py-6 py-5 bg-ruby-50 border-b border-[#F2F4F7] font-inter z-30 fixed">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="bg-no-repeat bg-contain w-[142px] h-8 md:w-36 md:h-9.5 lg:mr-10 md:mr-8 block" style="background-image: url(/project-assets/images/NitsEditorLogo.png);"></a>
                    <div class="hidden md:flex">
                        <a class="text-base text-ruby-600 hover:text-pearl-600 font-semibold lg:mr-8 md:mr-4" href="#">Features</a>
                        <a class="text-base text-ruby-600 hover:text-pearl-600 font-semibold lg:mr-8 md:mr-4" href="#">How it works</a>
                        <a class="text-base text-ruby-600 hover:text-pearl-600 font-semibold lg:mr-8 md:mr-4" href="#">Blog</a>
                        <!-- <a href="#" class="flex items-center text-ruby-600 hover:text-pearl-600 lg:mr-8 md:mr-4">
                            <span class="text-base  font-semibold">Products</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <a href="#" class="flex items-center text-ruby-600 hover:text-pearl-600 lg:mr-8 md:mr-4">
                            <span class="text-base font-semibold">Resources</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a> -->
                        <!-- <a class="text-base text-ruby-600 hover:text-pearl-600 font-semibold lg:mr-8 md:mr-4" href="#">Pricing</a> -->
                    </div>
                </div>
                <div class="md:flex hidden items-center gap-3">
                    <a class="text-base font-medium py-2 px-[15px] rounded-lg text-ruby-600 hover:bg-gray-100" href="/login">Log in</a>
                    <a class="text-base text-white bg-pearl-600 font-medium py-2 px-[15px] rounded-lg" href="/sign-up">Sign up</a>
                </div>
                <button class="p-2 rounded text-ruby-700 md:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </header>
    <main class="font-inter">
        <section class="bg-ruby-50">
            <div class="container">
                <div class="lg:flex block justify-between items-center pb-4 pt-24">
                    <div>
                        <div class="w-[355px] h-8 rounded-full bg-[#F9F5FF] pl-1 py-1 pr-2 flex items-center mb-4">
                            <div class="bg-white rounded-full text-sm leading-18 font-medium text-pearl-700 py-0.5 px-2.5 mr-3 ml-1">What’s new?</div>
                            <div class="text-sm leading-18 font-medium text-pearl-700 py-2.5 px-1">100+ content templates</div>
                            <span class="w-3 h-3 bg-no-repeat bg-contain ml-[7px]" style="background-image: url(project-assets/images/website/icons/right-arrow.svg)"></span>
                        </div>
                        <h1 class="md:text-5xl text-4xl font-semibold md:leading-[72px] text-ruby-900 mb-6">Create great content for LinkedIn using AI!</h1>
                        <p class="font-normal text-md text-ruby-600 mb-12">The NITSEditor app lets you create new content for LinkedIn - with the push of a button. Create and schedule content for a month in hours!</p>
                        <div class="md:flex items-center gap-3">
                            <button class="py-3 px-4 mt-3 md:mt-0 text-white md:w-auto w-full text-md font-medium bg-pearl-600 rounded-lg md:order-last mb-4 md:mb-0">Get Started</button>
                            <button class="bg-white py-3 md:justify-left justify-center md:w-auto w-full md:px-4 border border-[#D0D5DD] flex items-center gap-3 rounded-lg shadow-light">
                                <span class="w-5 h-5 bg-no-repeat bg-contain inline-block" style="background-image: url(project-assets/images/website/icons/play-icon.svg)"></span>
                                <span class="text-ruby-700 text-md font-medium">Watch video</span>
                            </button>
                        </div>
                    </div>
                    <img class="xl:w-[525px] lg:w-[550px] md:w-full h-auto xl:-mr-[70px] hidden md:block mt-16 md:mt-0" :src="asset('project-assets/images/website/banner.png')" alt="careditCard">
                </div>
            </div>
            <img class="md:hidden block w-full h-auto" :src="asset('project-assets/images/website/mobile-bank.png')" alt="card">
            <div class="container">
                <p class="text-center text-ruby-600 text-base font-medium">Join 4,000+ companies already growing</p>
                <div class="pt-8 pb-16 gap-y-4 gap-x-4 flex-wrap flex items-center justify-center md:justify-between">
                    <img class="md:w-[170px] w-[127px] h-auto" :src="asset('project-assets/images/website/logo/boltshift-logo.png')">
                    <img class="md:w-[170px] w-[125px] h-auto" :src="asset('project-assets/images/website/logo/lightbox-logo.png')">
                    <img class="md:w-[170px] w-[148px] h-auto" :src="asset('project-assets/images/website/logo/featherdev-logo.png')">
                    <img class="md:w-[170px] w-[124px] h-auto" :src="asset('project-assets/images/website/logo/spherule-logo.png')">
                    <img class="md:w-[170px] w-[147px] h-auto" :src="asset('project-assets/images/website/logo/globalbank-logo.png')">
                    <img class="md:w-[170px] w-[136px] h-auto" :src="asset('project-assets/images/website/logo/nietzsche-logo.png')">
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="pt-16 pb-16 max-w-2xl">
                    <p class="text-pearl-700 font-semibold text-base mb-3">Features</p>
                    <h2 class="text-3xl font-semibold text-ruby-900 mb-4">Great content to to fuel your growth story</h2>
                    <p class="font-normal text-lg text-ruby-600">Create content in a jiffy and use it to grow your business</p>
                </div>
                <div class="md:flex block gap-16 items-center mb-16">
                    <div class="md:w-1/2 w-full">
                        <div class="flex mb-12">
                            <span class="h-12 w-12 bg-no-repeat bg-contain flex-shrink-0" style="background-image: url(project-assets/images/website/icons/cards-icon.svg)"></span>
                            <div class="w-full ml-4">
                                <h3 class="text-ruby-900 md:text-xl text-lg font-semibold mb-2 mt-3">AI assistant</h3>
                                <p class="font-normal text-base text-ruby-600 mb-5">Through our AI assistant, You can then tweak existing content or generate new posts specifically tailored to your company's requirements. This way, you can get content that is guaranteed to do well on the platform.</p>
                                <a href="#" class="flex items-center">
                                    <p class="text-base font-semibold text-pearl-700">Learn more</p>
                                    <span class="bg-no-repeat bg-contain inline-block h-[11.67px] w-[11.67px] ml-2" style="background-image: url(project-assets/images/website/icons/right-arrow.svg)"></span>
                                </a>
                            </div>
                        </div>
                        <div class="flex mb-12">
                            <span class="h-12 w-12 bg-no-repeat bg-contain flex-shrink-0" style="background-image: url(project-assets/images/website/icons/dolor-icon.svg)"></span>
                            <div class="w-full ml-4">
                                <h3 class="text-ruby-900 md:text-xl text-lg font-semibold mb-2 mt-3">Advanced analytics</h3>
                                <p class="font-normal text-base text-ruby-600 mb-5">Don't solely rely on our assurance. Have a look at the data that shows how well your post has performed, along with the engagement metrics for your content.</p>
                                <a href="#" class="flex items-center">
                                    <p class="text-base font-semibold text-pearl-700">Learn more</p>
                                    <span class="bg-no-repeat bg-contain inline-block h-[11.67px] w-[11.67px] ml-2" style="background-image: url(project-assets/images/website/icons/right-arrow.svg)"></span>
                                </a>
                            </div>
                        </div>
                        <div class="flex">
                            <span class="h-12 w-12 bg-no-repeat bg-contain flex-shrink-0" style="background-image: url(project-assets/images/website/icons/analytics-icon.svg)"></span>
                            <div class="w-full ml-4">
                                <h3 class="text-ruby-900 md:text-xl text-lg font-semibold mb-2 mt-3">Schedule your content & off it goes!</h3>
                                <p class="font-normal text-base text-ruby-600 mb-5">NitsEditor can provide you the necessary guidance to optimize your Linkedin presence. This all-in-one tool will show you the best practices that will lead to more fruitful results. You can even simplify your content curation and scheduling process with it for greater convenience.</p>
                                <a href="#" class="flex items-center">
                                    <p class="text-base font-semibold text-pearl-700">Learn more</p>
                                    <span class="bg-no-repeat bg-contain inline-block h-[11.67px] w-[11.67px] ml-2" style="background-image: url(project-assets/images/website/icons/right-arrow.svg)"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <img class="w-full h-auto hidden md:block" :src="asset('project-assets/images/website/metrics.png')" alt="bankcard">
                    </div>
                </div>
            </div>
            <img class="w-full h-auto block md:hidden" :src="asset('project-assets/images/website/metrics.png')" alt="card">
        </section>
        <section>
            <div class="container pt-16 pb-16">
                <div class="md:flex justify-between">
                    <div>
                        <h3 class="text-3xl font-semibold text-ruby-900 mb-4">We’ve helped hundreds of global companies</h3>
                        <p class="font-normal text-lg text-ruby-600">Case studies from some of our amazing customers who are building faster.</p>
                    </div>
                    <div class="md:flex items-center gap-3">
                        <button class="py-3 md:px-5 w-full md:w-auto text-white text-base font-semibold bg-pearl-600 rounded-lg mt-8 md:mt-0">Create account</button>
                        <button class="bg-white py-3 md:px-5 w-full md:w-auto text-ruby-700 text-base font-semibold border border-[#D0D5DD] rounded-lg mt-3 md:mt-0" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">Our customers</button>
                    </div>
                </div>
                <div class="flex justify-between mt-16">
                    <div class="md:w-96 w-full bg-pearl-600">
                        <div class="p-6">
                            <img class="w-[146px] h-auto" :src="asset('project-assets/images/website/logo/layers-logo.png')">
                            <div class="mt-[142px] p-6" style="background: rgba(255, 255, 255, 0.3); border: 1px solid rgba(255, 255, 255, 0.5); backdrop-filter: blur(12px);">
                                <h4 class="text-white text-3xl font-semibold mb-4">Layers</h4>
                                <p class="text-base font-normal text-white mb-8">“Untitled has saved us thousands of hours of work. We’re able to spin up projects faster.”</p>
                                <a href="#" class="flex items-center">
                                    <p class="text-base font-semibold text-white hover:text-ruby-800">Read case study</p>
                                    <span class="bg-no-repeat bg-contain inline-block h-[8.33px] w-[8.33px] ml-2" style="background-image: url(project-assets/images/website/icons/cros-arrow.svg)"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-96 bg-[#039855] hidden lg:block">
                        <div class="p-6">
                            <img class="w-[146px] h-auto" :src="asset('project-assets/images/website/logo/sisyphus-logo.png')">
                            <div class="mt-[142px] p-6" style="background: rgba(255, 255, 255, 0.3); border: 1px solid rgba(255, 255, 255, 0.5); backdrop-filter: blur(12px);">
                                <h4 class="text-white text-3xl font-semibold mb-4">Sisyphus</h4>
                                <p class="text-base font-normal text-white mb-8">“We’ve been using Untitled to kick start every new project and can’t work without it.”</p>
                                <a href="#" class="flex items-center">
                                    <p class="text-base font-semibold text-white hover:text-ruby-800">Read case study</p>
                                    <span class="bg-no-repeat bg-contain inline-block h-[8.33px] w-[8.33px] ml-2" style="background-image: url(project-assets/images/website/icons/cros-arrow.svg)"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-96 bg-[#1570EF] hidden md:block">
                        <div class="p-6">
                            <img class="w-[146px] h-auto" :src="asset('project-assets/images/website/logo/capsule-logo.png')">
                            <div class="mt-[142px] p-6" style="background: rgba(255, 255, 255, 0.3); border: 1px solid rgba(255, 255, 255, 0.5); backdrop-filter: blur(12px);">
                                <h4 class="text-white text-3xl font-semibold mb-4">Capsule</h4>
                                <p class="text-base font-normal text-white mb-8">“Love the simplicity of the service and the prompt customer support.”</p>
                                <a href="#" class="flex items-center">
                                    <p class="text-base font-semibold text-white hover:text-ruby-800">Read case study</p>
                                    <span class="bg-no-repeat bg-contain inline-block h-[8.33px] w-[8.33px] ml-2" style="background-image: url(project-assets/images/website/icons/cros-arrow.svg)"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-ruby-50">
            <div class="container md:py-14">
                <div class="md:flex justify-between items-center">
                    <div class="md:max-w-xl w-full pt-16 md:pt-0">
                        <h5 class="md:text-4xl text-3xl font-semibold ruby-900 mb-6 md:leading-[60px]">Join and get started!</h5>
                        <p class="font-normal text-lg text-ruby-600 mb-10">Start your 7 day Free Trial today!</p>
                        <div class="md:flex items-center">
                            <button class="py-3 md:px-5 w-full md:w-auto text-white text-base font-semibold bg-pearl-600 rounded-lg md:order-last mt-8 md:mt-0 mb-4 md:mb-0 md:ml-3">Get started</button>
                            <button class="bg-white py-3 md:px-5 w-full md:w-auto text-ruby-700 text-base font-semibold border border-[#D0D5DD] rounded-lg" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">Learn more</button>
                        </div>
                    </div>
                    <div>
                        <img class="w-[570px] hidden md:block h-auto" :src="asset('project-assets/images/website/college.png')">
                    </div>
                </div>
            </div>
            <img class="mt-16 w-full h-auto block md:hidden pb-16" :src="asset('project-assets/images/website/mobile-college.png')">
        </section>
        <section>
            <div class="container">
                <div class="text-center pt-16">
                    <p class="text-sm font-medium text-pearl-700 bg-ruby-50 rounded-2xl w-[83px] h-7 py-1 inline-block mb-4">Features</p>
                    <h5 class="font-semibold text-3xl text-ruby-900 mb-5">Automate your content generation and focus on your business!</h5>
                    <p class="text-lg font-normal text-ruby-600 md:max-w-3xl mx-auto pb-16">With NITSEditor, you can create your LinkedIn content in a few hours which frees you to focus on other aspects of your business</p>
                    <img class="w-[1216px] hidden md:block h-auto mb-20" :src="asset('project-assets/images/website/dashboard.png')">
                    <img class="w-full block md:hidden h-auto mb-20" :src="asset('project-assets/images/website/dashboard.png')">
                    <div class="flex flex-wrap">
                        <div class="border-t-4 border-ruby-50 hover:border-purple-700 text-center w-full sm:w-2/4 md:w-1/3 px-4">
                            <h5 class="text-xl font-semibold text-ruby-900 mt-6 mb-2">Automate your content creation and scheduling</h5>
<!--                            <p class="font-normal text-base text-ruby-600">Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>-->
                        </div>
                        <div class="border-t-4 border-ruby-50 hover:border-purple-700 w-full sm:w-2/4 md:w-1/3 px-4 mt-10 sm:mt-0">
                            <h5 class="text-xl font-semibold text-ruby-900 mt-6 mb-2">Exclusive for LinkedIn</h5>
<!--                            <p class="font-normal text-base text-ruby-600">Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>-->
                        </div>
                        <div class="border-t-4 border-ruby-50 hover:border-purple-700 w-full md:w-1/3 px-4 mt-10 md:mt-0">
                            <h5 class="text-xl font-semibold text-ruby-900 mt-6 mb-2">100% Data Security</h5>
<!--                            <p class="font-normal text-base text-ruby-600">Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- We’re changing the game
        <section>
            <div class="container">
                <div class="text-ruby-600 font-medium text-base text-center pt-24 mb-8">We’re changing the game</div>
                <div class="flex md:flex-row flex-col flex-wrap justify-center md:gap-10 gap-4 pb-24">
                    <img class="lg:w-[274px] w-[219px] h-auto md:mx-0 mx-auto" :src="asset('project-assets/images/website/logo/post-logo.png')">
                    <img class="lg:w-[238px] w-[191px] h-auto md:mx-0 mx-auto" :src="asset('project-assets/images/website/logo/tc-logo.png')">
                    <img class="lg:w-[180px] w-[150px] h-auto md:mx-0 mx-auto" :src="asset('project-assets/images/website/logo/bloomberg-logo.png')">
                    <img class="lg:w-[165px] w-[135px] h-auto md:mx-0 mx-auto" :src="asset('project-assets/images/website/logo/gizmodo-logo.png')">
                    <img class="lg:w-[115px] w-[92px] h-auto md:mx-0 mx-auto" :src="asset('project-assets/images/website/logo/forbes-logo.png')">
                </div>
            </div>
        </section> -->
        <section>
            <div class="container mb-16">
                <div class="flex gap-2 ml-72 mb-[-20px] mt-11 relative z-20">
                    <img class="w-[50px] h-auto" :src="asset('project-assets/images/website/icons/down-arrow.svg')">
                    <p class="text-sm font-semibold text-pearl-700">Most popular!</p>
                </div>
                <div class="flex gap-8">
                    <div class="w-1/2 bg-white p-8 rounded-2xl border border-[#EAECF0]" style="box-shadow: 0px 12px 16px -4px rgba(16, 24, 40, 0.08), 0px 4px 6px -2px rgba(16, 24, 40, 0.03);">
                        <div class="text-center">
                            <h2 class="text-5xl font-semibold text-ruby-900">$10/mth</h2>
                            <p class="text-xl font-semibold text-ruby-900 mt-4">Basic plan</p>
                            <p class="text-base font-normal text-ruby-600 mt-1">Billed annually.</p>
                        </div>
                        <div class="flex gap-3 mt-8">
                            <img class="w-6 h-6" :src="asset('project-assets/images/website/icons/Check-icon.svg')">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" :src="asset('project-assets/images/website/icons/Check-icon.svg')">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" :src="asset('project-assets/images/website/icons/Check-icon.svg')">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" :src="asset('project-assets/images/website/icons/Check-icon.svg')">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" :src="asset('project-assets/images/website/icons/Check-icon.svg')">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <button class="w-full h-12 bg-pearl-600 mt-10 rounded-lg text-base font-semibold text-white">Get Started</button>
                    </div>
                    <div class="w-1/2 bg-white p-8 rounded-2xl border border-[#EAECF0]" style="box-shadow: 0px 12px 16px -4px rgba(16, 24, 40, 0.08), 0px 4px 6px -2px rgba(16, 24, 40, 0.03);">
                        <div class="text-center">
                            <h2 class="text-5xl font-semibold text-ruby-900">$20/mth</h2>
                            <p class="text-xl font-semibold text-ruby-900 mt-4">Basic plan</p>
                            <p class="text-base font-normal text-ruby-600 mt-1">Billed annually.</p>
                        </div>
                        <div class="flex gap-3 mt-8">
                            <img class="w-6 h-6" :src="asset('project-assets/images/website/icons/Check-icon.svg')">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" :src="asset('project-assets/images/website/icons/Check-icon.svg')">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" :src="asset('project-assets/images/website/icons/Check-icon.svg')">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" :src="asset('project-assets/images/website/icons/Check-icon.svg')">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" src="project-assets/images/website/icons/Check-icon.svg">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <button class="w-full h-12 bg-pearl-600 mt-10 rounded-lg text-base font-semibold text-white">Get Started</button>
                    </div>
                    <div class="w-1/2 bg-white p-8 rounded-2xl border border-[#EAECF0]" style="box-shadow: 0px 12px 16px -4px rgba(16, 24, 40, 0.08), 0px 4px 6px -2px rgba(16, 24, 40, 0.03);">
                        <div class="text-center">
                            <h2 class="text-5xl font-semibold text-ruby-900">$40/mth</h2>
                            <p class="text-xl font-semibold text-ruby-900 mt-4">Basic plan</p>
                            <p class="text-base font-normal text-ruby-600 mt-1">Billed annually.</p>
                        </div>
                        <div class="flex gap-3 mt-8">
                            <img class="w-6 h-6" src="project-assets/images/website/icons/Check-icon.svg">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" src="project-assets/images/website/icons/Check-icon.svg">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" src="project-assets/images/website/icons/Check-icon.svg">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" src="project-assets/images/website/icons/Check-icon.svg">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <div class="flex gap-3 mt-4">
                            <img class="w-6 h-6" src="project-assets/images/website/icons/Check-icon.svg">
                            <p class="text-base font-normal text-ruby-600">Access to all basic features</p>
                        </div>
                        <button class="w-full h-12 bg-pearl-600 mt-10 rounded-lg text-base font-semibold text-white">Get Started</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-ruby-50">
            <div class="container py-16">
                <div class="flex justify-between">
                    <div>
                        <p class="text-pearl-700 text-base font-semibold mb-3">Our blog</p>
                        <h6 class="text-ruby-900 font-semibold text-4xl mb-5">Lastest blog posts</h6>
                        <p class="text-ruby-600 text-lg font-normal">Tool and strategies modern teams need to help their companies grow.</p>
                    </div>
                    <div class="hidden md:block">
                        <button class="py-3 px-5 text-white text-base font-semibold bg-pearl-600 rounded-lg">View all posts</button>
                    </div>
                </div>
                <div class="flex flex-wrap justify-between pt-16">
                    <div class="xl:w-[384px] lg:w-[30%] sm:w-[48%] w-full mt-12 md:mt-0">
                        <img class="w-full h-auto mb-6" :src="asset('project-assets/images/website/blog-banner-main.jpg')" alt="blog">
                        <div>
                            <p class="text-sm font-semibold text-pearl-700 mb-4">Design</p>
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold text-2xl text-ruby-900">UX review presentations</h3>
                                <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                            </div>
                            <p class="text-base font-normal leading-6 text-ruby-600 mb-6">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
                            <div class="flex items-center">
                                <img class="w-10 h-10" :src="asset('project-assets/images/website/women.png')" alt="women">
                                <div class="ml-3">
                                    <p class="font-semibold text-sm text-ruby-900">Olivia Rhye</p>
                                    <p class="font-normal text-sm text-ruby-600">20 Jan 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:w-[384px] lg:w-[30%] sm:w-[48%] w-full mt-12 md:mt-0">
                        <img class="w-full h-auto mb-6" :src="asset('project-assets/images/website/blog-Migrating.jpg')" alt="blog">
                        <div>
                            <p class="text-sm font-semibold text-pearl-700 mb-4">Product</p>
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold text-2xl text-ruby-900">Migrating to Linear 101</h3>
                                <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                            </div>
                            <p class="text-base font-normal leading-6 text-ruby-600 mb-6">Linear helps streamline software projects, sprints, tasks, and bug tracking. Here’s how to get started.</p>
                            <div class="flex items-center">
                                <img class="w-10 h-10" :src="asset('project-assets/images/website/man.png')" alt="man">
                                <div class="ml-3">
                                    <p class="font-semibold text-sm text-ruby-900">Phoenix Baker</p>
                                    <p class="font-normal text-sm text-ruby-600">19 Jan 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xl:w-[384px] lg:w-[30%] w-full mt-12 lg:mt-0">
                        <img class="w-full h-auto mb-6" :src="asset('project-assets/images/website/blog-computer.jpg')" alt="blog">
                        <div>
                            <p class="text-sm font-semibold text-pearl-700 mb-4">Software Engineering</p>
                            <div class="flex justify-between items-center mb-2">
                                <h3 class="font-semibold text-2xl text-ruby-900">Building your API Stack</h3>
                                <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                            </div>
                            <p class="text-base font-normal leading-6 text-ruby-600 mb-6">The rise of RESTful APIs has been met by a rise in tools for creating, testing, and managing them.</p>
                            <div class="flex items-center">
                                <img class="w-10 h-10" :src="asset('project-assets/images/website/women2.svg')" alt="women">
                                <div class="ml-3">
                                    <p class="font-semibold text-sm text-ruby-900">Lana Steiner</p>
                                    <p class="font-normal text-sm text-ruby-600">18 Jan 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="md:hidden mt-12 block h-12 text-white w-full text-lg font-semibold bg-pearl-600 rounded-lg">View all posts</button>
            </div>
        </section>
        <section>
            <div class="container py-16">
                <div class="lg:flex justify-between">
                    <div class="lg:max-w-xl">
                        <h6 class="font-semibold text-4xl leading-[55px] text-ruby-900 mb-5">Join over 4,000+ startups growing with Untitled</h6>
                        <p class="font-normal text-lg text-ruby-600 mb-10">Start your 30-day free trial today.</p>
                        <div class="md:flex items-center">
                            <button class="py-3 md:px-5 w-full md:w-auto text-white text-base font-semibold bg-pearl-600 rounded-lg md:order-last mt-8 md:mt-0 mb-4 md:mb-0 md:ml-3">Get started</button>
                            <button class="bg-white py-3 md:px-5 w-full md:w-auto text-ruby-700 text-base font-semibold border border-[#D0D5DD] rounded-lg" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">Learn more</button>
                        </div>
                    </div>
                    <div class="flex gap-8 xl:block">
                        <div class="xl:flex mb-6 gap-8 mt-12 lg:mt-0">
                            <img class="w-[156px] h-auto" :src="asset('project-assets/images/website/logo/epicurious-logo.png')" alt="logo">
                            <img class="w-[168px] h-auto my-8 xl:my-0" :src="asset('project-assets/images/website/logo/cloudwatch-logo.png')" alt="logo">
                            <img class="w-[168px] h-auto" :src="asset('project-assets/images/website/logo/acmecorp-logo.png')" alt="logo">
                        </div>
                        <div class="xl:flex mb-6 gap-8 mt-12 lg:mt-0">
                            <img class="w-[148px] h-auto" :src="asset('project-assets/images/website/logo/polymath-logo.png')" alt="logo">
                            <img class="w-[149px] h-auto my-8 xl:my-0" :src="asset('project-assets/images/website/logo/altshift-logo.png')" alt="logo">
                            <img class="w-[146px] h-auto" :src="asset('project-assets/images/website/logo/luminous-logo.png')" alt="logo">
                        </div>
                        <div class="xl:flex hidden gap-8">
                            <img class="w-[166px] h-auto" :src="asset('project-assets/images/website/logo/focalpoint-logo.png')" alt="logo">
                            <img class="w-[125px] h-auto" :src="asset('project-assets/images/website/logo/galileo-logo.png')" alt="logo">
                            <img class="w-[151px] h-auto" :src="asset('project-assets/images/website/logo/nietzsche-logo.png')" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="py-16 bg-ruby-50">
            <div class="container md:flex justify-between">
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
        </div>
        <div class="bg-ruby-800">
            <div class="container">
                <div class="md:flex justify-between py-16 border-ruby-600 border-b">
                    <div>
                        <h6 class="text-3xl font-semibold text-white mb-4">Start your 30-day free trial</h6>
                        <p class="font-normal text-ruby-200 text-xl">Join over 4,000+ startups already growing with Untitled.</p>
                    </div>
                    <div class="md:flex items-center max-w-[370px] md:max-w-full">
                        <button class="py-3 md:px-5 w-full md:w-auto text-white text-base font-semibold bg-pearl-600 rounded-lg md:order-last mt-8 md:mt-0 mb-4 md:mb-0 md:ml-3">Get started</button>
                        <button class="bg-white w-full py-3 md:px-5 md:w-auto text-ruby-700 text-base font-semibold border border-[#D0D5DD] rounded-lg" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">Chat to us</button>
                    </div>
                </div>
                <div class="sm:flex justify-between border-ruby-600 border-t pt-8 pb-12">
                    <div class="gap-4 flex sm:order-last mt-8 sm:mt-0 md:ml-3">
                        <a href="/privacy-policy" class="font-normal text-base text-ruby-300">Privacy Policy</a>
                        <a href="/terms-and-conditions" class="font-normal text-base text-ruby-300">Terms & Conditions</a>
                        <a href="https://www.linkedin.com/company/noetic-it-services/" target="_blank" class="bg-no-repeat bg-contain w-6 h-6 inline-block" style="background-image: url(project-assets/images/website/icons/linkden-icon.svg);"></a>
                    </div>
                    <p class="font-normal text-base mt-6 sm:mt-0 text-ruby-300">© 2023 Nits Editor. A unit of <a href="https://www.noeticitservices.com" target="_blank">Noetic IT Services</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</template>
