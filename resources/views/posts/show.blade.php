@extends('layouts.app')

@section('contend')
    <section id="home" class="main-single-post parallax-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>{{ $post->name}}</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Single Post Section -->
    <section id="blog-single-post">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-single-post-thumb">

                        <div class="blog-post-format">
                            <span><a href="#"><img src="{{ asset('assets/images/author-image1.jpg') }}" class="img-responsive img-circle"> Jen Lopez</a></span>
                            <span><i class="fa fa-date"></i>{{ $post->created_at->translatedFormat('d F, Y') }}</span>
                            <span><a href="#comments"><i class="fa fa-comment-o"></i> {{ trans_choice(':count коментарий|:count коментария|:count коментариев', $post->comments->count()) }}</a></span>
                        </div>

                        <div class="blog-post-des">
                            {{ $post->description }}
                        </div>

                        {{ $post->content}}

                        <div class="blog-author">
                            <div class="media">
                                <div class="media-object pull-left">
                                    <img src="{{ asset('assets/images/author-image1.jpg') }}"
                                         class="img-circle img-responsive" alt="blog">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#">Jen Lopez ( Designer )</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                </div>
                            </div>
                        </div>

                        @if(!$post->comments->isEmpty())
                            <div class="blog-comment" id="comments">
                                <h3>Комментарии</h3>
                                @foreach($post->comments as $comment)
                                    <div class="media">
                                        <div class="media-object pull-left">
                                            <img src="{{ asset('assets/images/author-image1.jpg') }}"
                                                 class="img-responsive img-circle"
                                                 alt="Blog Image 11">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">{{ $comment->user->name }}</h3>
                                            @if(!$comment->created_at->diffInDays() <=3)
                                                <span>{{ $comment->created_at->diffForHumans() }}</span>
                                            @else
                                                <span>{{ $comment->created_at->translatedFormat('j F Y') }}</span>
                                            @endif
                                            <p>{{ $comment->content }}</p>
                                        </div>
                                    </div>
                                @endforeach
                                @endif
                            </div>
                    </div>

                    <div class="blog-comment-form">
                        <h3>Оставить комментарий</h3>
                        <form action="#" method="post">
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"
                                      message="message" required="required"></textarea>
                            <div class="col-md-3 col-sm-4">
                                <input name="submit" type="submit" class="form-control" id="submit"
                                       value="Post Your Comment">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .main-single-post {
            background: url({{ asset('storage/posts/posters/' . $post->poster) }}) no-repeat;
        }
    </style>
@endsection
