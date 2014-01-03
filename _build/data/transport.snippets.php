<?php

$result = array();

$snippets = array(
	'markdown' => array(
		'file' => 'markdown',
		'description' => ''
	)
);

foreach ($snippets as $name => $data) {
	$snippet = $modx->newObject('modSnippet');

	$snippet->fromArray(array(
		'id'          => 0,
		'name'        => $name,
		'description' => @$data['description'],
		'snippet'     => getSnippetContent($sources['source_core']."/elements/snippets/snippet.{$data['file']}.php"),
		'static'      => BUILD_SNIPPET_STATIC,
		'source'      => 1,
		'static_file' => "core/components/".PKG_NAME_LOWER."/elements/snippets/snippet.{$data['file']}.php"
	), '', true, true);


	$properties = include $sources['build']."properties/properties.{$data['file']}.php";
	$snippet->setProperties($properties);

	$result[] = $snippet;
}

unset($snippets, $properties);
return $result;
