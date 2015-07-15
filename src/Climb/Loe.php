<?php

namespace Climb;
use Faz\Lime;

/**
 * Class Loe
 * @package Climb
 * @author Tobias Maxham
 */
class Loe extends Lime
{

	public static function close() {
		var_dump(func_get_args());
		var_dump(self::class);
	}
} 