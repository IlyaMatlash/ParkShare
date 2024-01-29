<?php require 'header.php' ?>

    
    <div class="container">
        <h1 class="content__title main-text-h1">Наши паркоматы</h1>
    </div>

    <section class="swiper">
        <div class="container swiper-wrapper swiper-container">
            <div class="slider__flex swiper-slide">
                <img class="slider__img-1" src="img/Parkx2v1.png" alt="">
                <h2 class="slider__subtitle text-h2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <h2 class="slider__p text-h2">Modi consectetur repellendus temporibus odit. Aliquam culpa ea, odio tenetur rem, 
                    molestias excepturi ratione minus placeat ducimus aperiam pariatur animi quod explicabo.</h2>
            </div>
            <div class="slider__flex swiper-slide">
                <img class="slider__img-2" src="img/Parkx1v3.png" alt="">
                <h2 class="slider__subtitle text-h2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <h2 class="slider__p text-h2">Modi consectetur repellendus temporibus odit. Aliquam culpa ea, odio tenetur rem, 
                    molestias excepturi ratione minus placeat ducimus aperiam pariatur animi quod explicabo.</h2>
            </div>
            <div class="slider__flex swiper-slide">
                <img class="slider__img-3" src="img/Parkx4-3.png" alt="">
                <h2 class="slider__subtitle text-h2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <h2 class="slider__p text-h2">Modi consectetur repellendus temporibus odit. Aliquam culpa ea, odio tenetur rem, 
                    molestias excepturi ratione minus placeat ducimus aperiam pariatur animi quod explicabo.</h2>
            </div>
            <div class="slider__flex swiper-slide">               
                <img class="slider__img-4" src="img/Parkx8v2.png" alt="">
                <h2 class="slider__subtitle text-h2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <h2 class="slider__p text-h2">Modi consectetur repellendus temporibus odit. Aliquam culpa ea, odio tenetur rem, 
                    molestias excepturi ratione minus placeat ducimus aperiam pariatur animi quod explicabo.</h2>
            </div>
            <div class="slider__flex swiper-slide">               
                <img class="slider__img-5" src="img/Parkx2v2.png" alt="">
                <h2 class="slider__subtitle text-h2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <h2 class="slider__p text-h2">Modi consectetur repellendus temporibus odit. Aliquam culpa ea, odio tenetur rem, 
                    molestias excepturi ratione minus placeat ducimus aperiam pariatur animi quod explicabo.</h2>
            </div>  
        </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-scrollbar"></div>
    </section>

    <div class="modal" id="modal1">
        <div class="modal-content">
          <img src="img/close-24.svg" class="modal-close"></img>
          <h2 class="text-h2">Сообщение успешно отправлено!</h2>
        </div>
    </div>

    <form action="#" class="form" id="form">
        <div class="container form__container">
            <h1 class="form__title text-h1">Напишите нам для заказа паркоматов!</h1>
            <div class="form__flex">
                <div class="form__flex-items">    
                    <input class="form__item text-p _req _error" type="text" name="user_name" placeholder="Ваше имя">
                    <input class="form__item text-p _req _error" type="tel" name="user_phone" placeholder="Телефон">
                </div>
                <div class="form__flex-items">
                    <input class="form__item text-p _req _email _error" type="email" name="user_email" placeholder="Ваш e-mail">
                    <input class="form__item text-p" type="text" name="user_company" placeholder="Компания">
                </div>
                <div class="form__flex-items">
                    <textarea class="form-comment text-p" type="text" name="user_comment" placeholder="Введите комментарий"></textarea>
                </div>
                <div class="form__flex-items">
                    <!-- <a href="#modal1" id="submitBtn" class="form__btn modal-trigger text-p">Отправить</a> -->
                    <button class="form__btn text-p" type="submit" id="submit">Отправить</button>
                </div>
            </div>
        </div>
    </form>

    <?php require 'footer.php' ?>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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