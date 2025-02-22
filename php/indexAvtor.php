<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Авторизация</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap');
        @import url('https://myfonts.ru/myfonts?fonts=zhizn');
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #000;
        }

        .container {
            background-color: #000000;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #BEBEBE;
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
            font-family: "Zhizn";
            font-size:32px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #6F7A8E;
            color: white;
            padding: 12px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 0px 20px;
            cursor: pointer;
            width: 100%;
        }
        .button {
            background-color: #6F7A8E;
            color: white;
            padding: 12px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 0px 20px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #455168;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #fff;
            font-size: 20px;
            font-family: 'Roboto Flex';
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #BEBEBE;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #BEBEBE;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .btn-group button {
            flex: 1;
            font-size: 20px;
            font-family: 'Roboto Flex';
        }
        .back-link {
            text-align: center;
            margin-top: 10px;
        }
        .back_btn{
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Авторизация</h2>
        <form action="avtor.php" method="POST">
            <div class="form-group">
                <label for="Name">Логин:</label>
                <input type="text" id="Name" name="Name" required>
            </div>
            <div class="form-group">
                <label for="Password">Пароль:</label>
                <input type="password" id="Password" name="Password" required>
            </div>
            <div class="g-recaptcha" data-sitekey="6Lf4ywMqAAAAACRmprzCPlli_vG37jfbsiuJwkQU"></div>
            <button type="submit" name="submit">Войти</button> <!-- Добавлен атрибут name -->
        </form>
        <div class="back-link">
            <a class="back_btn" href="index.php">← Вернуться к регистрации</a>
        </div>
    </div>
</body>
</html>