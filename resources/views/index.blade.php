<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


<table class="table table-striped">
      <thead>
          <tr>
                 <th>name</th>  <th>surname</th>  <th>age</th>
          </tr>
      </thead>

    <tbody>
        @foreach($student as $item)
            @if($item['age']>25)
                <tr @class('bg-success')>
                    <td>{{$item['name']}}</td>   <td>{{$item['surname']}}</td>   <td>{{$item['age']}}</td>
                </tr>
                @elseif($item['age']<=25 && $item['age']>20)

                <tr @class('bg-warning')>
                    <td>{{$item['name']}}</td>   <td>{{$item['surname']}}</td>   <td>{{$item['age']}}</td>
                </tr>

                @else
                    <tr @class('bg-danger')>
                        <td>{{$item['name']}}</td>   <td>{{$item['surname']}}</td>   <td>{{$item['age']}}</td>
                    </tr>
            @endif

        @endforeach
    </tbody>
</table>


<div class="container">
    <div class="row">
        @foreach($product as $item)
        <div class="col-md-4 my-2">
            <div class="card">
                <div class="card-header">
                    <img src="{{$item['img']}}" alt="">
                </div>
                <div class="card-body">
                    <h2>{{$item['name']}}</h2>
                    <h3>{{$item['price']}}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</body>
</html>
