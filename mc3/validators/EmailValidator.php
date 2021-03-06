<?

require_once('mc3/validators/Validator.php');

class mc_EmailValidator extends mc_Validator
{
	public function validate($value)
	{
		if (!is_string($value))
		{
			throw new mc_InvalidException('Invalid email address');
		}
		
		$pattern = '/^[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9\.\-]+(\.[a-zA-Z0-9\.\-]+)$/';
		
		if(!preg_match($pattern, $value))
		{
			throw new mc_InvalidException('Invalid email address');
		}
	}
}

?>