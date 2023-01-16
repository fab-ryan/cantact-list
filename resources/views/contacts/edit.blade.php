<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>

<body>
    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="name" placeholder="Name" value="{{ $contact->name }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="email" name="email" placeholder="Email" value="{{ $contact->email }}">
        @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="tel" name="phone" placeholder="Phone" value="{{ $contact->phone }}">
        <button type="submit">Send</button>
    </form>
</body>

</html>
