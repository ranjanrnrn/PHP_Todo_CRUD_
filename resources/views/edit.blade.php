<!doctype html>
<html lang="en">
  <head>
    <title>Edit Todo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link bg-info mr-5" href="{{url('/todolist/view')}}" style="color:white">TODO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link bg-info mr-1" href="{{url('/todolist/create')}}" style="color:white">ADD TODO</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link bg-info mr-1" href="#" style="color:white">Home</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
      </div>
    <div class="container">
    <h1 class="mt-5 mb-5 text-primary" style="padding-left:400px">EDIT TODO</h1>
    <form action="{{url($url)}}" style="padding-left:300px" method="POST">
        @csrf
        <div class="col">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Task:</strong>
                    <input type="text" name="task" class="form-control" value="{{$todolist->task}}" placeholder="Task Name">
                    
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Priority</strong>
                    <input type="text" name="priority" class="form-control" value="{{$todolist->priority}}" placeholder="Priority">
                    
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Status</strong>
                    <input type="text" name="status" class="form-control" value="{{$todolist->status}}" placeholder="Status">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </div>
  </body>
</html>