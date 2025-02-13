@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-12 text-center">

            @if ($type->projects->all())
            {{-- Title --}}
            <h2 class="display-5 fw-semibold">{{$type->project_type}} Project List </h2>

            {{-- Instruction for viewing project detail --}}
            <p class="fs-3 my-4">Click on a specific project to view its complete details</p>
        </div>

        {{-- group list --}}
        <ul class="col-6 list-group">

            @foreach($type->projects as $project)
            {{-- list items --}}
            <li class="wrapper list-group-item">

                {{-- Link to view specific project details --}}
                <a href="{{route('admin.projects.show',$project->id)}}"
                    class="stretched-link text-reset text-decoration-none fs-5">
                    {{$project->project_title }}
                </a>

                {{-- Project type and checked icon --}}
                <span class="fw-semibold">
                    - {{$type->project_type}}
                </span>

            </li>
            @endforeach

        </ul>
        @else
        <p class="fs-3 my-4">The aren't {{$type->project_type}} projects</p>
        @endif
    </div>
</div>

@endsection
