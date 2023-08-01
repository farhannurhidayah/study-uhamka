<?php
 $koneksi = mysqli_connect("localhost", "root", "", "testing");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Remed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1 class="text-center mb-5">REMEDIAL NILAI UAS</h1>
    <section>
        <div class="row">
            
            <div class="col">
                
            
            </div>
            <div class="container p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <canvas id="myChart"  ></canvas>
                        
                    </div>
                    <div class="col-lg-6">
                        <canvas id="myPieChart"></canvas>
                        
                    </div>
            </div>
            
        </div>
        </div>
    </section>


    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
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
        label: '# of Votes',
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
</body>
</html>