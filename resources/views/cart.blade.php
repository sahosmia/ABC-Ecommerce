<x-layout>

    <div class="container mb-20">

        {{-- header  --}}


        <x-header>Cart List</x-header>

        {{-- filter --}}
        <div class="flex justify-between border my-2 p-2 rounded bg-utility-white_background">
            <h4 class="text-sm font-medium">Total Amount (20 item) </h4>
            <h4 class="text-sm font-medium">5842 TK</h4>
        </div>

        {{-- product  --}}
        <div class="space-y-2 mb-3">
            <x-product icon="delete" />
            <x-product icon="delete" />
            <x-product icon="delete" />
        </div>

        {{-- Place Order Button  --}}
        <div class="center mt-10">
            <button class="button">Place Order</button>
        </div>
    </div>

  
</x-layout>
