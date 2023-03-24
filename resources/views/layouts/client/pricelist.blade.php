<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  
</head>
@yield('content')
</html>

<div id="modal" class="modal">
  <div style="background: linear-gradient(126.75deg, #5D92E0 -14.69%, #6533D5 33.93%, #E3B7C4 84.34%);" class="modal-content">
    <span class="close">&times;</span>
    <h1>Запись на маникюр</h1>
    <p>*Для утверждения записи, после заполнения формы, вам перезвонит менеджер</p>
    <form action="#">
      <div>
        <select class="js-example-placeholder-single" name="states">
          <option></option>
          <option value="1">Наращивание "Сложное"</option>
          <option value="2">Наращивание "Легкое"</option>
        </select>
      </div>
      <div>
        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
          <option value=""></option>
          <option value="1">Доп услуга 1</option>
          <option value="1">Доп услуга 2</option>
        </select>
      </div>
    <div>
      <input type="text" placeholder="Имя"> 
      <input type="text" placeholder="Телефон"> 
    </div>
    <div>
      <input type="date">
      <input type="time"> 
    </div>
    <span>Итого: 0Р</span><input type="submit" value="Записаться">
  </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>

  
    // Получаем элементы кнопки открытия модального окна, модального окна и элемента закрытия модального окна
const openModalBtn = document.getElementById("open-modal-btn");
const modal = document.getElementById("modal");
const closeBtn = document.getElementsByClassName("close")[0];

// Добавляем обработчик события клика на кнопку открытия модального окна
openModalBtn.addEventListener("click", function() {
  modal.style.display = "block";
});

// Добавляем обработчик события клика на элемент закрытия модального окна
closeBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

// Добавляем обработчик события клика за пределами модального окна, чтобы закрыть его
window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});

const accordionHeaders = document.querySelectorAll('.accordion-header');

accordionHeaders.forEach(header => {
  header.addEventListener('click', () => {
    const accordionItem = header.parentElement;
    const accordionContent = header.nextElementSibling;
    const accordionButton = header.querySelector('.accordion-button');
    
    accordionItem.classList.toggle('active');
    accordionContent.classList.toggle('active');
    accordionButton.classList.toggle('active');
  });
});
$(document).ready(function() {
      $('.js-example-placeholder-single').select2({
        placeholder: "Выберите услугу",
      })
    });

$(document).ready(function() {
      $('.js-example-basic-multiple').select2({
        placeholder: "Нет доп. услуг"
      });
    });

</script>