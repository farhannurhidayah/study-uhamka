<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <script src="{{ asset('/css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src=   "{{ asset('/js/jquery-3.6.0.min.js') }}"></script>

    <script type="text/javascript"> 
    

    function lihatpustaka(){
                      $.ajax({
                      type:"GET",
                      url:"/table"
                      }).done(function(data){
                      $('#tabel').html(data);
                      });
                      }
    
    function caripustaka(){
        var idvideo = document.getElementById("idvideo").value;
        $.ajax({
                      type:"GET",
                      url:"/cari/"+idvideo
                      }).done(function(data){
                      $('#tabel').html(data);
                      alert("Data ditemukan!");
                      });
                   }
    
    
    
    
    </script>
    
</head>
<body onload="lihatpustaka();">
<h1 class="container-fluid p-5 bg-dark text-white" style="text-align:center">Bioskop Ulang Keren<h1>
<div class="row">
        <h2 class="col-11">Welcome {{session()->get('username')}}</h2>
        <a href="/logout" class="col-1"><button type="button" class="btn btn-warning btn">Log out</button></a>
    </div>
<h3>Data Video</h3>
 <br/>
 <label for="idvideo">Masukkan Creator yang ingin dicari</label>
 <table>
     <tr>    
 <td><input type="text" id="idbuku" class="form-control form-control" style="width: 300px;"></td>
 <td><button type="button" id="submit" class="btn btn-success btn" style="width:100px;" onclick="caripustaka();">Search</button></td>
 <td><button type="button" id="all" class="btn btn-danger btn" style="width:125px;" onclick="lihatpustaka();">Lihat Semua</button></td>    
     </tr>
 </table>
 <br/>

 @if (session()->get('status')=='admin')
 <button type="button" id="isi" class="btn btn-info btn" data-bs-toggle="modal"  data-bs-target="#ModalInsert" >Upload Video Baru</button>
 @endif
 <p></p>

 <!-- Isi Content -->
        <div id="tabel">

        </div>

<!-- Tampilan Modal -->
<div class="modal" id="ModalInsert">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/tambah" method="post" enctype="multipart/form-data" id="formdata">
                {{ csrf_field() }}
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload Video Baru</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                <table>
                    <tr>
                        <td>Id Video : </td><td><input type="text" id="idvideo" name="idvideo" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Judul : </td><td><input type="text" id="judul" name="judul" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Creator : </td><td><input type="text" id="creator" name="creator" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Description : </td><td> <textarea  rows="5" cols="60"  id="description" name="description"  class="form-control"></textarea></td>
                    </tr>
                    <!-- <tr>
                      <td>Rating :</td><td><input type="number" id="rating" name="rating" min="1" max="100" class="form-control"></td>
                     </tr> -->
                    <tr>
                        <td>Upload Video :</td> <td><input type="file" name="file"></td>
                    </tr>
                </table>
                </div>
                <div class="modal-footer">
                <input type="submit" class="btn btn-danger" value="submit" id="submit">
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>