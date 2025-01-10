<!DOCTYPE html>
<html>
<head>
    <title>Soal 4</title>
</head>
<body>
    <h1>Soal 4: Jumlah Nama Usaha</h1>
    <div style="width: 80%; margin: 50px auto;">
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        const labels = @json($labels);
        const jumlah_nama_usaha = @json($jumlah_nama_usaha)
        
        const ctx = document.getElementById('myChart').getContext('2d');

        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Transaksi Event',
                    data: jumlah_nama_usaha,
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
    </script>
</body>
</html>