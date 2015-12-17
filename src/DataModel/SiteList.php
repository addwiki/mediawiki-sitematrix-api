<?php

namespace Mediawiki\Sitematrix\DataModel;

/**
 * @since 0.1
 *
 * @author Addshore
 */
class SiteList {

	/**
	 * @var Site[]
	 */
	private $sites;

	/**
	 * @param Site[] $sites
	 */
	public function __construct( $sites ) {
		$this->sites = $sites;
	}

	/**
	 * @return Site[]
	 */
	public function getSiteArray() {
		return $this->sites;
	}

}
