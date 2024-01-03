<footer class="footer">
        <div class="container">
          <div class="footer-column">
            <div class="footer-logo">ЗАБОР75</div>
            <div class="footer-info">
              ИП Дашинимаев Пурбажаб Михайлович <br />
              ИНН 800301228579 <br />
              ОГРН 323750000014806
            </div>
            <div class="footer-disclaimer">
              Сайт носит информационный характер и не является публичной
              офертой.
            </div>
          </div>
          <div class="footer-column">
            <a href="tel:+73022715080" class="phone">+7 (3022) 71-50-80</a>
            <a href="tel:+79245115080" class="phone">+7-924-511-50-80</a>
          </div>
        </div>
      </footer>
      <div class="popup__bg">
        <div class="popup">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/close.svg" class="close-popup" />
          <form class="popup-form" method="post">
            <div class="form-info">
              <div class="popup-form__title">Вызвать мастера для замера</div>
              <div class="popup-form__subtitle">Заполните форму и мы свяжемся с Вами!</div>
            </div>
            <?php
              echo do_shortcode('[contact-form-7 id="d0b3654" title="Заявка на звонок"]')
            ?>
          </form>
        </div>
      </div>
      <div class="popup__bg_message">
        <div class="popup popup-message">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/close.svg" class="close-popup close-message" />
          <form class="popup-form" method="post">
            <div class="form-info">
              <div class="popup-form__title">Остались вопросы?</div>
              <div class="popup-form__subtitle">Заполните форму и мы свяжемся с Вами!</div>
            </div>
            <?php
              echo do_shortcode('[contact-form-7 id="938a406" title="Сообщение"]')
            ?>
            <!-- <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="Ваш телефон">
            <label for="text">Текст сообщения</label>
            <textarea name="text" id="text"></textarea>
            <input type="submit" value="Оставить заявку"> -->
          </form>
          
        </div>
      </div>
    </div>
  </body>
  <?php
    wp_footer();
  ?>
</html>
