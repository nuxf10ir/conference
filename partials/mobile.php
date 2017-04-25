<?php
$uri = $_SERVER["REQUEST_URI"];
?>

<ul class="vertical menu mobile-menu">
  <li class="item item_nav_index <?php if ($uri == '/'): ?>item_state_active<?php endif; ?>">
    <a href="/">О конференции</a>
  </li>
  <li class="item item_nav_program <?php if ($uri == '/program/'): ?>item_state_active<?php endif; ?>">
    <a href="/program/">Программа</a>
  </li>
  <!--<li class="item item_nav_speakers <?php if ($uri == '/speakers/'): ?>item_state_active<?php endif; ?>">
    <a href="/speakers/">Кто выступит</a>
  </li>
  <li class="item item_nav_partners <?php if ($uri == '/partners/'): ?>item_state_active<?php endif; ?>">
    <a href="/partners/">Партнеры</a>
  </li>-->
  <li class="item item_nav_place <?php if ($uri == '/place/'): ?>item_state_active<?php endif; ?>">
    <a href="/place/">Место проведения</a>
  </li>
  <li class="item item_nav_contacts <?php if ($uri == '/contacts/'): ?>item_state_active<?php endif; ?>">
    <a href="/contacts/">Контакты</a>
  </li>
</ul>