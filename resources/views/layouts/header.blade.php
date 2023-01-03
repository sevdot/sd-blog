<nav id="navbar" class="navbar is-link has-shadow">
    <div class="container is-max-widescreen">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{url('/')}}">
                <span class="logo title is-3 has-text-white">SevDot</span>
            </a>
            <div id="navbarBurger" class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">

            </div>
            <div class="navbar-end">
                <a href="{{url('blog')}}" class="navbar-item">博客</a>
                <a href="{{url('projects')}}" class="navbar-item">项目</a>
                <a href="{{url('links')}}" class="navbar-item">友链</a>
                <a href="{{url('about')}}" class="navbar-item">关于</a>
            </div>
        </div>
    </div>
</nav>
