<?
namespace App;

use \App\CupBase;

class Cupb extends CupBase
{
	protected $data = [
		'out_water_hight' => 0,
		'out_cup_name' => 'Cupc'
	];

	public function __construct(){
		$this->data['name'] = get_class($this);
	}

	public function getData(){
		return $this->data;
	}
}