<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>

    <h2 class="col-11">Welcome {{session()->get('username')}}</h2>
    <form action="/edit" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <table>
        <tr>
            @foreach($farhanuas as $a)
           <!-- <td>Id Video : {{$a -> idvideo}}</td><td><input type="hidden" name="idvideo" value="{{$a -> idvideo}}"></td> -->
           <td> <video controls> <source src="{{ Storage::url($a->alamatvideo) }}" type="video/webm" widht="200px"/></video></td>
            </tr> 
            <tr>
                <td>Judul :</td><td><input type="text" id="judul" name="judul"  class="form-control" value="{{$a -> judul}}"></td>
            </tr>
            <tr>
                <td>Creator :</td><td><input type="text" id="creator" name="creator"  class="form-control" value="{{$a -> creator}}"></td>
            </tr>
            <tr>
                <td>Rating :</td><td><input type="number" id="qty" name="qty" min="1" max="100" class="form-control" value="{{$a->rating}}"> </td>
            </tr>

            
        </table>


     </br>
        

        <input type="submit" class="btn btn-danger" value="Edit">
    </form>
    @endforeach
</body>
</html>
