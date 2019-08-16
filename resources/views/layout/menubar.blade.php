<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        @if(isset($wholeProducts))
                        @foreach($wholeProducts as $wholeProduct)
                        <li><a>{{$wholeProduct->name}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($wholeProduct->TypeProducts as $TypeProduct)
                                <li><a href="typeProduct/{{$TypeProduct->id}}">{{$TypeProduct->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                        @endif
                        <li><a href="">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu -->