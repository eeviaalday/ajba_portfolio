@extends('layouts.app')

@section('title', $portfolio['name'] . ' — Portfolio')

@section('content')
@include('components.hero')
@include('components.about')
@include('components.education')
@include('components.projects')
@include('components.github')
@include('components.contact')
@endsection
