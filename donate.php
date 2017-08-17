
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Premium Game Roleplay - Донат</title>
    <link rel="stylesheet" href="/css/maksa988.css">
    <script src="https://use.fontawesome.com/8a3f41131a.js"></script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">
    
    $(document).ready(function() {
     
    $('a[href^="#"]').click(function(){
            var el = $(this).attr('href');
            $('body').animate({
                scrollTop: $(el).offset().top}, 2000);
            return false; 
    });
        
    });
    
    </script>


</head>
<body>
    
<div id="header">
    <div class="navbar">
        <div class="container">
            <div class="logo"></div>
            <ul class="nav-menu">
                <li class="active"><a href="/">Главная</a></li>
                    <li><a href="/how_to_play.php">Как начать играть</a></li>
                    <li><a href="https://vk.com/premiumgameroleplay234">О проекте</a></li>
                    <li><a href="#">Форум</a></li>
                    <li><a href="/donate.php">Донат</a></li>
            </ul>
            <div class="social-buttons">
                <a href="https://vk.com/id193966419"><i class="fa fa-vk"></i></a>
                <a href="Нету пока что"><i class="fa fa-youtube-play"></i></a>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="donate">
        <div class="container">
            <h1>Пополнение игровой валюты</h1>
            <hr class="center">

            <form method="POST">
                <select name="server_id" class="server">
                    <option value="1" selected>Сервер 01</option>
                    <option value="2" selected>Сервер 02</option>
                </select>
                <input type="text" class="nickname" name="account" placeholder="Ник">
                <input type="text" class="sum" name="sum" placeholder="Сумма">
                
                <button type="submit" id="submit"><i class="fa fa-shopping-cart"></i> Пополнить</button>
            </form>
            <div class="donate-text">
                Конвертирование реальной валюты в игровые <br>
                1 рубль = 1000 игровых рублей <br>
                Покупка всех скиллов на оружие = 150 рублей <br>
                Снятие игровых предупреждений с аккаунта (warn'ов) = 50 рублей <br>
                Смена игрового ника = 30 рублей <br>
                Повысить законопослушность (15р +10) <br>
                Повысить игровой уровень = 50 рублей/1уровень <br>
                Все лицензии и права = 250р <br>
                Покупка VIP аккаунта навсегда = 300 рублей <br>
                <br>
                <a href="#">Подробнее о публичной оферте</a>
            </div>
        </div>
    </div>
    <div class="advantages">
        <div class="container">
            <img src="/images/advantages.png" alt="">
        </div>
    </div>
</div>
</body>
</html>