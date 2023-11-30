@extends('dashboard.admin.adminApp')
@section('title', 'Admin - Dashboard')
@section('admin/dashboard')



@include('components.logger.logger')



<div>

@include('components/package/packageList')


</div>















@endsection