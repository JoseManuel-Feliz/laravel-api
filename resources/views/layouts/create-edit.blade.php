@extends ('layouts.app')

@section('main-content')

<div class="container">

    <div class="row">

        <div class="title col my-4 text-center">

            <!-- Title -->
            <h2>@yield('form-title','')</h2>
        </div>
        <form class="row g-2 justify-content-center" action="@yield('form-route')" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Form Methods -->
            @yield('form-method','')

            <!-- Input for Project title -->
            <div class="col-7 form-floating mb-3">
                <input class="form-control" type="text" name="project_title" id="title"
                    value="{{old('project_title',$project->project_title)}}">
                <label for="title">Project title</label>

                <!-- Error Message -->
                @error('project_title')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for Project date -->
            <div class="col-7 form-floating mb-3">
                <input class="form-control" type="date" name="launch_date" id="project-date"
                    value="{{old('launch_date',$project->launch_date)}}">
                <label for="project-date">Launch date</label>

                <!-- Error Message -->
                @error('launch_date')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for  Project technology-->
            <div class="col-7 my-4">

                @foreach($technologies as $tech)
                <div class="form-check">

                    <input class="form-check-input" type="checkbox" name="technologies[]" id="tech"
                        value="{{$tech->id}}" @checked(in_array($tech->id,
                    old("technologies", $project->technologies->pluck("id")->toArray())))>
                    <label class="form-check-label" for="tech">{{$tech->name}}</label>
                </div>

                @endforeach
                <!-- Error Message -->
                @error('technologies')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for Project status -->
            <div class="col-7 form-floating mb-3">
                <select class="form-select" name="status_id" id="status">

                    @foreach($statuses as $status)
                    <option value="{{$status->id}}" @if($status->id === old('status_id',$project->status_id))
                        selected
                        @endif
                        >
                        {{ $status->project_status }}
                    </option>
                    @endforeach
                </select>
                <label for="status">Project status</label>
                <!-- Error Message -->
                @error('status_id')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for Project types -->
            <div class="col-7 form-floating mb-3">
                <select class="form-select" name="type_id" id="type">

                    @foreach($types as $type)
                    <option value="{{$type->id}}" @if($type->id === old('type_id',$project->type_id))
                        selected
                        @endif
                        >
                        {{ $type->project_type}}
                    </option>
                    @endforeach
                </select>
                <label for="type">Project type</label>
                <!-- Error Message -->
                @error('type_id')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for  Project repository link-->
            <div class="col-7 form-floating mb-3">
                <input class="form-control" type="text" name="repository_url" id="repo-link"
                    value="{{old('repository_url',$project->repository_url)}}">
                <label for="repo-link">Repository url</label>

                <!-- Error Message -->
                @error('repository_url')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for  Project img -->
            <div class="col-7 form-floating mb-3">
                <input class="form-control" type="file" name="project_thumbnail" id="img-url">
                <label for="img-url">Project thumbnail</label>

                <!-- Error Message -->
                @error('project_thumbnail')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <!-- Input for  Project description-->
            <div class="col-7 form-floating mb-3">
                <textarea class="form-control" type="text" name="project_summary"
                    id="description">{{ old('project_summary', $project-> project_summary)}}</textarea>
                <label for="description">Description</label>


                <!-- Error Message -->
                @error('project_summary')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <!-- Additionals Inputs -->
            @yield('additionals-inputs','')

            <!-- Btns  -->
            <div class="mt-3">
                <button class="btn btn-success" type="submit">@yield('submit-btn-text', '')</button>
                <button class="btn btn-warning" type="reset">@yield('reset-btn-text', '')</button>
            </div>

        </form>

    </div>

    @endsection
