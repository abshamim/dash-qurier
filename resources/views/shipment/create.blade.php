<x-master>
    <section class="bg-[#E5E5E5] w-full">
        {{-- Shipment form Header part --}}

        <div class="bg-[#100937] px-8 py-7 h-52">
            <h1 class="text-white text-2xl font-bold">Shipments</h1>
            <ul class="flex items-center mt-2">
                <li><a href="#" class="text-[#A2A6AA] text-sm font-semibold">Shipments</a></li>
                <img src="/images/icons/rightArrow.svg" alt="" class="mx-4">
                <li><a href="#" class="text-white text-sm font-semibold">Add Shipments</a></li>
            </ul>
        </div>

        <div class="bg-white mx-8 px-7 py-7 -mt-[85px]">
            <div class="flex items-center mb-7">
                <h1 class="mr-2 text-lg font-bold">Add Shipment</h1>
                <img src="/images/icons/info-circle.svg" alt="">
            </div>

            <div class="">

                <livewire:shipment-create />

            </div>
        </div>
    </section>

</x-master>
