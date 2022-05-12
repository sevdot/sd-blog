@extends('layouts.app')
@section('title')
    联系
@stop
@section('content')
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <div class="column is-offset-2 is-8">
                    <div class="box">
                        <h1 class="title is-4">您好，我是 SevDot。</h1>
                        <p class="subtitle is-6">一名开发者、创造者和终身学习者。</p>
                        <hr>
                        <div class="content">
                            <h2>关于我</h2>
                            <p>目前在云南昆明的一家小型科技公司上班，业余时间通过写博客和开发项目来提升自己，经常称自己为全栈开发工程师，所谓的全栈就是使用 Laravel 开发 API，使用 Vue 开发前端页面，也会开发小程序。 </p>
                            <hr>
                            <h2>关于博客</h2>
                            <p>
                                很久以前我就有这个博客，当时使用 Laravel 开发，部署在阿里云，后面因为服务器到期后没有续费，博客就停止了。
                            </p>
                            <p>
                                2021 年我的工资降低了 20%，我试图做一些改变，希望通过博客来记录这个过程。于是使用 Hugo 和 Github page 免费搭建， 并在 2021 年最后一个月重新上线这个博客网站。
                            </p>
                            <p>
                                2022 年 4 月份的时候，我想拥有一个自己开发的博客网站，于是就使用 Laravel 和 bulma 重新开发这个博客网站，就是你现在看到的样子，你可以<a href="https://github.com/sevdot/sd-blog">点击这里</a>可以查看源代码。
                            </p>

                            <hr>
                            <h2>公众号</h2>
                            <hr>
                            <p>
                                <figure class="p-1">
                                    <img src="{{asset('images/sevdots.png')}}" alt="">
                                </figure>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
