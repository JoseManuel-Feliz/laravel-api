@extends('layouts.app')

@section('main-content')
<div class="container">

    <p>{{$project->project_title}}</p>
    <p>{{$project->launch_date}}</p>
    <p>{{$project->project_status}}</p>
    <p>{{$project->repository_url}}</p>
    <p>{{$project->project_thumbnail}}</p>
    <p>{{$project->project_summary}}</p>

</div>
@endsection