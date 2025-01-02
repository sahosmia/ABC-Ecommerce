<x-layout>

    <div class="container mb-20">

        {{-- header  --}}
        <x-header>Checkout</x-header>


        {{-- Customer Search --}}
        <div class="flex gap-2 p-2 md:p-3 mt-2 border rounded shadow-sm bg-utility-white_background">
            <x-search-input placeholder="Phone Number, Outlet Id" class="!w-40" />
            <button class="button-small">New Customer</button>
        </div>


        {{-- Customer Information  --}}
        <div
            class="flex justify-between p-2 md:p-3 my-2 md:my-3 text-xs md:text-sm rounded shadow-sm bg-utility-white_background">
            <div class="max-md:flex-1">
                <h4 class="font-medium">Outlet ID: 123456</h4>
                <p>Outlet Name: Ratri Store</p>
                <p>Route Name: Boro Bazar</p>

            </div>
            <div class="max-md:flex-1">
                <h4 class="font-medium">Provider: Md Mehrab Hossain</h4>
                <p>Mobile: 01933616015</p>
                <p>Address: Mirpur 11, Section, Dhaka</p>
            </div>
        </div>

        {{-- product  --}}
        <div class="mb-3 space-y-2">
            <x-product icon="delete" />
            <x-product icon="delete" />
            <x-product icon="delete" />
        </div>

        <div class="flex justify-between mt-2 text-sm md:text-lg font-medium">
            <h4>Total Amount (20 item) </h4>
            <h4>5842 TK</h4>
        </div>

        {{-- Place Order Button  --}}
        <div class="mt-10 center ">
            <button class="button">Confirm Order</button>
        </div>
    </div>

</x-layout>
