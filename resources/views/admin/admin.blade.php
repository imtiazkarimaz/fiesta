@extends('app')

@section('content')


             @if (Session::has('fail'))
                    <section class= "info-box fail">
                        {{Session::get('fail')}}
                    </section>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/').'/admin/login'}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-1">
                            <label>E-Mail</label>
                        </div>
                            <div class="col-md-10  col-md-offset-1">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-1">
                            <label>Password</label>
                        </div>
                            <div class="col-md-10  col-md-offset-1" >
                                    <input type="password" class="form-control" name="password" >
                            </div>
                    </div>

                    <div class="form-group">
                            <div class="col-md-12 col-md-offset-1">
                                    <div class="checkbox">
                                            <label  style="margin-top:0">
                                                    <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                       
                                    </div>
                            </div>
                    </div>

                    <div class="form-group">
                            <div class="col-md-4 col-md-offset-1">
                                    <button type="submit" class="btn btn-success" style="margin-right: 2px;">
                                            Login
                                    </button>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                            </div>
                        <a href="/password/email" style="color: blue">Forgot Password?</a>
                    </div>
            </form>
			
	</div>




@stop