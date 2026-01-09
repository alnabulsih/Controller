{{-- <!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $message }}</p>
</body>
</html> --}}



<h2>Contact Us</h2>

<form method="POST" action="{{ route('contact.store') }}">

    @csrf

    <label>Name:</label>
    <input type="text" name="name">

    <br><br>

    <label>Email:</label>
    <input type="email" name="email">

    <br><br>

    <label>Message:</label>
    <textarea name="message"></textarea>

    <br><br>

    <button type="submit">Send</button>
</form>

