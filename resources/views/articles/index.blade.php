@extends('layouts.app')
@section('title')
    博客
@stop
@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <div class="has-text-centered mt-2">
                <h1 class="title is-4">博客文章</h1>
                <p class="subtitle is-6">我偶尔会写博客文章分享关于独立开发和自由职业的内容，关注微信公众号可及时预览。</p>
                <a href="" class="button is-outlined is-info">联系</a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <main class="column is-9">
                    <div class="box">
                        @foreach($articles as $key=>$value)
                            <div class="box is-flex">
                                <a class="is-flex" href="" title="{{$value->title}}">
                                    <time>{{$value->created_at->toDateString()}}</time>
                                    <span style="margin: 0 5px;">|</span>
                                    <span>{{$value->title}}</span>
                                </a>
                            </div>
                        @endforeach
                        {!! $articles->render() !!}
                    </div>
                </main>
                <aside class="column is-3">
                    <div class="box">
                        <p class="has-text-centered">站长：<a href="{{url('/contact')}}" target="_blank">SevDot</a></p>
                        <hr>
                        <div class="is-flex is-justify-content-center">
                            <figure class="image is-96x96">
                                <img class="is-rounded" style="" src="{{asset('images/sevdot_avatar.jpg')}}"
                                     alt="SevDot 的头像">
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
                </aside>
            </div>
        </div>
    </section>
@stop
