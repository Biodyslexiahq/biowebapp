@extends('admin.admin-master')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-3xl" style="font-family: Poppins;">Welcome back {{ Auth::user()->name }}</h1>
                <br>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Personalized Greeting -->
                <h2 class="text-3x1">Great to see you here.</h2><br>
                <div class="mt-4">
                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                    
                </div>
                <br>
                <div class="mt-4">
                    <h1 style="font-family: Poppins;">GoDaddy and Gmail Credentials down below <i class="fa-solid fa-arrow-down"></i></h1>
                    <p>Email : biodyslexiahq@gmail.com</p>
                    <p>Password: City@technologies</p>
                </div>

            </div>
        </div>
    </div>
</div>

<!--NEW SECTION-->
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1>Chat with Client.</h1><br>
                <p>Realtime chatbox here</p>
            </div>
        </div>
    </div>
</div>


@endsection