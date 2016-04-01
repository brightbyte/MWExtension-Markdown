<?php

namespace MediaWiki\Extension\Markdown;

use ParserOptions;
use ParserOutput;
use TextContent;
use Title;
use Michelf\Markdown;

/**
 * Content wrapper for the markdown format
 *
 * @license GPL-2.0+
 * @author Daniel Kinzler
 */
class MarkdownContent extends TextContent {

	public function __construct( $text ) {
		parent::__construct( $text, 'Markdown' );
	}

	public function getParserOutput(
		Title $title,
		$revId = null,
		ParserOptions $options = null,
		$generateHtml = true
	) {
		$markdown = $this->getNativeData();

		$html = Markdown::defaultTransform( $markdown );
		$pout = new ParserOutput( $html );

		return $pout;
	}

}
