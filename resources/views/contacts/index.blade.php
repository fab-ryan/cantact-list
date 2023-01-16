<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>

    {{-- table --}}
    <button><a href="{{ route('contact.create') }}">Create</a></button>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <a href="{{ route('contact.edit', $contact->id) }}">Edit</a>
                        <form action="{{ route('contact.delete', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- form --}}

    {{-- <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="name" placeholder="Name">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="email" name="email" placeholder="Email">
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="tel" name="phone" placeholder="Phone">
        <button type="submit">Send</button>
    </form> --}}


</html>
