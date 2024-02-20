<x-app-layout>
    @section('title', 'Home Page')
    @section('hero')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl test-gray-600">
                Welcome to <span class="text-red-500">JOSIAH</span> <span class="test-gray-600"> News</span>
            </h1>
            <p class="test-gray-600 text-lg mt-1">Best Blog in the universe</p>
            <a class="px-3 py-2 text-lg test-gray-600 bg-red-800 rounded mt-5 inline-block"
                href="http://127.0.0.1:8000/blog">Start
                Reading</a>
        </div>
    @endsection

    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-red-500 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $post)
                        <div class="md:col-span-1 col-span-3">
                            <x-posts.post-card :post="$post" />
                        </div>
                    @endforeach

                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-red-500 font-semibold"
                href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-red-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card :post="$post" />
                    </div>
                @endforeach
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-red-500 font-semibold" href="http://127.0.0.1:8000/blog">More
            Posts</a>
    </div>
</x-app-layout>
