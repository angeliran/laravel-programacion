<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Clients</title>
</head>
<body>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%;">
        <h1 style="background-color: rgb(50,50,50,0.7); color: white; border-radius: 10px; width: 100%; padding: 20px; display: flex; justify-content: center; align-items: center;">Clients</h1>
        <table style="background-color: rgb(50,50,50,0.5); color: white; width: 80%; border-radius: 10px; padding: 10px 0 10px 0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td style="text-align: center;">{{$client->id}}</td>
                    <td style="text-align: center;">{{$client->name}}</td>
                    <td style="text-align: center;">{{$client->email}}</td>
                    <td style="text-align: center;">{{$client->phone_number}}</td>
                    <td style="text-align: center;"><a style="text-decoration: none;" href="{{ url('clients/edit', $client->id) }}">Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  
</body>
</html>