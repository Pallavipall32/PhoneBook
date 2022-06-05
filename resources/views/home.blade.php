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
    <div class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a href="#" class="navbar-brand">Phone Book</a>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                @if(session("msg"))
                <div class="alert alert-success">
                    {{session("msg")}}
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="<?= route('store'); ?>" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                @error("name")
                                <p class="text-danger small fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">contact1</label>
                                <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                                @error("contact")
                                <p class="text-danger small fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">contact2</label>
                                <input type="text" name="contact2" class="form-control" value="{{old('maths')}}">
                                @error("contact2")
                                <p class="text-danger small fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" class="form-control" value="{{old('sci')}}">
                                @error("email")
                                <p class="text-danger small fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">city</label>
                                <input type="text" name="city" class="form-control" value="{{old('sst')}}">
                                @error("city")
                                <p class="text-danger small fw-bold">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="Save" class="btn btn-danger w-100">
                            </div>
                        </form>
                    </div>
                </div>



            </div>
            <div class="col-9">
            @if(session("error"))
                <div class="alert alert-danger">
                    {{session("error")}}
                </div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>contact1</th>
                        <th>contact2</th> 
                        <th>email</th>
                        <th>city</th>
                    </tr>
                    @foreach($phonebook as $bk)
                    <tr>
                        <td>{{$bk->id}}</td>
                        <td>{{$bk->name}}</td>
                        <td>{{$bk->contact1}}</td>
                        <td>{{$bk->contact2}}</td>
                        <td>{{$bk->email}}</td>
                        <td>{{$bk->city}}</td>
                     <td>
                         <a href="{{route('remove',['book_id'=>$bk->id])}}" class="btn btn-success btn-sm">Delete</a>
                         <a href="{{route('view',['index'=>$bk->id])}}" class="btn btn-dark btn-sm">View</a>

                     </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</body>

</html>