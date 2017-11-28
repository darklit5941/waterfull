<?
namespace App;

use \App\CupBase;

class Cupa extends CupBase
{
	protected $data = [
		'out_water_hight' => 2,
		'out_cup_name' => 'Cupb'
	];

	public function __construct(){
		$this->data['name'] = get_class($this);
	}

	public function getData(){
		return $this->data;
	}
}