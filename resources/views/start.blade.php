<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
    <title>Prechecker</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #000000;
            font-family: 'Raleway', sans-serif;
            font-weight: bold;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        a {
            color: #000000;
            font-weight: bold;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        ul {
            list-style-type: none;
        }

        .trashed {
            font-weight: 300;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-right links">
        <a href="{{ url('/') }}">Home</a>
    </div>
    <div class="container">
        @if (Session::has('message'))
            <div class="flash alert">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        <div id="getFile">
            <h1>Get File</h1>
            <form action="/dropzone/store" class="dropzone">
                <div class="fallback">
                    <input name="file" type="file" multiple/>
                </div>
            </form>

        </div>
        <div id="setFileType">
            <h2>Set the file type</h2>
        </div>
        <div id="progres">
            <h4>Progress</h4>
        </div>
        {!! Form::hidden('csrf-token', csrf_token(), ['id' => 'csrf-token']) !!}
    </div>
</div>
@if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br/>
@endif
@if (\Session::has('error'))
    <div class="alert alert-error">
        <p>{{ \Session::get('error') }}</p>
    </div><br/>
@endif
</body>

</html>