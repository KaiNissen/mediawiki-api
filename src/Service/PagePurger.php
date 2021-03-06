<?php

namespace Mediawiki\Api\Service;

use Mediawiki\Api\MediawikiApi;
use Mediawiki\Api\SimpleRequest;
use Mediawiki\DataModel\Page;

/**
 * @author Adam Shorland
 * @author Thomas Arrow
 */
class PagePurger {

	/**
	 * @var MediawikiApi
	 */
	private $api;

	/**
	 * @param MediawikiApi $api
	 */
	public function __construct( MediawikiApi $api ) {
		$this->api = $api;
	}

	/**
	 * @since 0.3
	 *
	 * @param Page $page
	 *
	 * @return bool
	 */
	public function purge( Page $page ) {
		$this->api->postRequest( new SimpleRequest( 'purge', array( 'pageids' => $page->getId() ) ) );
		return true;
	}

} 