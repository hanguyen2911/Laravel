<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('cars.update',$car->id)}}" enctype="multipart/form-data" method="POST" role="form">
            @csrf
            @method('put')
            <legend>Add a new car</legend>
            <div class="form-group">
                <lable for="">Description</lable>
                <input type="text" name="description" class="form-control" id="" placeholder="Input field"
                value="{{isset($car->description)?$car->description:''}}">
            </div>
            <div class="form-group">
                <lable for="">Model</lable>
                <input type="text" name="model" class="form-control" id="" placeholder="Input field"
                value="{{isset($car->model)?$car->model:''}}">
            </div>
            <div class="form-group">
                <lable for="">Produced_on/lable>
                <input type="date" name="produced_on" class="form-control" id="" placeholder="Input field"
                value="{{isset($car->produced_on)?$car->produce_on:''}}">
            </div>
            <div class="form-group">
                <lable for="">Image</lable>
                <img src="/images/{{ $car['image']}}"/>
                <input type="file" name="image" class="form-control" id="" placeholder="Input field">
            </div>
            <input type="submit" class="btn btn-primary"></input>
        </form>
    </div>
</body>
</html>