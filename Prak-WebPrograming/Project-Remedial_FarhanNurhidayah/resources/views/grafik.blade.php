<!DOCTYPE html>
<html>
<head>
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Chart Example</h1>
    <canvas id="myChart" width="400" height="200"></canvas>

    <script>
        // Mengambil data dari API menggunakan Fetch API
        fetch('/api/chart-data')
            .then(response => response.json())
            .then(result => {
                var labels = result.map(item => item.key);
                var values = result.map(item => item.value);

                // Membuat grafik dengan Chart.js
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Chart Data',
                            data: values,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        // Konfigurasi opsi lain untuk grafik
                    }
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
