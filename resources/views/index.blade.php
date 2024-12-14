@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    @include('sections.welcom')
    @include('sections.materi')
    @include('sections.login')
@endsection
