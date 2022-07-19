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
    <link rel="stylesheet" href="css/style.css" />

    <title>Add Users</title>
  </head>
  <body>
    <div class="container mx-2">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Student</h1>
              <form action="{{url('storeusers')}}" method="post">
                    {{@csrf_field()}}
                 @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div> 
                 @endif
                  <div class="md-3">
                    <label for="form-label"><strong>Name:</strong></label>
                    <input type="text" class="form-control"  name="name" placeholder="enter name" value="{{old('name')}}">
                  </div>
                  @error('name')
                  <p class="alert alert-danger">
                    {{$message}}
                  </p>
                  @enderror
                  <div class="md-3">
                    <label for="form-label"><strong>Email:</strong></label>
                    <input type="text" class="form-control"  name="email" placeholder="enter email" value="{{old('email')}}">
                  </div>
                  @error('email')
                  <p class="alert alert-danger">
                    {{$message}}
                  </p>
                  @enderror
                  <div class="md-3">
                    <label for="form-label"><strong>Phone:</strong></label>
                    <input type="text" class="form-control" name="phone" placeholder="enter phone" value="{{old('email')}}">
                  </div>
                  @error('phone')
                  <p class="alert alert-danger">
                    {{$message}}
                  </p>
                  @enderror
                  <button type="submit" class="btn btn-primary ml-md-2 my-2">Submit</button>
                  <a href="{{url('users')}}" class="btn btn-danger  my-2">Back</a>
              </form>
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