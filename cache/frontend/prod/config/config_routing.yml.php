<?php
// auto-generated by sfRoutingConfigHandler
// date: 2009/05/08 10:16:04
return array(
'homepage' => new sfRoute('/', array (
  'module' => 'start',
  'action' => 'index',
), array (
), array (
)),
'default_index' => new sfRoute('/:module', array (
  'action' => 'index',
), array (
), array (
)),
'default' => new sfRoute('/:module/:action/*', array (
), array (
), array (
)),
);
