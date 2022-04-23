@extends('layouts.app')
@section('title')
    联系
@stop
@section('content')
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <div class="column is-offset-2 is-8">
                    <div class="box">
                        <h1 class="title is-4">您好，我是 SevDot。</h1>
                        <p class="subtitle is-6">我是一名软件开发者和终身学习者，偶尔也写博客文章。</p>
                        <hr>
                        <div class="content">
                            <h2>关于博客</h2>
                            <p>基于 Laravel 和 Bulma 开发的个人博客应用。</p>
                            <hr>
                            <h2>公众号</h2>
                            <hr>
                            <p>
                                <figure class="p-1">
                                    <img src="{{asset('images/sevdots.png')}}" alt="">
                                </figure>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
