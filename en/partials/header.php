<?php
$uri = $_SERVER["REQUEST_URI"];
?>

<header class="header">
  <div class="row">

    <div class="header-partners xlarge-8 large-8 medium-10 columns">

      <a href="http://www.gazprom-neft.ru/" class="partners-logo partner_type_general">
                    <span class="partner-title">
                      Генеральный партнер
                    </span>
        <img class="partner-img" src="/assets/img/gazprom_logo.png" />
      </a>

      <a href="http://www.1fd.ru/" class="partners-logo partner_type_organizer">
                    <span class="partner-title">
                      Организатор
                    </span>
        <img class="partner-img" src="/assets/img/findir_logo.png" />
      </a>

    </div>

    <div class="header-logo xlarge-8 large-8 medium-6 columns">
      <a class="link float-left" href="/">
        <img src="/assets/img/logo.svg" />
      </a>
      <button type="button" class="menu-icon float-right hide-for-medium menu-button" data-toggle="offCanvas"></button>
    </div>
  </div>

  <div class="row column">

    <nav id="navigation"
         class="nav float-right show-for-medium">
      <ul class="nav-list">
        <li class="item item_nav_index <?php if ($uri == '/en/'): ?>item_state_active<?php endif; ?>">
          <a href="/en/">О конференции</a>
        </li>
        <li class="item item_nav_program <?php if ($uri == '/en/program/'): ?>item_state_active<?php endif; ?>">
          <a href="/en/program/">Программа</a>
        </li>
        <!--<li class="item item_nav_speakers <?php if ($uri == '/en/speakers/'): ?>item_state_active<?php endif; ?>">
          <a href="/en/speakers/">Кто выступит</a>
        </li>
        <li class="item item_nav_partners <?php if ($uri == '/en/partners/'): ?>item_state_active<?php endif; ?>">
          <a href="/en/partners/">Партнеры</a>
        </li>-->
        <li class="item item_nav_place <?php if ($uri == '/en/place/'): ?>item_state_active<?php endif; ?>">
          <a href="/en/place/">Место проведения</a>
        </li>
        <li class="item item_nav_contacts <?php if ($uri == '/en/contacts/'): ?>item_state_active<?php endif; ?>">
          <a href="/en/contacts/">Контакты</a>
        </li>
      </ul>
    </nav>

  </div>


</header>