@extends('layouts.app');

@section('content')

<h1 class="text-center text-5xl my-5">Add a New Experience!</h1>

<div class="flex justify-center pt-20">
    <form action="/experiences" method="POST">
        @csrf
        <div class="block">
            <label for="role">Role:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="role" placeholder="Put a framework or language here..." />
        
            <label for="organization">Organization:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="organization" placeholder="Desc..." />
        
            <label for="description">Description:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="description" placeholder="Put a framework or language here..." />
        
            <label for="start_date">Start Date:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="start_date" placeholder="Desc..." />
        
            <label for="end_date">End Date:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="end_date" placeholder="Desc..." />
        
            <button type="submit">Add Skill!</button>
        </div>
    </form>

</div>

@if ($errors->any())
    <div class="w-4/8 m-auto text-center">
        @foreach ($errors->all() as $error)
            <li class="text-red-500 list-none">{{ $error }}</li>
        @endforeach
    </div>
@endif
@endsection