<x-layout>

    <div class="container mb-20">

        {{-- header  --}}
        <x-header>Checkout</x-header>


        {{-- Customer Search --}}
        <div class="flex gap-1  border bg-utility-white_background p-2 mt-2 rounded shadow-sm">
            <input type="text" placeholder="Phone Number, Outlet Id"
                class="text-sm sm:w-auto flex-grow border border-gray-800 rounded-lg placeholder:text-gray-400 text-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition duration-300 ease-in-out p-2">
            <button class="button-small">New Customer</button>
        </div>


        {{-- Customer Information  --}}
        <div class="flex justify-between text-xs my-2 bg-utility-white_background rounded p-2 shadow-sm">
            <div class="flex-1">
                <h4 class="font-medium">Outlet ID: 123456</h4>
                <p>Outlet Name: Ratri Store</p>
                <p>Route Name: Boro Bazar</p>

            </div>
            <div class="flex-1">
                <h4 class="font-medium">Provider: Md Mehrab Hossain</h4>
                <p>Mobile: 01933616015</p>
                <p>Address: Mirpur 11, Section, Dhaka</p>
            </div>
        </div>

        {{-- product  --}}
        <div class="space-y-2 mb-3">
            <x-product icon="delete" />
            <x-product icon="delete" />
            <x-product icon="delete" />
        </div>

        <div class="flex justify-between mt-2">
            <h4 class="text-sm font-medium">Total Amount (20 item) </h4>
            <h4 class="text-sm font-medium">5842 TK</h4>
        </div>

        {{-- Place Order Button  --}}
        <div class="center mt-10 ">
            <button class="button">Confirm Order</button>
        </div>
    </div>

    <script>
        const buttonMinus = document.getElementById('button-minus');
        const buttonPlus = document.getElementById('button-plus');
        const quantityValue = document.getElementById('quantity-value');

        buttonMinus.addEventListener('click', function() {
            quantityValue.value = quantityValue.value - 1
        })
        // FIXME: Plus is not working for integers to string
        buttonPlus.addEventListener('click', function() {
            quantityValue.value = quantityValue.value + 1
        })
    </script>
</x-layout>
