<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5 col-10 mx-auto ">
        <h2 class="text-center my-4">Add Record</h2>

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" wire:model="username" class="form-control"
                    placeholder="Enter username">
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" id="fullname" wire:model="fullname" class="form-control"
                    placeholder="Enter full name">
                @error('fullname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" wire:model="email" class="form-control" placeholder="Enter email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" id="country" wire:model="country" class="form-control"
                    placeholder="Enter country">
                @error('country')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date of Registration</label>
                <input type="date" id="date" wire:model="date" class="form-control" placeholder="Enter date">
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{-- {{ route('add-record') }} --}}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>

</html>
