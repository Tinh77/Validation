<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="Pig Seller" href="{{{ asset('favicon.ico') }}}">
    <title>Admin trang web bán lợn hàng đầu Việt Nam</title>
</head>
<body>
    <h1>Sửa thông tin của bài viết</h1>
    <ul>
        <li><a href="/admin/article/create">Tạo mới</a></li>
        <li><a href="/admin/article">Danh sách</a></li>
    </ul>
    <form action="/admin/article/{{$obj->id}}" method="POST">
        @method('PUT')
        {{csrf_field()}}
        <div>
            <label>Tiêu đề</label>
            <input type="text" name="title" value="{{$obj -> title}}">
        </div>
        <div>
            <label>Mô tả</label>
            <input type="text" name="description" value="{{$obj -> description}}">
        </div>
        <div>
            <input type="submit" value="Lưu thông tin">
            <input type="reset" value="Làm lại">
        </div>
    </form>
</body>
</html>