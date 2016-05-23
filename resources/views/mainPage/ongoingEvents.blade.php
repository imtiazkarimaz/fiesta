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

                        @foreach ($events as $event)

                        <li> 
                        <div class="timeline-image">
                            <a href="EventHome.html">
                             <img class="img-circle img-responsive" src="myassets/img/about/csefest.jpg" alt="">
                         </a>
                        </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{$event->Ename}}</h4>
                                    <h4 class="subheading"></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">{{$event->Short_note}}
                                      
                                    </p>
                                    <p class="text-muted">
                                        {{$event->year}}
                                    </p>
                                    <p class="text-muted">
                                        {{$event->Venue}}
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