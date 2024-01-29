<?php require 'header.php' ?>

    <section class="admin__panel">
        <div class="container"> 
            <h1 class="admin__title text-h1">Панель администратора</h1>

            <form class="admin__form" name="form5">
                <div class="admin__form-items">
                    <p class="admin__form-element text-p">Паркомат ул.Парковая</p>
                    <p class="admin__form-element text-p">Паркомат ул.Строителей</p>
                    <p class="admin__form-element text-p">Паркомат ул.Восточная</p>
                </div>
                <div class="admin__form-buttons">
                    <input class="admin__form-btn type="button" value='Редактировать' onclick="changeFormProperties()">
                </div>
            </form>
        </div> 
    </section>
    

    <!-- <footer class="footer">
        <div class="container">
    
        </div>
    </footer> -->

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