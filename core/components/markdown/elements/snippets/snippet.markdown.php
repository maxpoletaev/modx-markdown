<?php
$modx->getService('markdown', 'markdown.modMarkdown', $modx->getOption('markdown.core_path', null, $modx->getOption('core_path') . 'components/markdown/') . 'model/', $scriptProperties);
return $modx->markdown->process($input);
