@extends('layouts.app')
@section('title')
    友链
@stop
@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <div class="has-text-centered mt-2">
                <h1 class="title is-4">友情链接</h1>
                <p class="subtitle is-6">欢迎互换博客链接</p>
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
                    <div class="box flex flex-wrap">
                        @foreach($links as $link)
                            <a href="{{$link->url}}" target="_blank">
                                <div class="box mb-2 is-flex">
                                    <div>
                                        <figure class="image is-64x64">
                                            <img class="is-rounded" style="" src="{{$link->logo}}"
                                                 alt="{{$link->logo}} 图标">
                                        </figure>
                                    </div>
                                    <div class="ml-3">
                                        <h2 class="title is-4">{{$link->name}}</h2>
                                        <p class="subtitle is-6">{{$link->describe}}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        @if($links->total()>50)
                            <div class="box">
                                {{$links->render()}}
                            </div>
                        @endif
                    </div>
                    <div class="box">
                        <article class="message is-warning">
                            <div class="message-body">
                                申请前请确保已经将我的博客地址添加到你博客的友情链接里面。
                            </div>
                        </article>
                        <form action="{{route('links.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="field">
                                <div class="control">
                                    <input class="input @if ($errors->has('name')) is-danger @endif " type="text"
                                           name="name" placeholder="名称，比如：SevDot 的个人博客">
                                </div>
                                @if ($errors->has('name'))
                                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input @if ($errors->has('logo')) is-danger @endif " type="text"
                                           name="logo" placeholder="logo，比如：http://blog.test/images/sevdot_avatar.jpg">
                                </div>
                                @if ($errors->has('logo'))
                                    <p class="help is-danger">{{ $errors->first('logo') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input @if ($errors->has('url')) is-danger @endif " type="text"
                                           name="url" placeholder="网址，比如：http://www.sevdot.com">
                                </div>
                                @if ($errors->has('url'))
                                    <p class="help is-danger">{{ $errors->first('url') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea @if ($errors->has('describe')) is-danger @endif "
                                              name="describe" placeholder="博客描述，比如：一个关注独立开发和自由职业的个人博客"></textarea>
                                </div>
                                @if ($errors->has('describe'))
                                    <p class="help is-danger">{{ $errors->first('describe') }}</p>
                                @endif
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-link">申请友链</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
                <aside class="column is-3">
                    @include('components/aside')
                </aside>
            </div>
        </div>
    </section>
@stop
