<?php require 'header.php' ?>

    <section class="main__content">
        <div class="container">
            <div class="main__conetnt-flex">
                <img class="main__img"  src="img/main-img.svg" alt="">
                <div class="main__content-info">
                    <h1 class="main__content-title text-h1">Просто, Удобно, Надежно</h1>
                    <h2 class="main__conetnt-text text-h2">Добро пожаловать в ParkShare! Мы предоставляем 
                        удобные места для парковки средств индивидуальной мобильности рядом <br> с вашим домом.</h2>
                    <!-- <form action="login.php"><button class="main__btn text-p">Попробовать бесплатно</button></form> -->
                </div>
            </div>
        </div>
    </section>
    
    <section class="information">
        <div class="container">
            <div class="information__flex">
                <div class="information__text">
                    <h1 class="information__title text-h1">Как работает ParkShare</h1>
                    <h2 class="information__p text-h2">Найдите ближайший паркомат<br> на интерактивной карте в приложении</h2>
                </div>
                <img class="information__img-1" src="img/man_and_map.svg" alt="Phone">
            </div>
            <div class="information__flex">
                <div class="information__text">
                    <h1 class="information__title text-h1">Днём бесплатно!</h1>
                    <h2 class="information__p text-h2">Выберите свободное место <br> и
                        припаркуйте ваш СИМ</h2>
                </div>
                <img class="information__img-2" src="img/man_parks.svg" alt="Phone">
            </div>
            <div class="information__flex">               
                <div class="information__text">
                    <h1 class="information__title text-h1">Ваш СИМ в безопасности</h1>
                    <h2 class="information__p text-h2">Мы обеспечиваем надежную защиту <br> и безопасность наших паркоматов. 
                        Каждое<br> место оснащено видеонаблюдением <br> и системой контроля доступа</h2>
                </div>
                <img class="information__img-3" src="img/safely.svg" alt="Phone">
            </div>
            <!-- <div class="information__flex">
                <div class="information__text">
                    <h1 class="information__title text-h1">Загрузите мобильное<br> приложение!</h1>
                    <h2 class="information__p text-h2">Чтобы воспользоваться всеми<br> преимуществами ParkShare, 
                        скачайте наше<br> мобильное приложение прямо сейчас<br>
                        Не упустите возможность сэкономить<br> время и обеспечить безопасность вашего <br>СИМа!</h2>
                    <div class="information__links">
                        <a href="#" class="information__link-1"> <img src="img/appstore.png"></img></a>
                        <a href="#" class="information__link-2"> <img src="img/googleplay.png"></img></a>
                    </div>
                </div>
                <img class="information__img-4" src="img/phone.png" alt="Phone">
            </div>  -->
        </div>
    </section>
    
    <?php require 'footer.php' ?>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
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