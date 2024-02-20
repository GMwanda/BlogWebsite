<footer class="text-sm space-x-4 flex items-center border-t border-gray-100 flex-wrap justify-center py-4 ">
    {{-- <a class="text-gray-500 hover:text-red-500" href="">About Us</a>
    <a class="text-gray-500 hover:text-red-500" href="">Help</a> --}}
    @guest
        <a class="text-gray-500 hover:text-red-500" href="{{ route('login') }}">Login</a>
    @endguest

    <a class="text-gray-500 hover:text-red-500" href="{{ route('blog') }}">Explore</a>
</footer>
