<x-layout>
    <div class="container">
        <div
            class="flex items-center justify-between px-3 py-2 my-3 rounded-lg shadow-sm bg-utility-white_background md:px-5 md:py-4 md:my-4 md:rounded-xl">
            <div class="flex items-center gap-2">
                <div>

                    <img src="{{ asset('assets/avatar.png') }}" alt=""
                        class="object-cover w-10 h-10 border rounded-full drop-shadow md:w-12 md:h-12">
                </div>
                <div>
                    <h6 class="font-semibold md:text-lg">Md Mehrab Hossain</h6>
                    <p class="font-medium md:font-normal text-xs/5 md:text-sm/6">
                        <span>Mobile: 01933616015,</span>
                        <span>Company: Pusti</span>
                    </p>
                    <p class="font-medium md:font-normal text-xs/5 md:text-sm/6">
                        <span>Date: 01-12-24,</span>
                        <span>Route: Route 1</span>
                    </p>
                </div>
            </div>
            <div class="text-red-700 md:text-xl">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </div>
        </div>

        <!-- Today Information -->
        <div class="pb-5 ">
            <h6 class="pb-2 section-heading">Today Information</h6>
            <div class="grid items-center grid-cols-3 gap-2 md:gap-3">
                <x-home-box title="Order" amount="200" icon="fa-solid fa-chart-simple" />
                <x-home-box title="Order Amount" amount="90000" icon="fa-solid fa-chart-column" />
                <x-home-box title="New Customer" amount="30" icon="fa-solid fa-user" />
            </div>
        </div>

        <!-- Monthly Information -->
        <div class="pb-5">
            <h6 class="pb-2 section-heading">Monthly Information</h6>
            <div class="grid items-center grid-cols-3 gap-2 md:gap-3">
                <x-home-box title="Order" amount="200" icon="fa-solid fa-chart-simple" />
                <x-home-box title="Order Amount" amount="90000" icon="fa-solid fa-chart-column" />
                <x-home-box title="New Customer" amount="30" icon="fa-solid fa-user" />

            </div>
        </div>
        <!-- Customer Information -->
        <div class="pb-5">
            <h6 class="pb-2 section-heading">Customer Information</h6>
            <div class="grid items-center grid-cols-3 gap-2 md:gap-3">
                <x-home-box title="Customer List" amount="162" icon="fa-solid fa-users" />
                <x-home-box title="New Customer" amount="50" icon="fa-solid fa-user-plus" />
            </div>
        </div>

    </div>
</x-layout>
