<x-layout>

    <div class="container mb-20">

        {{-- header  --}}
        <x-header>Product</x-header>
        {{-- filter --}}

        <form class="flex items-center gap-1 p-2 md:p-3 my-4 bg-white rounded-lg shadow-sm flex-nowrap">


            <x-search-input placeholder="Search by Id" class="!w-10" />

            <select name="category" id="category"
                class="px-2 md:px-3 py-1 md:py-2 text-xs md:text-sm font-medium transition duration-300 border rounded shadow-sm appearance-none cursor-pointer bg-primary placeholder:text-slate-400 text-utility-light_background border-slate-100 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 focus:shadow-md ">

                <option value="">category 1 </option>
                <option value="">category 2 </option>
                <option value="">category 3 </option>
                <option value="">category 4 </option>
            </select>
            <select name="brand" id="brand"
                class="px-2 md:px-3 py-1 md:py-2 text-xs md:text-sm font-medium transition duration-300 border rounded shadow-sm appearance-none cursor-pointer bg-primary placeholder:text-slate-400 text-utility-light_background border-slate-100 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 focus:shadow-md ">
                <option value="">brand 1 </option>
                <option value="">brand 2 </option>
                <option value="">brand 3 </option>
                <option value="">brand 4 </option>
            </select>

            <button type="submit"
                class="text-xs md:text-sm rounded-full bg-primary text-utility-white_background h-7 w-7 md:w-9 md:h-9 "><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        {{-- product  --}}
        <div class="mb-3 space-y-2">
            <x-product id="product1" title="Product" />
            <x-product id="2" title="Product" />
            <x-product id="3" title="Product" />
            <x-product id="4" title="Product" />
        </div>




        {{-- pagination  --}}

        <div class="flex justify-center gap-2 md:gap-3 p-2 md:p-3 shadow-sm bg-utility-white_background rounded-lg ">
            <a class="flex items-center justify-center h-6 md:h-7 md:w-7 text-xs md:text-sm md:font-medium rounded-full bg-utility-light_background w-fit min-w-6 text-primary drop-shadow"
                href="">1</a>
            <a class="flex items-center justify-center h-6 md:h-7 md:w-7 text-xs md:text-sm md:font-medium rounded-full bg-primary w-fit min-w-6 text-utility-light_background drop-shadow"
                href="">2</a>
            <a class="flex items-center justify-center h-6 md:h-7 md:w-7 text-xs md:text-sm md:font-medium rounded-full bg-utility-light_background w-fit min-w-6 text-primary drop-shadow"
                href="">3</a>
            <a class="flex items-center justify-center h-6 md:h-7 md:w-7 text-xs md:text-sm md:font-medium rounded-full bg-utility-light_background w-fit min-w-6 text-primary drop-shadow"
                href="">4</a>
            <a class="flex items-center justify-center h-6 md:h-7 md:w-7 text-xs md:text-sm md:font-medium rounded-full bg-utility-light_background w-fit min-w-6 text-primary drop-shadow"
                href="">5</a>
            <a class="flex items-center justify-center h-6 md:h-7 md:w-7 text-xs md:text-sm md:font-medium rounded-full bg-utility-light_background w-fit min-w-6 text-primary drop-shadow"
                href="">6</a>
            <a class="flex items-center justify-center h-6 md:h-7 md:w-7 text-xs md:text-sm md:font-medium rounded-full bg-utility-light_background w-fit min-w-6 text-primary drop-shadow"
                href="">7</a>
        </div>
    </div>


</x-layout>
