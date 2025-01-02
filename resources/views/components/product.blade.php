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
    class="flex items-center justify-between p-2 md:p-3 rounded-lg shadow-sm bg-utility-white_background">
    <div class="flex items-center justify-center gap-3 md:gap-4">
        <img src="{{ asset('assets/1.jpg') }}" alt=""
            class="border rounded-lg w-14 h-14 md:w-16 md:h-16 drop-shadow-sm">
        <div>
            <h4 class="text-sm  font-semibold text-utility-text">{{ $title }}</h4>
            <p class="text-xs md:text-sm font-medium text-gray-400">{{ $price }} TK</p>

            <div class="flex mt-2 rounded-2xl bg-utility-light_background h-7 w-fit">
                <button onclick="decrement('{{ $id }}')" class="font-bold min-w-7 text-primary">-</button>
                <input id="quantity-value-{{ $id }}" value="{{ $quantity }}" min="1"
                    max="{{ $maxStock }}" type="number"
                    class="text-xs text-center bg-transparent border-none outline-none max-w-6 fw-bold">
                <button onclick="increment('{{ $id }}')" class="font-bold min-w-7 text-primary">+</button>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-3 md:gap-5">
        <div class="text-xs md:text-sm text-gray-600">
            <p>Category: <span class="font-medium  text-gray-800">{{ $category }}</span></p>
            <p>Brand: <span class="font-medium text-gray-800">{{ $brand }}</span></p>
        </div>

        <div class="text-secondary-shade md:text-xl">
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
