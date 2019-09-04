<?php
/**
 * myCrawler SpecialPage for MyCrawler extension
 *
 * @file
 * @ingroup Extensions
 */
class SpecialMyCrawler extends SpecialPage {
	public function __construct() {
		parent::__construct( 'myCrawler' );
	}

	/**
	 * Show the page to the user
	 *
	 * @param string $sub The subpage string argument (if any).
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();
		$out->setPageTitle( $this->msg( 'special-myCrawler-title' ) );
		$out->addHelpLink( 'How to become a MediaWiki hacker' );
		$out->addWikiMsg( 'special-myCrawler-intro' );

		$out->addModules( 'ext.myCrawler.script' );
		$out->addModules( 'mw.myCrawler.init' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
