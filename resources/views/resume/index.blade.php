@extends('layouts.app')

@section('content')
<h1 class="text-center text-5xl my-5">Resume</h1>

    @auth
    <div class="mx-40">
        <div class="justify-items-center align-middle">
            <h1 class="text-4xl text-center">Skills:</h1>

            <table class="table-auto mx-auto mt-5">
                <tr class="bg-blue-100">
                    <th class="w-1/4 border-4 border-gray-500">
                        Skill
                    </th>
                    <th class="w-1/4 border-4 border-gray-500">
                        Description
                    </th>
                </tr>

                @foreach ($skills as $skill)
                    <tr>
                        <td class="w-1/4 border-4 border-gray-500">
                            {{ $skill->skill_name }}
                        </td>
                        <td class="w-1/4 border-4 border-gray-500">
                            {{ $skill->description }}
                        </td>
                        <td class="text-center w-1/4 border-4 border-gray-500">
                            <form action="/skills/{{ $skill->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="bg-gray-300 pt-2 pb-2 px-5" type="submit">Del</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </table>

            <form class="text-center pt-7" action="/skills/create" method="GET">
                <button type="submit" class="bg-green-500 black shadow-5xl bl-10 p-2 w-80 
            uppercase font-bold">
                    Add Skill
                </button>
            </form>
            <hr class="mt-4 mb-8">
        </div>

        <div class="justify-items-center align-middle">
            <h1 class="text-4xl text-center">Experiences:</h1>
            <table class="table-auto mx-auto mt-5">
                <tr class="bg-blue-100">
                    <th class="w-1/4 border-4 border-gray-500">
                        Role
                    </th>
                    <th class="w-1/4 border-4 border-gray-500">
                        Organization
                    </th>
                    <th class="w-1/4 border-4 border-gray-500">
                        Description
                    </th>
                    <th class="w-1/8 border-4 border-gray-500">
                        Start Date
                    </th>
                    <th class="w-1/8 border-4 border-gray-500">
                        End Date
                    </th>
                </tr>

                @foreach ($experiences as $experience)
                <tr>
                    <td class="w-1/4 border-4 border-gray-500">
                        {{ $experience->role }}
                    </td>
                    <td class="w-1/4 border-4 border-gray-500">
                        {{ $experience->organization }}
                    </td>
                    <td class="w-1/4 border-4 border-gray-500">
                        {{ $experience->description }}
                    </td>
                    <td class="w-1/8 border-4 border-gray-500">
                        {{ $experience->start_date }}
                    </td>
                    <td class="w-1/8 border-4 border-gray-500">
                        {{ $experience->end_date }}
                    </td>
                    <td class=" text-center w-1/8 border-4 border-gray-500">
                        <form action="/experiences/{{ $experience->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-gray-300 pt-2 pb-2 px-5" type="submit">Del</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <form class="text-center pt-7" action="/experiences/create" method="GET">
                <button type="submit" class="bg-green-500 black shadow-5xl bl-10 p-2 w-80 
            uppercase font-bold">
                    Add Experience
                </button>
            </form>
            <hr class="mt-4 mb-8">
        </div>

        <div class="justify-items-center align-middle">
            <h1 class="text-4xl text-center">Projects:</h1>
            <table class="table-auto mx-auto mt-5">
                <tr class="bg-blue-100">
                    <th class="w-1/4 border-4 border-gray-500">
                        Project Name
                    </th>
                    <th class="w-1/4 border-4 border-gray-500">
                        Organization
                    </th>
                    <th class="w-1/4 border-4 border-gray-500">
                        Description
                    </th>
                    <th class="w-1/8 border-4 border-gray-500">
                        Start Date
                    </th>
                    <th class="w-1/8 border-4 border-gray-500">
                        End Date
                    </th>
                </tr>

                @foreach ($projects as $project)
                <tr>
                    <td class="w-1/4 border-4 border-gray-500">
                        {{ $project->project_name }}
                    </td>
                    <td class="w-1/4 border-4 border-gray-500">
                        {{ $project->organization }}
                    </td>
                    <td class="w-1/4 border-4 border-gray-500">
                        {{ $project->description }}
                    </td>
                    <td class="w-1/8 border-4 border-gray-500">
                        {{ $project->start_date }}
                    </td>
                    <td class="w-1/8 border-4 border-gray-500">
                        {{ $project->end_date }}
                    </td>
                    <td class="text-center w-1/8 border-4 border-gray-500">
                        <form action="/projects/{{ $project->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="bg-gray-300 pt-2 pb-2 px-5 border-solid" type="submit">Del</button>
                        </form>
                    </td>
                    <!--Add a destroy button to the tables.-->
                </tr>
                @endforeach
            </table>

            <form class="text-center pt-7" action="/projects/create" method="GET">
                <button type="submit" class="bg-green-500 black shadow-5xl bl-10 p-2 w-80 
            uppercase font-bold">
                    Add a project
                </button>
            </form>

            <hr class="mt-4 mb-8">
        </div>
    </div>

    @endauth

    @guest
    <h1>Please <a href="/login">sign in</a> to see your web resume.</h1>
    @endguest

@endsection