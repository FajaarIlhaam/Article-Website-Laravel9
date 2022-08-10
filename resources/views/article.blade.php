@extends('layout/layoutpages')

<!-- Post Content -->
@section('post-head')
      <!-- Back to home -->
      <a href="/" class="back-home">Back to Home</a>
      <!-- Title -->
      <h3 class="header-title">{{ $article->title }}</h3>
      @endsection

    @section('content')
    <h2 class="sub-heading">{{ $article->title }}</h2>
    <p class="post-text">{{ $article->description }}</p>
    @endsection