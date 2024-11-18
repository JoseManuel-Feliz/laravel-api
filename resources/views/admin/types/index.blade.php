@extends('layouts.app')

@section('main-content')

<div class="container">

    <div class="row g-3 justify-content-center">

        <!-- Title -->
        <div class="col-12 my-3">
            <h2 class="display-5 fw-semibold text-center">Projects Types</h2>
        </div>


        <div class="col-7 table-responsive fs-5">

            <!-- Create New Status btn -->
            <div class="create-btn wrapper">
                <a class="btn btn-success mb-3" href="{{route('admin.types.create')}}">
                    Add a new type
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>


            <!-- Statuses table -->
            <table class="table table-striped table-bordered table-hover text-center">
                <!-- Table header -->
                <thead>
                    <tr>
                        <th>Projects types</th>

                        <th colspan="2">
                            Actions
                            <i class="fa-solid fa-gears ms-2"></i>
                        </th>
                    </tr>
                </thead>

                <!-- Table body -->
                <tbody class="table-group-divider">
                    <tr>

                        @forelse($types as $type)
                        <!-- Project Title -->
                        <td>{{$type->project_type}}</td>

                        <!-- Actions btns -->
                        <td>
                            <!-- Show btn -->
                            <a class="btn btn-light me-1 " href="{{route('admin.types.show',$type->id)}}">
                                {{$type->project_type}} projects
                            </a>
                        </td>
                        <td>
                            <!-- Edit btn -->
                            <a class="btn btn-warning me-1" href="{{route('admin.types.edit',$type->id)}}">
                                Edit type
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                            <!-- Delete form -->
                            <form class="d-inline" action="{{route('admin.types.destroy',$type->id)}}" method="POST">
                                @csrf
                                {{method_field('DELETE')}}

                                <!-- Delete btn -->
                                <button class="btn btn-danger" type="submit">
                                    Delete type
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @empty

                    <!-- message when there are no types -->
                    <tr>
                        <td colspan="3">No types available for projects</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
