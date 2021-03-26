@extends('layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Brands</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">All Brands</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main Content-->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">All Brands</h5> </br>
                            <a href="{{route('brand.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Brand</a></br></br>
                        </div>
                        <div class="card-body">
                            <!-- form start -->
                            <table class="table table-bordered datatable">
                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($brands)
                                    @foreach($brands as $key=>$brand)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $brand->name ?? '' }}</td>
                                            <td>
                                                <a href="{{ route('brand.edit',$brand->id) }}"
                                                   class="btn btn-sm btn-info"><i class="fa fa-edit"></i>Edit</a>
                                                <a href="javascript:;"
                                                   class="btn btn-sm btn-danger sa-delete" data-form-id="brand-delete-{{$brand->id}}"><i class="fa fa-trash"></i> Delete</a>
                                                <form id="brand-delete-{{$brand->id}}" action="{{route('brand.destroy',$brand->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
