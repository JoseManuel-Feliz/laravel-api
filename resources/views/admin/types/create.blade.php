@extends('layouts.types.create-edit')

{{-- form title --}}
@section('form-title')
{{"You're creating a new project type"}}
@endsection

{{-- form route --}}
@section('form-route')
{{route('admin.types.store')}}
@endsection

{{-- form method --}}
@section('form-method')
{{method_field('POST')}}
@endsection

@section('submit-btn-text', 'Create')

@section('reset-btn-text','Reset inputs')
