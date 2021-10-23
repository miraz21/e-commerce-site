<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>{{config('app.name')}}</title>
    <style>
      #emp{
        font-family:Arial,Helvetica,sans-serif;
        border-collapse:collapse;
        width:100%;
      }
      #emp td, #emp th{
        border: 1px solid #ddd;
        padding: 8px;
      }
      #emp tr:nth-child(even){
        background-color: #0bfdfd;
      }
      #emp th{
        padding-top:12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: #fff;
      }
    </style>
  </head>
  <body>
   <table id="emp">
     <thead>
       <tr>
         <th>ID</th>
         <th>User_id</th>
         <th>Order_no</th>
         <th>Price</th>
         <th>Qty</th>
         <th>Payment_Method</th>
         <th>Txn_id</th>
         <th>Status</th>
       </tr>
     </thead>
     <tbody>
       @foreach($orders as $order)
       <tr>
         <td>{{$order->id}}</td>
         <td>{{$order->user_id}}</td>
         <td>{{$order->order_no}}</td>
         <td>{{$order->price}}</td>
         <td>{{$order->qty}}</td>
         <td>{{$order->payment_method}}</td>
         <td>{{$order->txn_id}}</td>
         <td>{{$order->status}}</td>
       </tr>
       @endforeach
     </tbody>
   </table>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>