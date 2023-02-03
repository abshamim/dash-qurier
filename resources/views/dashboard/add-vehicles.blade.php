<x-master>
    <section class="bg-[#E5E5E5] w-full">
        {{-- Shipment form Header part --}}

        <div class="bg-[#100937] px-8 py-7 h-52">
            <h1 class="text-white text-2xl font-bold">Vehicles</h1>
            <ul class="flex items-center mt-2">
                <li><a href="#" class="text-[#A2A6AA] text-sm font-semibold">Shipments</a></li>
                <img src="/images/icons/rightArrow.svg" alt="" class="mx-4">
                <li><a href="#" class="text-white text-sm font-semibold">Add Vehicles</a></li>
            </ul>
        </div>

        <div class="bg-white mx-8 px-7 py-7 -mt-[85px]">
            <div class="flex items-center mb-7">
                <h1 class="mr-2 text-lg font-bold">Add Vehicles</h1>
                <img src="/images/icons/info-circle.svg" alt="">
            </div>

            <div class="">
                <form class="w-full min-w-max">
                    <div class="w-full mb-6">
                        <label class="block tracking-wide text-[#ACB5BB] text-xs font-bold mb-2" for="grid-first-name">Add Driver Name</label>
                        <input class="appearance-none block w-full text-black placeholder:text-black border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-sm" id="grid-first-name" type="text" placeholder="Ratul Ahmed">
                      </div>

                      <div class="w-full mb-6">
                        <label class="block tracking-wide text-[#ACB5BB] text-xs font-bold mb-2" for="grid-first-name">Driver  Email  Address</label>
                        <input class="appearance-none block w-full text-black placeholder:text-black border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-sm" id="grid-first-name" type="text" placeholder="rahmed357@gmail.com">
                      </div>

                    <div class="flex -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block tracking-wide text-[#ACB5BB] text-xs font-bold mb-2" for="grid-first-name">Driver ID</label>
                        <input class="appearance-none block w-full text-black placeholder:text-black border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-sm" id="grid-first-name" type="text" placeholder="248438635">
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block tracking-wide text-[#ACB5BB] text-xs font-bold mb-2" for="grid-last-name">Driver Address</label>
                        <input class="appearance-none block w-full text-black placeholder:text-black border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-sm" id="grid-last-name" type="text" placeholder="Kushtia, Bheramara">
                      </div>
                    </div>

                    <div class="flex -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                          <label class="block tracking-wide text-[#ACB5BB] text-xs font-bold mb-2" for="grid-first-name">Vehicles Id</label>
                          <input class="appearance-none block w-full text-black placeholder:text-black border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-sm" id="grid-first-name" type="text" placeholder="248438635">
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                          <label class="block tracking-wide text-[#ACB5BB] text-xs font-bold mb-2" for="grid-last-name">Address</label>
                          <input class="appearance-none block w-full text-black placeholder:text-black border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-sm" id="grid-last-name" type="text" placeholder="Kushtia, Bheramara">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block tracking-wide text-[#ACB5BB] text-xs font-bold mb-2" for="grid-state">Status</label>
                            <div class="relative">
                              <select class="appearance-none block w-full text-black placeholder:text-black border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-sm" id="grid-state">
                                <option>Active</option>
                                <option>Active</option>
                                <option>Active</option>
                              </select>
                            </div>
                          </div>

                        <div class="w-full md:w-1/2 px-3 mb-6">
                            <label class="block tracking-wide text-[#ACB5BB] text-xs font-bold mb-2" for="grid-state">Hub</label>
                            <div class="relative">
                            <select class="appearance-none block w-full text-black placeholder:text-black border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white text-sm" id="grid-state">
                                <option>Bheramara</option>
                                <option>Bheramara</option>
                                <option>Bheramara</option>
                            </select>
                        </div>
                    </div>

                    <div class="border-b border-[#EDF1F3] w-full mx-3"></div>

                    <div class="flex px-3 mt-9">
                        <button class="px-5 py-2 brand-blue border border-[#5329FF] font-bold text-white mr-4">Add Vehicles</button>
                        <a href="#" class="px-5 py-2 border border-gray-400 font-bold">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-master>
