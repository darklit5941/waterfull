<?
namespace App;

use \App\CupBase;

class Cupj extends CupBase
{
	protected $data = [
		'out_water_hight' => 3,
		'out_cup_name' => 'Cupl'
	];

	public function __construct(){
		$this->data['name'] = get_class($this);
	}

	public function getData(){
		return $this->data;
	}
}