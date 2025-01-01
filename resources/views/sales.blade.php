<x-layout>
    <div class="container">
        {{-- header  --}}
        <x-header>Orders</x-header>

        {{-- filter --}}

        <div class="flex flex-nowrap my-2 gap-1 items-center border rounded p-2">
            <x-search-input placeholder="Search by Id" class="w-40" />
            <div
                class="text-xs bg-primary text-utility-white_background h-7 w-7 rounded-full flex justify-center items-center relative">
                <!-- Calendar Icon -->
                <label for="date" class="cursor-pointer">
                    <i class="fa-regular fa-calendar-days"></i>
                </label>

                <!-- Hidden Date Input -->
                <input type="date" id="date" class="absolute  inset-0 opacity-0 cursor-pointer">
            </div>

            <select name="customer" id="customer"
                class="text-xs font-medium bg-primary placeholder:text-slate-400 text-utility-light_background  border border-slate-100 rounded px-2  py-1 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer ">

                <option value="">customer 1 </option>
                <option value="">customer 2 </option>
                <option value="">customer 3 </option>
                <option value="">customer 4 </option>
            </select>

            <button type="submit" class="text-xs  bg-primary  text-utility-white_background h-7 w-7  rounded-full  "><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </div>

        {{-- Table  --}}



        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-xs text-left  text-gray-500 ">
                <thead class="text-xs text-gray-700  bg-gray-50  ">
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
                    <tr class="odd:bg-white  even:bg-gray-50  border-b ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white  even:bg-gray-50  border-b ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white  even:bg-gray-50  border-b ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white  even:bg-gray-50  border-b ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white  even:bg-gray-50  border-b ">
                        <th class="p-2">
                            <input type="checkbox">
                        </th>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">Rafi Store</span>
                            <span class="block">ID: 21345</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            <span class="block">OrderId: #12345</span>
                            <span class="block">Date: 12-12-24</span>
                        </td>
                        <td class="p-2  whitespace-nowrap">
                            Route 1
                        </td>
                        <td class="p-2">
                            3000
                        </td>
                        <td class="p-2">
                            <a href="#" class="font-medium text-primary"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</x-layout>
