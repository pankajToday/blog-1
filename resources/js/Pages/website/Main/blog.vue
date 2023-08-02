<script setup>

</script>

<template>
    <header class="w-full md:py-6 py-5 border-b border-[#F2F4F7] font-inter">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="#" class="bg-no-repeat bg-contain w-[142px] h-8 md:w-36 md:h-9.5 lg:mr-10 md:mr-8 block" style="background-image: url(project-assets/images/website/logo/nits-logo.png);"></a>
                    <div class="hidden md:flex">
                        <a class="text-base text-[#475467] hover:text-[#7F56D9] font-semibold lg:mr-8 md:mr-4" href="#">Home</a>
                        <a href="#" class="flex items-center text-[#475467] hover:text-[#7F56D9] lg:mr-8 md:mr-4">
                            <span class="text-base  font-semibold">Products</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <a href="#" class="flex items-center text-[#475467] hover:text-[#7F56D9] lg:mr-8 md:mr-4">
                            <span class="text-base font-semibold">Resources</span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </a>
                        <a class="text-base text-[#475467] hover:text-[#7F56D9] font-semibold lg:mr-8 md:mr-4" href="#">Pricing</a>
                    </div>
                </div>
                <div class="md:flex hidden items-center gap-3">
                    <a class="text-base font-semibold py-2.5 px-[18px] rounded-lg text-[#475467] hover:bg-gray-100" href="#">Log in</a>
                    <a class="text-base text-white bg-[#7F56D9] font-semibold py-2.5 px-[18px] rounded-lg" href="#">Sign up</a>
                </div>
                <button class="p-2 rounded text-[#344054] md:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </header>
    <section class="font-inter">
        <div class="container">
            <div class="md:py-24 py-16">
                <p class="text-[#6941C6] text-sm md:text-base font-semibold mb-3">Our blog</p>
                <h1 class="text-[#101828] font-semibold text-4xl leading-44 md:leading-[60px] mb-4 md:mb-6">Resources and insights</h1>
                <p class="text-[#475467] text-lg font-normal">The latest industry news, interviews, technologies, and resources.</p>
            </div>
            <div class="md:flex lg:gap-16 md:gap-10 gap-5 justify-between md:mb-16 mb-12">
                <div class="lg:w-[280px] md:w-[200px] flex-shrink-0 hidden md:block">
                    <div class="relative mb-8">
                        <input class="w-full py-2.5 pl-10 pr-3.5 text-base leading-6 rounded-lg font-normal border border-[#D0D5DD]" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);" placeholder="Search" type="type">
                        <span class="bg-no-repeat bg-contain w-4 h-4 absolute top-3.5 left-4" style="background-image: url(project-assets/images/website/icons/search-icon.svg);"></span>
                    </div>
                    <div class="w-full">
                        <p class="text-[#6941C6] text-sm font-semibold mb-5">Blog categories</p>
                        <a class="w-full inline-block py-2.5 px-3.5 bg-[#F9FAFB] text-base font-semibold text-[#344054] rounded-md mb-1" href="#">View all</a>
                        <a class="w-full inline-block py-2.5 px-3.5 hover:bg-[#F9FAFB] text-base font-semibold text-[#667085] rounded-md mb-1" href="#">Design</a>
                        <a class="w-full inline-block py-2.5 px-3.5 hover:bg-[#F9FAFB] text-base font-semibold text-[#667085] rounded-md mb-1" href="#">Product</a>
                        <a class="w-full inline-block py-2.5 px-3.5 hover:bg-[#F9FAFB] text-base font-semibold text-[#667085] rounded-md mb-1" href="#">Software Engineering</a>
                        <a class="w-full inline-block py-2.5 px-3.5 hover:bg-[#F9FAFB] text-base font-semibold text-[#667085] rounded-md mb-1" href="#">Customer Success</a>
                        <a class="w-full inline-block py-2.5 px-3.5 hover:bg-[#F9FAFB] text-base font-semibold text-[#667085] rounded-md mb-1" href="#">Leadership</a>
                        <a class="w-full inline-block py-2.5 px-3.5 hover:bg-[#F9FAFB] text-base font-semibold text-[#667085] rounded-md mb-1" href="#">Management</a>
                    </div>
                </div>
                <!-- filter for mobile view start here  -->
                <div class="w-full md:hidden mb-12">
                    <select name="" class="w-full py-2.5 px-3.5 text-base leading-6 rounded-lg font-medium border border-[#D0D5DD]" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);" id="">
                        <option value="">View All</option>
                    </select>
                </div>
                <!-- filter for mobile view end  -->
                <div class="w-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12">
                        <div class="w-full lg:flex gap-8 md:col-span-2">
                            <div class="lg:w-[65%] md:w-full flex-shrink-0 mb-6 lg:mb-0">
                                <img class="w-full h-auto" src="project-assets/images/website/blog-banner-main.jpg" alt="blog">
                            </div>
                            <div class="w-full">
                                <div class="w-[140px] rounded-full bg-[#F9F5FF] p-1 flex items-center mb-4">
                                    <div class="bg-white rounded-full text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-2">Design</div>
                                    <div class="text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-1">8 min read</div>
                                </div>
                                <h2 class="text-xl leading-30 md:text-30 md:leading-38 font-semibold text-[#101828] mb-2 md:mb-3">UX review presentations</h2>
                                <p class="text-base font-normal leading-6 text-[#475467] mb-6">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
                                <div class="flex items-center">
                                    <img class="w-10 h-10" src="project-assets/images/website/women.png" alt="women">
                                    <div class="ml-3">
                                        <p class="font-semibold text-sm text-[#344054]">Olivia Rhye</p>
                                        <p class="font-normal text-sm text-[#475467]">20 Jan 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-Migrating.jpg" alt="blog">
                            <div>
                                <div class="w-[140px] rounded-full bg-[#F9F5FF] p-1 flex items-center mb-4">
                                    <div class="bg-white rounded-full text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-2">Design</div>
                                    <div class="text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-1">8 min read</div>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-semibold text-xl md:text-2xl text-[#101828]">Migrating to Linear 101</h3>
                                    <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                                </div>
                                <p class="text-base font-normal leading-6 text-[#475467] mb-6">Linear helps streamline software projects, sprints, tasks, and bug tracking. Here’s how to get started.</p>
                                <div class="flex items-center">
                                    <img class="w-10 h-10" src="project-assets/images/website/man.png" alt="man">
                                    <div class="ml-3">
                                        <p class="font-semibold text-sm text-[#344054]">Phoenix Baker</p>
                                        <p class="font-normal text-sm text-[#475467]">19 Jan 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-computer.jpg" alt="blog">
                            <div>
                                <div class="w-[140px] rounded-full bg-[#F9F5FF] p-1 flex items-center mb-4">
                                    <div class="bg-white rounded-full text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-2">Design</div>
                                    <div class="text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-1">8 min read</div>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-semibold text-xl md:text-2xl text-[#101828]">Building your API Stack</h3>
                                    <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                                </div>
                                <p class="text-base font-normal leading-6 text-[#475467] mb-6">The rise of RESTful APIs has been met by a rise in tools for creating, testing, and managing them.</p>
                                <div class="flex items-center">
                                    <img class="w-10 h-10" src="project-assets/images/website/women2.svg" alt="women">
                                    <div class="ml-3">
                                        <p class="font-semibold text-sm text-[#344054]">Lana Steiner</p>
                                        <p class="font-normal text-sm text-[#475467]">18 Jan 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-mountain.jpg" alt="blog">
                            <div>
                                <div class="w-[140px] rounded-full bg-[#F9F5FF] p-1 flex items-center mb-4">
                                    <div class="bg-white rounded-full text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-2">Design</div>
                                    <div class="text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-1">8 min read</div>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-semibold text-xl md:text-2xl text-[#101828]">Bill Walsh leadership lessons</h3>
                                    <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                                </div>
                                <p class="text-base font-normal leading-6 text-[#475467] mb-6">Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning Dynasty?</p>
                                <div class="flex items-center">
                                    <img class="w-10 h-10" src="project-assets/images/website/man3.png" alt="man">
                                    <div class="ml-3">
                                        <p class="font-semibold text-sm text-[#344054]">Alec Whitten</p>
                                        <p class="font-normal text-sm text-[#475467]">17 Jan 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-lecture.jpg" alt="blog">
                            <div>
                                <div class="w-[140px] rounded-full bg-[#F9F5FF] p-1 flex items-center mb-4">
                                    <div class="bg-white rounded-full text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-2">Design</div>
                                    <div class="text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-1">8 min read</div>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-semibold text-xl md:text-2xl text-[#101828]">What is Wireframing?</h3>
                                    <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                                </div>
                                <p class="text-base font-normal leading-6 text-[#475467] mb-6">Introduction to Wireframing and its Principles. Learn from the best in the industry.</p>
                                <div class="flex items-center">
                                    <img class="w-10 h-10" src="project-assets/images/website/women.png" alt="women">
                                    <div class="ml-3">
                                        <p class="font-semibold text-sm text-[#344054]">Phoenix Baker</p>
                                        <p class="font-normal text-sm text-[#475467]">20 Jan 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <img class="w-full h-auto mb-6" src="/project-assets/images/website/blog-dekstop.jpg" alt="blog">
                            <div>
                                <div class="w-[140px] rounded-full bg-[#F9F5FF] p-1 flex items-center mb-4">
                                    <div class="bg-white rounded-full text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-2">Design</div>
                                    <div class="text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-1">8 min read</div>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-semibold text-xl md:text-2xl text-[#101828]">What is Wireframing?</h3>
                                    <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                                </div>
                                <p class="text-base font-normal leading-6 text-[#475467] mb-6">Introduction to Wireframing and its Principles. Learn from the best in the industry.</p>
                                <div class="flex items-center">
                                    <img class="w-10 h-10" src="project-assets/images/website/women.png" alt="women">
                                    <div class="ml-3">
                                        <p class="font-semibold text-sm text-[#344054]">Phoenix Baker</p>
                                        <p class="font-normal text-sm text-[#475467]">20 Jan 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-man.jpg" alt="blog">
                            <div>
                                <div class="w-[140px] rounded-full bg-[#F9F5FF] p-1 flex items-center mb-4">
                                    <div class="bg-white rounded-full text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-2">Design</div>
                                    <div class="text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-1">8 min read</div>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-semibold text-xl md:text-2xl text-[#101828]">How collaboration makes us better designers</h3>
                                    <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                                </div>
                                <p class="text-base font-normal leading-6 text-[#475467] mb-6">Collaboration can make our teams stronger, and our individual designs better.</p>
                                <div class="flex items-center">
                                    <img class="w-10 h-10" src="project-assets/images/website/women.png" alt="women">
                                    <div class="ml-3">
                                        <p class="font-semibold text-sm text-[#344054]">Phoenix Baker</p>
                                        <p class="font-normal text-sm text-[#475467]">20 Jan 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-learn.jpg" alt="blog">
                            <div>
                                <div class="w-[140px] rounded-full bg-[#F9F5FF] p-1 flex items-center mb-4">
                                    <div class="bg-white rounded-full text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-2">Design</div>
                                    <div class="text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-1">8 min read</div>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-semibold text-xl md:text-2xl text-[#101828]">Our top 10 Javascript frameworks to use</h3>
                                    <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                                </div>
                                <p class="text-base font-normal leading-6 text-[#475467] mb-6">JavaScript frameworks make development easy with extensive features and functionalities.</p>
                                <div class="flex items-center">
                                    <img class="w-10 h-10" src="project-assets/images/website/women.png" alt="women">
                                    <div class="ml-3">
                                        <p class="font-semibold text-sm text-[#344054]">Phoenix Baker</p>
                                        <p class="font-normal text-sm text-[#475467]">20 Jan 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <img class="w-full h-auto mb-6" src="project-assets/images/website/blog-speak.jpg" alt="blog">
                            <div>
                                <div class="w-[140px] rounded-full bg-[#F9F5FF] p-1 flex items-center mb-4">
                                    <div class="bg-white rounded-full text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-2">Design</div>
                                    <div class="text-xs leading-18 font-semibold text-[#6941C6] py-0.5 px-1">8 min read</div>
                                </div>
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-semibold text-xl md:text-2xl text-[#101828]">Podcast: Creating a better CX Community</h3>
                                    <a href="#" class="w-2.5 h-2.5 bg-no-repeat bg-contain" style="background-image: url(project-assets/images/website/icons/arrow-icon.png);"></a>
                                </div>
                                <p class="text-base font-normal leading-6 text-[#475467] mb-6">Starting a community doesn’t need to be complicated, but how do you get started?</p>
                                <div class="flex items-center">
                                    <img class="w-10 h-10" src="project-assets/images/website/women.png" alt="women">
                                    <div class="ml-3">
                                        <p class="font-semibold text-sm text-[#344054]">Phoenix Baker</p>
                                        <p class="font-normal text-sm text-[#475467]">20 Jan 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-[#EAECF0] w-full flex justify-between items-start mb-24">
                <button class="mt-5 p-3 md:py-2 md:px-3.5 border rounded-lg border-[#D0D5DD] font-semibold text-sm flex items-center" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">
                    <span class="bg-no-repeat bg-contain w-3 h-3 inline-block rotate-180 md:mr-3" style="background-image: url(project-assets/images/website/icons/previous.svg);"></span>
                    <span class="hidden md:block">Previous</span>
                </button>
                <p class="md:hidden block text-sm font-medium mt-6">Page 1 of 10</p>
                <div class="md:flex items-center mt-5 gap-0.5 hidden">
                    <button class="w-10 h-10 bg-[#F9FAFB] text-sm font-medium text-[#344054] rounded-md">1</button>
                    <button class="w-10 h-10 hover:bg-[#F9FAFB] text-sm font-medium text-[#344054] rounded-md">2</button>
                    <button class="w-10 h-10 hover:bg-[#F9FAFB] text-sm font-medium text-[#344054] rounded-md">3</button>
                    <button class="w-10 h-10 hover:bg-[#F9FAFB] text-sm font-medium text-[#344054] rounded-md">...</button>
                    <button class="w-10 h-10 hover:bg-[#F9FAFB] text-sm font-medium text-[#344054] rounded-md">8</button>
                    <button class="w-10 h-10 hover:bg-[#F9FAFB] text-sm font-medium text-[#344054] rounded-md">9</button>
                    <button class="w-10 h-10 hover:bg-[#F9FAFB] text-sm font-medium text-[#344054] rounded-md">10</button>
                </div>
                <button class="mt-5 p-3 md:py-2 md:px-3.5 border rounded-lg border-[#D0D5DD] font-semibold text-sm flex items-center" style="box-shadow: 0px 1px 2px rgba(16, 24, 40, 0.05);">
                    <span class="hidden md:block">Next</span>
                    <span class="bg-no-repeat bg-contain w-3 h-3 inline-block md:ml-3" style="background-image: url(project-assets/images/website/icons/previous.svg);"></span>
                </button>
            </div>
        </div>
    </section>
    <footer class="bg-[#F9FAFB] w-full font-inter">
        <div class="container">
            <div class="md:py-24 py-16 lg:flex justify-between">
                <div>
                    <h5 class="text-30 md:text-4xl md:leading-44 font-semibold text-[#101828] mb-5">Sign up for our newsletter</h5>
                    <p class="text-lg md:leading-30 font-normal text-[#475467] sm:mb-8 md:mb-0">Be the first to know about releases and industry news and insights.</p>
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
