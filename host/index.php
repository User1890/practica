<?php
$conn = new mysqli("localhost", "root", "root", "shop");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>
<!doctype html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>ClotheShop</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700&display=swap" rel="stylesheet">
</head>


<body>
<wrapper>
    <a name="top"></a>
    <a class="top" href="#top"><img src="assets/images/arrow.png" alt=""></a>
    <a class="top" href="#bottom" style="transform: rotate(180deg); margin-top: 93vh;"><img src="assets/images/arrow.png" alt=""></a>
    <header class="header">
       <a href="index.php" class="header-name">ClotheShop</a>
       <nav class="header-menu">
            <ul class="header-list">
                <li><a href="about.html">О нас</a></li>
                <li>
                    <a href="cart.html">Корзина</a>
                </li>
                <li>
                    <a href="profile.html">Профиль</a>
                </li>
             </ul>
           </nav>
    </header>




<div class="main">

    <div class="header-content">
                <div class="image-header-content">
                    <img src="assets/images/manequin.png">
                </div>
                <div class="text-header-content">
                        Пора начать!

                        <a href="#content">*Тык*</a>
                </div>

    </div>

    <hr>

    <a name="content"></a>

    <div class="partition">

            <div class="partition-head">
                Разделы
            </div>
            <div class="partition-head-descriptions">
                Выбери интересующую тебя категорию
            </div>

            <div class="partition-content">
                <div class="partition-shirt">
                    <div class="partition-img" alt=""></div>
                    <div class="partition-text">Футболки</div>
                    <button class="partition-but">*Перейти*</button>
                </div>
                <div class="partition-pants"><div class="partition-img-pants" alt=""></div>
                    <div class="partition-text">Штаны</div>
                    <button class="partition-but">*Перейти*</button></div>
                <div class="partition-shoes"><div class="partition-img-shoes" alt=""></div>
                    <div class="partition-text">Ботинки</div>
                    <button class="partition-but">*Перейти*</button></div>
            </div>
    </div>

    <hr>

    <div class="news">
        <div class="news-head">
            Новинки
        </div>
        <div class="news-head-descriptions">
            Только самые модные вещи
        </div>
        <div class="news-content">
                <div class="news-content-post1">
                       <img class ="news-content-img" src="assets/images/new-sweet1.jpg" alt="">
                    <div class="news-content-text">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 3");
                    echo mysqli_fetch_array($sql)['name'];
                ?>
                    </div>
                    <div class="news-content-des">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 3");
                    echo mysqli_fetch_array($sql)['description'];
                ?>
                    </div>
                </div>
                <div class="news-content-post2">
                   <img class ="news-content-img"src="assets/images/new-sweet2.jpg" alt="">
                    <div class="news-content-text">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 4");
                    echo mysqli_fetch_array($sql)['name'];
                ?>
                    </div>
                    <div class="news-content-des">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 4");
                    echo mysqli_fetch_array($sql)['description'];
                ?>
                    </div>
                </div>
            </div>
    </div>

    <hr>

    <hr style="background: #999999;width: 60%; margin: 10vh 20% 0 20%;">
    <div class="special-name">Возможно вас заинтересует</div>
    <hr style="background: #999999;width: 60%; margin: 0 20% 10vh 20%;">

    <div class="special">
        <div class="special-content1">
            <img class="special-content-img" src="assets/images/djemp.jpg">
            <div class="special-content-text">
                <div class="special-content-text-name">
                <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 2");
                    echo mysqli_fetch_array($sql)['name'];
                ?>
                </div>
                <div class="special-content-text-des">
                <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 2");
                    echo mysqli_fetch_array($sql)['description'];
                ?>
                </div>
            </div>
            <div class="special-content-buy">
                <div class="special-content-buy-cost">
                <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 2");
                    $result = mysqli_fetch_array($sql);
                    echo "{$result['cost']} дирхам";
                ?>
                </div>
                <button class ="special-but" type="button" onclick="changeText(this)" data-show="true">*Купить*</button>
            </div>
        </div>
        <div class="special-content2">
            <img class="special-content-img" src="assets/images/sweet.jpg">
            <div class="special-content-text">
                <div class="special-content-text-name">
                <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 1");
                    echo mysqli_fetch_array($sql)['name'];
                ?>
                </div>
                <div class="special-content-text-des">
                <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 1");
                    echo mysqli_fetch_array($sql)['description'];
                ?>
                </div>
            </div>
            <div class="special-content-buy">
                <div class="special-content-buy-cost">
                <?php
                    $sql = mysqli_query($conn, "SELECT * FROM product WHERE id = 1");
                    $result = mysqli_fetch_array($sql);
                    echo "{$result['cost']} дирхам";
                ?>
                </div>
                <button class ="special-but" type="button" onclick="changeText(this)" data-show="true">*Купить*</button>
            </div>
        </div>
    </div>
<hr>
    <a name="contact"></a>
</div>
    <div class="contact">
       <div class="contact-img"><img src="assets/images/mail.jpg" alt=""></div>
        <div class="contact-form">
            <div class="contact-form-text">
                Связаться с нами
            </div>
            <div class="contact-form-des">
                Остались какие-то впросы?
            </div>
            <form action="" method="get" class="form-example">

            <input type="text" name="name" id="name" class="contact-form-input" required placeholder="*Ваша почта*">
            <p></p>
            <button class="contact-form-but">
                *Отправить*
            </button>

            </form>
        </div>
    </div>
<div class="main">
    <div class="follow">
        <div class="follow-content">
            <div class="follow-content-text">
                Подпишись
            </div>
            <div class="follow-content-link">
                <a href="" class="follow-content-link-icon1"><img src="assets/icons/telegram.png" alt=""></a>
                <a href="" class="follow-content-link-icon2"><img src="assets/icons/twitter.png" alt=""></a>
                <a href="" class="follow-content-link-icon3"><img src="assets/icons/instagram.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

    <div class="footer">
        <nav class="footer-menu">
                © 2023 <a href="https://t.me/chorselty">Вячеслав</a>
           </nav>
    </div>
<a name="bottom"></a>
</wrapper>
<script>
function changeText(ev) {
    ev.innerText = "*В корзине*"
    ev.setAttribute('data-show', "false");
    ev.style.backgroundColor = "#20A95F";
}
</script>
</body>

</html>
