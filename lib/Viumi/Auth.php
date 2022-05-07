<?php

namespace Viumi;

use Viumi\Error as Errors;

/**
 * Class Auth
 *
 * @package Viumi
 */
class Auth extends Resource {

	protected $Token = null;
	protected $DataToken;

	const URL_AUTH = "https://auth.geopagos.com/oauth/token";

	/**
	 *
	 * @return create Token.
	 */
	public function CreateToken() {
		return $this->request("POST", self::URL_AUTH, '', $this->viumi->GetAccess() );
	}

	/**
	 *
	 * @return get Token.
	 */
	public function GetToken() {
		
		if( ! is_null($this->Token) )
			return $this->Token;

		$this->DataToken = $this->CreateToken();

		if( ! isset( $this->DataToken->access_token ) )
			throw new Errors\InvalidToken();
		
		$this->Token = $this->DataToken->access_token;

		return $this->Token;
	}
}
