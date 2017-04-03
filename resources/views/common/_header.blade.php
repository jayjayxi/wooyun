<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li @if(!session('column')) class="active" @endif><a href="/">首页</a></li>
                <li @if(session('column') === 'bugs') class="active" @endif><a href="/?column=bugs">八阿哥</a></li>
                <li @if(session('column') === 'drops') class="active" @endif><a href="/?column=drops">知识库</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="/">
                <input type="hidden" name="column" value="{{ session('column') }}">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="Search" aria-describedby="basic-addon1" value="{{ session('keyword') }}">
                        <span class="input-group-addon" onclick="$(this).closest('form').submit()">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>