<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container mt-5 col-10 mx-auto ">
        <div class="card p-3 mb-2">
            <div class="card-header">
                <div class="card-title">
                    All Users ({{ count($users) }})
                </div>
            </div>
            <div class="card-body table-responsive ">
                <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Usernamet</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Country</th>
                        <th scope="col">Date Of Reg.</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">


                        @foreach ($users as $user )
                        <tr>

                            <td>{{ $user->username }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->country }}</td>
                            <td>{{ \carbon\carbon::parse($user->created_at)->format('d D-M-Y') }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('user.show',['user'=>encrypt($user->id)])}}" class="btn btn-primary" title="View"><i class="bi bi-eye-fill"></i></a>&nbsp;
                                    <a href=""class="btn btn-danger" title="Delete"><i class="bi-trash"></i></a>
                                </div>
                            </td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
