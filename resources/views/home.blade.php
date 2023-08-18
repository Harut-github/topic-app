@extends('layouts')
@section('content')
<div id="overlay"> </div>
<header class="header">
    <div class="container_header">
        <div class="without_logo-mobile">
            <h1 class="main_title-mobile">Темы </h1>
            <div class="img_like"> <img src="img/main_icons/Avatar.png" alt="аватарка" /></div>
        </div>
        <div class="width_logo-tablet"> <a class="logo" href="/"> <img src="img/Logo.svg" alt="логотип" />
                <div class="logo_text"> <span>Список <br> контактов</span></div>
            </a>
            <nav>
                <ul class="menu">
                    <li> <a href="">О компании</a></li>
                    <li> <a href="#">Частые вопросы</a></li>
                    <li> <a href="#">Поддержка</a></li>
                </ul>
            </nav>
            <div class="img_like"> <img src="{{ URL::to('/') }}/img/main_icons/Avatar.png" alt="аватарка" /></div>
        </div>
    </div>
</header>
<div class="content">
    <form class="seach_form" action="">
        <input class="seach_content" type="text" placeholder="{{ $topics->count() }} темы" />
        <button class="seach_icon" type="submit"><img src="img/main_icons/search_theme.svg" alt="поиск" /></button>
    </form>
    <div class="all_letters"> <a class="letter_small" href="#A">A </a><a class="letter_small" href="#B">Б </a><a class="letter_small" href="#BB">В</a><a class="letter_small" href="#G">Г</a><a class="letter_small" href="#D">Д</a><a class="letter_small" href="#E">Е</a><a class="letter_small" href="#ZH">Ж</a><a class="letter_small" href="#I">И</a><a class="letter_small" href="#K">К</a><a class="letter_small" href="#L">Л</a><a class="letter_small" href="#M">М</a><a class="letter_small" href="#N">Н</a><a class="letter_small" href="#O">О</a><a class="letter_small" href="#P">П</a><a class="letter_small" href="#R">Р</a><a class="letter_small" href="#S">С</a><a class="letter_small" href="#T">Т</a><a class="letter_small" href="#U">У</a><a class="letter_small" href="#F">Ф</a><a class="letter_small" href="#X">Х</a><a class="letter_small" href="#CH1">Ц</a><a class="letter_small" href="#CH">Ч</a><a class="letter_small" href="#SH">Ш</a><a class="letter_small" href="#EE">Э</a><a class="letter_small" href="#YU">Ю</a><a class="letter_small" href="#YA">Я</a></div>
    <section class="main_content">
        <div class="content_left">
            <!-- <div class="letter_title" id="A">A </div> -->
            <div class="letter_item">
                @foreach($topics as $topic)
                <a class="item" href="/topic/{{ $topic->id }}">
                    <img src="img/main_icons/voice.svg" alt="voice" />
                    <span class="item_title">{{ $topic->title }}</span>
                </a>
                @endforeach
            </div>


        </div>
        <div class="content_right"> <a class="letter_small" href="#A">A </a><a class="letter_small" href="#B">Б </a><a class="letter_small" href="#BB">В</a><a class="letter_small" href="#G">Г</a><a class="letter_small" href="#D">Д</a><a class="letter_small" href="#E">Е</a><a class="letter_small" href="#ZH">Ж</a><a class="letter_small" href="#I">И</a><a class="letter_small" href="#K">К</a><a class="letter_small" href="#L">Л</a><a class="letter_small" href="#M">М</a><a class="letter_small" href="#N">Н</a><a class="letter_small" href="#O">О</a><a class="letter_small" href="#P">П</a><a class="letter_small" href="#R">Р</a><a class="letter_small" href="#S">С</a><a class="letter_small" href="#T">Т</a><a class="letter_small" href="#U">У</a><a class="letter_small" href="#F">Ф</a><a class="letter_small" href="#X">Х</a><a class="letter_small" href="#CH1">Ц</a><a class="letter_small" href="#CH">Ч</a><a class="letter_small" href="#SH">Ш</a><a class="letter_small" href="#EE">Э</a><a class="letter_small" href="#YU">Ю</a><a class="letter_small" href="#YA">Я</a></div>
    </section>
</div>
@endsection