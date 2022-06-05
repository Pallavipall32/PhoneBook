<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="#" class="navbar-brand">View Page</a>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 mx-auto">
                <a href="#" onclick="window.print();" class="btn btn-warning d-print-none">Print</a> 
                <table class="table table-bordered table-hover">
                    <tr>
                        <th colspan="2">Book detail</th>
                    </tr>
                    <tr>
                        <th colspan="2">name</th>
                        <th>{{$book->name}}</th>

                    </tr>
                    <tr>
                        <th colspan="2">contact1</th>
                        <th>{{$book->contact1}}</th>

               
                    </tr>
                    <tr>
                        <th colspan="2">contact2</th>
                        <th>{{$book->contact2}}</th>

               
                    </tr>
                    <tr>
                        <th colspan="2">email</th>
                        <th>{{$book->email}}</th>

               
                    </tr>
                    <tr>
                        <th colspan="2">city</th>
                        <th>{{$book->city}}</th>

               
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>