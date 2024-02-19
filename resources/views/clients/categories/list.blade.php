<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách chuyên mục</title>
</head>
<body>
    <h1>Danh sách chuyên mục</h1>
    <a href="{{ route('categories.create') }}">Thêm chuyên mục</a>
    <a href="{{ route('categories.edit', ['id' => 1]) }}">Chỉnh sửa danh mục</a>
    <a href="{{ route('admin.products') }}">Admin product</a>
    
</body>
</html>