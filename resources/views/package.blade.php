@extends('layouts.app.app')
@section('content')



<div>
@section('cover', 'Package List')     
@include('components/cover')

@include('components/package/priceList')
</div>

@endsection