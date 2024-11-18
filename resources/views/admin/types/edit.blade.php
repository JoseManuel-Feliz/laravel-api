@extends('layouts.types.create-edit')

{{-- form title --}}
@section('form-title')
{{"You're Editing Project Type:".' '.$type->project_type}}
@endsection

{{-- form route --}}
@section('form-route')
{{route('admin.types.update',$type->id)}}
@endsection

{{-- form method --}}
@section('form-method')
{{method_field('PUT')}}
@endsection

@section('submit-btn-text', 'Update')

@section('reset-btn-text','Reset inputs')
