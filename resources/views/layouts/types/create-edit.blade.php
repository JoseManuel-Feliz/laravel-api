@extends ('layouts.app')

@section('main-content')

<div class="container">

    <div class="row justify-content-center">

        <div class="title col-8 my-4 text-center">

            <!-- Title -->
            <h2>@yield('form-title','')</h2>
        </div>
        <form class="col-8 row g-2 justify-content-center" action="@yield('form-route')" method="POST">
            @csrf

            <!-- Form Method -->
            @yield('form-method','')

            <!-- Input for Project types -->
            <div class=" form-floating">
                <input class="form-control" type="text" name="project_type" id="type"
                    value="{{ old('project_type', $type->project_type)}}">
                <label for="type"></label>

                <!-- Error Message -->
                @error('project_type')
                <div>{{ $message }}</div>
                @enderror
            </div>



            <!-- Additionals Inputs -->
            @yield('additionals-inputs','')

            <!-- Btns  -->
            <div class="col mt-3">
                <button class="btn btn-success" type="submit">@yield('submit-btn-text', '')</button>
                <button class="btn btn-warning" type="reset">@yield('reset-btn-text', '')</button>
            </div>

        </form>
    </div>

</div>







@endsection
