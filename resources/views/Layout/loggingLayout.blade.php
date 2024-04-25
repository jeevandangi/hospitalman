@include('headerAndFooter.header')
    <div class="flex flex-col h-screen">
        <div class="flex items-start gap-8 bg-green-500 px-8 py-3">
            <li class=" list-none px-1 cursor-pointer"><a class="text-white text-lg hover:text-blue-100" href="/">Admin</a></li>
            <li class=" list-none px-1 cursor-pointer"><a class="text-white text-lg hover:text-blue-100" href="/teacher">Teacher</a></li>
            <li class=" list-none px-1 cursor-pointer"><a class="text-white text-lg hover:text-blue-100" href="/user">User</a></li>
        </div>
        <div class=" h-full">
            @yield('content')
        </div>
    </div>
@include('headerAndFooter.footer')