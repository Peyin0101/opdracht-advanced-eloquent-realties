<div class="border p-4 rounded bg-white h-full flex flex-col gap-4">
    <div class="flex gap-4 justify-between items-baseline">
        <div class="flex flex-col">
            <span class="font-bold">{{ $review->user->name }}</span>
            <span class="text-gray-500">{{ $review->created_at->diffForHumans() }}</span>
        </div>
        <div class="mt-2">
            <x-star-score :score="$review->rating" />
        </div>
    </div>
    @if ($review->comment)
        <div class="text-gray-500">
            <p>{{ $review->comment }}</p>
        </div>
    @endif
</div>
