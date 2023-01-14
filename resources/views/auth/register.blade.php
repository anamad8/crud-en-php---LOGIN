@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 borde-gray-200
    rounded-lg shadow-lg">

    <h1 class="text-5xl text-center pt-24">Register</h1>

    <form class="mt-4" method="POST" action="">
        @csrf

        <input type="text" class="border corder-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name"
            id="name" name="name">

        @error('name')
        
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-lg
            text-red-600 p-2 my-2">* {{ $message }}</p>

        @enderror

        <input type="email" class="border corder-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email"
            id="email" name="email">

        @error('email')
        
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-lg
            text-red-600 p-2 my-2">* {{ $message }}</p>

        @enderror

        <input type="password" class="border corder-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeder-gray-900 p-2 focus:bg-white" placeholder="Password"
            id="password" name="password">

        @error('password')
        
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-lg
            text-red-600 p-2 my-2">* {{ $message }}</p>

        @enderror   
        
        <input type="password" class="border corder-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password confirmation"
            id="password_confirmation" name="password_confirmation">
        
        <div class="flex">
            <input type="radio" id="admin" name="role" value="Admin">
            <label for="admin">Admin</label>
            <input type="radio" id="noAdmin" name="role" value="NoAdmin">
            <label for="NoAdmin">No Admin</label>
        </div>
        

        <button type="submit" class="rounded-md bg-indigo-500 w-full
                text-while font semibold p-2 my-3 hover:bg-indigo-600">Send</button>
    </form>

    </div>

@endsection