<x-layout>

    <div class="container mb-20">
        <x-header>Cart List</x-header>

        <div
            class="text-sm md:text-base font-medium flex justify-between p-2 md:p-3 my-2 md:my-3 border rounded bg-utility-white_background">
            <h4>Total Amount (20 item) </h4>
            <h4>5842 TK</h4>
        </div>

        {{-- product  --}}
        <div class="mb-3 space-y-2">
            <x-product icon="delete" />
            <x-product icon="delete" />
            <x-product icon="delete" />
        </div>

        {{-- Place Order Button  --}}
        <div class="mt-8 center">
            <button class="button">Place Order</button>
        </div>
    </div>


</x-layout>
