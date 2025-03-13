<div class="stars flex">
    @for ($i = 0; $i < 5; $i++)
        @if ($i < $score)
            <i class="fas fa-star text-yellow-500"></i>
        @else
            <i class="far fa-star text-gray-300"></i>
        @endif
    @endfor
</div>
