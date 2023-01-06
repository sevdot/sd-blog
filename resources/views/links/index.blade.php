@extends('layouts.app')
@section('title')
    友链
@stop
@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <div class="has-text-centered mt-2">
                <h1 class="title is-4">友情链接</h1>
                <p class="subtitle is-6">欢迎互换友情链接</p>
                <div class="">
                    <a href="{{route('links.create')}}" class="button is-info is-outlined">申请友链</a>
                </div>
            </div>
        </div>
    </section>
    @if(session()->has('success'))
        <div class="box has-text-centered">
            <p class="has-text-success">{{ session()->get('success') }}</p>
        </div>
    @endif
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <main class="column is-9">
                    <div class="box is-flex is-flex-wrap-wrap is-justify-content-space-between mb-2">
                        <div class="columns is-flex-wrap-wrap">
                            @foreach($links as $link)
                                <a href="{{$link->url}}" class="column is-3" target="_blank">
                                    <div class="box mb-2 is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
                                        <figure class="image is-96x96 mb-1">
                                            <img class="is-rounded" style="" src="{{$link->logo}}"
                                                 alt="{{$link->logo}} 图标">
                                        </figure>
                                        <h2 class="title is-4">{{$link->name}}</h2>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                    </div>
                </main>
                <aside class="column is-3">
                    @include('components/aside')
                </aside>
            </div>
        </div>
    </section>
@stop
