@extends('layouts.create-edit')

@section('form-title')
{{'Create a new project'}}
@endsection

@section('form-route')
{{route('admin.projects.store')}}
@endsection

@section('form-method')

{{method_field('POST')}}

@endsection

@section('submit-btn-text', 'send')

@section('reset-btn-text','reset')