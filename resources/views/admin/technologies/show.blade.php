@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-12 text-center">

            @if ($technology->projects->all())
            {{-- Title --}}
            <h2 class="display-5 fw-semibold">{{$technology->name}} projects technology</h2>

            {{-- Instruction for viewing project detail --}}
            <p class="fs-3 my-4">Click on a specific project to view its complete details</p>
        </div>

        {{-- group list --}}
        <ul class="col-6 list-group">

            @foreach($technology->projects as $project)
            {{-- list items --}}
            <li class="wrapper list-group-item">

                {{-- Link to view specific project details --}}
                <a href="{{route('admin.projects.show',$project->id)}}"
                   class="stretched-link text-reset text-decoration-none fs-5">
                    {{$project->project_title }}
                </a>

                {{-- Project tecnologies and icons --}}
                <span class="fw-semibold">
                    - {{$technology->name}}

                    <i class="fa-brands
                    @switch($technology->name)
                    @case('laravel')
                     fa-laravel">
                        @break
                        @case('css')
                        fa-css3-alt">
                        @break
                        @case('js')
                        fa-js">
                        @break
                        @case('vue.js')
                        fa-vuejs">
                        @break
                        @case('php')
                        fa-php">
                        @break
                        @case('mysql')
                        fa-solid fa-database">
                        @break
                        @default
                        fa-html5 ">
                        @endswitch
                    </i>
                </span>

            </li>
            @endforeach

        </ul>
        @else
        <p class="fs-3 my-4">The aren't projects with {{$technology->name}} technology</p>
        @endif
    </div>
</div>

@endsection