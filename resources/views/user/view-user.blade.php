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

    <div class="container mt-5 col-8 mx-auto ">
        <div class="card p-3 mb-2">
            <div class="card-header">
                <div class="card-title d-flex justify-content-between">
                    <div>
                        View {{ $uppercaseText = Str::upper($user->username) }}
                    </div>
                    <div>
                        <img src="{{ Avatar::create($user->name)->toBase64() }}" width="35px" height="35px" />
                    </div>
                </div>
            </div>
            <div class="card-body">
                @csrf
                <form action="" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="username" class="label-control">Username</label>
                                <input type="text" value="{{ $user->username }}" id="username" class="form-control"
                                    name="username" placeholder="Username" readonly>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="Name" class="label-control">Name</label>
                                <input type="text" value="{{ $user->name }}" id="username" class="form-control"
                                    name="Name" placeholder="Name" readonly>

                            </div>
                        </div>
                    </div>


                </form>

            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
