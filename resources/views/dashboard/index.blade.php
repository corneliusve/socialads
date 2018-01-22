@extends('layouts.app')

@section('content')
    <section class="hero is-medium is-info">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column"></div>
                    <div class="column is-5">

                        <h1 class="is-size-2 has-text-weight-bold has-text-centered">{{ $user->name }}</h1>

                        <a href="{{ route('project.create') }}" class="button is-link is-inverted is-outlined is-centered">Create project</a>

                    </div>
                    <div class="column"></div>
                </div>


            </div>
        </div>
    </section>

    <section class="m-t-100">
        <div class="container">
            <h1 class="is-size-3 has-text-centered m-b-50">Your projects</h1>

            @foreach ($projects as $project)
                <div class="project-item-wrapper">
                    <a href="{{ route('project.show', ['project' => $project->id]) }}" class="project-item" style="background-image: url({{ Storage::url($project->thumbnail) }});">

                    </a>
                </div>


            @endforeach

        </div>
    </section>


@endsection
