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
        .transportation{
            margin-top:13px;
        }
           
    </style>
    <title>Transportation</title>
  </head>
  <body>
  <div class="row">
  <div class="col-3"> 
  </div>
  <div class="col-5">
  @if (\Session::has('alert-success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('alert-success') !!}</li>
            </ul>
        </div>
@endif

@if (\Session::has('alert-danger'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('alert-danger') !!}</li>
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
      <h2 class="transportation">Create Transportation Form</h2>
     </div>    
    </div>
  </div>
     @include('truck._form') 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
  </body>
</html>