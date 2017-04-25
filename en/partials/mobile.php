<?php
$uri = $_SERVER["REQUEST_URI"];
?>

<ul class="vertical menu mobile-menu">
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