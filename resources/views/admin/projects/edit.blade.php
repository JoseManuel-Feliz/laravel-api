@extends('layouts.create-edit')

@section('form-title')
{{"You're editing".' '.$project->project_title}}
@endsection


@section('form-route')
{{route('admin.projects.update',$project->id)}}
@endsection

@section('form-method')

{{method_field('PUT')}}

@endsection

@section('submit-btn-text', 'send')

@section('reset-btn-text','reset')