<x-layout>
    <div class="container mb-20">
        {{-- header  --}}
        <x-header>Orders</x-header>

        {{-- filter --}}

        <div class="flex items-center gap-1 p-2 my-2 border rounded flex-nowrap">
            <x-search-input placeholder="Search by Id" class="!w-40" />
            <div
                class="relative text-xs md:text-sm flex items-center justify-center  rounded-full bg-primary text-utility-white_background h-7 w-7 md:h-9 md:w-9">
                <!-- Calendar Icon -->
                <label for="date" class="cursor-pointer ">
                    <i class="fa-regular fa-calendar-days"></i>
                </label>

                <!-- Hidden Date Input -->
                <input type="date" id="date" class="absolute inset-0 opacity-0 cursor-pointer">
            </div>

            <select name="customer" id="customer"
                class="px-2 md:px-3 py-1 md:py-2 text-xs md:text-sm font-medium transition duration-300 border rounded shadow-sm appearance-none cursor-pointer bg-primary placeholder:text-slate-400 text-utility-light_background border-slate-100 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 focus:shadow-md ">

                <option value="">customer 1 </option>
                <option value="">customer 2 </option>
                <option value="">customer 3 </option>
                <option value="">customer 4 </option>
            </select>

            <button type="submit"
                class="text-xs md:text-sm rounded-full bg-primary text-utility-white_background h-7 w-7 md:w-9 md:h-9 "><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </div>

        {{-- Table  --}}
        <div class="relative overflow-x-auto shadow-sm  mb-2 md:mb-3">
            <table class="w-full text-xs  md:text-sm text-left text-gray-500 ">
                <thead class="text-xs md:text-sm text-gray-700 bg-gray-50 ">
                    <tr>
                        <th scope="col" class="p-2">
                            SL
                        </th>
                        <th scope="col" class="p-2">
                            Outlet
                        </th>
                        <th scope="col" class="p-2 whitespace-nowrap">
                            Order Info
                        </th>
                        <th scope="col" class="p-2 whitespace-nowrap">
                            Route Name
                        </th>
                        <th scope="col" class="p-2">
                            Amount
                        </th>
                        <th scope="col" class="p-2">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="border-b odd:bg-white even:bg-gray-50 ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000 TK
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>

                </tbody>
            </table>
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
