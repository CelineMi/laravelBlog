<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous">
    <title>Todos</title>
</head>
<body>
       <div class="container">
           <h1 class="text-center my-5">Todos Page</h1>

           <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card car-default">
                      <div class="card-header">TODOS</div>
                      <div class="card-body">
                          <ul class="list-group">
                              @Foreach($todos as $todo)
                                  <li class="list-group-item">{{$todo->name}}
                                      <a href="/public/todos/{{$todo->id}}"><button class="btn btn-primary btn-sm float-right">View</button></a>
                                  </li>
                              @endforeach
                          </ul>
                      </div>
                  </div>
              </div>
           </div>

       </div>


{{--{{ $todos }}--}}
</body>
</html>
