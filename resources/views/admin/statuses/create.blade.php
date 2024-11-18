@extends('layouts.statuses.create-edit')

{{-- form title --}}
@section('form-title')
{{"You're creating a new status"}}
@endsection

{{-- form route --}}
@section('form-route')
{{route('admin.statuses.store')}}
@endsection

{{-- form method --}}
@section('form-method')
{{method_field('POST')}}
@endsection

@section('submit-btn-text', 'Create')

@section('reset-btn-text','Reset inputs')
