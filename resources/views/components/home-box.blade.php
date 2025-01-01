@props(['amount', 'icon', 'title'])
<div class="rounded  px-3 py-2 bg-utility-white_background shadow">
    <div class="flex justify-between gap-4 items-center">
        <span class="text-primary">

            <i class="{{ $icon }}"></i>
        </span>
        <h6 class="section-heading">{{ $amount }}</h6>
    </div>
    <p class="text-xs leading-5 font-medium text-slate-400">{{ $title }}</p>
</div>
