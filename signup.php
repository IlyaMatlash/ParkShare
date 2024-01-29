<?php require 'header-logSig.php' ?>

    <form class="login__container" action="php/register.php" method="post">
        <h1 class="login__title text-h1">Регистрация</h1>
        <div class="form-recovery">
            <input class="login-form text-p" type="text" placeholder="Логин" name="login">
            <input class="login-form text-p" type="email" placeholder="Почта" name="email">
            <input class="login-form text-p" type="password" placeholder="Пароль" name="pass">
            <input class="login-form text-p" type="password" placeholder="Повторите пароль" name="repeatpass">
            <a class="recovery__btn text-p" href="login.php">Есть аккаунт?</a>
        </div>

        <button type="submit" class="login__btn text-p">Зарегистрироваться</button>
    </form>


    <?php require 'footer.php' ?>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
    <script>
    SmoothScroll({
    // Время скролла 400 = 0.4 секунды
    animationTime : 800,
    // Размер шага в пикселях
    stepSize : 75,
    // Дополнительные настройки:
    // Ускорение
    accelerationDelta : 30,
    // Максимальное ускорение
    accelerationMax : 2,
    // Поддержка клавиатуры
    keyboardSupport : true,
    // Шаг скролла стрелками на клавиатуре в пикселях
    arrowScroll : 50,
    // Pulse (less tweakable)
    // ratio of "tail" to "acceleration"
    pulseAlgorithm : true,
    pulseScale : 4,
    pulseNormalize : 1,
    // Поддержка тачпада
    touchpadSupport : true,
    })
    </script>
</body>
</html>