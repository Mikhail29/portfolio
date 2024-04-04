<!DOCTYPE html>
<html lang="{{Lang::locale()}}">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>@lang('Михайлов Михайло') | @lang("Моє портфоліо")</title>

    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/all.min.css') }}" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper.css') }}" />

    <!-- Magnific-Popup CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/magnific-popup/magnific-popup.css') }}" />

    <!-- Custom Stylesheets -->
    <link rel="stylesheet"  href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

</head>
<body>


<!-------------------- Scroll-Top Area (Start) -------------------->
<a href="#home" class="scroll-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-------------------- Scroll-Top Area (End) -------------------->



<!-------------------- Header Area (Start) -------------------->
<header class="header">

    <!-- Logo -->
    <a class="logo" href="#home">
        <h2> @lang('Михайлов Михайло') </h2>
        <!-- <img src="{{ asset('images/logo.png') }}" alt="logo" /> -->
    </a>
    <!-- Logo End -->

    <!-- Navbar -->
    <nav class="navbar">
        <a href="#home">@lang("Додому")</a>
        <a href="#about">@lang("Про мене")</a>
        <a href="#portfolio">@lang("Портфоліо")</a>
        <a href="#contact">@lang("Контакти")</a>
        @if(Lang::locale() != "en")
        <a href="{{url("locale/en")}}">@lang("english")</a>
        @endif
        @if(Lang::locale() != "uk")
            <a href="{{url("locale/uk")}}">@lang("українська")</a>
        @endif
        @if(Lang::locale() != "ru")
            <a href="{{url("locale/ru")}}">@lang("русский")</a>
        @endif
    </nav>

    <!-- Menubar -->
    <div class="fas fa-bars" id="menu-btn"></div>

</header>
<!-------------------- Header Area (End) -------------------->



<!-------------------- Home Area (Start) -------------------->
<section class="home" id="home">

    <div class="box-container">

        <div class="content">
            <div class="text">
                <h2>@lang('Привіт всім!')</h1>
                    <h1>@lang('Я') <span class="typing-text"></span></h1>
                    <p>@lang('Кваліфікований Fullstack Developer з 9 річним досвідом. Працював з php/MySQL/html5/js/css3/jquery/bootstrap3-5/reactjs/graphql. Володію навичкою швидкого навчання.')</p>
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('images/photos/i.jpg') }}" alt="@lang('Михайлов Михайло')">
        </div>

    </div>

</section>

<!-------------------- Home Area (End) -------------------->



<!-------------------- About Area (Start) -------------------->
<section class="about" id="about">

    <div class="box-container">

        <div class="image">
            <img src="{{ asset('images/photos/i.jpg') }}" alt="@lang('Михайлов Михайло')" />
        </div>

        <div class="content">

            <h2>@lang('Мене звати Михайлов Михайло')</h2>
            <p>@lang('Я кваліфікований Fullstack розробник з 9 річним досвідом. Працював з php/MySQL/html5/js/css3/jquery/bootstrap3-5/reactjs/graphql. Прагну працювати над цікавими проектами як в якості бекенд розробника, так і фулстак, або фронтенд розробника в компанії в якій працю розробників цінять, з командою, яка так само як і я обожнює свою справу і постійно намагається развиватися в цій галузі.')</p>

            <div class="about-info">

                <div class="info">
                    <h4>@lang('Вік'): <span>31</span></h4>
                    <h4>@lang("Мови"): <span>@lang('українська C2, російська C2, англійська B1-B2')</span></h4>
                    <h4>@lang("Спеціальності"): <span>Fullstack Developer, Backend Developer, Frontend Developer, Web Engineer</span></h4>
                </div>

                <div class="counting">

                    <div class="box">
                        <h1 class="count" data-count="9">9+</h1>
                        <h3>@lang('років досвіду')</h3>
                    </div>

                    <div class="box">
                        <h1 class="count" data-count="50">50+</h1>
                        <h3>@lang('завершено проектів')</h3>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="skill-container">

        <div class="heading">
            <h2>@lang("мої <span>вміння</span>")</h2>
        </div>

        <div class="skills">
            <div class="skill-item item1">
                <div class="box">
                    <h3>HTML5<span> 99% </span> </h3>
                    <div class="progress-bar"> <span></span> </div>
                </div>
                <div class="box">
                    <h3>CSS3<span> 99% </span> </h3>
                    <div class="progress-bar"> <span></span> </div>
                </div>
                <div class="box">
                    <h3>javascript<span> 95% </span> </h3>
                    <div class="progress-bar"> <span></span> </div>
                </div>
                <div class="box">
                    <h3>reactjs<span> 95% </span> </h3>
                    <div class="progress-bar"> <span></span> </div>
                </div>
            </div>

            <div class="skill-item item2">
                <div class="box">
                    <h3>JQuery<span> 99% </span> </h3>
                    <div class="progress-bar"> <span></span> </div>
                </div>
                <div class="box">
                    <h3>Bootstrap<span> 99% </span> </h3>
                    <div class="progress-bar"> <span></span> </div>
                </div>
                <div class="box">
                    <h3>PHP<span> 99% </span> </h3>
                    <div class="progress-bar"> <span></span> </div>
                </div>
                <div class="box">
                    <h3>mysql<span> 95% </span> </h3>
                    <div class="progress-bar"> <span></span> </div>
                </div>
            </div>

        </div>

    </div>

</section>
<!-------------------- About Area (End) -------------------->



<!-------------------- Qualification Area (Start) -------------------->
<section class="qualification">

    <div class="heading">
        <h2>@lang('мій <span>досвід</span>')</h2>
    </div>

    <div class="box-container">

        <div class="experience">

            <div class="experience-item">
                <i class="fas fa-graduation-cap"></i>
                <div class="content">
                    <span>@lang("Жовтень 2015 - Липень 2018")</span>
                    <h3>Freelance Web Developer</h3>
                    <p>
                        @lang('Займався пошуком замовників, домовлявся по замовленнях
                        Проводив опитування і формування технічних завдань і проектування
                        Проводив fullstack розробку сайтів та їх тестування
                        Створював окремі плагіни для популярних CMS(Wordpress)
                        Створював компоненти для InstantCMS2
                        Створював теми для сайтів для популярних CMS(Wordpress, InstantCMS2)
                        В рамках замовлень верстав теми і програмував js для них з шаблонів Photoshop/Figma Верстав html листи для розсилок email')
                    </p>
                </div>
            </div>

            <div class="experience-item">
                <i class="fas fa-graduation-cap"></i>
                <div class="content">
                    <span>@lang("Липень 2018 - Грудень 2019")</span>
                    <h3>Middle FullStack Web Developer</h3>
                    <p>@lang("Виконання задач на фреймворці CodeIgniter3 для сервісу CRM
Виконання задач на фреймворці phalcon3
Проектні правки бд сервісу на MySQL(коригування ключів, зміна структури задля отимізації навантаження і швидкості роботи сервісу)
Верстка сторінок нового функціоналу для сервісу разом з додаванням додаткових структур в бд для підтримки
Робота з css3/js/jquery/bootstrap3/mysql5/php5 в рамках роботи над розвитком проекту")</p>
                </div>
            </div>

            <div class="experience-item">
                <i class="fas fa-graduation-cap"></i>
                <div class="content">
                    <span>@lang("Січень 2020 - Травень 2021")</span>
                    <h3>Freelance Web Developer</h3>
                    <p>@lang("Займався пошуком замовників, домовлявся по замовленнях
Проводив опитування і формування технічних завдань і проектування
Проводив fullstack розробку сайтів та їх тестування
Створював окремі плагіни для популярних CMS(Wordpress)
Створював теми для сайтів для популярних CMS(Wordpress)
В рамках замовлень верстав теми і програмував js для них з шаблонів Photoshop
Розробка на Phalcon 3 системи нової CRM
Робота над шаблоном CRM і ще над шаблонами деяких сайтів з використанням ReactJS, ajax, graphql")</p>
                </div>
            </div>

        </div>

        <div class="experience">

            <div class="experience-item">
                <i class="fas fa-briefcase"></i>
                <div class="content">
                    <span>@lang("Травень 2021 - Грудень 2021")</span>
                    <h3>Middle-Senior FullStack Web Developer</h3>
                    <p>@lang("Виконання задач на фреймворці CodeIgniter3/CodeIgniter4 для сервісу CRM
Проектні правки бд сервісу на MySQL(коригування ключів, зміна структури задля отимізації навантаження і швидкості роботи сервісу)
Верстка сторінок нового функціоналу для сервісу разом з додаванням додаткових структур в бд для підтримки
Робота з css3/js/jquery/bootstrap3/mysql5/php5 в рамках роботи над розвитком проекту Ведення двох Junior розробників")</p>
                </div>
            </div>

            <div class="experience-item">
                <i class="fas fa-briefcase"></i>
                <div class="content">
                    <span>@lang("Січень 2022 - До цього часу")</span>
                    <h3>Freelance Web Developer</h3>
                    <p>@lang("Займався пошуком замовників, домовлявся по замовленнях
Проводив опитування і формування технічних завдань і проектування
Проводив fullstack розробку сайтів та їх тестування
Створював окремі плагіни для популярних CMS(Wordpress)
Створював теми для сайтів для популярних CMS(Wordpress)
В рамках замовлень верстав теми і програмував js для них з шаблонів Photoshop
Розробка на Phalcon 4 системи CRM
Робота над шаблоном CRM і ще над шаблонами деяких сайтів з використанням ReactJS, graphql")</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-------------------- Qualification Area (End) -------------------->



<!-------------------- Services Area (Start) -------------------->
{{--<section class="service" id="service">

    <div class="heading">
        <h2>my <span>services</span></h2>
    </div>

    <div class="box-container">

        <div class="service-item">
            <i class="fas fa-code"></i>
            <h3>web design</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Ex repellendus porro facilis.</p>
        </div>

        <div class="service-item">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Ex repellendus porro facilis.</p>
        </div>

        <div class="service-item">
            <i class="fas fa-camera"></i>
            <h3>photography</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Ex repellendus porro facilis.</p>
        </div>

        <div class="service-item">
            <i class="fas fa-bullhorn"></i>
            <h3>digital marketing</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Ex repellendus porro facilis.</p>
        </div>

        <div class="service-item">
            <i class="far fa-file-video"></i>
            <h3>video editing</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Ex repellendus porro facilis.</p>
        </div>

        <div class="service-item">
            <i class="fas fa-search-dollar"></i>
            <h3>SEO Marketing</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Ex repellendus porro facilis.</p>
        </div>

    </div>

</section>--}}
<!-------------------- Services Area (End) -------------------->



<!-------------------- Portfolio Area (Start) -------------------->
<section class="portfolio" id="portfolio">

    <div class="heading">
        <h2>@lang("моє <span>портфоліо</span>")</h2>
    </div>

    <div class="gallery">

        <ul class="controls">
            <li class="button btn active" data-filter="all">all</li>
            <li class="button btn" data-filter="phalcon4">phalcon4</li>
            <li class="button btn" data-filter="wordpress">wordpress</li>
            <li class="button btn" data-filter="codeigniter3">codeigniter3</li>
            <li class="button btn" data-filter="jquery">jquery</li>
            <li class="button btn" data-filter="bootstrap">bootstrap</li>
            <li class="button btn" data-filter="reacjs">reacjs</li>
            <li class="button btn" data-filter="graphql">graphql</li>
        </ul>

        <div class="box-container">

            <div class="portfolio-item image codeigniter3 jquery bootstrap">
                <img src="{{ asset('images/Portfolio/Evolike.png') }}" alt="Evolike" />
                <div class="content">
                    <h4>@lang("Сайт на codeigniter")</h4>
                    <p>@lang("Проект написаний на фреймворкі CodeIgniter 3. Технології: html, css, js, php, mysql, bootstrap, sass/scss, less.")</p>
                    <a data-effect="mfp-newspaper" href="{{ asset('images/Portfolio/Evolike.png') }}" class="view-btn"><i class="fas fa-search-plus"></i></a>
                </div>
            </div>

            <div class="portfolio-item image wordpress jquery bootstrap">
                <img src="{{ asset('images/Portfolio/doors.jpg') }}" alt="Wordpress Site" />
                <div class="content">
                    <h4>@lang("Сайт дверей|wordpress")</h4>
                    <p>@lang("Сайт написаний на базі wordpress та Woocommerce. А саме був написаний шаблон сайту і налаштовані плагіни, та деякі правки для створення данного вигляду.")</p>
                    <a data-effect="mfp-newspaper" href="{{ asset('images/Portfolio/doors.jpg') }}" class="view-btn"><i class="fas fa-search-plus"></i></a>
                </div>
            </div>

            <div class="portfolio-item image wordpress reacjs graphql">
                <img src="{{ asset('images/Portfolio/soclife.png') }}" alt="SocLife Web Site" />
                <div class="content">
                    <h4>@lang("Сайт на базі wordpress та reactjs")</h4>
                    <p>@lang("Написаний на базі wordpress зі створенням плагіну обслуговування і reactjs теми з використанням GraphQL")</p>
                    <a data-effect="mfp-newspaper" href="{{ asset('images/Portfolio/soclife.png') }}" class="view-btn"><i class="fas fa-search-plus"></i></a>
                </div>
            </div>

            <div class="portfolio-item image phalcon4 reacjs graphql">
                <img src="{{ asset('images/Portfolio/crm.png') }}" alt="CRM" />
                <div class="content">
                    <h4>CRM</h4>
                    <p>@lang("Написана на базі phalcon3, потім оновлена до phalcon4. Клієнтська частина на ReactJS. Запити на вебсервер через GraphQL")</p>
                    <a data-effect="mfp-newspaper" href="{{ asset('images/Portfolio/crm.png') }}" class="view-btn"><i class="fas fa-search-plus"></i></a>
                </div>
            </div>

        </div>

    </div>

</section>
<!-------------------- Portfolio Area (End) -------------------->



<!-------------------- Testimonials Area (Start) -------------------->
{{--<section class="testimonial" id="testimonial">

    <div class="heading">
        <h2><span>testimonials</span></h2>
    </div>

    <div class="swiper-container testimonial-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide testi-item">
                <img src="{{ asset('images/Testimonials/pic-1.png') }}" alt="Testimonial-Pic" />

                <i class="fas fa-quote-left"></i>

                <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum deleniti architecto harum natus aliquid nostrum
                    ad asperiores sequi, eligendi sint assumenda eum illo similique
                    repellendus.
                </p>

                <div class="intro">
                    <h3>jason roy</h3>
                    <h5>web developer</h5>
                </div>
            </div>

            <div class="swiper-slide testi-item">
                <img src="{{ asset('images/Testimonials/pic-2.png') }}" alt="Testimonial-Pic" />

                <i class="fas fa-quote-left"></i>

                <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum deleniti architecto harum natus aliquid nostrum
                    ad asperiores sequi, eligendi sint assumenda eum illo similique
                    repellendus.
                </p>

                <div class="intro">
                    <h3>evelyn jones</h3>
                    <h5>freelancer</h5>
                </div>
            </div>

            <div class="swiper-slide testi-item">
                <img src="{{ asset('images/Testimonials/pic-3.png') }}" alt="Testimonial-Pic" />

                <i class="fas fa-quote-left"></i>

                <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum deleniti architecto harum natus aliquid nostrum
                    ad asperiores sequi, eligendi sint assumenda eum illo similique
                    repellendus.
                </p>

                <div class="intro">
                    <h3>luke wood</h3>
                    <h5>graphic designer</h5>
                </div>
            </div>

            <div class="swiper-slide testi-item">
                <img src="{{ asset('images/Testimonials/pic-4.png') }}" alt="Testimonial-Pic" />

                <i class="fas fa-quote-left"></i>

                <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum deleniti architecto harum natus aliquid nostrum
                    ad asperiores sequi, eligendi sint assumenda eum illo similique
                    repellendus.
                </p>

                <div class="intro">
                    <h3>sarah glenn</h3>
                    <h5>freelancer</h5>
                </div>
            </div>

            <div class="swiper-slide testi-item">
                <img src="{{ asset('images/Testimonials/pic-5.png') }}" alt="Testimonial-Pic" />

                <i class="fas fa-quote-left"></i>

                <p class="comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum deleniti architecto harum natus aliquid nostrum
                    ad asperiores sequi, eligendi sint assumenda eum illo similique
                    repellendus.
                </p>

                <div class="intro">
                    <h3>samit patel</h3>
                    <h5>graphic designer</h5>
                </div>
            </div>

        </div>

        <div class="swiper-pagination swiper-pagination1"></div>

    </div>
</section>--}}
<!-------------------- Testimonials Area (End) -------------------->



<!-------------------- Blog Area (Start) -------------------->
{{--<section class="blog" id="blog">

    <div class="heading">
        <h2>my <span>blog</span></h2>
    </div>

    <div class="swiper-container blog-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide blog-item">
                <div class="image">
                    <img src="{{ asset('images/Blogs/blog-1.png') }}" alt="Blog-Image" />
                </div>
                <div class="content">
                    <div class="intro">
                        <h5><i class="fas fa-calendar-alt"></i><span>1st jan, 2022</span></h5>
                        <h5><i class="fas fa-user"></i><span>by admin</span></h5>
                    </div>
                    <a class="main-heading" href="#">How to make your website responsive</a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Nam possimus modi.
                    </p>
                    <a href="#" class="btn">read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="swiper-slide blog-item">
                <div class="image">
                    <img src="{{ asset('images/Blogs/blog-2.png') }}" alt="Blog-Image" />
                </div>
                <div class="content">
                    <div class="intro">
                        <h5><i class="fas fa-calendar-alt"></i><span>1st jan, 2022</span></h5>
                        <h5><i class="fas fa-user"></i><span>by admin</span></h5>
                    </div>
                    <a class="main-heading" href="#">Learn Web Development As A Beginner</a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Nam possimus modi.
                    </p>
                    <a href="#" class="btn">read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="swiper-slide blog-item">
                <div class="image">
                    <img src="{{ asset('images/Blogs/blog-3.png') }}" alt="Blog-Image" />
                </div>
                <div class="content">
                    <div class="intro">
                        <h5><i class="fas fa-calendar-alt"></i><span>1st jan, 2022</span></h5>
                        <h5><i class="fas fa-user"></i><span>by admin</span></h5>
                    </div>
                    <a class="main-heading" href="#">Complete Roadmap For Web Development</a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Nam possimus modi.
                    </p>
                    <a href="#" class="btn">read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="swiper-slide blog-item">
                <div class="image">
                    <img src="{{ asset('images/Blogs/blog-4.png') }}" alt="Blog-Image" />
                </div>
                <div class="content">
                    <div class="intro">
                        <h5><i class="fas fa-calendar-alt"></i><span>1st jan, 2022</span></h5>
                        <h5><i class="fas fa-user"></i><span>by admin</span></h5>
                    </div>
                    <a class="main-heading" href="#">Websites & Tools For Every Web Developer</a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Nam possimus modi.
                    </p>
                    <a href="#" class="btn">read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="swiper-slide blog-item">
                <div class="image">
                    <img src="{{ asset('images/Blogs/blog-5.png') }}" alt="Blog-Image" />
                </div>
                <div class="content">
                    <div class="intro">
                        <h5><i class="fas fa-calendar-alt"></i><span>1st jan, 2022</span></h5>
                        <h5><i class="fas fa-user"></i><span>by admin</span></h5>
                    </div>
                    <a class="main-heading" href="#">Top 10 CSS tricks for every web developer</a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Nam possimus modi.
                    </p>
                    <a href="#" class="btn">read more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination swiper-pagination2"></div>

    </div>

</section>--}}
<!-------------------- Blog Area (End) -------------------->



<!-------------------- Contact Area (Start) -------------------->
<section class="contact" id="contact">

    <div class="heading">
        <h2>@lang("Напишіть мені")</h2>
    </div>

    <div class="box-container">

        <div class="contact-info">

            <div class="info-item">
                <h4>@lang("Телефон"):</h4>
                <div class="detail">
                    <div class="fas fa-phone"></div>
                    <p>+38 (066) 509 51 43</p>
                </div>
            </div>

            <div class="info-item">
                <h4>email:</h4>
                <div class="detail">
                    <div class="fas fa-envelope"></div>
                    <p class="gmail">mixajlov.mikhail92@gmail.com</p>
                </div>
                <div class="detail">
                    <div class="fas fa-envelope"></div>
                    <p class="gmail">mixajlov.mikhail@mmwebstudio.pp.ua</p>
                </div>
            </div>

            <div class="info-item">
                <h4>linkedin:</h4>
                <div class="detail">
                    <div class="fab fa-linkedin"></div>
                    <p class="linkedin">https://www.linkedin.com/in/mykhajlov-mykhailo/</p>
                </div>
            </div>

            <div class="info-item">
                <h4>Telegram:</h4>
                <div class="detail">
                    <div class="fab fa-github"></div>
                    <p class="github">http://telegram.me/Devyl_M</p>
                </div>
            </div>
        </div>

        {{--<form method="post" class="contact-form" id="contactUs-Form">

            <input type="text" name="name" class="box" id="name" placeholder="name" required />
            <input type="email" name="email" class="box" id="email" placeholder="email" required />
            <input type="text" name="subject" class="box" id="subject" placeholder="subject" required />
            <textarea cols="30" rows="10" name="comment" id="comment" class="box" placeholder="message"></textarea>
            <button type="submit" class="btn" name="submit" id="submit">send message</button>

            <span class="alert" id="msg"></span>

        </form>--}}

    </div>

</section>
<!-------------------- Contact Area (End) -------------------->



<!-------------------- Footer Area (Start) -------------------->
<footer>
    <div class="social">
        <a href="https://www.linkedin.com/in/mykhajlov-mykhailo/" target="_blank" class="fab fa-linkedin-in"></a>
    </div>

    <div class="content">
        <p>@lang("Створено") <span>AS_Designs</span> @lang("перенесено на Laravel 11:") <span>@lang("Михайлов Михайло")</span></p>
    </div>
</footer>
<!-------------------- Footer Area (End) -------------------->



<!-- JQuery -->
<script src="{{ asset('vendors/jquery/jquery-3.6.0.js') }}"></script>

<!-- SWIPER JS -->
<script src="{{ asset('vendors/swiper/swiper.js') }}"></script>

<!-- Magnific-Popup JS -->
<script src="{{ asset('vendors/magnific-popup/jquery.magnific-popup.js') }}"></script>

<!-- Typed JS -->
<script src="{{ asset('vendors/typed/typed.js') }}"></script>

<!-- Custom Script File -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/scroll-spy.js') }}"></script>
<script src="{{ asset('js/counter-up.js') }}"></script>
<script src="{{ asset('js/portfolio.js') }}"></script>
<script src="{{ asset('js/testi-slider.js') }}"></script>
<script src="{{ asset('js/blog-slider.js') }}"></script>

<!---------------- Custom Script ---------------->

<!-- Typed Script -->
<script>
    var typed = new Typed('.typing-text', {

        strings: ["@lang('Веб розробник')", "@lang('Проектувальник MySQL')", "Web Engineer", "Fullstack Developer", "Backend Developer", "Frontend Developer"],
        typeSpeed: 120,
        loop: true
    });
</script>

<!-- Contact-Form Script -->
<script>
    jQuery('#contactUs-Form').on('submit',function(e){
        jQuery('#msg').html('');
        jQuery('#submit').html('Please wait');
        jQuery('#submit').attr('disabled',true);
        jQuery.ajax({
            url:'{{ asset('php/submit.php') }}',
            type:'post',
            data:jQuery('#contactUs-Form').serialize(),
            success:function(result){
                jQuery('#msg').html(result);
                jQuery('#submit').html('Submit');
                jQuery('#submit').attr('disabled',false);
                jQuery('#contactUs-Form')[0].reset();
            }
        });
        e.preventDefault();
    });
</script>

</body>
</html>
