<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>check Host Status</title>
{{--    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>--}}
    <script src={{asset("js/npm/chart.js")}}></script>
</head>
<body>
<canvas id="hostStatusChart"></canvas>
<script>
    var hostsData = @json($hosts);
    const ctx = document.getElementById('hostStatusChart').getContext('2d');
    const hostStatusChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: hostsData.map(host => host.name),
            datasets: [{
                label: 'Ping percentage',
                data: hostsData.map(host => host.ping_percentage || 0),
                borderColor: hostsData.map(host => host.status === 'Online' ? 'rgb(75, 192, 192)' : 'rgb(255, 99, 132)'),
                backgroundColor: hostsData.map(host => {
                    if (host.status === 'Online') {
                        return 'rgba(75, 192, 192, 0.5)';
                    } else if (host.status === 'Offline') {
                        return 'rgba(255, 99, 132, 0.5)';
                    } else {
                        return 'rgba(211, 211, 211, 1)';
                    }
                }),
                fill: false
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    title: {
                        display: true,
                        text: 'Ping percentage'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                }
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }
        }
    });

    function updateChartData() {
        fetch('/api/hosts/status')
            .then(response => response.json())
            .then(data => {
                hostStatusChart.data.labels = data.map(host => host.name);
                hostStatusChart.data.datasets.forEach((dataset) => {
                    dataset.data = data.map(host => host.ping_percentage);
                });
                hostStatusChart.update();
            })
            .catch(error => console.error('Error updating chart data:', error));
    }

    setInterval(updateChartData, 5000);
</script>
</body>
</html>
