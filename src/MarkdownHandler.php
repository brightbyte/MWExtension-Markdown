<?php

namespace MediaWiki\Extension\Markdown;

use TextContentHandler;
use Title;

/**
 * Content handler for the markdown format
 *
 * @license GPL-2.0+
 * @author Daniel Kinzler
 */
class MarkdownHandler extends TextContentHandler {

	public function __construct() {
		parent::__construct( 'Markdown', [ 'text/markdown' ] );
	}

	protected function getContentClass() {
		return MarkdownContent::class;
	}

	public function supportsSections() {
		return false;
	}

	public function supportsCategories() {
		return false;
	}

	public function supportsRedirects() {
		return false;
	}

}
