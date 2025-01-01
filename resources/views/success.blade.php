<x-layout>
    <div class="container mb-20">
        {{-- header  --}}
        <x-header>Successfuly</x-header>


        <div class="flex flex-col justify-center items-center h-screen -mt-10">
            <h4 class="primary-heading-dark text-center mb-3 text-utility-title">Order Completed Succfully</h4>
            <div class=" bg-utility-white_background rounded-xl p-6 shadow-md text-center">
                <span
                    class=" w-16 h-16 bg-primary text-utility-white_background flex  justify-center items-center mx-auto mb-5 rounded-full text-xl"><i
                        class="fa-solid fa-check"></i></span>
                <h4 class="section-heading leading-tight text-utility-title">Order ID: #1234567</h4>
                <p class=" text-utility-text">If you want to order again please click Back to order Button.</p>
                <div class="center gap-1 mt-6">
                    <button class="button-small">Back To Product List</button>
                    <button class="button-small">Download Invoice</button>
                </div>
            </div>
        </div>

    </div>
</x-layout>
