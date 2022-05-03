<?php

namespace Viumi;

/**
 * Class Resource
 *
 * @package Viumi
 */
class Resource extends Client {

	/**
	 * Constructor.
	 */
	public function __construct( $viumi ) {
		$this->viumi = $viumi;
	}

}
