@extends('layouts.app')

@section('content')

 
<div class="wrapper">

  <!-- Preloader -->
    @include('layouts.admin_layout.preloader')
  <!-- Preloader -->


  <!-- Navbar -->
    @include('layouts.admin_layout.top_navbar')
  <!-- /.navbar -->


  <!-- Left Navbar -->
    @include('layouts.admin_layout.left_navbar')
  <!-- Left Navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
      

        <br>
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img style="height: 70px !important;" src="{{asset(App\Http\Traits\ConfigTraits::get_favicon())}}" alt="">
            </div>
        </div>
        

        <!-- Main row -->
        <div class="row">

            <div class="col-md-12" style="margin-top:25px;">
                <div class="card">
                    <div class="card-header bg-info">Banner {{ $banner->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/banner') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/banner/' . $banner->id . '/edit') }}" title="Edit Banner"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/banner' . '/' . $banner->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Banner" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $banner->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Title </th>
                                        <td> {{ $banner->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> Description </th>
                                        <td> {!! $banner->description !!} </td>
                                    </tr>
                                    <tr>
                                        <th> Image </th>
                                        <td> 
                                            <img src="{{ ($banner->image != null) ? asset($banner->image) : asset('no_image.png') }}" style="height: 75px;width: 120px;border: 1px solid #000;border-radius: 10px;" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.row (main row) -->



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Footer -->

  <!-- End Footer -->
  
</div>
<!-- ./wrapper -->


@endsection
