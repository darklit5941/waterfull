<?
namespace App;

use \App\CupBase;

class Cupf extends CupBase
{
	protected $data = [
		'out_water_hight' => 10
	];

	public function __construct(){
		$this->data['name'] = get_class($this);
	}

	public function getData(){
		return $this->data;
	}
}