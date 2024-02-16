@props(['post'])
<div class="">
    <a wire:navigate href="{{ route('show', $post->slug) }}">
        <div>
            <img class="w-full rounded-xl" src={{ $post->getThumbnailImage() }}>
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            @if ($category = $post->categories()->first())
                <x-badge wire:navigate
                    href="{{ route('blog', ['category' => $category->slug]) }}">{{ $category->title }}</x-badge>
            @endif
            <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a wire:navigate class="text-xl font-bold text-gray-900" href="{{ route('show', $post->slug) }}">{{ $post->title }}</a>
    </div>
</div>
