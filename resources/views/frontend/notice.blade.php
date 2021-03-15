@extends('layouts.master_frontend')
  <!-- ======= Hero Section ======= -->

  @section('css')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">



  @endsection

  @section('content')

    <br> <br> <br>
    <section id="notice" class="notice">
      <div class="container">
      		<h3 class="text-center"><span style="color: #ff284f;">J</span>ob  <span style="color: #ff284f;">C</span>ircular</h3>
        <div class="row">
         
          <div class="col-lg-12 card">
            
            


          <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>

                <th>SL</th>
                <th>Title</th>
                <th>Published Date</th>
                <th>View</th>
                
            </tr>
        </thead>
        <tbody>

          <?php  $sl=1;  ?>

              @foreach($notices  as $notice)

                <tr>
                    <td><?php echo $sl++;  ?></td>

                    <td>{{$notice->title}}</td>
                    <td>{{$notice->create_date}}</td>
                    <td><a target="_blank" href="{{ url('frontend_notice_details', $notice->id)}}" ><i class="fas fa-file-pdf" style="color: #ff284f;"></i></a></td>
                   
                </tr>
           
             @endforeach
 
        </tbody>
    </table>

          </div>
        </div>

      </div>

      


    </section><!-- End Notice Section -->



  @endsection




@section('js')

    
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
  $(document).ready(function() {
      var table = $('#example').DataTable( {
          lengthChange: false,
          buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
      } );
   
      table.buttons().container()
          .appendTo( '#example_wrapper .col-md-6:eq(0)' );
  } );
     </script>

  @endsection



