<?php

namespace MediaWiki\Extension\Markdown;
use Title;

/**
 * Hook handlers for markdown support
 *
 * @license GPL-2.0+
 * @author Daniel Kinzler
 */
class MarkdownHooks {

	public static function onContentHandlerDefaultModelFor( Title $title, &$model ) {
		if ( preg_match( '/\.md$/', $title->getText() ) && !$title->isTalkPage() ) {
			$model = 'Markdown';
			return false;
		}

		return true;
	}

}
