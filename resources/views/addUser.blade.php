<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col-12">
        <h1 class="py-5 fw-bold text-secondary">Add New User</h1>
          <form action="{{ route('createUser') }}" method="POST" class="my-5">
            @csrf
            <div class="mb-3">
              <label for="username" class="mb-2">Name</label>
              <input type="text" class="form-control" name="username" >
            </div>
            <div class="mb-3">
              <label for="email" class="mb-2">Email</label>
              <input type="email" class="form-control" name="email" >
            </div>
            <div class="mb-3">
              <label for="age" class="mb-2">Age</label>
              <input type="number" class="form-control" name="age" >
            </div>
            <div class="mb-3">
              <label for="city" class="mb-2">city</label>
              <input type="text" class="form-control" name="city" >
            </div>
            <button type="submit" class="btn btn-success btn-lg w-100 mt-3" >Add User</button>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>