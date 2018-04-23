<link rel="stylesheet" type="text/css" href=<?= get_template_directory_uri() . '/assets/css/footer.css' ?> >
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-8 footer-block">
        <div class="footer_item">
          <div class="footer_item__caption">оставайтесь на связи</div>
          <div class="footer_item__description">
            <div><span>Офис:</span> г. Витебск, ул. Пушкина, д. 6</div>
            <div><span>Склад:</span> г. Витебск, ул. П.Бровки, д.22</div>
            <div><span>Телефон:</span> +375 (212) <span>35-97-34</span></div>
            <div><span>GSM:</span> +375 (29) <span>662-48-46</span></div>
          </div>
        </div>
        <div class="footer_item">
          <div class="footer_item__caption">дополнительно</div>
          <div class="footer_item__description">
            <div>- Предложение дилерам</div>
            <div>- Акции</div>
          </div>
        </div>
        <div class="footer_item">
          <div class="footer_item__caption">каталог продукции</div>
          <div class="footer_item__description">
            <div><span>Швейное производство</span></div>
          </div>
        </div>
      </div>
      <div class="col-md-3 footer-block_right">
        <div class="footer_item">
          <div class="footer_item__caption">быстрая связь</div>
          <div class="footer_item__buttons">
            <button type="button" class="btn btn_custom" data-toggle="modal" data-target="#call-request-modal">заказать звонок</button>
            <button type="button" class="btn btn_custom btn_custom--second" data-toggle="modal" data-target="#message-request-modal">напишите нам</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="scrollup">
  <i class="fas fa-sort-up"></i>
  <div class="scrollup__text">наверх</div>
</div>


<div class="modal fade" id="call-request-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="display: flex; flex-direction: column; align-items: center;">
        <h1 class="modal-title">Закажите звонок!</h1>
        <p class="modal-description">и мы Вам скоро перезвоним</p>
      </div>
      <div class="modal-body loginmodal-container">
        <form style="display: flex;flex-direction: column;align-items: center;">
          <input type="text" name="name" placeholder="Укажите ваше имя">
          <input type="text" name="phone" placeholder="Телефон для связи">
          <button type="submit" name="login" class="btn btn_custom loginmodal-submit">заказать звонок</button>
        </form>
      </div>
      <div class="modal-footer"  style="display: flex;">
      <img style="width: 100%; object-fit: scale-down; " src="<? echo get_template_directory_uri() . '/assets/images/logo-about.png'; ?>" alt="translate-icon">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="message-request-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document" style="top: calc(50% - 315px)">
    <div class="modal-content">
      <div class="modal-header" style="display: flex; flex-direction: column; align-items: center;">
        <h1 class="modal-title">Напишите нам!</h1>
        <p class="modal-description">и мы ответим на все Ваши вопросы</p>
      </div>
      <div class="modal-body loginmodal-container">
        <form style="display: flex;flex-direction: column;align-items: center;">
          <input type="text" name="name" placeholder="Укажите ваше имя">
          <input type="text" name="phone" placeholder="Ваш e-mail">
          <textarea rows="9" placeholder="Сообщение"></textarea>
          <button type="submit" name="login" class="btn btn_custom loginmodal-submit">отправить</button>
        </form>
      </div>
      <div class="modal-footer"  style="display: flex;">
      <img style="width: 100%; object-fit: scale-down; " src="<? echo get_template_directory_uri() . '/assets/images/logo-about.png'; ?>" alt="translate-icon">
      </div>
    </div>
  </div>
</div>

<?php wp_footer()?>

  <script>
    $(function() {
      $(".rateYo").each(function() {
        $(this).rateYo({
          starWidth: "17px",
          ratedFill: "#00a2d4",
          rating: +this.attributes.rating.value
        });
      })
    });
  </script>
<script>
  $(function() {
    // при нажатии на кнопку scrollup
    $('.scrollup').click(function() {
      // переместиться в верхнюю часть страницы
      $("html, body").animate({
        scrollTop: 0
      }, 1000);
    })
  })
  $(window).scroll(function() {
    if (screen.width > 200) {
      if ($(this).scrollTop() > 200) {
        $('.scrollup').fadeIn();
      } else {
        $('.scrollup').fadeOut();
      }
    }
  });
</script>

</body>
</html>
