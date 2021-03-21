<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="POST" action="{{ route('add-client') }}">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="body" placeholder="body">
        <button type="submit">Create</button>
    </form>
</body>
</html>