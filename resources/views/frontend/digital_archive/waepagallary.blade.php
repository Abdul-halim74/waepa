@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

@section('css')

<style type="text/css">
  
  .tz-gallery .thumbnail {

    max-height: 330px !important;
    height: 330px;
}

</style>

@endsection



  @section('content')


 <br>
 <br>
 <br>
 <br>
 <br>



      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Archive</a></li>
              <li class="breadcrumb-item active">Gallary</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      
<div class="container gallery-container">

    <h3 class="text-center">WAEPA Image Gallery</h3>
    
    <div class="tz-gallery">
        
        <div class="row">

            @foreach($data as $single_data)

            <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('uploads/gallary') }}/{{$single_data->img}}">
                        <img height="150px" width="235px" src="{{ asset('uploads/gallary') }}/{{$single_data->img}}" alt="Not Found">
                   
                    <div class="caption">
                        <h3>{{$single_data->title}}</h3>
                        <p>{!!$single_data->content!!}</p>
                    </div>

                     </a>
                </div>
            </div>

            @endforeach
           <!--  <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('frontend_assets/img/waepagallary/FB_IMG_1609043333354.jpg') }}">
                        <img height="150px" width="235px" src="{{ asset('frontend_assets/img/waepagallary/FB_IMG_1609043333354.jpg') }}" alt="Bridge">
                    
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                    </a>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('frontend_assets/img/waepagallary/WAEPA-Talk3.jpg') }}">
                        <img height="150px" width="235px" src="{{ asset('frontend_assets/img/waepagallary/WAEPA-Talk3.jpg') }}" alt="Tunnel">
                   
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                     </a>

                </div>
            </div>
            <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('frontend_assets/img/waepagallary/WAEPA-Talk4.jpg') }}">
                        <img height="150px" width="235px" src="{{ asset('frontend_assets/img/waepagallary/WAEPA-Talk4.jpg') }}" alt="Coast">
                   
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                     </a>

                </div>
            </div> -->

          
        </div>

    </div>

</div>

    @endsection


 @section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>


 @endsection