@extends('layouts.app')

@section('page-title', 'Guest projects')

@section('nav-title','Guest projects')

@section('main-content')

<div class="container">

    <div class="row row-cols-6 gap-3 justify-content-center align-items-center">
        @forelse($projects as $project)
        <div class="col">
            <div class="card p-2">
                <img src="{{$project->project_thumbnail}}" alt="{{$project->project_title}}">
                <div class="card-body">

                    <h3 class="card-title">{{$project->project_title}}</h3>
                    <p class="card-text">{{Str::words($project->project_summary,5,'...')}}</p>
                    <p>{{$project->launch_date}}</p>
                    <p>{{$project->project_status}}</p>
                    <p>{{$project->repository_url}}</p>
                    <a class="btn btn-primary stretched-link" href="{{route('guest.projects.show',$project->id)}}">
                        Read More
                    </a>
                </div>
            </div>
        </div>

        @empty

        <div class="col">
            <div class="card">
                <p>no projects available</p>
            </div>
        </div>

        @endforelse

    </div>

</div>



@endsection