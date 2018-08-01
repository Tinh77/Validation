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
    <h1>Danh sách bài viết về lợn</h1>
    <ul>
        <li><a href="/admin/article/create">Tạo mới</a></li>
        <li><a href="/admin/article">Danh sách</a></li>
    </ul>
    <ul>
        @foreach($list_obj as $item)
            <li>
                {{$item -> title}} -
                <a href="/admin/article/{{$item -> id}}">Show</a>&nbsp;&nbsp;
                <a href="/admin/article/{{$item -> id}}/edit">Edit</a>&nbsp;&nbsp;
                <a href="#/admin/article/{{$item -> id}}" id="{{$item -> id}}" class="delete-link">Delete</a>
            </li>
        @endforeach
    </ul>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    <script>
        var deleteLinks = document.getElementsByClassName("delete-link");
        for (var i = 0; i < deleteLinks.length; i++) {
            deleteLinks[i].onclick = function () {
                var choice = confirm("Bạn có chắc muốn xoá đối tượng này không?");
                if(choice){
                    var id = this.id;
                    var xhttp = new XMLHttpRequest();
                    var data = "_token={{csrf_token()}}";
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            // Typical action to be performed when the document is ready:
                            alert(JSON.parse(this.responseText).message);
                            window.location.reload();
                        }
                    };
                    xhttp.open("DELETE", "http://localhost:8000/admin/article/" + id, true);
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(data);
                }
            };
        }
    </script>
</body>
</html>