@extends('layouts.app');

@section('content')

<h1 class="text-center text-5xl my-5">Add a New Project!</h1>

<div class="flex justify-center pt-20">
    <form action="/projects" method="POST">
        @csrf
        <div class="block">
            <label for="project_name">Project Name:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="project_name" placeholder="'Together' dating app." />
        
            <label for="organization">Organization:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="organization" placeholder="Florida International University - SparkDev" />
        
            <label for="description">Description:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="description" placeholder="Decreased toxicity by..." />
        
            <label for="start_date">Start Date:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="start_date" placeholder="2022-01-30" />
        
            <label for="end_date">End Date:</label>
            <input class="block shadow-5xl mb-10 p-2 w-80 italic" type="text" name="end_date" placeholder="2022-01-30" />
        
            <button type="submit">Add this project!</button>
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