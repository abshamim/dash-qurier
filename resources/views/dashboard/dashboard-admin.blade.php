<x-master>
    <div class="w-full">
        <div class="bg-[#100937] min-h-[110px] flex px-[30px] justify-between items-center">
            <div class="flex items-center">
                <div class="mr-5">
                    <img src="/images/icons/Ellipse 10.png" alt="">
                </div>
                <div class="">
                    <h1 class="text-white font-medium mb-2">Welcome back, Ratul Ahmed 👏🏻</h1>
                    <h2 class="text-[#A2A6AA] font-medium">Dashboard</h2>
                </div>
            </div>
            <div>
                <div class="flex items-center bg-white px-5 py-3 bg-opacity-[7%] rounded-full">
                    <a class="mr-5 " href=""><img src="/images/icons/calw.svg" alt=""></a>
                    <p class="text-white font-semibold">Oct 22,2022</p>
                </div>
            </div>
        </div>
        <div class="bg-[#E5E5E5] w-full px-8 py-5">
            <div class="flex my-5">
                <div class="bg-white mr-7 chart p-5 w-3/5">
                    <div class="flex justify-between items-center">
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
                    <div class="flex justify-between items-center mb-5 ">
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

            <div class="flex my-5">
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
                <div class="bg-white w-2/5 chart pl-[25px] pt-[19px] pr-[18px]">
                    <div class="flex justify-between items-center mb-5">
                        <h1 class="text-lg font-bold">Recent Shipment History</h1>
                        <div class="flex items-center min-w-max bg-white border-2 border-gray-100 ml-[11px]">
                                    <span class="pl-2">
                                    <img src="/images/icons/Calendar.svg" alt="">
                                    </span>
                            <select class="py-[9px] border-none text-gray-600  focus:ring-0 focus:outline-none w-[140px]" name="" id="">
                                <option>December</option>
                                <option value="Dec">Dec</option>
                                <option value="Asc">Asc</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-5">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="text-gray-500 font-semibold border-b border-t border-gray-200">
                                    <th class="py-4 text-left">Id</th>
                                    <th class="py-4 text-left">Hub</th>
                                    <th class="py-4 text-left">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white text-gray-600 font-semibold text-[16px] border-b border-gray-200">
                                    <td class="py-4">126802736</td>
                                    <td class="py-4">Hub Manager</td>
                                    <td class="py-4">
                                        <div class="flex">
                                            <div class="flex justify-center border border-green-300 px-3 py-1">
                                                <img src="/images/icons/Tick.svg" alt="" class="mr-2">
                                            <span class="">Delivered</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white text-gray-600 font-semibold text-[16px] border-b border-gray-200">
                                    <td class="py-4">126802736</td>
                                    <td class="py-4">Hub Manager</td>
                                    <td class="py-4">
                                        <div class="flex">
                                            <div class="flex justify-center border border-green-300 px-3 py-1">
                                                <img src="/images/icons/Tick.svg" alt="" class="mr-2">
                                            <span class="">Delivered</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white text-gray-600 font-semibold text-[16px] border-b border-gray-200">
                                    <td class="py-4">126802736</td>
                                    <td class="py-4">Hub Manager</td>
                                    <td class="py-4">
                                        <div class="flex">
                                            <div class="flex justify-center border border-green-300 px-3 py-1">
                                                <img src="/images/icons/Tick.svg" alt="" class="mr-2">
                                            <span class="">Delivered</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <button class="brand-blue my-5 px-4 py-2 text-white font-bold text-[11px]">View All</button>
                    </div>
                </div>
        </div>
    </div>
</x-master>
