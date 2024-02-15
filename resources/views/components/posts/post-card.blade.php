@props(['post'])
<div class="">
    <a href="">
        <div>
            <img class="w-full rounded-xl" src={{ $post->getThumbnailImage() }}>
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2 gap-x-2">
            @if ($category = $post->categories()->first())
                <x-badge wire:navigate
                    href="{{ route('blog', ['category' => $category->title]) }}">{{ $category->title }}</x-badge>
            @endif
            <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>
</div>
