<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="text-gray-600">
            @if ($this->activeCategory || $search)
                <button class="gray-500 mr-4" wire:click="clearFilters()">X</button>
            @endif
            @if ($this->activeCategory)
                <x-badge wire:navigate
                    href="{{ route('blog', ['category' => $this->activeCategory->slug]) }}">{{ $this->activeCategory->title }}</x-badge>
            @endif
            @if ($search)
                Searching for <strong>{{ $search }}</strong>
            @endif

        </div>
        <div class="flex items-center space-x-4 font-light ">
            <x-checkbox />
            <x-label>Popular</x-label>

            <button class="{{ $sort === 'desc' ? 'text-gray-900 py-4 border-b border-gray-700' : 'text-gray-500' }}py-4"
                wire:click="setSort('desc')">Latest</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 py-4 border-b border-gray-700' : 'text-gray-500' }}"
                wire:click="setSort('asc')">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-post.artical :post="$post" />
        @endforeach

    </div>
    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
