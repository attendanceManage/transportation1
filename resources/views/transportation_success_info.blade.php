<!doctype html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
       <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <style>
       table{
           border-collapse: collapse;
           width: 100%;
           text-align: center;
           font-size: 12px;
           font-family: system-ui;
           background-color: white;
       }
       th,td{
           border: 2px solid #fffdfd;
           padding: 15px;
       }
       th{
           border-color: dodgerblue;
       }

       table>thead>tr>td, table>tbody>tr>td, table>tfoot>tr>td {
           border: 1px solid #ddd !important;
       }
           
    </style>
    <title>Transportation Success</title>
  </head>
  <body>
  <div class="row">
  <div class="col-3"> 
  </div>
  <div class="col-5">
  @if ($alert_success)
        <div class="alert alert-success">
            <ul>
                <li>{!! $alert_success !!}</li>
            </ul>
        </div>
@endif
  </div>
  </div>
  
  <div class="container">
  <div class="row">
   <div class="col-3"> 
    </div>
     <div class="col-5">
    <br>
    <br>
    <h5>Transportation info</h5>
    <table class="content-table">
        <thead>
            <tr>
                <td width="50%" style="text-align: left;">Title</td>
                <td width="50%" style="text-align: left;">{{$title}} </td>
            </tr>
            <tr>
                <td width="50%" style="text-align: left;">Load</td>
                <td width="50%" style="text-align: left;">{{$load}} </td>
            </tr>
            <tr>
                <td width="50%" style="text-align: left;">Unit</td>
                <td width="50%" style="text-align: left;">{{$unit}} </td>
            </tr>
            <tr>
                <td width="50%" style="text-align: left;">Products </td>
                <td width="50%" style="text-align: left;">
                @foreach($products as $product)
                {{$product->title}},
                @endforeach
            
            </td>
            </tr>
            <tr>
                <td width="50%" style="text-align: left;">Cost </td>
                <td width="50%" style="text-align: left;">Order No </td>
            </tr>
           
           
        </thead>
    </table>
     </div>    
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
  </body>
</html>