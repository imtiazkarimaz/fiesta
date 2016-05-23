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
<section id="ongoingEvents">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Ongoing Events</h2>
                <h3 class="section-subheading text-muted">events nearby you</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">

                    @foreach ($event as $eventi)

                    <li> 
                    <div class="timeline-image">
                        <a href="EventHome.html">
                         <img class="img-circle img-responsive" src="myassets/img/about/csefest.jpg" alt="">
                     </a>
                    </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{$eventi->Ename}}</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                  {{$eventi->year}}
                                </p>
                                <p class="text-muted">
                                    {{$eventi->Short_note}}
                                </p>
                                <p class="text-muted">
                                   {{$eventi->Venue}}
                                </p>
                            </div>
                        </div>
                    </li>

                    @endforeach


                </ul>
            </div>
        </div>
    </div>
</section>
@include('/mainPage/ourTeam')
@include('/mainPage/services')
@include('/auth/login')
@include('/mainPage/footerView')
