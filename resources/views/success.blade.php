<x-layout>
    <div class="container mb-20">
        {{-- header  --}}
        <x-header>Successfuly</x-header>


        <div class="flex flex-col items-center justify-center h-screen -mt-10">
            <h4 class="mb-3 text-center primary-heading-dark text-utility-title">Order Completed Succfully</h4>
            <div class="p-6 text-center shadow-md bg-utility-white_background rounded-xl">
                <span
                    class="flex items-center justify-center w-16 h-16 mx-auto mb-5 text-xl rounded-full bg-primary text-utility-white_background"><i
                        class="fa-solid fa-check"></i></span>
                <h4 class="leading-tight section-heading text-utility-title">Order ID: #1234567</h4>
                <p class=" text-utility-text">If you want to order again please click Back to order Button.</p>
                <div class="gap-1 mt-6 center">
                    <button class="button-small">Back To Product List</button>
                    <button class="button-small">Download Invoice</button>
                </div>
            </div>
        </div>

    </div>
</x-layout>
