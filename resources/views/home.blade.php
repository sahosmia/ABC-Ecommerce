<x-layout>
    <div class="container">
        <div class=" bg-utility-white_background shadow-sm px-3 py-2 my-3 rounded-lg flex justify-between items-center">
            <div class="flex gap-2 items-center">
                <div>

                    <img src="{{ asset('assets/avatar.png') }}" alt=""
                        class="w-10 h-10 rounded-full border object-cover drop-shadow">
                </div>
                <div>
                    <h6 class="text-md font-semibold">Md Mehrab Hossain</h6>
                    <p class="text-xs/5 font-medium"><span>Mobile:</span> <span>01933616015,</span>
                        <span>Company:</span>
                        <span>Pusti</span>
                    </p>
                    <p class="text-xs/5 font-medium"><span>Date:</span> <span>01-12-24,</span> <span>Route:</span>
                        <span>Route 1</span>
                    </p>
                </div>
            </div>
            <div class="text-red-700">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </div>
        </div>

        <!-- Today Information -->
        <div class="pb-5 ">
            <h6 class="section-heading pb-2">Today Information</h6>
            <div class="grid grid-cols-3 gap-2 items-center">
                <x-home-box title="Order" amount="200" icon="fa-solid fa-chart-simple" />
                <x-home-box title="Order Amount" amount="90000" icon="fa-solid fa-chart-column" />
                <x-home-box title="New Customer" amount="30" icon="fa-solid fa-user" />
            </div>
        </div>

        <!-- Monthly Information -->
        <div class="pb-5">
            <h6 class="section-heading pb-2">Monthly Information</h6>
            <div class="grid grid-cols-3 gap-2 items-center">
                <x-home-box title="Order" amount="200" icon="fa-solid fa-chart-simple" />
                <x-home-box title="Order Amount" amount="90000" icon="fa-solid fa-chart-column" />
                <x-home-box title="New Customer" amount="30" icon="fa-solid fa-user" />

            </div>
        </div>
        <!-- Customer Information -->
        <div class="pb-5">
            <h6 class="section-heading pb-2">Customer Information</h6>
            <div class="grid grid-cols-3 gap-2 items-center">
                <x-home-box title="Customer List" amount="162" icon="fa-solid fa-users" />
                <x-home-box title="New Customer" amount="50" icon="fa-solid fa-user-plus" />
            </div>
        </div>

    </div>
</x-layout>
