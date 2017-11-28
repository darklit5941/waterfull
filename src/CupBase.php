<?
namespace App;
use \App\Cup;

class CupBase implements Cup
{
	protected $out_cup = false;
	protected $data = [
		'now_water_hight' => 0,
		'out_water_hight' => 10,
		'out_cup_name' => NULL,
	];

	public function addWater(){
		$this->data['now_water_hight']++;
		$this->log('進水');
		$this->isFull();
		if($this->data['now_water_hight']>$this->data['out_water_hight']){
			$this->outWater();
		}
	}

	public function outWater(){
		$this->data['now_water_hight']--;
		$this->log('出水');
		if(!$this->out_cup){
			$this->out_cup = '\App\\'.$this->data['out_cup_name'];
			$this->out_cup = new $this->out_cup();
		}
		$this->out_cup->addWater();
	}

	public function isFull(){
		if(self::CupHigh==$this->data['now_water_hight']){
			die('<br />'.$this->data['name'].' is Full');
		}
		return true;
	}

	public function log($msg=''){
		echo '<br />'.str_replace('App\\','',$this->data['name']) . $msg . '目前水位：' . $this->data['now_water_hight'];
	}
}