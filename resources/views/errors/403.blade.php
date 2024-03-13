<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>403</title>
</head>

<body>
    <div style="text-alige:center ">
        <h1>
            Bạn không có quyền truy cập vào trang này.
        </h1>
        <div>
            {{ $expection->getMessage() }}
        </div>
    </div>
</body>

</html>
