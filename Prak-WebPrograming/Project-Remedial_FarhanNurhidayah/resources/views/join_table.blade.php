<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Remedial UAS Prak Web</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- export -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    
</head>

<body>

@include('partials.navbar')

    <div class="container mt-5" id="home">    
        <br />
        <h1 class="text-center text-primary">Remedial UAS Praktikum Web</h1>
        <br />
        <div class="table-responsive">
            <table class="data-tables table-bordered table-striped" id="tabled">
                <thead>
                    <tr>
                        <th>Pulau</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $row->nama_pulau }}</td>
                        <td>{{ $row->nama_provinsi }}</td>
                        <td>{{ $row->nama_kota }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> <br> <br>
    
    
    <div class="container p-3" id="Grafik">
        <button type="button" id="isi" class="btn btn-info btn" data-bs-toggle="modal"  data-bs-target="#ModalInsert" >Edit Grafik</button>
                <div class="row">
                    <div class="col-lg-6">
                        <canvas id="myChart"  ></canvas>
                        
                    </div>
                    <div class="col-lg-6">
                        <canvas id="myPieChart"></canvas>
                        
                    </div>
            </div>
            
        </div>
        

        @include('partials.footer')
        @include('partials.Modal')

    

        
        
        <script>
            <?php
        $koneksi = mysqli_connect("localhost", "root", "", "testing");
        ?>
        <?php
            $qry = $koneksi->query("SELECT * FROM indonesia GROUP BY nama_pulau;");
            while($data = $qry->fetch_assoc()){
                $dataLabel[] = $data['nama_pulau'];
                
                $sql = $koneksi->query("SELECT * FROM indonesia WHERE nama_pulau='$data[nama_pulau]'");
                $res = $sql->num_rows;
                $jmlpulau[] = $res;
            }
            ?>
        var sampleChartClass;
        
        (function($) {
            $(document).ready(function() {

                // console.log(categories);
                // console.log(bismilah);
                var ctx = document.getElementById('myChart').getContext('2d');
                sampleChartClass.ChartData(ctx, 'line') 
                
                var piechart = document.getElementById('myPieChart').getContext('2d');
                sampleChartClass.ChartData(piechart, 'bar')
            });
            const ctx = document.getElementById('myChart');
            sampleChartClass = {
                ChartData:function(ctx, type, categories, data){
  new Chart(ctx, {
    type: type,
    data: {
        labels: <?php echo json_encode($dataLabel);?>,
        datasets: [{
            label: type,
            data: <?php echo json_encode($jmlpulau);?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)'
            ],
        borderWidth: 1
    }]
},
    options: {
      scales: {
          y: {
              beginAtZero: true
            }
        }
    }
});
}
}
})(jQuery);
</script>





<script>
    // console.log(jumlahProvinsi);
    $(document).ready(function() {
        $('#tabled').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy','csv','excel', 'pdf', 'print'
            ]
        } );
    } );
    
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            
        </html>