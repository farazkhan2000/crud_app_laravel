<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <h1 class="py-5 fw-bold text-secondary">Users Data Table</h1>
        <a href="{{ route('newUser') }}" class="btn btn-success btn-sm mb-4">Add User</a>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Created On</th>
                        <th>Updated On</th>
                        <th>View User</th>
                        <th>Update User</th>
                        <th>Delete User</th>
                    </tr>
                    @foreach ($data as $id => $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td class="text-center"><a href="{{ route('singleUser', $user->id) }}" class="btn btn-primary btn-sm" >View</a></td>
                        <td class="text-center"><a href="{{ route('updateUserPage', $user->id) }}" class="btn btn-warning btn-sm" >Update</a></td>
                        <td class="text-center"><a href="{{ route('deleteUser', $user->id) }}" class="btn btn-danger btn-sm" >Delete</a></td>
                      </tr>
                    @endforeach
                </table>
                <div class="mt-4">
                  {{ $data->links() }} 
                </div>
                <div>
                  Total Records: {{ $data->total() }}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>