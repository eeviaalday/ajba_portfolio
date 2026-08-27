@extends('layouts.app')

@section('title', $portfolio['name'] . ' — Portfolio')

@section('content')
@include('components.hero')
@include('components.about')
@include('components.education')
@include('components.tools')
@include('components.certificates')
@include('components.projects')
@include('components.additional-projects')
@include('components.github')
@include('components.contact')
@endsection
