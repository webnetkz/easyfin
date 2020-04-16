<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyFIN</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <a href="#">
            <img src="public/img/logo.png" alt="logotype easyfin" class="logoHeader">
        </a>
    </header>
        <div class="content">
            <form action="#" method="POST" class="formSignUp">
                <input type="tel" list="tel-list" placeholder="Номер телефона" pattern="\+7\s?[\(]{0,1}7[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="Номер телефона" class="inp" oninput="validatePhone(this); console.log(this.value)" oninvalid="this.setCustomValidity('Вы не верно ввели номер телефона')" onclick="this.value = '+7 ('" required>
                <input type="submit" class="btn" value="Войти">
            </form>
        </div>
    <footer>
    
    </footer>
    <script src="public/js/phone.js"></script>
</body>
</html>