@extends('manager.manager_dashboard')
@section('manager')

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.min.js"></script>
  </head>
  <body> 
    <div class="page-content">
      <div class="row">
        <div class="col-12 col-md-12">
          <div class="card">
            <div class="card-body">
              <h2 class="text-center text-primary">Analysis of Monthly User Registration</h2>
              <div style="width: 900px; margin: auto;">
                <canvas id="chartjsBar"></canvas>
              </div>
            </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>

<script>
    var ctx = document.getElementById('chartjsBar').getContext('2d');
    var userChart = new Chart(ctx,{
        type:'bar',
        data:{
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!}
        },
    });
</script>

@endsection