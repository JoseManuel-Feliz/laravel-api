@extends('layouts.app')

@section('main-content')

<div class="container">

    <div class="row g-3 justify-content-center">

        <!-- Title -->
        <div class="col-12 my-3">
            <h2 class="display-5 fw-semibold text-center">Projects Technologies</h2>
        </div>


        <div class="col-110 table-responsive fs-5">

            <!-- Create New Technology btn -->
            <div class="create-btn wrapper">
                <a class="btn btn-success mb-3" href="{{route('admin.technologies.create')}}">
                    Add new a technology
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>


            <!-- Technologies table -->
            <table class="table table-striped table-bordered table-hover text-center">
                <!-- Table header -->
                <thead>
                    <tr>
                        <th>Statuses of projects</th>

                        <th colspan="2">
                            Actions
                            <i class="fa-solid fa-gears ms-2"></i>
                        </th>
                    </tr>
                </thead>

                <!-- Table body -->
                <tbody class="table-group-divider">
                    <tr>

                        @forelse($technologies as $technology)
                        <!--  Technologies names -->
                        <td>
                            {{$technology->name}}

                            {{-- Technologies icons --}}
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
                        </td>

                        <!-- Actions btns -->
                        <td>
                            <!-- Show btn -->
                            <a class="btn btn-light fs-5 me-1"
                                href="{{route('admin.technologies.show',$technology->id)}}">
                                {{$technology->name}} projects
                            </a>
                        </td>
                        <td>
                            <!-- Edit btn -->
                            <a class="btn btn-warning me-1" href="{{route('admin.technologies.edit',$technology->id)}}">
                                Edit technology
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                            <!-- Delete form -->
                            <form class="d-inline" action="{{route('admin.technologies.destroy',$technology->id)}}"
                                method="POST">
                                @csrf
                                {{method_field('DELETE')}}

                                <!-- Delete btn -->
                                <button class="btn btn-danger" type="submit">
                                    Delete technology
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @empty

                    <!-- message when there are no technologies -->
                    <tr>
                        <td colspan="3">No technologies available for projects</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
