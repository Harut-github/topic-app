@extends('layouts')
@section('content')
<div id="overlay"> </div>
<header class="header">
    <div class="container_header">
        <div class="without_logo-mobile mobile2">
            <h1 class="main_title-mobile page2"> <a class="main_link" href="/"> <img src="img/main_icons/arrow_back.svg" alt="на главную" /></a><span>Дизайн интерьров etc </span></h1>
            <div class="img_like"> <img src="img/main_icons/Avatar.png" alt="аватарка" /></div>
        </div>
        <nav>
            <ul class="menu">
                <li> <a href="#">О компании</a></li>
                <li> <a href="#">Частые вопросы</a></li>
                <li> <a href="#">Поддержка</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="content"><img class="img_page2" src="img/main_picture.jpg" alt="picture" />
    <section class="content_page2">
        <h1 class="main_page2">{{ $topic->title }}</h1>

        <p>{{ $topic->content }}</p>

        <a href="#ex1" class="btn_page2 mb-16" rel="modal:open">Отправить запрос</a>
        <div id="ex1" class="modal">
            <div class="all_right"> <img class="check" src="img/main_icons/Cheack.svg" alt="иконка" />
                <h2 class="modal_title">Запрос успешно отправлен!</h2>
                <p>Желаете вернуться к справочнику?</p>
                <a class="btn_page2 mb-16" href="{{$topic->id}}">Да</a>
                <a class="btn_page2 bg_white" href="/">Нет</a>
            </div>
            <!-- </div><a class="btn_page2 bg_white" href="#">В избранное</a> -->
    </section>
</div>
@endsection