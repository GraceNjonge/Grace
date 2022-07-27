<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>calculator</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
    </head>
    <body style ="background-color: #D2691E;">
        <div class="container text-center">
         <div class="row">
            <div class="col-md-4-auto">
            <form action="calculation" method="post">    
            @csrf
            <div class ="card" style="background-color: #2E8B57;">
                   <div class="card-body m-auto">
                    <h1>Arithmetic Calculator</h1>
<div class="form-group row">
    <div class="col-md-9">
        <input type="number" name="firstnumber"
class="form-control" placeholder="Enter firstnumber" required="">
</div>
<br><br>
<div class="form-group row">
    <div class="col-md-9">
        <input type="number" name="secondnumber"
class="form-control" placeholder="Enter secondnumber" required="">
</div>
<br><br>
<div class="form-group row">
    <div class="col-md-9">
    <select name="operator">
    <option value>---Select Operator---</option>

<option value="+">+</option>
<option value="-">-</option>
<option value="/">/</option>
<option value="%">%</option>
<option value="*">*</option>

    </select>
</div>
            
</div>
</div>
<input type="submit" name ="btn" class="btn btn-warning btn-lg font-weight-bold" value="Enter">
</div>
</div>
</div>
</div>


    </body>
</html>
