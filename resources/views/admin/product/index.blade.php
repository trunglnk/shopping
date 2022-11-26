<!-- resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title')
    <title>Add product</title>
@endsection

@section('content')

    <div class="content-wrapper">

        @include('partials.content-header', ['name' => 'Product', 'key' => 'List'])


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('product.create')}}" class="btn btn-success float-right m-2">Add new</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

{{--                            @foreach($categories as $category)--}}

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Ip 4</td>
                                    <td>2.400.000</td>
                                    <td><img src="" alt=""></td>
                                    <td>Điện thoại</td>
                                    <td>
{{--                                        <a href="{{ route('categories.edit', ['id' => $category->id]) }}"--}}
{{--                                           class="btn btn-default">Edit</a>--}}
{{--                                        <a href="{{ route('categories.delete', ['id' => $category->id]) }}"--}}
{{--                                           class="btn btn-danger">Delete</a>--}}
{{--                                    </td>--}}
                                </tr>
{{--                            @endforeach--}}

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
{{--                        {{$categories->links('pagination::bootstrap-4')}}--}}
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection




