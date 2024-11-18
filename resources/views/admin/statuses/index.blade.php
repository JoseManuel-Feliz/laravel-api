@extends('layouts.app')

@section('main-content')

<div class="container">

    <div class="row g-3 justify-content-center">

        <!-- Title -->
        <div class="col-12 my-3">
            <h2 class="display-5 fw-semibold text-center">Projects Statuses</h2>
        </div>


        <div class="col-7 table-responsive fs-5">

            <!-- Create New Status btn -->
            <div class="create-btn wrapper">
                <a class="btn btn-success mb-3" href="{{route('admin.statuses.create')}}">
                    Add new status
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>


            <!-- Statuses table -->
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

                        @forelse($statuses as $status)
                        <!-- Project Title -->
                        <td>{{$status->project_status}}</td>

                        <!-- Actions btns -->
                        <td>
                            <!-- Show btn -->
                            <a class="btn btn-light me-1 " href="{{route('admin.statuses.show',$status->id)}}">
                                {{$status->project_status}} projects

                                @if ($status->project_status == ('in progress'))
                                <i class="fa-solid fa-laptop-code text-warning"></i>
                                @else
                                <i class="fa-regular fa-square-check text-success"></i>
                                @endif
                            </a>
                        </td>
                        <td>
                            <!-- Edit btn -->
                            <a class="btn btn-warning me-1" href="{{route('admin.statuses.edit',$status->id)}}">
                                Edit status
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                            <!-- Delete form -->
                            <form class="d-inline" action="{{route('admin.statuses.destroy',$status->id)}}"
                                  method="POST">
                                @csrf
                                {{method_field('DELETE')}}

                                <!-- Delete btn -->
                                <button class="btn btn-danger" type="submit">
                                    Delete status
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @empty

                    <!-- message when there are no statuses -->
                    <tr>
                        <td colspan="3">No statuses available for projects</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection