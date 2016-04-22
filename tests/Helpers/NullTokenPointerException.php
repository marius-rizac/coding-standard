<?php declare(strict_types = 1);

namespace SlevomatCodingStandard\Helpers;

class NullTokenPointerException extends \Exception
{

	/**
	 * @param \Exception|null $previous
	 */
	public function __construct(\Exception $previous = null)
	{
		parent::__construct('', 0, $previous);
	}

}
