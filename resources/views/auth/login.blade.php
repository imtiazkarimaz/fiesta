@extends('app')

@section('content')
<section id="login">
    <center>
        <h3 style="color: #5cb85c"> TO ORGANIZE AN EVENT YOU MUST LOGIN FIRST </h3>
    </center>
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
           
            <p class="modal-title"> <center> <b> Sign In/Create an account using social log in - Fast, easy, quick, one click sign in </b> </center> </p>

           <p> <center>
              
            <a href="#"> <i class="fa fa-facebook-official fa-2x"></i>  </a> 
            <a href="#"> <i class="fa fa-twitter-square fa-2x"></i>  </a> 
            <a href="#"> <i class="fa fa-google-plus fa-2x"></i>  </a> 
            </center>
          </p>
          </div>
            
            <div class="row-fluid">
            
                <div class="col-xs-6" style="padding-right:20px; border-right: 5px solid #ccc;">
                    <p> <center> <b> Already Registered on fiesta.com?</b> </center> </p>
                   
	<div class="row">
	
            @if (count($errors) > 0)
                    <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                    @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                    @endforeach
                            </ul>
                    </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="/auth/login">
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
                            </div>
                        <a href="/password/email" style="color: blue">Forgot Password?</a>
                    </div>
            </form>
			
	</div>


               
                  
                </div>
                <div class="col-xs-6" >
                    <p> <center> <b> Don't have an Account?</b> </center> </p>
                    <p align="justify"> If you are not currently a registered user of fiesta.com, you will need to create a free account. </p> 
                    <p align="justify"> You can subscribe to fiesta.com's newsletter, enjoy other features and offers with your free account.</p>    
                     <div class="row">
                             <div class="col-sm-offset-.5 col-sm-1" style="margin-top:20px">
                                 <a href="reg"> <button type="signUp" name="submit" class="btn btn-success"> Create An Account </button> </a>
                             </div>
                     </div>
                </div>
    
            </div>
           
            
         
          <div class="modal-footer">
            
          </div>
        </div>

      </div>
</section>
@endsection
