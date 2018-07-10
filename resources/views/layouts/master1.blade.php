<html>
<head>
    <title>@yield('title')</title>
    @yield('bootsrap')
</head>
<body style="background-image: url('img/wall1.jpg');background-size: cover">


<ul>
    <li><a href="home">خانه</a></li>
    <li><a href="product">محصولات</a></li>
    <li class="dropdown">
        <a href="gallery" class="dropbtn">گالری</a>
        <div class="dropdown-content">
            <a href="#">دکوراسیون داخلی</a>
            <a href="#">نورپردازی</a>
            <a href="#">دکوراسیون محل کار</a>
            <a href="#">دکوراسیون خانه</a>
        </div>
    </li>
    <li><a href="shop">فروشگاه</a></li>
    <li><a href="about">درباره ما</a></li>
    <li><a href="contact">ارتباط با ما</a></li>

</ul>


@yield('tooll')

</body>
</html>