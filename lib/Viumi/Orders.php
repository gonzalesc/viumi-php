<?php

namespace Viumi;

/**
 * Class Orders
 *
 * @package Viumi
 */
class Orders extends Resource {

	const URL_ORDERS = "https://api.viumi.com.ar/api/v2/orders";

	/**
	 * @param string|null $id
	 *
	 * @return post an order.
	 */
	public function create( $data = NULL ) {
		return $this->request( "POST", self::URL_ORDERS, $this->viumi->Auth->GetToken(), $data );
	}
}
