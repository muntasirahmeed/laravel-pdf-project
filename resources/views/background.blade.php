<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('styles/dom-pdf.css') }}" rel="stylesheet" />
</head>

<body>

@foreach (range(1, 10) as $each)
<h3>{{ $each }}</h3>
@endforeach
</body>

</html>