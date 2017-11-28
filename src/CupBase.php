<?
namespace App;
use \App\Cup;

class CupBase implements Cup
{
	protected $data = [
		'now_water_hight' => 0,
		'out_water_hight' => 10,
		'outCup' => NULL
	];

	public function addWater(){
		$this->log('進水');
		$this->data['now_water_hight']++;
		$this->isFull();

		if($this->data['now_water_hight']>$this->data['out_water_hight']){
			$this->outWater();
		}
	}

	public function outWater(){
		$this->data['now_water_hight']--;
		$cup = '\App\\'.$this->data['outCup'];
		$cup = new $cup();
		$cup->addWater();
	}

	public function isFull(){
		$this->log('目前水位'.$this->data['now_water_hight']);
		if(self::CupHigh==$this->data['now_water_hight']){
			die($this->data['name'].' is Full');
		}
		return true;
	}

	public function log($msg=''){
		echo '<br />'.$this->data['name'].$msg;
	}
}