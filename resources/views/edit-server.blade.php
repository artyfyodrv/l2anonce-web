<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('server.edit', ['id' => $id]) }}" method="POST">
    @csrf
    @method('PATCH')

    <label for="status">Status:</label>
    <input type="text" name="status" id="status" value="{{ $data['status'] }}">

    <label for="host">Host:</label>
    <input type="text" name="host" id="host" value="{{ $data['host'] }}">

    <label for="chronicles">Chronicles:</label>
    <input type="text" name="chronicles" id="chronicles" value="{{ $data['chronicles'] }}">

    <label for="rates">Rates:</label>
    <input type="text" name="rates" id="rates" value="{{ $data['rates'] }}">

    <label for="open_date">Open Date:</label>
    <input type="date" name="open_date" id="open_date" value="{{ $data['open_date'] }}">

    <label for="is_visible">Is Visible:</label>
    <input
        type="checkbox"
        name="is_visible"
        id="is_visible"
        {{ $data['is_visible'] ? 'checked' : '' }}>

    <label for="is_deleted">Is Deleted:</label>
    <input
        type="checkbox"
        name="is_deleted"
        id="is_deleted"
        {{ $data['is_deleted'] ? 'checked' : '' }}>

    {{ session('edit-success') }}

    <button type="submit">Submit</button>
</form>
</body>
</html>
