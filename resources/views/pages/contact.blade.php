@extends('layouts.app')
@section('title')
    联系
@stop
@section('content')
    <section class="section">
        <div class="columns">
            <div class="column is-offset-4 is-4">
                <div class="box">
                    <div class="message is-success">
                        <div class="message-body has-text-centered">
                            <i class="fa fa-warning"></i> 添加微信请道明来意，谢谢！
                        </div>
                    </div>
                    <div class="is-flex is-justify-content-center">
                        <figure class="image is-300x300">
                            <img src="{{asset('/images/wechat.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="box">
                    <h2 class="title is-4">公众号</h2>
                    <hr>
                    <figure class="image">
                        <img src="{{asset('images/sevdots.png')}}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
@stop
