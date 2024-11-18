@extends('layouts.technologies.create-edit')

{{-- form title --}}
@section('form-title')
{{"You're creating a new technology"}}
@endsection

{{-- form route --}}
@section('form-route')
{{route('admin.technologies.store')}}
@endsection

{{-- form method --}}
@section('form-method')
{{method_field('POST')}}
@endsection

@section('submit-btn-text', 'Create')

@section('reset-btn-text','Reset inputs')
