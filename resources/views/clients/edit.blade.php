<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit client</title>
</head>
<body>
    <h1 style="background-color: rgb(50,50,50,0.7); color: white; border-radius: 10px; display: flex; justify-content: center; align-items: center; padding: 20px;">CLIENT EDIT</h1>
    <form action="{{ url('clients', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $client->id }}">
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%;">
            <div style="display: flex; flex-direction: column; margin-bottom: 10px; width: 35%;">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="María" value="{{$client->name}}">
            </div>
            <div style="display: flex; flex-direction: column; margin-bottom: 10px; width: 35%;">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="example@email.com" value="{{$client->email}}">
            </div>
            <div style="display: flex; flex-direction: column; margin-bottom: 10px; width: 35%;">
                <label for="phone_number">Teléfono</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="6120000000" value="{{$client->phone_number}}">
            </div>
            <button type="submit" style="background-color: #4a72f5; color: white; border-radius: 5px; width: 35%;">Actualizar</button>
        </div>
    </form>
</body>
</html>