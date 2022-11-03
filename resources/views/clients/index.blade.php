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
        <h1 style="background-color: rgb(50,50,50,0.7); color: white; border-radius: 10px; width: 80%; padding: 20px; display: flex; justify-content: center; align-items: center;">Clients</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->phone_number}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  
</body>
</html>