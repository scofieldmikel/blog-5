@extends('user.app')

@section('bg-img', asset('user/assets/img/home-bg.jpg'))

@section('title', 'Blog Home')

@section('sub-heading', 'Learn Together Grow Together')

@section('main-content')
    <!-- Main Content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach ($posts as $post)
                    
                    <div class="post-preview">
                        <a href="{{ route('post', $post->slug) }}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->subtitle }}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                @endforeach
                <hr />
                
                <!-- Pager-->
               
                
                
            
                <div class="clearfix float-right">
                  {{ $posts->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
    <hr />
@endsection