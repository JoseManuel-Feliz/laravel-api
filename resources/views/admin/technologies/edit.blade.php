@extends('layouts.technologies.create-edit')

{{-- form title --}}
@section('form-title')
{{"You're editing the designation of the technology:".' '.$technology->name}}
@endsection

{{-- form route --}}
@section('form-route')
{{route('admin.technologies.update',$technology->id)}}
@endsection

{{-- form method --}}
@section('form-method')
{{method_field('PUT')}}
@endsection

@section('submit-btn-text', 'Update')

@section('reset-btn-text','Reset inputs')