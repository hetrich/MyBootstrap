<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="this's Zon-Yi's work !">
    <title>

        @yield('pageTitle')

    </title>

{{-- 頁面共通CSS --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

{{-- 頁面自訂CSS --}}

    @yield('css')

</head>

<body>
    <nav>
        <!-- logo -->
        <div class="container-xxl d-flex justify-content-lg-between ">
            <div class="logo"><a href="/"><img src="{{asset('img/homepage-img/logo--u5T7hu.svg')}}" alt=""></a></div>
            <!-- 相關超連結 -->
            <ul class="nav justify-content-end align-content-center ">

                <li class="nav-item">
                    <a class="nav-link" href="/banner">BANNER頁面</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">商品管理頁面</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/comment">心情留言板</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{asset('/checkedout1')}}"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                <li class="nav-item">
                    <a class="user-icon nav-link "  href="/checkedout1">
                        <i  class=" fa-solid fa-circle-user"></i>
                    </a>
                    <div class="login-remind ">
                        <P>Login</P>
                    </div>
                </li>
            </ul>
            <!-- 漢堡連結 -->
            <div class="burger-link ">
                <div class="burger-box">
                    <input type="checkbox" id="burger" hidden>
                    <label for="burger"><i class="fa-solid fa-align-justify"></i></label>
                    <ul class="nav justify-content-end align-content-center">
                        <li class="nav-item2">
                            <a class="nav-link" href="/banner">BANNER頁面</a>
                        </li>
                        <li class="nav-item2">
                            <a class="nav-link" href="/product">商品管理頁面</a>
                        </li>
                        <li class="nav-item2">
                            <a class="nav-link" href="/comment">心情留言板</a>
                        </li>
                        <li class="nav-item2">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                        <li class="nav-item2">
                            <a class="user-icon nav-link " href="/checkedout1">
                                <i class=" fa-solid fa-circle-user"></i>
                            </a>
                            <div class="login-remind ">
                                <P>Login</P>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main>

        @yield('main')

    </main>
    <footer>
        <!-- 網頁其他資訊 -->
        <!-- 資訊1 -->
        <div class="other-info1 d-flex align-items-center">
            <div class="l-box">
                <div class="logo">
                    <img src="{{ asset('img/homepage-img/little.logo.png')}}" alt="little logo" />
                    <span>數位方塊</span>
                </div>
                <div class="info">
                    <p>Air plant banjo lyft occupy retro adaptogen indego</p>
                </div>
            </div>
            <div class="r-box d-flex justify-content-around">
                <ul>
                    <li>
                        <h6>CATEGORIES</h6>
                    </li>
                    <li><a>First Link</a></li>
                    <li><a>Second Link</a></li>
                    <li><a>Third Link</a></li>
                    <li><a>Fourth Link</a></li>
                </ul>
                <ul>
                    <li>
                        <h6>CATEGORIES</h6>
                    </li>
                    <li><a>First Link</a></li>
                    <li><a>Second Link</a></li>
                    <li><a>Third Link</a></li>
                    <li><a>Fourth Link</a></li>
                </ul>
                <ul>
                    <li>
                        <h6>CATEGORIES</h6>
                    </li>
                    <li><a>First Link</a></li>
                    <li><a>Second Link</a></li>
                    <li><a>Third Link</a></li>
                    <li><a>Fourth Link</a></li>
                </ul>
                <ul>
                    <li>
                        <h6>CATEGORIES</h6>
                    </li>
                    <li><a>First Link</a></li>
                    <li><a>Second Link</a></li>
                    <li><a>Third Link</a></li>
                    <li><a>Fourth Link</a></li>
                </ul>
            </div>
        </div>
        <!-- 資訊2 -->
        <div class="other-info2">
            <div class="container d-flex align-items-center justify-content-between">
                <p>© 2020 Tailblocks — @善良的人</p>
                <div class="svg">
                    <img src="{{asset('img/some-svg/facebook.svg')}}" alt="">
                    <img src="{{asset('img/some-svg/twitter.svg')}}" alt="">
                    <img src="{{asset('img/some-svg/instagram.svg')}}" alt="">
                    <img src="{{asset('img/some-svg/linkedin.svg')}}" alt="">
                </div>
            </div>
        </div>
    </footer>

{{-- 頁面共通Js --}}

    <script src="https://kit.fontawesome.com/1b22cb82e7.js" crossorigin="anonymous"></script>

{{-- 頁面自訂Js --}}

@yield('Js')

</body>

</html>
