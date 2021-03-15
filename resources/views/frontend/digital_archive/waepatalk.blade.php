@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

  @section('content')






  		<div class="container ">
    <div class="col-md-12">
        <h3 class="text-center">WAEPA Talk</h3>
        <br>

             <div class="row pb-row">

                @foreach($data as $single_data)
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="{{$single_data->video_link}}" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">{{$single_data->title}}</label>
                </div>

                @endforeach
               <!--  <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/wjT2JVlUFY4?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Manuel Riva - Mhm Mhm</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame " width="100%" height="230" src="https://www.youtube.com/embed/papuvlVeZg8?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Clean Bandit - Rockabye</label>
                </div>
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Y1_VsyLAGuk?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Burak Yeter - Tuesday</label>
                </div> 
                <div class="col-md-3 pb-video">
                    <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/Y1_VsyLAGuk?list=RDzuAcaBkcYGE?ecver=1" frameborder="0" allowfullscreen></iframe>
                    <label class="form-control label-warning text-center">Burak Yeter - Tuesday</label>
                </div> -->

        </div>
        

       <!--  <div class="row pb-row">
            <div class="col-md-3 ">

            <img src="{{ asset('frontend_assets/waepa_talk/FB_IMG_1609043306929.jpg') }}" height="70%" width="100%">
              
                <label class="form-control label-warning text-center">F.O. and Peeva - Lichnata</label>

            </div>

            <div class="col-md-3 ">
                <img src="{{ asset('frontend_assets/waepa_talk/WAEPA-Talk1.jpg') }}" height="70%" width="100%">
                <label class="form-control label-warning text-center">Machine Gun - Bad Things</label>
            </div>

            <div class="col-md-3 ">
               <img src="{{ asset('frontend_assets/waepa_talk/WAEPA-Talk2.jpg') }}" height="70%" width="100%">
                <label class="form-control label-warning text-center">INNA - Say it with your body</label>
            </div>

            <div class="col-md-3 ">
             
               <img src="{{ asset('frontend_assets/waepa_talk/WAEPA-Talk4.jpg') }}" height="70%" width="100%">
                <label class="form-control label-warning text-center">INNA - Gimme Gimme</label>
            </div>
        </div>
    </div>
</div> -->
   @endsection





