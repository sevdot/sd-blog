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
                <a href="{{url('/contact')}}" class="button is-outlined is-info">联系</a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <main class="column is-9">
                    <div class="box">
                        @include('components/article_list',$articles)
                        {!! $articles->render() !!}
                    </div>
                </main>
                <aside class="column is-3">
                    @include('components/aside')
                </aside>
            </div>
        </div>
    </section>
@stop
