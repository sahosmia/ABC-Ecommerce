@props(['amount', 'icon', 'title'])
<div class="px-3 py-2 rounded shadow md:px-5 md:py-3 bg-utility-white_background">
    <div class="flex items-center justify-between gap-4 md:pb-2">
        <span class="text-primary md:text-xl">
            <i class="{{ $icon }}"></i>
        </span>
        <h6 class="font-semibold md:text-xl">{{ $amount }}</h6>
    </div>
    <p class="text-xs font-medium leading-5 md:text-base text-slate-400 md:text-slate-500">{{ $title }}</p>
</div>
