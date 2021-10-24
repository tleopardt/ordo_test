<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/app.css')}}"></link>
    <link rel="stylesheet" href="{{ asset ('splide/dist/css/splide.min.css')}}"></link>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="menu">
            <div class="welcome">
                <img src="{{ asset ('img/logo.png') }}" alt="true">
                <div>
                    <p>Halo, Selamat Datang</p>
                    <h5>John Doe</h5>
                </div>
            </div>
            <div class="user">
                <div class="avatar">
                    <img src="{{ asset ('img/Avatar.png') }}"/>
                    <div class="circle"></div>
                </div>
                <div class="nm">
                    <h5>John Doe</h5>
                    <p>Kelas 7-A | No. Absen 17</p>
                </div>
            </div>
            <div class="menu-list">
                <ul>
                    <li class="nav-item active"><a href="/"><span class="material-icons">home</span><p>Dashboard</p></a></li>
                    <li class="nav-item"><a href="profile"><span class="material-icons">account_circle</span><p>Profil</p></a></li>
                    <li class="nav-item"><a href="#"><span class="material-icons">event_note</span><p>Jadwal</p></a></li>
                    <li class="nav-item"><a href="#"><span class="material-icons">cast_for_education</span><p>Pengumuman</p></a></li>
                    <li class="nav-item"><a href="#"><span class="material-icons">school</span><p>Kelas</p></a></li>
                    <li class="nav-item"><a href="#"><span class="material-icons">assignment</span><p>Quiz</p></a></li>
                    <li class="nav-item"><a href="#"><span class="material-icons">file_copy</span><p>Ulangan</p></a></li>

                    <div></div>
                    <li><a href="#"><span class="material-icons">logout</span><p>Logout</p></a></li>
                </ul>
            </div>
        </div>
        @yield('content')
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Slider JS -->
<script src="{{ asset ('splide/dist/js/splide.min.js')}}"></script>
<script>
    // $('body').on('load').css("opacity", "1")
    // slide script
    if($('.splide').length !== 0) {
        var sliderFunction = new Splide('.splide' ,{
            perPage: 3,
            padding: '16%',
            pagination: false,
            arrows: false
        } );

        sliderFunction.mount();
    } else {  }
      
    // aktif menu
    function addActiveClass(element) {
        var current2 = window.location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
        if (current2 === "") {  }
        else {
            if (element.attr('href').indexOf(current2) !== -1) {
                $(".nav-item").removeClass("active");
                element.parents('.nav-item').last().addClass('active');
            }
        }
    }

    $('.menu-list ul li a').each(function () {
        var $this = $(this);
        addActiveClass($this);
    });
</script>
</html>