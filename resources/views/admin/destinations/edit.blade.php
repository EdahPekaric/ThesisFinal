@extends('admin.lte.layout')

@section('content')
    @include('admin.destinations.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Admin Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Admin Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-4">
                        <a href="{{ route('destinations.index') }}" class="btn btn-default">Back</a>
                    </div>
                    <br />
                    <form method="post" action="{{ route('destinations.update', $data->id) }}" enctype="multipart/form-data" class="col-md-5">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="col-md-4">City From</label>
                            <div class="col-md-8">
                                <input type="text" name="from" value="{{ $data->from }}" class="form-control input-lg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">City ton</label>
                            <div class="col-md-8">
                                <input type="text" name="to" value="{{ $data->to }}" class="form-control input-lg" />
                            </div>
                        </div>
                        <div class="form-group text-right col-md-8">
                            <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
                        </div>
                    </form>

                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->


@endsection


