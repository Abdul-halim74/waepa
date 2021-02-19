@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

  @section('content')


    <br> <br> <br>  <br> <br>  <br> 
<div class="container gallery-container">

    <h3 class="text-center">WAEPA Image Gallery</h3>
    
    <div class="tz-gallery">
        
        <div class="row">

            <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('frontend_assets/img/waepatalk/park.jpg') }}">
                        <img height="150px" width="235px" src="{{ asset('frontend_assets/img/waepatalk/park.jpg') }}" alt="Park">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('frontend_assets/img/waepatalk/bridge.jpg') }}">
                        <img height="150px" width="235px" src="{{ asset('frontend_assets/img/waepatalk/bridge.jpg') }}" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('frontend_assets/img/waepatalk/tunnel.jpg') }}">
                        <img height="150px" width="235px" src="{{ asset('frontend_assets/img/waepatalk/tunnel.jpg') }}" alt="Tunnel">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('frontend_assets/img/waepatalk/coast.jpg') }}">
                        <img height="150px" width="235px" src="{{ asset('frontend_assets/img/waepatalk/coast.jpg') }}" alt="Coast">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('frontend_assets/img/waepatalk/rails.jpg') }}">
                        <img height="150px" width="235px" src="{{ asset('frontend_assets/img/waepatalk/rails.jpg') }}" alt="Rails">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class=" col-md-3">
                <div class="thumbnail">
                    <a class="lightbox" href="{{ asset('frontend_assets/img/waepatalk/traffic.jpg') }}">
                        <img height="150px" width="235px" src="{{ asset('frontend_assets/img/waepatalk/traffic.jpg') }}" alt="Traffic">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
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