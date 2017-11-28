<?
namespace App;

use \App\CupBase;

class Cupc extends CupBase
{
	protected $data = [
		'out_water_hight' => 4,
		'out_cup_name' => 'Cupj'
	];

	public function __construct(){
		$this->data['name'] = get_class($this);
	}

	public function getData(){
		return $this->data;
	}
}