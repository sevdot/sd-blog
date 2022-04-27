@extends('layouts.app')
@section('title')
    {{$article->title}}
@stop
@section('meta')
    <meta name="description" content="{{$article->excerpt}}" />
@endsection
@section('content')
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <div class="column is-9">
                    <div class="box ">
                        <h1 class="title is-3 mt-2 mb-1 has-text-centered">{{$article->title}}</h1>
                        <div class="has-text-centered">
                            <span class="is-size-7 has-text-grey">发布日期 {{$article->created_at->toDateString()}}</span>
                        </div>
                        <hr class="mt-2 mb-4">
                        <div class="content">
                            {!! $article->content !!}
                        </div>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="box">
                        <p class="has-text-centered">站长：<a href="{{url('/contact')}}" target="_blank">SevDot</a></p>
                        <hr>
                        <div class="is-flex is-justify-content-center">
                            <figure class="image is-96x96">
                                <img class="is-rounded" style="" src="{{asset('images/sevdot_avatar.jpg')}}" alt="SevDot 的头像">
                            </figure>
                        </div>
                        <hr>
                        <div class="has-text-centered">
                            <a href="" class="button is-light"><span class="icon"><i
                                        class="fa fa-github"></i></span></a>
                            <a href="" class="button is-info"><span class="icon"><i class="fa fa-weibo"></i></span></a>
                            <a href="" class="button is-success"><span class="icon"><i class="fa fa-weixin"></i></span></a>
                        </div>
                    </div>
                    <div class="box">
                        <h2 class="title is-5 has-text-centered has-text-success">微信公众号</h2>
                        <hr>
                        <img src="{{asset('images/sevdots.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
