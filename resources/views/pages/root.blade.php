@extends('layouts.app')

@section('content')
    <section class="hero is-link">
        <div class="hero-body">
            <div class="has-text-centered mt-2">
                <h1 class="title is-4">独立自由</h1>
                <p class="subtitle is-6">崇尚独立开发，追求自由职业。</p>
                <a href="" class="button is-outlined is-info">联系</a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <main class="column is-9">
                    <div class="box">
                        <h2 class="title is-5">最新文章</h2>
                        <hr class="mt-1 mb-3">
                        @include('components/article_list',$articles)
                    </div>
                </main>
                <aside class="column is-3">
                    @include('components/aside')
                </aside>
            </div>
        </div>
    </section>
@stop
