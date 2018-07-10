<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    @yield('bootsrap')
    @yield('tool')

</head>
<body style="background-image: url('img/wall_gray.jpg');background-size: cover">


@yield('alert')
@yield('reg')
<script>
    $('div.alert').delay(3000).slideUp(800);
</script>

@guest
    <button type="button"
            style="margin-top: 25px;margin-left: 30px;border-radius: 50px;background-color: #8c8c8c;width: 5%"
            onclick="location.href='register'">Register
    </button>
    <button type="button"
            style="margin-top: 25px;margin-left: 15px;border-radius: 50px;background-color: #8c8c8c;width: 5%"
            onclick="location.href='login'">Login
    </button>
@else
<div class="container" style="margin-top: 20px">
    <ul class="nav navbar-nav navbar-right" style="border-radius: 50px;padding: 1px;">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
               aria-haspopup="true" v-pre style="border-radius: 50px;color: #2ab27b">
                {{ \Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" style="border-radius: 50px;background-color: black;">
                <li style="background-color: black;">
                    <a style="background-color: black" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span style="color: red">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endguest


<ul>
    <li><a href="home">خانه</a></li>
    <li><a href="product">محصولات</a></li>
    <li class="dropdown">
        <a href="gallery" class="dropbtn">گالری</a>
        <div class="dropdown-content">
            <a href="gallery">دکوراسیون داخلی</a>
            <a href="gallery">نورپردازی</a>
            <a href="gallery">دکوراسیون محل کار</a>
            <a href="gallery">دکوراسیون خانه</a>
        </div>
    </li>
    <li><a href="shop">فروشگاه</a></li>
    <li><a href="about">درباره ما</a></li>
    <li><a href="contact">ارتباط با ما</a></li>

    <div>
        <input type="text" name="search" placeholder="Search..">
    </div>

</ul>

@yield('toolbar')
@yield('gallery')
@yield('text')
@yield('list')


</body>
</html>