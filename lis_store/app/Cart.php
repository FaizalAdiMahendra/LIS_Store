<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice =0;

    #constructor
    public function __construct($oldCart)
    {
    	if ($oldCart) {
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function add($item, $id){
    	#gunanya untuk storage item yang dipilih
    	$storedItem = ['qty' =>0, 'price' => $item->price, 'item'=> $item];
    	#check jika item sudah ada di item
    	if ($this->items) {

    	#jika sudah ada item hanya bertambah jumlahnya
    		if (is_array($item) && array_key_exists($id, $item->items)) {
    			$storedItem = $this->item[$id];
    		}
    	}
    	#jika tidak ada langsung saja masukan
    	$storedItem['qty']++;
    	$storedItem['price'] = $item->price * $storedItem['qty'];
    	$this->items[$id] = $storedItem;
    	$this->totalQty++;
    	$this->totalPrice += $item->price;
    }

}
