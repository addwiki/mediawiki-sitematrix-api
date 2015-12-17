<?php

namespace Mediawiki\Sitematrix\Api;

use Mediawiki\Api\MediawikiApi;
use Mediawiki\Sitematrix\DataModel\SiteList;

/**
 * @access private
 *
 * @author Addshore
 */
class SiteListGetter {

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
	 * @since 0.1
	 *
	 * @return SiteList
	 */
	public function getSiteList() {
		//TODO implement me
		//use action=sitematrix to construct a colleciton of sites
		//and add them to a SiteList object that is then returned
	}

}
