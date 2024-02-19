<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm chuyên mục</title>
</head>
<body>
    <h1>Thêm chuyên mục</h1>
    <form action="{{ route('categories') }}" method="get">
        @csrf
        <div>
            <label for="name">Tên chuyên mục:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>