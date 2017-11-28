<?
namespace App;

interface Cup
{
	//水多少要叫
	const CupHigh = 10;
	//進水
	public function addWater();
	//判斷杯子的水滿了沒
	public function isFull();
	//Log
	public function log($msg);
}