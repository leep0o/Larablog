<!-- navbar from bootstrap 3 doc http://getbootstrap.com/components/#navbar -->

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{ Setting::first()->app_name }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                
                <li>
                    {{ link_to('blog', 'Blog') }}
                </li>

                <li>
                    {{ link_to('works', 'Portfolio') }}
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Discover <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            {{ link_to('music', 'Music playlists') }}
                        </li>
                        <li>
                            {{ link_to('http://last-mohicans.net/', 'Games to play', ['target'=>'_blank']) }}
                        </li>
                    </ul>
                </li>
            </ul>
            
            {{ Form::open(['class'=>'navbar-form navbar-left', 'role'=>'search']) }}
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search something">
                </div>
                
                {{ Form::submit('Go', ['class'=>'btn btn-default']) }}
            {{ Form::close() }}
            
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Link</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>