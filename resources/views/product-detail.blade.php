@extends('layouts.app')
@section('content')
    @livewire('product-detail', ['product_id'=>$product_id]);
@endsection