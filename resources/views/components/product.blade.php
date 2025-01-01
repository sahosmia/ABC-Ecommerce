@props([
    'id' => uniqid(),
    'title' => 'Product Title',
    'price' => '200',
    'category' => 'Phone',
    'brand' => 'Apple',
    'icon' => 'add',
    'maxStock' => 20,
    'quantity' => 1,
])

<div id="product-{{ $id }}"
    class="rounded-lg shadow-sm flex justify-between items-center p-2 bg-utility-white_background">
    <div class="flex items-center justify-center gap-3">
        <img src="{{ asset('assets/1.jpg') }}" alt="" class="w-14 h-14 rounded-lg border drop-shadow-sm">
        <div>
            <h4 class="font-semibold text-utility-text text-sm">{{ $title }}</h4>
            <p class="font-medium text-xs text-gray-400">{{ $price }} TK</p>

            <div class="rounded-2xl bg-utility-light_background flex h-7 w-fit mt-2">
                <button onclick="decrement('{{ $id }}')" class="min-w-7 text-primary font-bold">-</button>
                <input id="quantity-value-{{ $id }}" value="{{ $quantity }}" min="1"
                    max="{{ $maxStock }}" type="number"
                    class="border-none outline-none bg-transparent max-w-6 text-center text-xs fw-bold">
                <button onclick="increment('{{ $id }}')" class="min-w-7 text-primary font-bold">+</button>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-3">
        <div class="text-xs text-gray-600">
            <p>Category: <span class="text-gray-800 font-medium">{{ $category }}</span></p>
            <p>Brand: <span class="text-gray-800 font-medium">{{ $brand }}</span></p>
        </div>

        <div class="text-secondary-shade">
            @if ($icon == 'add')
                <i class="fa-solid fa-bag-shopping"></i>
            @endif

            @if ($icon == 'delete')
                <i class="fa-solid fa-trash"></i>
            @endif
        </div>
    </div>
</div>

<script>
    function increment(id) {
        const quantityInput = document.getElementById(`quantity-value-${id}`);
        const maxStock = parseInt(quantityInput.getAttribute('max'), 10) || 1;
        let value = parseInt(quantityInput.value, 10) || 1;

        if (value < maxStock) {
            quantityInput.value = value + 1;
        }
    }

    function decrement(id) {
        const quantityInput = document.getElementById(`quantity-value-${id}`);
        let value = parseInt(quantityInput.value, 10) || 1;

        if (value > 1) {
            quantityInput.value = value - 1;
        }
    }
</script>
