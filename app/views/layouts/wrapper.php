<!DOCTYPE html>
<html lang="ru">
<head>
    <base href="/">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?=$this->getMeta();?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="scss/style.css" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/png">
    <title>Иркутский Бетон</title>

    <script src="https://kit.fontawesome.com/34eba72027.js" crossorigin="anonymous"></script>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light navigation">
        <div class="container">
            <a class="navbar-brand" href="<?=PATH;?>">
                <img src="img/logo_long.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=PATH;?>">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main/calculate">Калькулятор</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main/price">Прайс</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            О компании
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="main/about">Почему мы</a>
                            <a class="dropdown-item" href="main/projects">Наши фото</a>
                            <a class="dropdown-item" href="main/about-concrete">О бетоне</a>
                        </div>
                    </li>
                </ul>
                <button class="btn my-2 my-sm-0" data-toggle="modal" data-target="#modal-callback">Заказать звонок</button>
            </div>
        </div>
    </nav>
</header>
<?=$content;?>
<section class="contact-section">
    <div class="container">
        <h1>Наши контакты</h1>
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-section-item">
                    <h5>Свяжитесь с нами</h5>
                    <h4><i class="fas fa-phone"></i> 729-555</h4>
                    <div class="btn-phone">
                        <a href="tel:+73952729555" class="btn">Позвонить</a>
                    </div>
                    <hr>
                    <div class="contact-add-info">
                        <h4>Иркутский бетон</h4>
                        <h6>Дополнительный номер:</h6>
                        <p>8 (3952) 70-57-57</p>
                        <h6>Адрес:</h6>
                        <p>г. Иркутск, ул. Култукская, 99 «А»</p>
                        <h6>Email:</h6>
                        <p>irkbeton@irkutsk.ru</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-section-item">
                    <h5>Оставьте заявку и мы сами с вами свяжемся</h5>
                    <hr>
                    <form action="main/send" method="post" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name">Имя*</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя" required>
                                    <div class="valid-feedback">
                                        Пожалуйста введите имя
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tel">Телефон*</label>
                                <input name="tel" type="text" class="form-control" id="tel" placeholder="Введите телефон" required>
                                <div class="valid-feedback">
                                    Пожалуйста введите телефон
                                </div>
                            </div>
                        </div>
                        <div class="from-group mb-3">
                            <label for="email">Email</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Введите email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="note">Сообщение</label>
                            <textarea name="note" class="form-control" id="note" rows="3" placeholder="Вы можете сообщить дополнительную информацию"></textarea>
                        </div>
                        <button class="btn" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container contact-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.6079347918258!2d104.3341725159316!3d52.28681946123598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5da83b0963c0bb63%3A0x8daa574ee3ffcee6!2z0JjRgNC60YPRgtGB0LrQuNC5INCx0LXRgtC-0L0!5e0!3m2!1sru!2sru!4v1590153301840!5m2!1sru!2sru"
        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-item d-flex flex-column align-items-center justify-content-center">
                <div class="footer-logo">
                    <img src="img/logo_long_white.png" alt="logo">
                </div>
                <p class="footer-par-logo">Если Вам нужен бетон высокого качества, ФБС, лотки телескопические Б-6 и др., своевременная доставка по городу Иркутску и Иркутской области, то сотрудничество с нашей компанией - правильный выбор</p>
            </div>
            <div class="col-lg-4 footer-item">
                <ul class="">
                    <li class="nav-item">
                        <a class="" href="<?=PATH;?>">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="main/calculate">Калькулятор</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="main/price">Прайс</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            О компании
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="main/about">Почему мы</a>
                            <a class="dropdown-item" href="main/projects">Наши фото</a>
                            <a class="dropdown-item" href="main/about-concrete">О бетоне</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 footer-item">
                <h5>Контакты</h5>
                <p class="mb-0">Телефон:</p>
                <p>+7 (3952) 729-555</p>
                <p class="mb-0">Адрес:</p>
                <p>г. Иркутск, ул. Култукская, 99 «А»</p>
                <p class="mb-0">Email:</p>
                <p>irkbeton@irkutsk.ru</p>
                <button class="btn" data-toggle="modal" data-target="#modal-callback">Связаться с нами</button>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="modal-callback" tabindex="-1" role="dialog" aria-labelledby="modal-callbackTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-callbackTitle">Оставьте заявку<br><span>менеджер свяжется с вами в течение 15 минут</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="main/sendshort" method="post" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="name_modal">Ваше имя*</label>
                        <input name="name" type="text" class="form-control" id="name_modal" placeholder="Введите имя (обязательно)" required>
                        <div class="invalid-feedback">
                            Введите имя
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tel_modal">Ваш номер телефона*</label>
                        <input name="tel" type="tel" class="form-control" id="tel_modal" placeholder="Введите номер телефона (обязательно)" required>
                        <div class="invalid-feedback">
                            Введите телефон
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-block" type="submit">Отправить</button>
                    <p class="mt-2">*нажимая кнопку, вы даете согласие на обработку персональных данных</p>
                </form>
            </div>
        </div>
    </div>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
    $('.modal-body').on('click', '.btn-to-contact', function(){
        window.location.href='main/science-and-art#contact';
    });
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>

</html>