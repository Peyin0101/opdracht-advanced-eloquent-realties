<x-layout>
    <h1 class="text-3xl font-bold mb-4">Products</h1>
    <ul class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($products as $product)
            <li>
                <x-product-card :product="$product" />
            </li>
        @endforeach
    </ul>
</x-layout>
