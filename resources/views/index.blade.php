@extends('layouts.main')
@section('image', 'img/home-bg.jpg')
@section('title', 'CleanBlog')
@section('titleDesc', 'A Blog Theme by Boostrap')
@section('content')
<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($posts as $post)
            <div class="post-preview">
              <a href="post.blade.php.html">
                <h2 class="post-title">
                  {{$post->title}}
                </h2>
                <h3 class="post-subtitle">
                  Problems look mighty small from 150 miles up
                </h3>
              </a>
              <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on September 24, 2019</p>
            </div>
            <hr>
        @endforeach
       
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
@endsection