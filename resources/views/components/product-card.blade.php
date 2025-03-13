<div class="bg-white p-4 rounded shadow h-full flex flex-col gap-2 justify-between">
    <div>
        <a href="{{ route('products.show', $product->id) }}"
            class="text-xl font-semibold text-blue-500 hover:underline">{{ $product->name }}</a>
        <div class="mt-2">
            <x-star-score :score="$product->rating" />
        </div>
    </div>
    <p class="text-gray-400">
        {{ $product->reviewsCount() }} {{ Str::plural('review', $product->reviewsCount()) }}
    </p>
</div>
