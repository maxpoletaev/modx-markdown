<?php

$result = array();

$settings = array();

foreach ($settings as $name => $data) {
  $setting = $modx->newObject('modSystemSetting');

  $setting->fromArray(array_merge(
    array(
      'key' => 'markdown_{$k}',
      'namespace' => PKG_NAME_LOWER
    ), $data
  ), '', true, true);

  $result[] = $setting;
}

unset($settings);
return $result;
