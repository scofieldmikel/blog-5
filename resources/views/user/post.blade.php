@extends('user.app')


@section('bg-img', asset('user/assets/img/post-bg.jpg'))

@section('head')

    <link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">

@endsection

@section('title',$post->title)

@section('sub-heading', $post->subtitle)


@section('main-content')

    <!-- Post Content-->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=590031185302840&autoLogAppEvents=1" nonce="oBPCBSY6"></script>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <small>Created at {{ $post->created_at->diffForHumans() }} </small>
                    @foreach ($post->categories as $category)
                        <small class="float-right" style="margin-right: 10px;"> <a href=""> {{ $category->name }} </a></small>
                    @endforeach
                    {!! htmlspecialchars_decode($post->body) !!}

                    {{-- Tag Clouds --}}

                    <h3>Tag Clouds</h3>
                    @foreach ($post->tags as $tag)
                    <a href=""> <small class="float-left" style="margin-right: 10px; border-radius: 5px; border: 1px solid gray; padding: 5px;"> {{ $tag->name }} </small></a>
                @endforeach
                </div>
                <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>
            </div>
        </div>
    </article>
    <hr />
@endsection

@section('footer')

    <script src="{{ asset('user/js/prism.js') }}"></script>

@endsection