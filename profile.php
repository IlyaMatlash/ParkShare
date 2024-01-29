<?php require 'header.php' ?>

    <section class="profile">
        <div class="container">
           <div class="profile__title">
                <!-- <img class="profile__arrow" src="img/profile-arrow.svg" alt="Back arrow"> -->
                <h1 class="profile-h1 text-h1">Личные данные</h1>
           </div>

           <div class="profile__container">
                <div class="profile__flex">
                    <img class="profile__img" src="img/profile-img.jpg" alt="Profile image">
                
                    <div class="profile__left-flex">
                        <div class="profile__content">
                            <div class="profile__subtitle text-p">Имя</div>
                            <div class="profile__text text-h2">Илья</div>
                        </div>
                        <div class="profile__content">
                            <div class="profile__subtitle text-p">Отчество</div>
                            <div class="profile__text text-h2">Фёдорович</div>
                        </div>
                        <div class="profile__content">
                            <div class="profile__subtitle text-p">Фамилия</div>
                            <div class="profile__text text-h2">Матлаш</div>
                        </div>
                    </div>
                    <div class="profile__right-flex">
                        <div class="profile__content">
                            <div class="profile__subtitle text-p">Пол</div>
                            <div class="profile-gender">
                                <img class="gender__img" src="img/profile-man.svg" alt="Man">
                                <img class="gender__img" src="img/profile-woman.svg" alt="Woman">
                            </div>
                        </div>
                        <div class="profile__content">
                            <div class="profile__subtitle text-p">Телефон</div>
                            <div class="profile__text text-h2">+7 (987) 654-32-21</div>
                        </div>
                        <div class="profile__content">
                            <div class="profile__subtitle text-p">E-mail</div>
                            <div class="profile__text text-h2">ilyamatlash123@gmail.com</div>
                        </div>
                    </div>
                    <button class="login__btn profile__btn text-p">Редактировать</button>
                </div>
                
           </div>
        </div>
    </section>

    <section class="profile-sim">
        <div class="container">
            <h1 class="profile-main-h1 text-h1">Средство индивидуальной мобильности</h1>
            <div class="profile__card-flex">
                <div class="profile__card">
                    <div class="profile__item">
                        <div class="profile__line">
                            <img class="profile__card-img" src="img/profile-bicycle.svg" alt="Bicycle">
                        </div>
                        <div class="profile__card-num text-h2">WN2L00620</div>
                    </div>
                </div>
                <div class="profile__card">
                    <div class="profile__item">
                        <div class="profile__line">
                            <img class="profile__card-img" src="img/profile-scooter.svg" alt="Scooter">
                        </div>
                        <div class="profile__card-num text-h2">MI3K00350</div>
                    </div>
                </div>
                <button class="login__btn profile__btn sim__btn text-p">Добавить СИМ</button>
            </div>
        </div>
    </section>

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