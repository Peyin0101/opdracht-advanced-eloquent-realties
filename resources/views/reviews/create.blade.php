<x-layout>
    <a href="{{ route('products.show', $product) }}"
        class="inline-block bg-gray-300 text-gray-900 py-2 px-4 rounded mb-8">
        &larr; Back to {{ $product->name }}
    </a>
    <div class="bg-white p-4 rounded-md">
        <h1 class="text-3xl font-bold mb-4">Add review for "{{ $product->name }}"</h1>
        <p class="mb-4 text-gray-500">{{ $product->description }}</p>
        <form action="{{ route('reviews.store', $product) }}" method="post" class="max-w-2xl">
            @csrf
            <div class="mb-4">
                <label for="user_id" class="font-bold block text-sm font-medium text-gray-700">User</label>
                <select name="user_id" id="user_id"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="font-bold block text-sm font-medium text-gray-700">Rating</label>
                <div class="mt-2">
                    @for ($i = 0; $i < 5; $i++)
                        <div class="flex gap-2 items-baseline">
                            <input {{ old('rating') == $i + 1 ? 'checked' : '' }} type="radio" name="rating"
                                value="{{ $i + 1 }}" id="rating-{{ $i + 1 }}">
                            <label for="rating-{{ $i + 1 }}">{!! str_repeat('<i class="fas fa-star text-yellow-500"></i>', $i + 1) !!}</label>
                        </div>
                    @endfor
                </div>
                @error('rating')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="comment" class="font-bold block text-sm font-medium text-gray-700">Comment</label>
                <textarea name="comment" id="comment" rows="3"
                    class="h-56 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('comment') }}</textarea>
                @error('comment')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="inline-block bg-blue-500 text-white py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</x-layout>
