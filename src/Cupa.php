<?
namespace App;

use \App\CupBase;

class Cupa extends CupBase
{
	protected $data = [
		'now_water_hight' => 0,
		'out_water_hight' => 2,
		'outCup' => 'Cupb'
	];

	public function __construct(){
		$this->data['name'] = get_class($this);
	}

	public function getData(){
		return $this->data;
	}
}