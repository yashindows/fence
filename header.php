<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/icons/fence.svg" type="image/x-icon">
    <title>Забор Петрович</title>

    <?php
        wp_head();
    ?>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <div class="container">
          <div class="header-logo">
            <a href="/" class="logo__link">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="Логотип" />
            </a>
            <p class="logo__description">
              Профессиональная установка всех видов ограждений по Чите и краю
            </p>
          </div>
          <nav class="header-menu">
            <ul class="menu-list">
              <li class="menu__item">
                <a href="#color-pick" class="menu__link">подбор цвета</a>
              </li>
              <li class="menu__item">
                <a href="#steps" class="menu__link">этапы работы</a>
              </li>
              <li class="menu__item">
                <a href="#contacts" class="menu__link">контакты</a>
              </li>
            </ul>
          </nav>
          <div class="header-actions">
            <button class="btn header-btn open-popup">Заказать звонок</button>
            <div class="header-info">
              <a class="header-phone" href="tel:+7302715080"
                >+7 (302) 71-50-80</a
              >
              <div class="info-work-wrap">
                <div class="info-work">Сейчас работаем</div>
              </div>
            </div>
          </div>
        </div>
      </header>