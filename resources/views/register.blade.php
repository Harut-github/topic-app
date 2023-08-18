@extends('layouts')
@section('content')
<div id="overlay"> </div>
<header class="header header_login">
    <div class="container_header">
        <div class="with_logo-mobile"> <a class="logo" href="/"> <img src="img/Logo.svg" alt="logo" />
                <div class="logo_text"> <span>Список <br> контактов</span></div>
            </a></div>
        <nav>
            <ul class="menu">
                <li> <a href="#">О компании</a></li>
                <li> <a href="#">Частые вопросы</a></li>
                <li> <a href="#">Поддержка</a></li>
            </ul>
            <button class="mobile_btn"> <span class="mobile_nav-icon"> </span></button>
            <ul class="mobile_nav">
                <li> <a class="mobile_link" href="#">О компании</a></li>
                <li> <a class="mobile_link" href="#">Частые вопросы</a></li>
                <li> <a class="mobile_link" href="#">Поддержка</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="content">
    <section class="center_login">
        <form class="login_form" action="">
            <h1 class="login_title">Регистрация </h1>
            <input class="login_text" type="text" placeholder="Введите логин" />
            <input class="login_password" type="password" placeholder="Введите пароль" />
            <button class="btn_page2 login_btn" type="submit"> <span>Продолжить </span><img src="img/arrow_right.svg" alt="arrow" /></button>
        </form>
    </section>
</div>
@endsection