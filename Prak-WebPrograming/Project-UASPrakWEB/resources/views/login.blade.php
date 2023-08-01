<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"> </script>
    <script type="text/javascript" src="{{asset('/js/jquery-3.6.0.min.js') }}"></script>
    <title>Document</title>
</head>
<body class="row">
    <div class="col-4"></div>
    <div class="col-4 container-fluid p-4 bg-secondary" style="text-align: center; margin-top:200px;">
    <p>Log In </p>
    <form action="/login" method="POST" name="pengunjung" id="pengunjung">
    {{csrf_field()}}
        <table style="margin-left: 75px;">
            <tr><td>Username</td> <td><input type="text" name="username"> </td></tr>
            <tr><td>Password</td> <td><input type="text" name="password"> </td></tr>
        </table>


        <p>
            @if ($message = Session::get('error'))
            {{$message}}
            @endif
            @if ($message = Session::get('success'))
            {{$message}}
            @endif
        </p>

        <input type="submit" class="btn btn-success danger" id="submit" value="submit" style="margin-left: 150px;">

    </form>
    <br>
    <p>Belum Daftar? silahkan <a href="/signin">Sign in</a></p>


    </div>

    <div class="col-4"></div>
</body>
</html>