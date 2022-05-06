@extends('layouts.app')
@section('title')
    项目
@stop
@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <div class="has-text-centered mt-2">
                <h1 class="title is-4">业余项目</h1>
                <p class="subtitle is-6">业余时间通过构建项目来提升自己</p>
                <a href="{{url('/contact')}}" class="button is-outlined is-info">联系</a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <div class="column is-9">
                    @foreach($projects as $key=>$value)
                    <div class="box is-flex is-justify-content-space-between is-align-items-center">
                        <div class="is-flex">
                            <div class="cover">
                                <figure class="image is-128x128">
                                    <img class="is-rounded-2" src="{{asset($value->cover)}}" alt="">
                                </figure>
                            </div>
                            <div class="ml-2">
                                <h2 class="is-size-4">
                                    <a href="{{route('projects.show',$value->id)}}">{{$value->name}}</a>
                                </h2>
                                <p class="is-size-7 has-text-grey-light">开始时间 {{$value->created_at->toDateString()}}</p>
                                <p class="is-size-6 has-text-grey">{{$value->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="box">{{$projects->render()}}</div>
                </div>
                <div class="column is-3">
                    @include('components/aside')
                </div>
            </div>
        </div>
    </section>
@stop
