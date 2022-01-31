@extends('layouts.app')

@section('content')

<h1 class="text-center text-5xl my-5">Add a New Skill!</h1>

<form action="/skills" method="POST">
    @csrf
    <label for="skill_name">Skill Name:</label>
    <input type="text" name="skill_name" placeholder="Put a framework or language here..." />

    <label for="description">Description:</label>
    <input type="text" name="description" placeholder="Desc..." />

    <button type="submit">Add Skill!</button>

</form>

@endsection