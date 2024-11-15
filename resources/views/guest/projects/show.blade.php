@extends('layouts.app')

@section('page-title', 'Guest project')

@section('nav-title','Guest project')

@section('main-content')

<div class="card p-2">
    <img src="{{$project->project_thumbnail}}" alt="{{$project->project_title}}">
    <div class="card-body">

        <h3 class="card-title">{{$project->project_title}}</h3>
        <p class="card-text">{{$project->project_summary}}</p>
        <p>{{$project->launch_date}}</p>
        <p>{{$project->project_status}}</p>
        <p>{{$project->repository_url}}</p>
        <a class="btn btn-primary" href="{{route('guest.projects.index')}}">return to home page</a>
    </div>

    @endsection