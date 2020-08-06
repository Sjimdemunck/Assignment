<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Assignment</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .input-wrapper {
            margin:auto;
            flex-direction: column;
            padding: 25px 50px;
            display: flex;
            width: 50%;
            border: 1px solid #ededed;
            border-radius: 5px;
        }

        .input-text {
            margin-bottom: 15px;
            width: 100%;
        }

        .output-wrapper {
            width: 100%;
            padding: 20px;
        }

        .output {

        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="content">
    <div class="title m-b-md">
        Assignment
    </div>
</div>
<div class="input-wrapper">
    <div class="input-text">
        De score is: {{ $results }}
    </div>
    <div class="output-wrapper">
        <div class="output">
        </div>
    </div>
</div>
</body>
</html>
