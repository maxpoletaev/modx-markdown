<?php

class modMarkdown {

	/**
	 * @var modX $modx
	 */
	public $modx;

	/**
	 * @var Markdown $parser
	 */
	public $parser;

	/**
	 * @param modX $modx
	 * @return void
	 */
	public function __construct(modX &$modx, $attributes = array()) {
		$this->modx = &$modx;
		$this->parser = $this->getParser();
	}

	/**
	 * @param string $input
	 * @return string
	 */
	public function process($input) {
		$output = $this->parser->transform($input);
		return $output;
	}

	/**
	 * @return Markdown
	 */
	protected function getParser() {
		require_once dirname(__FILE__) . '/../../vendor/php-markdown/MarkdownInterface.php';
		require_once dirname(__FILE__) . '/../../vendor/php-markdown/Markdown.php';
		require_once dirname(__FILE__) . '/../../vendor/php-markdown/MarkdownExtra.php';

		return new \Michelf\MarkdownExtra();
	}

}
