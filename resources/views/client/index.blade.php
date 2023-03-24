@extends('layouts.client.homepage')

@section('content')
<body>
  <div class="wrapper__header__hero">
  <div class="container">
    <header class="header">
      <div class="logo"><a href="{{ route('homepage') }}"><img src="{{ asset('/img/Лого.svg') }}" alt=""></a></div>
      <div class="adress">Г. ЕКАТЕРИНБУРГ, БЦ ЛЕНИНА 24</div>
      <div class="number">+7 (950) 208 00 47</div>
    </header>
    <div class="hero">
      <div class="wrapper">
      <h1>крейзи маникюр для всех</h1>
      <nav>
        <span class="line__nav"></span>
        <ul>
          <li><a href="{{ route('homepage') }}#about">о нас</a></li>
          <li><a href="#">работы</a></li>
          <li><a href="{{ route('pricelist') }}">цены</a></li>
          <li><a id="open-modal-btn">Записаться</a></li>
        </ul>
        <span class="line__nav"></span>
      </nav>
    </div>
    </div> 
  </div> 
  </div>
    <div class="about" id="about">
      <div class="container">
      <h1>JI.NAIL — это..?</h1>
      <p>JI.NAIL — это современный маникюрный кабинет, в котором ты можешь воплотить дизайн любой сложности. </p>
      <p>Наш маникюрный кабинет специализируется на неординарном маникюре. Мы показываем наглядно как сочитать несочитаемое.</p>
      <p>Миссия JI.NAIL — выходить за рамки классического маникюра во имя свободы самовыражения каждого. Всё начинается с ногтей!</p>
      </div>

      <div class="more__about">
        <div class="container">
        <img src="{{ asset('/img/img_moreaboutus.png') }}" alt="">
        <div>
          <h1>И еще немного о нас...</h1>
          <p>“Ji.Nail создавался для тех, кто устал от однотона и дизайна на 2 пальчика. Здесь я воплощаю любые ваши идеи и всегда готова подсказать как будет лучше!”</p>
          <p class="creater">Софья Сивкова, <br> создательница JI.NAIL и маникюр-мастерица</p>
        </div>
      </div>
      </div>
    </div>
    <div class="discount">
      <div class="container">
      <form action="">
      <h2>МУЖСКОЙ МАНИКЮР</h2>
      <h1>со скидкой 10%</h1>
      <button>Записаться</button>
      </form>
    </div>
    </div>  
    <div class="sample">
      <div class="container">
      <img src="{{ asset('/img/Rectangle 10.png')}}" alt="">
      <img src="{{ asset('/img/Rectangle 11.png') }}" alt="">
      <img src="{{ asset('/img/Rectangle 12.png') }}" alt="">
    </div>
    </div>
    <footer>
      <div class="container">
        <h1>Г. екатеринбург, бЦ ЛЕНИНА 24, 5 этаж, 522 офис</h1>
      </div>
      {{-- <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad062c866c947ed0630660420d5bdfeba0a55e1b90376ce865e7ef76d81e2c9f4&amp;source=constructor" width="100%" height="317" frameborder="0"></iframe> --}}
      <div class="container">
      <div class="links">
        <h1>2022(c) JI.nail</h1>
        <div>
          <img src="{{ asset('/img/Vector.png') }}" alt="">
          <img src="{{ asset('/img/Vector-2.png') }}" alt="">
        </div>
      </div>
    </div>
    </footer>
  </div>
</body>
@endsection