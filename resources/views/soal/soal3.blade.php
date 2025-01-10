<!DOCTYPE html>
<html>
<head>
    <title>Soal 3</title>
</head>
<body>
    <h1>Soal 3: Total Nominal Per Bulan</h1>
    <div style="width: 80%; margin: 50px auto;">
        <!-- Canvas untuk chart -->
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        const labels = @json($labels);
        const nominal = @json($nominal)
        
        const ctx = document.getElementById('myChart').getContext('2d');

        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Nominal Per Bulan',
                    data: nominal,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
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
