
<!DOCTYPE html>
<html>
<head>
    <title>Payment Receipt</title>
    

   <hr>
    <style>
        /* *{
            background: lightskyblue;
        } */

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        h1 {
            color: blue;
            text-align: center;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="h-font">Neighbours' Parking Payment Receipt</h1>
    <br>
<hr><br>
    <h2>Paid by: <span style="border-bottom: 3px dotted; color:blue;"> {{ $user->name }}</span> </h2>
    <table class="table table-bordered">
    <tbody>
        {{-- <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
          </tr> --}}
          <tr>
            <th>Space Booked</th>
            <td>{{ $space->space_number }}</td>
          </tr>
          <tr>
            <th>Space Type</th>
            <td>{{ $space->space_type }}</td>
          </tr>
          <tr>
            <th>Hourly Price</th>
            <td>{{ $space->price }}</td>
          </tr>
          <tr>
            <th>Total Number of Hours booked</th>
            <td>{{ $quantity }}</td>
          </tr>
          <tr>
            <th>Total Amount Paid</th>
            <td>KES {{ $totalPrice }}</td>
          </tr>
    </tbody>
</table>
</body>
</html>

