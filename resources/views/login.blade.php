<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <section>
            <h1>Login</h1>
            <h2>{{ Auth::User()->email ?? "NO LOGIN" }}</h2>
            <div style="display: flex; justify-content: center; align-items: center;">
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div style="display: flex; flex-direction: column;">
                        <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                            <label for="email">Email</label>
                            <input placeholder="email@email.com" type="email" id="email" name="email">
                        </div>
                        <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                            <label for="password">Password</label>
                            <input placeholder="********" type="password" id="password" name="password">
                        </div>
                        <input style="color: white; background-color: green; border-radius: 5px;" type="submit" value="send">
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>