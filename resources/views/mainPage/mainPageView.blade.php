@include('/mainPage/headerView')

<body id="page-top" class="index">
@include('/mainPage/navBar')

    <header  style="background-image:url(myassets/img/header-bg.jpg)  ">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Ecstasy of life !</div>
                <div class="intro-lead-in"> Sing Live Cheer and Thrill</div>
                <a href="#services" class="page-scroll btn btn-xl">Join Festivals around you</a>
            </div>
        </div>
    </header>



@include('/mainPage/gallery')
@include('/mainPage/ongoingEvents')
@include('/mainPage/ourTeam')
@include('/mainPage/services')
@include('/auth/login')
@include('/mainPage/footerView')
