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
        var idbuku = document.getElementById("idbuku").value;
        $.ajax({
                      type:"GET",
                      url:"/cari/"+idbuku
                      }).done(function(data){
                      $('#tabel').html(data);
                      alert("Data ditemukan!");
                      });
                   }
    
    
    
    
    </script>
    
</head>
<body onload="lihatpustaka();">
<h1 class="container-fluid p-5 bg-dark text-white" style="text-align:center">Perpustakaan Madani <h1>
<h3>Data Perpustakaan</h3>
 
    
    
 <br/>
 <label for="idbuku">Masukkan id buku yang ingin dicari</label>
 <table>
     <tr>    
 <td><input type="text" id="idbuku" class="form-control form-control" style="width: 300px;"></td>
 <td><button type="button" id="submit" class="btn btn-success btn" style="width:100px;" onclick="caripustaka();">Search</button></td>
 <td><button type="button" id="all" class="btn btn-danger btn" style="width:125px;" onclick="lihatpustaka();">Lihat Semua</button></td>    
     </tr>
 </table>
 <br/>

 <button type="button" id="isi" class="btn btn-info btn" data-bs-toggle="modal"  data-bs-target="#ModalInsert" >Pendaftaran Buku Baru</button>
 <p></p>

 <!-- Isi Content -->
        <div id="tabel">

        </div>

<!-- Modal -->
<div class="modal" id="ModalInsert">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/tambah" method="post" enctype="multipart/form-data" id="formdata">
                {{ csrf_field() }}

            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Pendaftaran Buku Baru</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                <table>
                    <tr>
                        <td>id Buku : </td><td><input type="text" id="idbuku" name="idbuku" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Judul : </td><td><input type="text" id="NamaBuku" name="NamaBuku" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Nama Pengarang : </td><td><input type="text" id="NamaPengarang" name="NamaPengarang " class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Qty : </td><td><input type="number" id="qty" name="qty" min="1" max="100" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Jenis Buku :</td>
                        <td>
                            <select name="Kategori" id="Kategori" style="width: 200px;" class="form-select form-select-lg">
                                <option value="Keislaman">Keislaman</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Saintek">Saintek</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Upload Cover :</td> <td><input type="file" name="file"></td>
                    </tr>
               
     
                </table>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>