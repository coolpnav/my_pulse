<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pulse Assessment</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <style>
        #percentageText {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2vw; /* Responsive font size */
            font-weight: bold;
            color: black;
        }
    </style>
</head>
<body>


<div class="container-fuild" style="background-color:#F3F4FF; padding: 15% 0 15% 0">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">Chart title goes here</h5>
                <h6 class="card-subtitle mb-2 text-muted">15 April - 21 April</h6>
                <canvas id="myChart" ></canvas>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body" style="text-align: center; ">
                <h5 class="card-title">Chart title goes here</h5>
                <h6 class="card-subtitle mb-2 text-muted">15 April - 21 April</h6>
                <canvas id="myChart4" class="embed-responsive-item" style="background-color: white;"></canvas>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body" style="text-align: center; ">
                <h5 class="card-title">Chart title goes here</h5>
                <h6 class="card-subtitle mb-2 text-muted">15 April - 21 April</h6>
                <canvas id="myChart5" class="embed-responsive-item" style="background-color: white;"></canvas>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">Chart title goes here</h5>
                <h6 class="card-subtitle mb-2 text-muted">15 April - 21 April</h6>
                <canvas id="myChart2" width="400" height="300"></canvas>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">Chart title goes here</h5>
                <h6 class="card-subtitle mb-2 text-muted">15 April - 21 April</h6>
                <div class="position-relative">
                    <canvas id="myChart1" ></canvas>
                    <div id="percentageText">76%</div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>

<script>
    const labels = ['15 April', '', '', '', '', '', '21 April'];
    const data = {
        labels: labels,
        datasets: [{
            label: 'Sample Data',
            backgroundColor: 'rgb(236,102,102,0.3)',
            borderColor: 'rgb(236,102,102,0.3)',
            data: [500, 400, 350, 250, 400, 470, 250],
            fill: true,
            pointRadius: 0
        },
            {
                label: 'Sample Data',
                backgroundColor: 'rgb(20,122,214, 1)',
                borderColor: 'rgb(20,122,214, 1)',
                data: [250, 230, 150, 100, 200, 210, 120],
                fill: true,
                pointRadius: 0
            }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {
            scales: {
                x: { grid: { display: false } },
                y: { grid: { display: false },
                     ticks: {
                        stepSize: 250, // Set step size to 250
                        max: 500, // Set maximum value to 500
                        min: 0 // Set minimum value to 0
                    },
                }
            },
            plugins: {
                legend: {
                display: false
                }
            }
        },
    };

    var myChart = new Chart(document.getElementById('myChart'), config);

    const data1 = {
        labels: ['Filled', 'Empty'],
        datasets: [{
            label: 'Dataset 1',
            data: [76, 24], // 76% filled, 24% empty
            backgroundColor: [
                'rgb(20,122,214, 1)', // Filled color
                'rgb(206,213,225, 1)'   // Gray color for empty part
            ],
            borderColor: [
                'rgb(20,122,214, 1)', // Filled color
                'rgb(206,213,225, 1)'   // Gray color for empty part
            ],
            borderWidth: [1, 1], // Border width for filled and empty parts
            borderAlign: 'inner', // Inner border
            borderRadius: [20, -20] // Border radius for filled and empty parts
        }]
    };

    const config1 = {
        type: 'doughnut',
        data: data1,
        options: {
            cutout: '85%',
            plugins: {
                tooltip: false,
                legend: {
                    display: false
                }
            }
        },
    };

    var myChart1 = new Chart(document.getElementById('myChart1'), config1);

    const data2 = {
        labels: labels,
        datasets: [{
            label: 'Sample Data',
            backgroundColor: 'rgb(121,210,222,0.3)',
            borderColor: 'rgb(121,210,222,0.3)',
            data: [500, 400, 350, 250, 400, 470, 250],
            fill: true,
            tension: 0.5,
            pointRadius: 0

        },
            {
                label: 'Sample Data',
                backgroundColor: 'rgb(20,122,214,1)',
                borderColor: 'rgb(20,122,214,1)',
                data: [250, 230, 150, 100, 200, 210, 120],
                fill: true,
                tension: 0.5,
                pointRadius: 0
            }]
    };

    const config2= {
        type: 'line',
        data: data2,
        options: {
            scales: {
                x: {
                    title: {
                        display: false
                    },
                    grid: {
                        display: false // Remove x-axis gridlines
                    }
                },
                y: {
                    title: {
                        display: false
                    },
                    grid: {
                        display: false // Remove x-axis gridlines
                    },
                    beginAtZero: true,
                    ticks: {
                        stepSize: 250, // Set step size to 250
                        max: 500, // Set maximum value to 500
                        min: 0 // Set minimum value to 0
                    },
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        },
    };

    var myChart2 = new Chart(document.getElementById('myChart2'), config2);

    //Chart 4
    document.addEventListener("DOMContentLoaded", function() {
      axios.get('{{ route("chart.data") }}') 
        .then(function(response) {
          const chartData = response.data;
          console.log(chartData);
          // Create the chart
          const ctx = document.getElementById('myChart4').getContext('2d');
          const myChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: chartData.labels,
              datasets: [{
                label: 'Dataset 1',
                data: chartData.data,
                borderColor: 'rgb(246,183,183)',
                tension: 0.5,
                fill: {
                  target: 'origin',
                  above: 'rgb(246,183,183,0.5)'
                },
                pointRadius: 0
              }]
            },
            options: {
              responsive: true,
              scales: {
                x: { grid: { display: false } },
                y: { grid: { display: false },
                    ticks: {
                    stepSize: 250, // Set step size to 250
                    max: 500, // Set maximum value to 500
                    min: 0 // Set minimum value to 0
                    },
                 }
              },
              plugins: { tooltip: { enabled: true },legend: {
                display: false
                } },
              interaction: { intersect: false }
            }
          });
        })
        .catch(function(error) {
          console.error('Error fetching chart data:', error);
        });
    });

    // Data for the chart
    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
    const values = [500, 400, 350, 250, 400, 470, 250];

    // Create the chart
    const ctx = document.getElementById('myChart5').getContext('2d');
    const myChart5 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: months,
        datasets: [{
          label: 'Bar Dataset',
          data: [500, 500, 500, 500, 500, 500, 500],
          backgroundColor: 'rgba(242,243,253, 0.3)', // Light blue bars
        }, {
          label: 'Line Dataset',
          data: values,
          type: 'line',
          borderColor: 'rgb(181,210,242)', // Line color
          borderWidth: 2,
          pointRadius: 0,
          fill: false // Do not fill area under line
          
        }]
      },
      options: {
        responsive: true,
        scales: {
          x: { 
            grid: { 
              display: false,
              backgroundColor: 'rgba(173, 216, 230, 0.5)' // Light blue grid color
            } 
          },
          y: {
            ticks: {
              stepSize: 250, // Set step size to 250
              max: 500, // Set maximum value to 500
              min: 0 // Set minimum value to 0
            },
            grid: { display: false } 
          }
        },
        plugins: { tooltip: { enabled: true },legend: {
                display: false
                } },
        interaction: { intersect: false }
      }
    });
</script>
</body>
</html>
