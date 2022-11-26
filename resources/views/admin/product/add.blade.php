<!-- resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Add product</title>
@endsection

@section('css')
    <link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/add/add.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
{{--                        có upload ảnh phải có enctype--}}
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name ="name" class="form-control" placeholder="Nhập tên sản phẩm">
                            </div>

                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input type="text" name ="price" class="form-control" placeholder="Nhập giá sản phẩm">
                            </div>

                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input type="file" name ="feature_image_path" >
                            </div>

                            <div class="form-group">
                                <label>Ảnh chi tiết</label>
                                <input type="file" multiple name ="image_path[]" >
                            </div>

                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                <select class="form-control select2_init" name="parent_id">
                                    <option value="0">Chọn danh mục</option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nhập tags</label>
                                <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


@section('js')
    <script src="{{asset('vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/add/add.js')}}"></script>

@endsection

