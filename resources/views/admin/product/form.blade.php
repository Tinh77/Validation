@extends('admin.layout.master', ['current_page'=>'product_manager'])
@section('main-content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">Thêm mới thông tin lợn</h5>
            <a href="/admin/product" class="float-right"><i class="fas fa-list-ul"></i> Danh sách lợn</a>
            <div class="clearfix"></div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    Vui lòng sửa các lỗi bên dưới và thử lại.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif
            <form action="/admin/product" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tên</label>
                    <div class="row ml-1">
                        <input type="text" name="name" class="form-control w-50 mr-2">
                        @if($errors->has('name'))
                            <label class="text-danger">*{{$errors->first('name')}}</label>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Giá</label>
                    <div class="row ml-1">
                        <input type="number" name="price" class="form-control w-25 mr-2">
                        @if($errors->has('price'))
                            <label class="text-danger">*{{$errors->first('price')}}</label>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Chủng loại</label>
                    <select name="categoryId" class="form-control w-25">
                        @foreach($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    @if($errors->has('description'))
                        <label class="text-danger">*{{$errors->first('description')}}</label>
                    @endif
                </div>
                <div class="form-group">
                    <label>Ảnh đại diện</label>
                    <div class="row ml-1">
                        <input type="file" name="image" class="mr-2">
                        @if($errors->has('image'))
                            <label class="text-danger">*{{$errors->first('image')}}</label>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <div class="row ml-1">
                        <input type="text" name="status" class="mr-2">
                        @if($errors->has('status'))
                            <label class="text-danger">*{{$errors->first('status')}}</label>
                        @endif
                    </div>
                </div>
                <div>
                    <input type="submit" value="Lưu thông tin" class="btn btn-primary">
                    <input type="reset" value="Làm lại" class="btn btn-dark">
                </div>
            </form>
        </div>
    </div>
@endsection