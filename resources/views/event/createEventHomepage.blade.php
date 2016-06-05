
    <header>
     
        
        @if($path=="") <div class="cover"   style=" background-image:url('myassets/img/about-bg.jpg'); ">
        @else  <div class="cover"   style=" background-image:url({{$path}}); ">
        @endif
           

            <center>
                <h1> </h1>
               <h1 contenteditable="true" style="color: white; "/>Your Event Name Here</h1>
               <h2 contenteditable="true" style="color: white">Date</h2>
            </center>
         
               <div  style="margin-top: 165px">
                   <div class="col-sm-offset-8 col-sm-6">
                        <form action="{{ URL::to('upload')}}" method="post" enctype="multipart/form-data">
                           
                            <input type="file" name="file" id="file" class="hidden"/>
                            <label for="file">Select Photo</label>
                            
                            <input type="submit" value="Upload" name="submit" style="color: black">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            
                
                        </form>
                   </div>
               </div>
        </div>
    </header>

    <!-- Main Content -->
      
    <form action="{{ URL::to('schedule')}}" method="post" enctype="multipart/form-data">
    
        <div class="row">
            <div class=" col-md-5 col-md-offset-1">
                <center> <h3> <b> Add your Schedule </b> </h3> </center>
                 <textarea name="txtArea" id="txtArea" rows="8" placeholder="Add Here" style="width: 500px" rows="2" ></textarea>
            </div>
    
            
            <div class=" col-md-6 col-md-offset-4">
                <button type="submit" id="btn" class="btn btn-success" style="margin-right: 2px; margin-top: 8px"> LAUNCH EVENT </button>
            </div>
        </div>
        
               <input type="hidden" value="{{$path}}" name="coverpath"> 
             <input type="hidden" value="{{csrf_token()}}" name="_token"> 
        
    </form>
  