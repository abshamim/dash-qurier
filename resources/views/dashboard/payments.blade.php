<x-master>


    {{-- Table part --}}
    <div class="bg-[#E5E5E5] w-full px-8 py-5">
        <div class="flex my-5 mb-7">
            <div class="bg-white mr-7 chart p-5 w-3/5">
                <div class="flex justify-between ">
                    <h1 class="text-lg font-bold">Total Trends</h1>
                    <div class="flex items-center min-w-max bg-white border-2 border-gray-100 ml-[11px]">
                                <span class="pl-2 pr-1">
                                <img src="/images/icons/Calendar.svg" alt="">
                                </span>
                        <select class="py-[9px] border-none text-gray-600  focus:ring-0 focus:outline-none w-[140px]"
                                name="" id="">
                            <option>December</option>
                            <option value="Dec">Dec</option>
                            <option value="Asc">Asc</option>
                        </select>
                    </div>
                </div>
                <div class="chartBox">
                    <div id="myChart"></div>
                </div>
            </div>
            <div class="bg-white w-2/5  chart pl-[25px] pt-[19px] pr-[18px]">
                <div class="flex justify-between mb-[5px] ">
                    <h1 class="text-lg font-bold">Profit Sharing</h1>
                    <div class="flex items-center min-w-max bg-white border-2 border-gray-100 ml-[11px]">
                                <span class="pl-2">
                                <img src="/images/icons/Calendar.svg" alt="">
                                </span>
                        <select class="py-[9px] border-none text-gray-600  focus:ring-0 focus:outline-none w-[140px]"
                                name="" id="">
                            <option>December</option>
                            <option value="Dec">Dec</option>
                            <option value="Asc">Asc</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between items-center mb-5">
                    <div class="w-2/3">
                        <h2 class="text-sm text-[#718096]">Bkash, Debit & Credit</h2>
                        <h1 class="text-[32px] font-bold text-gray-900 ">$1,256</h1>
                        <h2 class="text-sm mb-2 text-[#5329FF]">+ 1,0% from last month</h2>
                    </div>
                    <div class="chart-bar w-24">
                        <div class="" id="barChart"></div>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-2/3">
                        <h2 class="text-sm mb-2 text-[#718096]">Bkash, Debit & Credit</h2>
                        <h1 class="text-[32px] font-bold text-gray-900 mb-2">$1,256</h1>
                        <h2 class="text-sm mb-2 text-[#5329FF]">+ 1,0% from last month</h2>
                    </div>
                    <div class="chart-bar w-24">
                        <div class="" id="barChart2"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex justify-between items-center">
            <div class="">
                <h1 class="text-[#100937] font-bold text-[22px]">Payment History</h1>
                <p class="text-gray-500 text-[14px]">June - 109 Payments Found</p>
            </div>
            <div class="flex items-center">
                <h2 class="text-gray-500 mr-3">Short By :-</h2>
                <div class=" bg-white border border-gray-300">
                    <img src="/images/icons/Paper.svg" width="30px" alt="" class="inline pl-3">
                    <select name="" id="" class="bg-transparent border-none focus:ring-0 -ml-2 text-gray-500 inline">
                        <option value="">All Orders</option>
                        <option value="">All Orders</option>
                        <option value="">All Orders</option>
                    </select>
                </div>
                <div class=" bg-white ml-3 border border-gray-300">
                    <img src="/images/icons/Calendar.svg" width="30px" alt="" class="inline pl-3">
                    <select name="" id="" class="bg-transparent border-none focus:ring-0 -ml-2 text-gray-500 inline">
                        <option value="">June</option>
                        <option value="">June</option>
                        <option value="">June</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <table class="w-full table-auto border-collapse border-spacing-0">
                <thead>
                    <tr class="brand-blue text-white font-semibold">
                        <th class="px-4 py-4 text-left">Booking Id</th>
                        <th class="px-4 py-4 text-left">Payment Id</th>
                        <th class="px-4 py-4 text-left">Name</th>
                        <th class="px-4 py-4 text-left">Date</th>
                        <th class="px-4 py-4 text-left">Type</th>
                        <th class="px-4 py-4 text-center">Amount</th>
                        <th class="px-4 py-4 text-left"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                    <tr class="bg-white text-gray-600 font-semibold text-[16px] border-t-[13px]">
                        <td class="px-4 py-4">126802736</td>
                        <td class="px-4 py-4">#3573257326</td>
                        <td class="px-4 py-4">Ratul Ahmed</td>
                        <td class="px-4 py-4">12-11-2023</td>
                        <td class="px-4 py-4">Bkash</td>
                        <td class="px-4 py-4">
                            <div class="flex justify-center">
                                <div class="flex justify-center border border-green-300 px-3 py-1">
                                    <img src="/images/icons/dollar.svg" alt="" class="mr-2">
                                <span class="text-green-500">1200</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <a href="#"><img src="/images/icons/More2.svg" alt=""></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex justify-between items-center mt-7">
            <div class="">
                <p class="text-gray-500 text-[16px]">Showing Results 10 of 109</p>
            </div>
            <div class="flex items-center">
                <img src="/images/icons/Stroke 1.svg" width="33px" class="bg-white border border-gray-300 py-2.5 px-3">

                <span class="bg-white ml-2 border border-gray-300 font-bold text-[#5329FF] text-[12px] px-3 py-2">10</span>

                <span class="text-gray-600 ml-2 text-[13px]">of 128</span>

                <img src="/images/icons/Stroke 2.svg" width="33px" class="bg-white border border-gray-300 ml-2 py-2.5 px-3">
            </div>
        </div>
    </div>
</x-master>
