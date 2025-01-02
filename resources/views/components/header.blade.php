<div class="flex items-center justify-between pb-2 mt-2 border-b border-utility-border">
    <div class="flex gap-2 center">
        <h4 class="font-semibold">{{ $slot }}</h4>
        <h4 class="text-xs md:text-sm font-medium">(12-01-2025)</h4>
    </div>
    <div class="flex gap-1">

        <select name="route" id="route"
            class="px-2 py-1 text-sm font-medium transition duration-300 border rounded shadow-sm appearance-none cursor-pointer placeholder:text-slate-400 text-primary border-slate-100 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 focus:shadow-md ">

            <option value="">route 1 </option>
            <option value="">route 2 </option>
            <option value="">route 3 </option>
            <option value="">route 4 </option>
        </select>

        <select name="company" id="company"
            class="px-2 py-1 text-sm font-medium transition duration-300 border rounded shadow-sm appearance-none cursor-pointer placeholder:text-slate-400 text-primary border-slate-100 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 focus:shadow-md ">

            <option value="">company 1 </option>
            <option value="">company 2 </option>
            <option value="">company 3 </option>
            <option value="">company 4 </option>
        </select>
    </div>
</div>
