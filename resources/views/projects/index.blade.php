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
                <a href="" class="button is-outlined is-info">联系</a>
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
                                <h2 class="is-size-4"><a href="">{{$value->name}}</a></h2>
                                <p class="is-size-7 has-text-grey-light">开始时间 {{$value->created_at->toDateString()}}</p>
                                <p class="is-size-6 has-text-grey">{{$value->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="box">{{$projects->render()}}</div>
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
