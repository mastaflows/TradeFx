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

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="light">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Theme Toggle</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                transition: background-color 0.3s, color 0.3s;
            }

            .theme-toggle {
                position: fixed;
                top: 1rem;
                right: 1rem;
                z-index: 1000;
                cursor: pointer;
            }
        </style>
    </head>

    <body class="bg-light text-dark">

        <!-- Theme Toggle Button -->
        <div class="theme-toggle">
            <button id="theme-toggler" class="btn btn-outline-secondary">
                <i id="theme-icon" class="bi bi-moon"></i>
            </button>
        </div>

        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Theme Toggle Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const themeToggler = document.getElementById('theme-toggler');
                const themeIcon = document.getElementById('theme-icon');
                const root = document.documentElement;

                // Check localStorage for saved theme preference
                const savedTheme = localStorage.getItem('theme') || 'light';
                setTheme(savedTheme);

                // Toggle theme on button click
                themeToggler.addEventListener('click', function() {
                    const currentTheme = root.getAttribute('data-bs-theme');
                    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                    setTheme(newTheme);
                });

                // Set theme and save preference to localStorage
                function setTheme(theme) {
                    root.setAttribute('data-bs-theme', theme);
                    localStorage.setItem('theme', theme);

                    if (theme === 'dark') {
                        themeIcon.classList.remove('bi-moon');
                        themeIcon.classList.add('bi-sun');
                        document.body.classList.remove('bg-light', 'text-dark');
                        document.body.classList.add('bg-dark', 'text-light');
                    } else {
                        themeIcon.classList.remove('bi-sun');
                        themeIcon.classList.add('bi-moon');
                        document.body.classList.remove('bg-dark', 'text-light');
                        document.body.classList.add('bg-light', 'text-dark');
                    }
                }
            });
        </script>
    </body>

    </html>


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
                            <div class="form-group mb-3 fw-bold">
                                <label for="username" class="label-control">Username</label>
                                <input type="text" value="{{ $user->username }}" id="username" class="form-control"
                                    name="username" placeholder="Username" readonly>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3 fw-bold">
                                <label for="Name" class="label-control">Name</label>
                                <input type="text" value="{{ $user->name }}" id="username" class="form-control"
                                    name="Name" placeholder="Name" readonly>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group mb-3 fw-bold">
                                <label for="Email" class="label-control">Email</label>
                                <input type="text" value="{{ $user->email }}" id="email" class="form-control"
                                    name="email" placeholder="email" readonly>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-3 fw-bold">
                                <label for="Country" class="label-control">Country</label>
                                <input type="text" value="{{ $user->country }}" id="country" class="form-control"
                                    name="Country" placeholder="Country" readonly>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-3 fw-bold">
                                <label for="Date" class="label-control">Date of Reg.</label>
                                <input type="text"
                                    value="{{ \carbon\carbon::parse($user->created_at)->format('d D-M-Y') }}"
                                    id="date" class="form-control" name="Date" placeholder="Date " readonly>

                            </div>
                        </div>
                    </div>


                </form>

            </div>
            <div class="table-responsive ">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Transaaction ID</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Type</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">


                        @foreach ($user->transactions as $transaction)
                            <tr>

                                <td>{{ $transaction->transaction_id }}</td>
                                <td>{{ $transaction->amount }}</td>
                                <td>{{ $transaction->type }}</td>
                                <td>{{ \carbon\carbon::parse($transaction->created_at)->format('d D-M-Y') }}</td>
                                <td>
                                    {{--  <div class="btn-group">
                                        <a href="{{ route('user.show', ['user' => encrypt($user->id)]) }}"
                                            class="btn btn-primary" title="View"><i
                                                class="bi bi-eye-fill"></i></a>&nbsp;
                                        <form id="deleteForm" action="{{ route('user.destroy', $user->id) }}"
                                            method="POST" onsubmit="return confirmDelete(event);">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="View"><i
                                                    class="bi-trash"></i></button>
                                        </form>&nbsp; --}}
                                    {{-- LIVEWIRE --}}
                                    {{--  <form wire:submit.prevent="submit">
                                            <button type="submit" class="btn btn-secondary">
                                                <i class="bi bi-pencil-fill"></i></i></button>
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
                            </tr> --}}
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="card-footer">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
