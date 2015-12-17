<?php

namespace Mediawiki\Sitematrix\DataModel;

/**
 * @since 0.1
 *
 * @author Addshore
 */
class Site {

	/**
	 * @var string
	 */
	private $url;

	/**
	 * @var string
	 */
	private $dbname;

	/**
	 * @var string
	 */
	private $code;

	/**
	 * @var string
	 */
	private $sitename;

	/**
	 * @param string $url
	 * @param string $dbname
	 * @param string $code
	 * @param string $sitename
	 */
	public function __construct( $url, $dbname, $code, $sitename ) {
		$this->url = $url;
		$this->dbname = $dbname;
		$this->code = $code;
		$this->sitename = $sitename;
	}

	/**
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getDbName() {
		return $this->dbname;
	}

	/**
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getSiteName() {
		return $this->sitename;
	}


}
