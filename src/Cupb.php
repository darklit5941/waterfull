<?
namespace App;

use \App\CupBase;

class Cupb extends CupBase
{
	protected $data = [
		'now_water_hight' => 9,
		'outCup' => 'Cupc'
	];

	public function __construct(){
		$this->data['name'] = get_class($this);
	}

	public function getData(){
		return $this->data;
	}
}