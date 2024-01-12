<div>
    @if ($count > 0)
    <span class="text-sm p-1 rounded bg-red-300">
        @if ($count > 9)
        9+
        @else
        {{$count}}
        @endif
    </span>
    @endif
</div>
