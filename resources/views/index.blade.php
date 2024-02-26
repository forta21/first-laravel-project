@extends('layouts.app')

@section('contend')
    <section id="home" class="main-home parallax-section">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h1>Hello! This is Neuron.</h1>
                    <h4>Responsive Blog HTML CSS Website Template</h4>
                    <a href="#blog" class="smoothScroll btn btn-default">Discover More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12">
                    @foreach($posts as $post)
                        <div class="blog-post-thumb">
                            <div class="blog-post-image">
                                <a href="{{ route('posts.show', $post->id) }}">
                                    <img src="{{ asset('storage/posts/posters/' . $post->poster) }}"
                                     class="img-responsive" alt="Blog Image">
                                </a>
                            </div>
                            <div class="blog-post-title">
                                <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->name }}</a></h3>
                            </div>
                            <div class="blog-post-format">
                                <span><a href="#"><img src="{{ asset('assets/images/author-image1.jpg') }}" class="img-responsive img-circle"> Jen Lopez</a></span>
                                <span><i class="fa fa-date"></i>{{ $post->created_at }}</span>
                                <span><i class="fa fa-comment-o"></i> 35 Comments</a></span>
                            </div>
                            <div class="blog-post-des">
                                <p>{{ $post->description }}</p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">Читать далее</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
