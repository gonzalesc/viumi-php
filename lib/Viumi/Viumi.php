<?php
namespace Viumi;

use Viumi\Error as Errors;

/**
 * Class Viumi
 *
 * @package Viumi
 */
class Viumi {
	protected $access;

	/**
	 * Constructor.
	 *
	 * @param array|null $options
	 *
	 * @throws Error\InvalidOptions
	 *
	 */
	public function __construct( $access ) {
		
		$this->access = $access;
		
		if( empty( $this->access['client_id'] ) ||
			empty( $this->access['client_secret'] )
		) {
		  throw new Errors\InvalidOptions();
		}

		$this->access['grant_type'] 	= 'client_credentials';
		$this->access['scope'] 			= '*';

		$this->Auth 	= new Auth( $this );
		$this->Orders	= new Orders( $this );
	}

	public function GetAccess() {
		return $this->access;
	}
}

