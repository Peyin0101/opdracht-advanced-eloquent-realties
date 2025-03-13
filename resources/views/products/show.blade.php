<x-layout>
    <a href="{{ route('products.index') }}" class="inline-block bg-gray-300 text-gray-900 py-2 px-4 rounded mb-8">
        &larr; Products
    </a>
    <div class="bg-white p-4 rounded-md">
        <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
        <p class="mb-4">{{ $product->description }}</p>
        <a href="{{ route('reviews.create', $product->id) }}"
            class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">Add Review</a>
    </div>
    <div>
        <h2 class="text-2xl font-bold mb-4 mt-8">Reviews</h2>
        <ul class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($product->reviews as $review)
            <li>
                <x-review-card :review="$review" />
            </li>
            @endforeach
        </ul>
    </div>
</x-layout>
