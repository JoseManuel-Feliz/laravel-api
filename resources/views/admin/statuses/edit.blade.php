@extends('layouts.statuses.create-edit')

{{-- form title --}}
@section('form-title')
{{"You're editing the designation of the status:".' '.$status->project_status}}
@endsection

{{-- form route --}}
@section('form-route')
{{route('admin.statuses.update',$status->id)}}
@endsection

{{-- form method --}}
@section('form-method')
{{method_field('PUT')}}
@endsection

@section('submit-btn-text', 'Update')

@section('reset-btn-text','Reset inputs')
