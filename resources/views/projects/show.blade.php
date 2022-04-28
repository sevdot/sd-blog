@extends('layouts.app')
@section('title')
    {{$project->name}}
@stop
@section('content')
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <div class="column is-9">
                    <div class="box is-flex is-justify-content-space-between is-align-items-center">
                        <div class="is-flex">
                            <div class="cover">
                                <figure class="image is-128x128">
                                    <img src="{{asset($project->cover)}}" alt="">
                                </figure>
                            </div>
                            <div class="ml-2">
                                <h2 class="is-size-4"><a href="">{{$project->name}}</a></h2>
                                <p class="is-size-7 has-text-grey">开始时间 {{$project->created_at->toDateString()}}</p>
                                <p class="is-size-6 has-text-grey-dark">{{$project->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="tabs is-boxed">
                            <ul>
                                <li class="is-active"><a>里程碑</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <div class="timeline is-centered">
                                @foreach($project->milestones as $value)
                                <header class="timeline-header">
                                    <span class="tag is-medium is-link">{{$value->title}}</span>
                                </header>
                                <div class="timeline-item is-link">
                                    <div class="timeline-marker is-link"></div>
                                    <div class="timeline-content">
                                        <p class="heading">{{$value->created_at->toDateString()}}</p>
                                        <div>{!! $value->content !!}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-3">
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
                </div>
            </div>
        </div>
    </section>
@stop
