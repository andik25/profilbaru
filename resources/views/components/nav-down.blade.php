<div class="multi-level collapse {{ $show ? 'show' : '' }}" role="list"
    {{ $attributes }} aria-expanded="false">
    <ul class="flex-column nav">
        {{ $slot }}
    </ul>
</div>