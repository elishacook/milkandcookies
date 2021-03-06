<?

require_once('mc3/validators/Validator.php');

class mc_StringValidator extends mc_Validator
{
	/**
	 * Optionally set minimum and maximum length
	 * @param integer $minlength
	 * @param integer $maxlength
	 */
	public function __construct($minlength=null,$maxlength=null)
	{
		$this->minlength = $minlength;
		$this->maxlength = $maxlength;
	}
	
	public function validate($value)
	{
		if ($value)
		{
			if (!is_string($value) && ($value != ''))
			{
				throw new mc_InvalidException('Invalid text value');
			}
			if ($this->minlength != null)
			{
				if (strlen($value) < $this->minlength)
				{
					throw new mc_InvalidException('The text is too short (min. '.$this->minlength.' characters)');
				}
			}
			if ($this->maxlength != null)
			{
				if (strlen($value) > $this->maxlength)
				{
					throw new mc_InvalidException('The text is too long (max. '.$this->maxlength.' characters)');
				}
			}
		}
	}
}

?>