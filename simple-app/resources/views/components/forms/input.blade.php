<form action="/search" method="GET">
    <div class="w-full flex justify-center">
        <input type="text" placeholder="Search a user...."
            class="w-[80%] mx-auto bg-white/10 px-6 py-3 rounded-xl border mb-5" autocomplete="off" name="search"
            value="{{ request('search') }}">
    </div>
</form>
