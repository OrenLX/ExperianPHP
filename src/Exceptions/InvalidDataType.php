<?php
namespace Experian\Exceptions;

class InvalidDataType extends \Exception{
	public function __construct (
		string $fieldName,
		string $expectedType
	) {
		$message=sprintf('%s must be %s',$fieldName,$expectedType);
		parent::__construct($message,412,NULL);
	}
}