@props(['icon'])

<a {{ 
    $attributes->merge(['class'=>"flex items-center justify-between py-2 px-3 hover:bg-gray-100 bg-opacity-20"])
    }}>
    <div class="flex items-center">
        <i class="{{ $icon }}"></i>
        <div class="text-sm ml-3">
            <p class="text-gray-600 font-bold capitalize">
            {{ $slot }}
            </p>
        </div>
    </div>
</a>