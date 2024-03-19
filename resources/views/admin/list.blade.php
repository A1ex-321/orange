@extends('admin.layouts.app')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


@section('content')


<main id="main" class="main">
<section class="section dashboard" style="margin-left: -260px;
">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-0">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Tables</h5>

                        <!-- Table with stripped rows -->
                        <div class="table-responsive">
                            <table class="table table-striped datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Mail</th>
                                        <th>Number</th>
                                        <th>Location</th>
                                        <th>position</th>
                                        <th>Resume</th>
                                        <th>Message</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getRecord as $value)
                                    <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->mail}}</td>
                                        <td>{{$value->number}}</td>
                                        <td>{{$value->location}}</td>
                                        <td>{{$value->position}}</td>
                                        <td><a href="{{ asset('storage/app/' . $value->data) }}" target="_blank">View PDF</a></td>
                                        <td>{{$value->message}}</td>


                                        <td>
                                            <a onclick="return confirm('Are you sure you want to delete?')" href="{{url('admin/frans/deletemail/'.$value->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="text-center mt-1 mb-2">


          </div>
        {{-- Start -  Content comes here --}}
        <div class="col-12">
            @include('admin.layouts.message')
       
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  @endsection

@section('style')



</section>
</main>
@endsection
<script>
    $(document).ready(function() {
        $('.datatable').DataTable();
    });
</script>




