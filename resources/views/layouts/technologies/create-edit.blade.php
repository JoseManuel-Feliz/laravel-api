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

            <!-- Input for Project technologies -->
            <div class=" form-floating">
                <input class="form-control" type="text" name="name" id="technology"
                    value="{{ old('name', $technology->name)}}">
                <label for="technology"></label>

                <!-- Error Message -->
                @error('name')
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
