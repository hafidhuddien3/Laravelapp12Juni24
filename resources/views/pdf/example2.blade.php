<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #666;
            line-height: 1.5;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <div>{!! $content !!}</div>
</body>
</html>
