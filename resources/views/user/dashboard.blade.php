<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container mt-5 col-10 mx-auto ">
        <div class="card p-3 mb-2">
            <div class="card-header">
                <div class="card-title">
                    All Users ({{ count($users) }})
                </div>
            </div>
 @if (Session::has('success'))
    <div id="danger-alert" class="alert alert-danger mb-3 fade-in" role="alert"alert>
        <strong>Success!</strong> {{ Session('success') }}
    </div>
<style>
    /* Add smooth fade-out transition */
    .fade-in {
        opacity: 1;
        transition: opacity 0.5s ease-in-out; /* Adjust transition duration */
    }
    .fade-out {
        opacity: 0;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Set timeout to apply fade-out effect and close the alert
        setTimeout(() => {
            const alert = document.getElementById('danger-alert');
            if (alert) {
                alert.classList.add('fade-out'); // Add fade-out class
                setTimeout(() => {
                    UIkit.alert(alert).close(); // Close using UIKit's method after transition
                }, 1000); // Match transition duration (0.5s = 500ms)
            }
        }, 3000); // Duration before fade-out starts
    });
</script>
@endif
            <div class="card-body table-responsive ">
                <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Username</th>
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
                                    <form id="deleteForm" action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirmDelete(event);">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="View"><i class="bi-trash"></i></button>
                                    </form>

                                    <script>
                                        function confirmDelete(event) {
                                            event.preventDefault(); // Prevent the default form submission

                                            Swal.fire({
                                                title: 'Are you sure?',
                                                text: 'Do you want to delete this user?',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#d33',
                                                cancelButtonColor: '#3085d6',
                                                confirmButtonText: 'Yes, delete it!',
                                                cancelButtonText: 'Cancel'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    document.getElementById('deleteForm').submit(); // Submit the form if confirmed
                                                }
                                            });

                                            return false; // Prevent the default behavior
                                        }
                                        </script>

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
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
