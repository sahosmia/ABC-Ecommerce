<div class="flex justify-between items-center mt-2 border-b border-utility-border pb-2">
    <div class="center flex gap-2">
        <h4 class="font-semibold">{{ $slot }}</h4>
        <h4 class="text-xs font-medium">(12-01-2025)</h4>
    </div>
    <div class="flex gap-1">

        <select name="route" id="route"
            class="text-sm font-medium  placeholder:text-slate-400 text-primary  border border-slate-100 rounded px-2  py-1 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer ">

            <option value="">route 1 </option>
            <option value="">route 2 </option>
            <option value="">route 3 </option>
            <option value="">route 4 </option>
        </select>

        <select name="company" id="company"
            class="text-sm font-medium  placeholder:text-slate-400 text-primary  border border-slate-100 rounded px-2  py-1 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer ">

            <option value="">company 1 </option>
            <option value="">company 2 </option>
            <option value="">company 3 </option>
            <option value="">company 4 </option>
        </select>
    </div>
</div>
