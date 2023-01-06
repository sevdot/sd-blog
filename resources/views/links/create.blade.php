@extends('layouts.app')
@section('title')
    友链
@stop
@section('content')
    @if(session()->has('success'))
        <div class="box has-text-centered">
            <p class="has-text-success">{{ session()->get('success') }}</p>
        </div>
    @endif
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <main class="column is-9">
                    <div class="box">
                        <article class="message is-warning">
                            <div class="message-body">
                                申请前请确保已经将我的博客地址添加到你博客的友情链接里面。
                            </div>
                        </article>
                        <div class="box">
                            <p>我的博客名称：SevDot</p>
                            <p>我的博客网址：<span class="has-text-link">http://www.sevdot.com</span></p>
                            <p>我的博客图标：http://www.sevdot.com/images/sevdot_avatar.jpg</p>
                            <p>我的博客描述：一个关注独立开发和自由职业的个人博客。</p>
                        </div>
                    </div>
                    <div class="box">
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
                                    <input class="input @if ($errors->has('url')) is-danger @endif " type="text"
                                           name="url" placeholder="网址，比如：http://www.sevdot.com">
                                </div>
                                @if ($errors->has('url'))
                                    <p class="help is-danger">{{ $errors->first('url') }}</p>
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
                                    <textarea class="textarea @if ($errors->has('describe')) is-danger @endif "
                                              name="describe" placeholder="博客描述，选填"></textarea>
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
