@extends('layouts.app')

@section('main-content')

<div class="container">

    <div class="row">

        <!-- Create New Project btn -->
        <div class="col mb-3">
            <a class="btn btn-success" href="{{route('admin.projects.create')}}">
                Create
            </a>
        </div>

        <!-- Projects table -->
        <div class="col-12 table-responsive">
            <table class="table table-striped table-bordered table-hover align-middle">

                <!-- Table header -->
                <thead class="text-center">
                    <tr>
                        <th>Project title</th>
                        <th>Project date</th>
                        <th>Project status</th>
                        <th colspan="2">Technologies</th>
                        <th colspan="2">Link repository</th>
                        <th>Image url</th>
                        <th>Description</th>
                        <th colspan="2">Btns</th>
                    </tr>
                </thead>

                <!-- Table body -->
                <tbody class="table-group-divider">
                    <tr>

                        @forelse($projects as $project)

                        <!-- Project Title -->
                        <td>{{$project->project_title}}</td>

                        <!-- Project launch date -->
                        <td>{{$project->launch_date}}</td>

                        <!-- Project status -->
                        <td>{{$project->status->project_status}}</td>

                        <!-- Project technologies -->
                        <td colspan="2" class="text-center">
                            @forelse($project->technologies as $tech)

                            <span class="badge text-bg-success rounded-pill">
                                <!-- Single techonology -->
                                {{$tech->name}}
                            </span>

                            @empty
                            <!-- message when there are no technology -->
                            There aren't technologies

                            @endforelse

                        </td>

                        <!-- Project repository link -->
                        <td colspan="2">{{$project->repository_url}}</td>

                        <!-- Project img -->
                        <td>{{$project->project_thumbnail}}</td>

                        <!-- Project summary -->
                        <td>{{Str::words($project->project_summary,5,'...')}}</td>

                        <!-- Actions btns -->
                        <td colspan="2">

                            <!-- Show btn -->
                            <a class="btn btn-secondary me-1"
                                href="{{route('admin.projects.show',$project->id)}}">show</a>

                            <!-- Edit btn -->
                            <a class="btn btn-warning me-1"
                                href="{{route('admin.projects.edit',$project->id)}}">edit</a>

                            <!-- Delete form -->
                            <form class="d-inline" action="{{route('admin.projects.destroy',$project->id)}}"
                                method="POST">
                                @csrf
                                {{method_field('DELETE')}}

                                <!-- Delete btn -->
                                <button class="btn btn-danger" type="submit">delete</button>
                            </form>
                        </td>
                    </tr>

                    @empty

                    <!-- message when there are no projects -->
                    <tr>
                        <td colspan="7">There aren't projects</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
