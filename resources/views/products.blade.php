<x-layout>

    <div class="container mb-20">

        {{-- header  --}}
        <x-header>Product</x-header>
        {{-- filter --}}

        <form class="  gap-1 flex flex-nowrap  items-center my-4 p-2 bg-white rounded-lg shadow-sm">


            <x-search-input placeholder="Search by Id" class="!w-10" />

            <select name="category" id="category"
                class="text-xs font-medium bg-primary placeholder:text-slate-400 text-utility-light_background  border border-slate-100 rounded px-2  py-1 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer ">

                <option value="">category 1 </option>
                <option value="">category 2 </option>
                <option value="">category 3 </option>
                <option value="">category 4 </option>
            </select>
            <select name="brand" id="brand"
                class="text-xs font-medium bg-primary placeholder:text-slate-400 text-utility-light_background  border border-slate-100 rounded px-2  py-1 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer ">
                <option value="">brand 1 </option>
                <option value="">brand 2 </option>
                <option value="">brand 3 </option>
                <option value="">brand 4 </option>
            </select>

            <button type="submit" class="text-xs  bg-primary  text-utility-white_background h-7 w-7  rounded-full  "><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        {{-- product  --}}
        <div class="space-y-2 mb-3">
            <x-product id="product1" title="Product" />
            <x-product id="2" title="Product" />
            <x-product id="3" title="Product" />
            <x-product id="4" title="Product" />
        </div>




        {{-- pagination  --}}

        <div class="flex gap-2 bg-utility-white_background rounded-xl p-2 justify-center shadow ">
            <a class="rounded-full bg-utility-light_background  flex  justify-center items-center h-6 w-fit  min-w-6  text-primary text-xs drop-shadow"
                href="">1</a>
            <a class="rounded-full bg-primary  flex  justify-center items-center h-6 w-fit  min-w-6  text-utility-light_background text-xs drop-shadow"
                href="">2</a>
            <a class="rounded-full bg-utility-light_background  flex  justify-center items-center h-6 w-fit  min-w-6  text-primary text-xs drop-shadow"
                href="">3</a>
            <a class="rounded-full bg-utility-light_background  flex  justify-center items-center h-6 w-fit  min-w-6  text-primary text-xs drop-shadow"
                href="">4</a>
            <a class="rounded-full bg-utility-light_background  flex  justify-center items-center h-6 w-fit min-w-6  text-primary text-xs drop-shadow"
                href="">5</a>
            <a class="rounded-full bg-utility-light_background  flex  justify-center items-center h-6 w-fit  min-w-6  text-primary text-xs drop-shadow"
                href="">6</a>
            <a class="rounded-full bg-utility-light_background  flex  justify-center items-center h-6 w-fit  min-w-6  text-primary text-xs drop-shadow"
                href="">7</a>
        </div>
    </div>


</x-layout>
