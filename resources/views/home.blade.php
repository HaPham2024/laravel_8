<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Học lập trình laravel</title>
</head>

<body>
    <h1>Trang chu</h1>
    {{-- <h2>{{ $welcome }}</h2> --}}
    {{-- <h2>?php echo request()->keyword; ?></h2> --}}
    {{-- <h2>{!! $content !!}</h2> --}}

    {{-- @for ($i = 1; $i <= 10; $i++)
        <p>Phan tu thu : {{ $i }}</p>
    @endfor --}}

    {{-- @foreach ($dataArr as $key => $item)
        <p>Phan tu: {{ $item }} - {{ $key }}</p>
    @endforeach --}}

    @switch($number)
        @case(1)
            <p>So thu nhat</p>
        @break

        @case(2)
            <p>So thu hai</p>
        @break

        @default
            <p>so con lai</p>
    @endswitch

</body>

</html>
