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
                            {!! $article->parse_content !!}
                        </div>
                    </div>
                </div>
                <div class="column is-3">
                    @include('components/aside')
                </div>
            </div>
        </div>
    </section>
@stop
