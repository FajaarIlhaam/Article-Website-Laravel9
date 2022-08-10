@extends('layout/layouthome')
        <!-- Post Box 1 -->
        @section('post')
        @foreach($articles as $article)
            <div class="post-box {{ $article->tags }}">
                <h2 class="category">{{ $article->tags }}</h2>
                <a href="article/{{ $article->id  }}" class="post-title">
                    {{ $article->title }}
                </a>
                <span class="post-date">29 July 2022</span>
                <p class="post-description">{{ $article->description }}</p>
                
            </div>
               @endforeach
        @endsection
    

