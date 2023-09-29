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
<form method="POST" action="{{ route('server.create') }}">
    @csrf

    <div>
        <label for="host">Имя сервера</label>
        <input type="text" name="host" id="host">
        <br>
        @error('host')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="chronicles">Хроники</label>
        <input type="text" name="chronicles" id="chronicles">
        <br>
        @error('chronicles')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="rates">Рейты</label>
        <input type="text" name="rates" id="rates" value="{{ old('rates') }}">
        <br>
        @error('rates')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="open_date">Дата открытия:</label>
        <input type="text" name="open_date" id="open_date" value="{{ old('open_date') }}">
        <br>
        @error('open_date')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
    @error('add-error')
    <span class="error"> {{ $message }}</span>
    @enderror
    <br>

    {{ session('add-success') }}

    <button type="submit">Отправить</button>
</form>
</body>
</html>
