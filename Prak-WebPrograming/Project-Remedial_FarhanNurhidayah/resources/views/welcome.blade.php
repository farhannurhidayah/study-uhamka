
<!DOCTYPE html>
<html>
<head>
          <!-- export -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    
    <title>Contoh Laravel</title>
</head>
<body>
<div class="table-responsive">
            <table class="data-tables table-bordered table-striped" id="mauexport">
                <thead>
                <tr>
            <th>Nama Provinsi</th>
            <th>Jumlah Provinsi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($jumlahProvinsi as $provinsi)
                <tr>
                <td>{{ $provinsi->nama_provinsi }}</td>
                <td>{{ $provinsi->jumlah_provinsi }}</td>
                </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    <br> <br>
 
    <h1>Jumlah Provinsi</h1>
    @foreach ($jumlahProvinsi as $provinsi)
    <h5>{{ $provinsi->nama_provinsi }}</h5>
    <h5>{{ $provinsi->jumlah_provinsi }}</h5>
    @endforeach

    <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <canvas id="myChart" width="400" height="400"></canvas>
                        
                    </div>
                    <div class="col-lg-6">
                        <canvas id="myPieChart" width="400" height="400"></canvas>
                        
                    </div>
            </div>
            
        </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<div id="dataContainer">
        <!-- Data dari API akan ditampilkan di sini -->
    </div>

    <script>
        // Mengakses API dengan menggunakan fetch()
        
    </script>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('js/sample-chart.js')}}"></script>
<!-- <script src="{{asset('js/chart.js')}}"></script> -->
<script>
    // console.log(jumlahProvinsi);
    $(document).ready(function() {
    $('#mauexport').DataTable( {
      
    } );
} );

</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- chart.js -->

        <!-- apexchart -->
        
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

</body>
</html>
