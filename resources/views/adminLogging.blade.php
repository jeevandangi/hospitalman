@extends('Layout.loggingLayout')

@section('content')
    <div class="flex items-center justify-center h-full">
        <div class="px-5 rounded-xl border border-black py-5 ">
                <form action="adminLogging" method="post" class="">
                    @csrf
                    <h3 class=" text-center">Admin Logging</h3>
                    @if(session('error'))
                        <div class="text-red-500 mt-5">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class=" mt-3 flex flex-col">
                        <input type="text" placeholder="Enter your user name" class=" border border-black focus:border-green-500 focus:border-2 px-2 rounded-md py-1 outline-none" name="userName">
                        <span class="text-red-500 text-sm">
                            @error('userName')
                            {{$message}} 
                            @enderror
                        </span>
                    </div>
                    <div class=" mt-3 flex flex-col">
                        <input type="password" placeholder="Enter your password" class=" border border-black focus:border-green-500 focus:border-2 px-2 rounded-md py-1 outline-none" name="password">
                        <span class="text-red-500 text-sm">
                            @error('userName')
                            {{$message}} 
                            @enderror
                        </span>
                    </div>
                    <div class=" mt-3 flex items-center justify-center">
                        <button class="bg-purple-600 text-white  w-full rounded-xl py-1">Log In</button>
                    </div>
                </form>
        </div>

    </div>
@endsection