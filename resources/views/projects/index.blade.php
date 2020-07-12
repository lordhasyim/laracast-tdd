@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <h1 class="mr-auto text-gray-600 no-underline">My Projects</h1>
        <a href="/projects/create" class="button">New project</a>
    </header>

    <main class="flex flex-wrap -mx-2" >
        @forelse($projects as $project)
        <div class="w-1/3 px-2 pb-4">
            <div class="bg-white rounded shadow p-5 " style="height: 200px; ">
                <h3 class="font-normal text-xl py-4">{{ $project->title }}</h3>
                <div class="text-gray-600">{{ \Illuminate\Support\Str::limit($project->description, 100) }}</div>
            </div>
        </div>

        @empty
            <div>No projects</div>
        @endforelse
    </main>
@endsection
