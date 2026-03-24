@extends('layouts.app')

@section('title', __('messages.login'))

@section('content')
<div class="max-w-md mx-auto px-4 py-16">
    
    <div class="bg-white rounded-2xl shadow-2xl p-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-2 text-center">{{ __('messages.login') }}</h2>
        <p class="text-gray-600 mb-8 text-center">{{ __('messages.login_subtitle') }}</p>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-gray-700 font-medium mb-2">{{ __('messages.email') }}</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none transition">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">{{ __('messages.password') }}</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none transition">
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" name="remember" class="w-4 h-4 text-rose-600 border-gray-300 rounded focus:ring-rose-500">
                    <span class="ml-2 text-gray-700">{{ __('messages.remember_me') }}</span>
                </label>
                <a href="#" class="text-rose-500 hover:text-rose-600 text-sm font-medium">{{ __('messages.forgot_password') }}</a>
            </div>

            <button type="submit" 
                    class="w-full bg-rose-500 text-white py-3 rounded-lg font-bold text-lg hover:bg-rose-600 transition shadow-lg">
                {{ __('messages.login') }}
            </button>
        </form>

        <p class="text-center text-gray-600 mt-8">
            {{ __('messages.no_account') }} 
            <a href="{{ route('register') }}" class="text-rose-500 font-bold hover:text-rose-600">{{ __('messages.register') }}</a>
        </p>
    </div>

</div>
@endsection