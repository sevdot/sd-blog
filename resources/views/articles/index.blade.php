@extends('layouts.app')
@section('title')
    博客
@stop
@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <div class="has-text-centered mt-2">
                <h1 class="title is-4">博客</h1>
                <p class="subtitle is-6">这里包含所有的博客文章</p>
                <a href="{{url('/contact')}}" class="button is-outlined is-info">联系</a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <main class="column is-9">
                    <div class="box">
                        <div class="tabs">
                            <ul>
                                <li class="{{ !request()->has('column_id') ? 'is-active' :'' }}">
                                    <a href="{{route('articles.index')}}">全部</a>
                                </li>
                                @foreach($columns as $key=>$value)
                                <li class="{{ request()->get('column_id')==$value->id ? 'is-active' :'' }}">
                                    <a href="{{route('articles.index',['column_id'=>$value->id])}}">{{$value->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="box">
                        @include('components/article_list',$articles)
                        {!! $articles->appends(['column_id'=>request()->get('column_id')])->links() !!}
                    </div>
                </main>
                <aside class="column is-3">
                    @include('components/aside')
                </aside>
            </div>
        </div>
    </section>
@stop
