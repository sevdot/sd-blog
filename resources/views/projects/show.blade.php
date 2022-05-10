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
                                    <img class="is-rounded-2" src="{{asset($project->cover)}}" alt="">
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
                                        <div>{!! $value->parse_content !!}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
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
