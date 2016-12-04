<?php

piklist('field', array(
  'type' => 'text'
  ,'field' => 'essb_widget_title'
  ,'label' => 'Title'
  ,'value' => 'Scoreboard'
  ,'attributes' => array(
    'class' => 'essb-widget-title'
  )
));

piklist('field', array(
  'type' => 'number'
  ,'field' => 'essb_widget_limit'
  ,'label' => 'Match-Limit'
  ,'value' => 12
  ,'attributes' => array(
    'class' => 'essb-widget-limit'
  )
));