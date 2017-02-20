<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USS</title>

    <!-- For CSS -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- For JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- Custom CSS -->
    <style type="text/css">
        body{
            background: #FFFFFF;
        }
    </style>
</head>
<body>
<form action={{ url('odd_even') }} method="post" enctype="multipart/form-data">
    <div style="width: 50%; padding: 10px">
        <input type="text" name="algorithm" placeholder="Enter a number"><br>
        <button name="Calculate">Calculate</button>
    </div>
    <br>
    <br>
    <div style="width: 50%; padding: 10px">
        <span>Output: </span>
    </div>





<!-- <div class="menu_bar">
        <ul>
            <li>Logo</li>
            <li>Login</li>
        </ul>
    </div>
    <div style="border: solid; margin-left: 10px">
        @for($i = 0;$i<10; $i++)
            <div>{{ $i }}</div>
        @endfor
    </div>
    <div class="login_panel">
        <span class="title">Login First</span>
        <input type="text" name="username" placeholder="UserName">
        <input type="password" name="password" placeholder="Password">
        <button name="Login" title="Login">Login</button>
    </div> -->
</form>
</body>
</html>