<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>test work</title>
</head>
<body>
    <form class="form" action="order.php" method="POST">
        <p class="form__subtitle">Имя</p>
        <input class="form__input" type="text" name="name" placeholder="Введите ваше имя">
        <p class="form__subtitle">Номер телефона для связи</p>
        <input class="form__input" type="text" name="phone" placeholder="Введите номер телефона">
        <input class="form__input" type="hidden" id="sub1" name="sub1">
        <input class="form__input" type="hidden" id="sub2" name="sub2">
        <input class="form__sendbutton" type="submit" value="Отправить" onmouseover="showLink()">
        <a class="additional__link" href="#additional__content">Перейти к дополнительной информации</a>
    </form>
    
    <div id="additional__content">
        <h2>Дополнительная информация</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt possimus consequuntur odio,
            nesciunt expedita eum consectetur cupiditate tempora tenetur. Maiores.
        </p>
    </div>

    <script>
        function showLink() {
            document.querySelector('.additional__link').style.display = 'block';
        }
    </script>
</body>
</html>