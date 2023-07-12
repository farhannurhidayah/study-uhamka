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
            @foreach($buku as $a)
           <td>Id Buku : {{$a -> idbuku}}</td><td><input type="hidden" name="idbuku" value="{{$a -> idbuku}}"></td>
            
            </tr>
            <tr>
                <td>Judul :</td><td><input type="text" id="NamaBuku" name="NamaBuku"  class="form-control" value="{{$a -> NamaBuku}}"></td>
            </tr>
            <tr>
                <td>Nama Pengarang :</td><td><input type="text" id="NamaPengarang" name="NamaPengarang"  class="form-control" value="{{$a -> NamaPengarang}}"></td>
            </tr>
            <tr>
                <td>Qty :</td><td><input type="number" id="qty" name="qty" min="1" max="100" class="form-control" value="{{$a -> qty}}"></td>
            </tr>
            
           
            <tr>
                <td>Jenis Buku :</td>
                <td>
                    <select name="Kategori" id="Kategori" style="width: 200px;" class="form-select form-select-lg" value="{{$a -> Kategori}}">
                        <option value="Keislaman">Keislaman</option>
                        <option value="Fiksi">Fiksi</option>
                        <option value="Saintek">Saintek</option>                        
                        </select>
                </td>
            </tr>          

            
        </table>

        <image src="{{ Storage::url($a->Image) }} " width="150" height="200">

     </br>
        

        <input type="submit" class="btn btn-danger" value="Edit">
    </form>
    @endforeach
</body>
</html>
