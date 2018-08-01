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
    <h1 id="hat1" title="Đây là tiêu đề của h1.">Danh sách chủng loại lợn</h1>
    <ul>
        @foreach($list_obj as $item)
            <li>
                {{$item -> name}}
                <img src="{{$item -> image}}" alt="" style="width: 150px">
                <a href="/admin/category/{{$item -> id}}/edit">Edit</a>
                <a href="#/admin/category/{{$item -> id}}" id="{{$item -> id}}" class="delete-link">Delete</a>
            </li>
        @endforeach
    </ul>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    <script>
        var deleteLinks = document.getElementsByClassName("delete-link");
        for (var i = 0; i < deleteLinks.length; i++) {
            deleteLinks[i].onclick = function () {
                var choice = confirm("Bạn có chắc muốn xoá sản phẩm này không?");
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
                    xhttp.open("POST", "http://localhost:8000/admin/category/destroy/" + id, true);
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(data);
                }
            };
        }
    </script>
</body>
</html>