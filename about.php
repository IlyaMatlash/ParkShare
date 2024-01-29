<?php require 'header.php' ?>

    <section class="FAQ">
        <div class="container">
            <h1 class="FAQ__title main-text-h1">О нас</h1>
            <div class="accordion">
                <div data-tab="tab-1" class="accordion__title">
                    <h2 class="text-h2">First</h2>
                    <span></span>
                </div>
                <div id="tab-1" class="accordion__content text-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam est dolorum, repellendus incidunt ipsam rem similique, a aut nostrum, minima 
                    natus illo expedita? Beatae provident autem et ea quas vero.
                </div>
            </div>
            <div class="accordion">
                <div data-tab="tab-2" class="accordion__title">
                    <h2 class="text-h2">Second</h2>
                    <span></span>
                </div>
                <div id="tab-2" class="accordion__content text-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam est dolorum, repellendus incidunt ipsam rem similique, a aut nostrum, minima 
                    natus illo expedita? Beatae provident autem et ea quas vero.
                </div>
            </div>
            <div class="accordion">
                <div data-tab="tab-3" class="accordion__title">
                    <h2 class="text-h2">Third</h2>
                    <span></span>
                </div>
                <div id="tab-3" class="accordion__content text-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam est dolorum, repellendus incidunt ipsam rem similique, a aut nostrum, minima 
                    natus illo expedita? Beatae provident autem et ea quas vero.
                </div>
            </div>
            <div class="accordion">
                <div data-tab="tab-4" class="accordion__title">
                    <h2 class="text-h2">Fourth</h2>
                    <span></span>
                </div>
                <div id="tab-4" class="accordion__content text-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam est dolorum, repellendus incidunt ipsam rem similique, a aut nostrum, minima 
                    natus illo expedita? Beatae provident autem et ea quas vero.
                </div>
            </div>
            <div class="accordion">
                <div data-tab="tab-5" class="accordion__title">
                    <h2 class="text-h2">Fifth</h2>
                    <span></span>
                </div>
                <div id="tab-5" class="accordion__content text-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ullam est dolorum, repellendus incidunt ipsam rem similique, a aut nostrum, minima 
                    natus illo expedita? Beatae provident autem et ea quas vero.
                </div>
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