@extends('layouts.master_backend')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Logos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Logos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                      
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>IMAGE</th>
                                        <th>Inserted Date</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sn = 1 @endphp
                                    @foreach($logos as $logo)
                                    <tr>
                                        <td>{{ $sn++ }}</td>
                                        <td><img src="{{asset('uploads/logo_image')}}/{{$logo->logo_image }}" class="rounded" alt="Logo"/ height="100" width="100"></td>
                                        <td>{{ $logo->logo_title }}</td>
                                        <td>
                                           <a href="{{url('admin/logo_edit')}}/{{ $logo->id }}" class="btn btn-success btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>IMAGE</th>
                                        <th>TITLE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection


@section('js')
@if(Session::has('status'))
<script type="text/javascript">
    toastr.success("{!!Session::get('status')!!}");
</script>
@endif
@endsection