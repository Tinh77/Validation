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
    <h1>Nhập thông tin của chủng loại lợn</h1>
    <form action="/admin/category" method="POST">
        {{csrf_field()}}
        <div>
            <label>Tên</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Mô tả</label>
            <input type="text" name="description">
        </div>
        <div>
            <label>Ảnh đại diện</label>
            <input type="text" name="image">
        </div>
        <div>
            <input type="submit" value="Lưu thông tin">
            <input type="reset" value="Làm lại">
        </div>
    </form>
</body>
</html>