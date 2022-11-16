<?php
	define('ROOT_PATH', dirname(__FILE__));
    $usersFolder = ROOT_PATH.DIRECTORY_SEPARATOR.'users'.DIRECTORY_SEPARATOR;

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    /*$usersFilePath = $usersFolder.'users.txt';
	$usersFile = fopen($usersFilePath, 'r');

    while(!feof($usersFile)) {
        $line = explode(' ', fgets($usersFile));
        $loginFromLine = ltrim($line[0]);
        $passwordFromLine = rtrim($line[1]);

        if ($login === $loginFromLine && $password === $passwordFromLine) {
            if (file_exists($usersFolder.$login.'.txt')) {
                file_put_contents($usersFolder.$login.'.txt', file_get_contents($usersFolder.$login.'.txt') + 1);
            } else {
                file_put_contents($usersFolder.$login.'.txt', 1);
            }

            echo "<script type='text/javascript'>alert('$login');</script>";
            break;
        }
    }

    fclose($usersFile);*/

    /*$jsonFilePath = $usersFolder.'users.json';
    $userData = json_decode(file_get_contents($jsonFilePath), true);

    foreach($userData as $key => $user) {
        if ($login === $user['login'] && $password === $user['password']) {
            $userData[$key]['successSignIn'] += 1; 
            echo "<script type='text/javascript'>alert('$login');</script>";
            file_put_contents($jsonFilePath, json_encode($userData));
            break;
        }
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            outline: none;
        }

        .body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        }

        .form {
            padding: 10px 30px 40px;
            max-width: 400px;
            height: max-content;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 10px;
            box-shadow: 0 0 4px rgba(0, 0, 0, .2);
        }

        .title {
            text-align: center;
        }

        .form-input {
            margin-bottom: 6px;
            padding: 8px 14px;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 6px;
        }

        .form-input:focus {
            border: 1px solid #9fd7f9;
        }

        .submit {
            display: block;
            margin: 0 auto;
            padding: 10px 15px;
            width: 140px;
            border: none;
            border-radius: 6px;
            color: #fff;
            background-color: #3eaef4;
            transition: .1s ease-in-out;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #6ec2f7;
        }

        .sign-in-inputs {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="body">
    <form method='post' class="form">
        <h2 class="title">Sign In</h2>
        <div class="sign-in-inputs">
            <input type="text" placeholder="Login" class="form-input" name="login" required>
            <input type="password" placeholder="Password" class="form-input" name="password" required>
        </div>
        <button type="submit" class="submit">Sign In</button>
    </form>
</body>
</html>