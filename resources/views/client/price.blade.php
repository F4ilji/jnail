@extends('layouts.client.pricelist')

@section('content')
<body>
  <div class="container">
    <header class="header">
      <div class="logo"><a href="index.html"><img src="{{ asset('/img/Лого.svg') }}" alt=""></a></div>
      <nav class="price_nav">
        <ul>
          <li><a href="{{ route('homepage') }}#about">о нас</a></li>
          <li><a href="#">работы</a></li>
          <li><a href="{{ route('pricelist') }}">цены</a></li>
          <li><a id="open-modal-btn">Записаться</a></li>
        </ul>
      </nav>
    </header>
    <div class="search">
        <div class="search_wrapper">
            <input placeholder="Поиск..." type="text">
            <select name="" id="">
                <option value="">Все услуги</option>
                <option value="">Покрытие</option>
                <option value="">Наращивание</option>
            </select>
        </div>
    </div>
    <div class="main_price">
        <div class="container">
            <span></span>
            <h1>Основной прайс</h1>
            <span></span>
        </div>

        
        <div class="services">    
            <div class="service">
                <h1>Покрытие</h1>
                <div class="accordion">
                  <div class="accordion-item">
                    <div class="accordion-header">
                      <h3>Заголовок раздела 1</h3>
                      <div style="display: flex; align-items: center;">
                        <h3>900Р</h3>
                        <button class="accordion-button"></button>
                      </div>
        
                    </div>
                    <div class="accordion-content">
                      <img src="{{ asset('/img/mjYTa3jdIGY 1.png') }}" alt="">
                      <div class="service_content">
                        <h3>Комплекс включает</h3>
                        <div class="tags">
                          <span>снятие</span>
                          <span>маникюр</span>
                          <span>наращивание</span>
                          <span>покрытие</span>
                        </div>
                        <h3>Дизайн на выбор</h3>
                        <ul>
                          <li>
                            На все ногти — втирка / слайдеры / наклейки
                          </li>
                          <li>
                            На 4 ногтя — рисунок от руки / инкрустация (т.е. дизайн камнями)
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header">
                      <h3>Заголовок раздела 2</h3>
                      <button class="accordion-button"></button>
                    </div>
                    <div class="accordion-content">
                      <p>Содержимое раздела 2</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="service">
                <h1>Наращивание</h1>
                <div class="accordion">
                  <div class="accordion-item">
                    <div class="accordion-header">
                      <h3>Заголовок раздела 1</h3>
                      <div style="display: flex; align-items: center;">
                        <h3>900Р</h3>
                        <button class="accordion-button"></button>
                      </div>
        
                    </div>
                    <div class="accordion-content">
                      <img src="{{ asset('/img/mjYTa3jdIGY 1.png')  }}" alt="">
                      <div class="service_content">
                        <h3>Комплекс включает</h3>
                        <div class="tags">
                          <span>снятие</span>
                          <span>маникюр</span>
                          <span>наращивание</span>
                          <span>покрытие</span>
                        </div>
                        <h3>Дизайн на выбор</h3>
                        <ul>
                          <li>
                            На все ногти — втирка / слайдеры / наклейки
                          </li>
                          <li>
                            На 4 ногтя — рисунок от руки / инкрустация (т.е. дизайн камнями)
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header">
                      <h3>Заголовок раздела 2</h3>
                      <button class="accordion-button"></button>
                    </div>
                    <div class="accordion-content">
                      <p>Содержимое раздела 2</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="container">
            <span></span>
            <h1>Дополнительные услуги</h1>
            <span></span>
        </div>
        <div class="more_services">
            <div class="service">
                <h1>Маникюр без покрытия (комбинированный)</h1>
                <h1>500Р</h1>        
            </div>
            <div class="service">
                <h1>Ремонт 1 ногтя (донаращивание / наращивание)</h1>
                <h1>50-150Р</h1>        
            </div>
            <div class="service">
                <h1>Снятие чужого покрытия</h1>
                <h1>150-350Р</h1>        
            </div>
            <div class="service">
                <h1>Снятие покрытия без последующего</h1>
                <h1>150-350Р</h1>        
            </div>
            <div class="service">
                <h1>Укрепление акригелем всех ногтей</h1>
                <h1>300Р</h1>        
            </div>
        </div>
    </div> 
  </div>
    <footer>
      <div class="container">
        <h1>Г. екатеринбург, бЦ ЛЕНИНА 24, 5 этаж, 522 офис</h1>
      </div>
{{--<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad062c866c947ed0630660420d5bdfeba0a55e1b90376ce865e7ef76d81e2c9f4&amp;source=constructor" width="100%" height="317" frameborder="0"></iframe>--}}
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