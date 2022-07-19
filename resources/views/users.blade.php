<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/style.css')}}" />

    <title>Users</title>
  </head>
  <body>
  <h1>Show all Student</h1>
<div class="container mt-1">
  <div class="row">
    <div class="col-md-12">
      @if ($message = Session::get('success'))
      <div class="alert alert-danger">
        <p>{{$message}}</p>
      </div>
      @endif
    
      <button class='btn btn-primary my-2 float-right '>
       <a href='{{url('addusers')}}' class='text-light '>Add Users</a>
      </button>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
      
      @foreach ($users as $user)
      <tr>
        <th>{{$loop->iteration}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>
          <a href="{{url('editusers/'.$user->id)}}" class="btn btn-secondary mx-2">Edit</a> <a href="{{url('deleteusers/'.$user->id)}}" class="btn btn-danger">Delete</a>
        
         </td>
    </tr> 
      @endforeach
</tbody>
</table>
    </div>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
  </body>
</html>