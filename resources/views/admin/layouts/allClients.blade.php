@extends('admin.master')

@section('title')
    Admin Dashboard
@endsection

@section('content')

    @foreach($clients as $client)
        <h6>{{ $client->name }}</h6>
    @endforeach

@endsection