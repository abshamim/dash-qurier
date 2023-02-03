<x-master>

    <div class="bg-[#E5E5E5] w-full px-8 py-7">
        <div class="flex items-center justify-between mb-[13px]">
            <div class="flex w-full">
                <div class="profile min-w-[500px] bg-white h-auto">
                    <div class="flex justify-between mb-2.5 py-8 px-10 border-gray-100 border-b">
                        <div class="flex justify-center items-center">
                            <div>
                                <img src="/images/icons/Ellipse 10.png" alt="">
                            </div>

                            <div class="ml-3.5">
                                <h1 class="text-xl text-[#100937] font-bold">Ratul Ahmed</h1>
                                <h1 class="text-gray-300 text-lg">Admin</h1>
                            </div>
                        </div>
                        <button class="px-[19px] py-3.5 base-color text-white font-[500] text-[13px]">Edit
                            Profile</button>
                    </div>
                    <div>
                        <div class="grid grid-cols-2 gap-7 pt-10 pl-10 pr-10 pb-2">
                            <div class="border-gray-100 border-b min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">First Name</h2>
                                <h1 class="text-base font-bold mb-2.5">Ratul</h1>
                            </div>
                            <div class="border-gray-100 border-b  min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">Last Name</h2>
                                <h1 class="text-base font-bold mb-2.5">Ahmed</h1>
                            </div>
                            <div class="border-gray-100 border-b  min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">Date of Birth</h2>
                                <h1 class="text-base font-bold mb-2.5">27/08/2001</h1>
                            </div>
                            <div class="border-gray-100 border-b  min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">Date of Joining</h2>
                                <h1 class="text-base font-bold mb-2.5">2/09/2022</h1>
                            </div>
                            <div class="border-gray-100 border-b  min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">Mobile Number</h2>
                                <h1 class="text-base font-bold mb-2.5">017 00 000 000</h1>
                            </div>
                            <div class="border-gray-100 border-b  min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">Email Address</h2>
                                <h1 class="text-base font-bold mb-2.5">rahmed357@gmail.com</h1>
                            </div>
                            <div class="border-gray-100 border-b min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">NID Card Number</h2>
                                <h1 class="text-base font-bold mb-2.5">5118284645637</h1>
                            </div>
                            <div class="border-gray-100 border-b  min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">Profile ID Number</h2>
                                <h1 class="text-base font-bold mb-2.5">#924862547</h1>
                            </div>
                            <div class="border-gray-100 border-b  min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">Address</h2>
                                <h1 class="text-base font-bold mb-2.5">Bheramara, Kushtia</h1>
                            </div>
                            <div class="border-gray-100 border-b  min-w-[164px] mb-8">
                                <h2 class="text-[13px] text-gray-600">Hub</h2>
                                <h1 class="text-base font-bold mb-2.5">Bheramara</h1>
                            </div>
                        </div>
                        <div class="mt-2 text-center mb-10 px-10">
                            <a class="py-6 block border border-gray-300 text-[#5329FF] font-bold mx-auto" href="#">See All Details</a>
                        </div>
                    </div>


                </div>
                <div class="summery-recent-activity w-full ml-7">
                    <div class="min-h-[325px] bg-white mb-7">
                        <div class="flex justify-between items-center p-8 ">
                            <h1 class="text-black text-lg font-bold w-[250px]">Weekly Transaction Summary</h1>
                            <div class="flex items-center min-w-max bg-white border-2 border-[#F5F5F5] ml-[11px] pr-3 ">
                                <input class="border-none date-ranger " placeholder="last 12 month" type="date"
                                    value="Last 12 Month">
                            </div>
                        </div>
                        <div>
                            <div id="stackedChart"></div>
                        </div>
                    </div>
                    <div class="bg-white">
                        <div class="flex justify-between items-center p-8  border-gray-100 border-b">
                            <h1 class="text-black text-lg font-bold w-[250px]">Recent Activity</h1>
                            <div class="flex items-center min-w-max bg-white border-2 border-[#F5F5F5] ml-[11px] pr-3">
                                <input class="border-none date-ranger" placeholder="last 12 month" type="date"
                                    value="Last 12 Month">
                            </div>
                        </div>

                        <div class="p-12">
                            <ol class="relative border-l border-[#E2E4E8] dark:border-[#E2E4E8]">
                                <li class="mb-10 ml-8">
                                    <div class="bg-[#E9E5FA] inline-block rounded-full p-3 mr-[10px] absolute -mt-[10px] -left-[22px]">
                                        <img src="/images/icons/clock.svg" alt="">
                                    </div>
                                    <time class="mb-1 text-sm font-normal text-[#100937]">Order #3256857 Got <strong>Cancelled</strong></time>
                                </li>
                                <li class="mb-10 ml-8">
                                    <div class="bg-[#E9E5FA] inline-block rounded-full p-3 mr-[10px] absolute -mt-[10px] -left-[22px]">
                                        <img src="/images/icons/clock.svg" alt="">
                                    </div>
                                    <time class="mb-1 text-sm font-normal text-[#100937]"> <strong>Sojol Ahmed </strong>was added as a Delivery Man ID#7641356</time>
                                </li>
                                <li class="mb-10 ml-8">
                                    <div class="bg-[#E9E5FA] inline-block rounded-full p-3 mr-[10px] absolute -mt-[10px] -left-[22px]">
                                        <img src="/images/icons/clock.svg" alt="">
                                    </div>
                                    <time class="mb-1 text-sm font-normal text-[#100937]">Order #3256857 Got <strong>Delivered</strong></time>
                                </li>
                                <li class="mb-10 ml-8">
                                    <div class="bg-[#E9E5FA] inline-block rounded-full p-3 mr-[10px] absolute -mt-[10px] -left-[22px]">
                                        <img src="/images/icons/clock.svg" alt="">
                                    </div>
                                    <time class="mb-1 text-sm font-normal text-[#100937]"><strong>Sojol Ahmed </strong>was added as a Delivery Man ID#7641356</time>
                                </li>
                            </ol>

                            <button class="brand-blue -ml-4 px-4 py-2 text-white font-bold text-[11px]">View All Activity</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-master>
