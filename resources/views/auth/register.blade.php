@extends('layouts.app')

@section('title', __('messages.register'))

@section('content')
<div class="max-w-md mx-auto px-4 py-16">
    
    <div class="bg-white rounded-2xl shadow-2xl p-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-2 text-center">{{ __('messages.register') }}</h2>
        <p class="text-gray-600 mb-8 text-center">{{ __('messages.register_subtitle') }}</p>

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-gray-700 font-medium mb-2">{{ __('messages.name') }}</label>
                <input type="text" name="name" value="{{ old('name') }}" required
                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none transition">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">{{ __('messages.email') }}</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none transition">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">{{ __('messages.password') }}</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none transition">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-2">{{ __('messages.confirm_password') }}</label>
                <input type="password" name="password_confirmation" required
                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-rose-500 focus:outline-none transition">
            </div>

            <button type="submit" 
                    class="w-full bg-rose-500 text-white py-3 rounded-lg font-bold text-lg hover:bg-rose-600 transition shadow-lg">
                {{ __('messages.register') }}
            </button>
        </form>

        <p class="text-center text-gray-600 mt-8">
            {{ __('messages.have_account') }}
            <a href="{{ route('login') }}" class="text-rose-500 font-bold hover:text-rose-600">{{ __('messages.login') }}</a>
        </p>
    </div>

</div>
@endsection