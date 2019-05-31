<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
</head>
<body>
<!--可以直接引入视图中的其他文件-->
@include('LaraPackageView::message')
<div>
    您的ip地址是：{{ $data['user_ip'] }}
</div>
<div>
    当前时间是：{{ $data['time'] }}
</div>
</body>
</html>