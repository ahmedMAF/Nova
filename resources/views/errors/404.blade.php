<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>{{__('404.title')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f8fafc;
            color: #333;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            padding: 100px 20px;
            direction: rtl;
        }

        h1 {
            font-size: 100px;
            margin: 0;
            color: #e3342f;
        }

        p {
            font-size: 20px;
            margin-top: 20px;
        }

        a {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #2779bd;
        }
    </style>
</head>

<body>

    <h1>404</h1>
    <p>{{__('404.message')}}</p>
    <a href="{{ route('home') }}">{{__('404.btn')}}</a>

</body>

</html>