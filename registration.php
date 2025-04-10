<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Реєстрація та Авторизація</title>
</head>
<body>
    <!-- Відео на задньому фоні -->
    <video autoplay loop muted playsinline class="background-clip">
        <source src="images/vid 1.mp4" type="video/mp4">
    </video>

    <!-- Форма реєстрації -->
    <div class="container" id="signup-container">
        <h1 class="form-title">Реєстрація</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="Ваше ім'я" required>
                <label for="fName">Ім'я</label>
            </div>
            <div class="input-group"> 
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Ваше прізвище" required>
                <label for="lName">Прізвище</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Ел. адреса" required>
                <label for="email">Електронна адреса</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Пароль" required>
                <label for="password">Пароль</label> 
            </div>
            <input type="submit" class="btn" value="Зареєструватися" name="signUp"> 
        </form>
        <p class="or">--------------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Вже зареєстровані?</p>
            <button id="signInButton">Ввійти</button>
        </div>
    </div>

    <!-- Форма авторизації -->
    <div class="container" id="signin-container">
        <h1 class="form-title">Ввійти</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="signin-email" placeholder="Ел. адреса" required>
                <label for="signin-email">Електронна адреса</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="signin-password" placeholder="Пароль" required>
                <label for="signin-password">Пароль</label> 
            </div>
            <p class="recover">
                <a href="#">Відновити пароль</a>
            </p>
            <input type="submit" class="btn" value="Ввійти" name="signIn"> 
        </form>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Ще не маєте акаунта?</p>
            <button id="signUpButton">Зареєструватися</button>
        </div>
    </div>

    <script>
        // JavaScript для перемикання між формами
        const signInButton = document.getElementById('signInButton');
        const signUpButton = document.getElementById('signUpButton');
        const signupContainer = document.getElementById('signup-container');
        const signinContainer = document.getElementById('signin-container');

        signInButton.addEventListener('click', () => {
            signupContainer.style.display = 'none';
            signinContainer.style.display = 'block';
        });

        signUpButton.addEventListener('click', () => {
            signupContainer.style.display = 'block';
            signinContainer.style.display = 'none';
        });
    </script>
</body>
</html>