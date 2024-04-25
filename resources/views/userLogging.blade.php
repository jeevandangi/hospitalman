@extends('Layout.loggingLayout')

@section('content')
<div class="flex items-center justify-center h-full">
    <div class="px-5 rounded-xl border border-black py-5 ">
            <form action="" method="post" class="">
                <h3 class=" text-center">User Logging</h3>
                <div class=" mt-3">
                    <input type="text" placeholder="Enter your user name" class=" border border-black focus:border-green-500 focus:border-2 px-2 rounded-md py-1 outline-none" name="userName">
                </div>
                <div class=" mt-3">
                    <input type="text" placeholder="Enter your password" class=" border border-black focus:border-green-500 focus:border-2 px-2 rounded-md py-1 outline-none" name="password">
                </div>
                <div class=" mt-3 flex items-center justify-center">
                    <button class="bg-purple-600 text-white  w-full rounded-xl py-1">Log In</button>
                </div>
            </form>
    </div>

</div>
@endsection