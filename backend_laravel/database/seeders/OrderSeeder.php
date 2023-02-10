<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderItem;

class OrderSeeder extends Seeder
{
    function createOrder($orderno, $customer_id, $items){
        $order_id = Order::insertGetId([
        'OrderNo' => $orderno,
        'CustomerID' => $customer_id,
        'PMethod' => 0,
        'GTotal' => 0,
        'DeletedOrderItemIDs' => 0, 
        'Paid' => 0
        ]);
        foreach ($items as $item){
            OrderItem::create([
                'OrderID' => $order_id,
                'ItemID' => $item,
                'Quantity' => ($item * 2),
                'Paid' => 0
            ]);
        }
    }
    public function run(){
        $this.doRun();
    }
 
    public function doRun()
    {  
	    $this->createOrder(11,1,[1,2,3]);
	    $this->createOrder(22,2,[9,8,7,6,4]);
	    $this->createOrder(33,3,[1,2,3,5,6,7]);
    }
}
/*
    function createPersonSko($person_id, $sko_id){
        PersonSko::create([
            'person_id' => $person_id,
            'sko_id' => $sko_id
        ]);
    }
    public function run()
    {  
	    $this->createPersonSko(1,1);
	    $this->createPersonSko(1,3);
	    $this->createPersonSko(2,2);
    }
    public function run()
    {

        $skonavne = [
            'Air forces',
            'Ballet shoe.',
            'Bast shoe.',
            'Blucher shoe.',
            'Boat shoe.',
            'Brogan (shoes)',
            'Brogue shoe.',
            'Brothel creeper.'
        ];  
        $skofarve = [
            'Rød',
            'Grøn',
            'Blå',
            'Sort',
            'Hvid',
            'Lilla',
            'Brun',
            'Grå'
        ];  
        for ($i=0; $i < count($skonavne); $i++) { 
	    	Sko::create([
                'beskrivelse' => $skonavne[$i],
                'storrelse' => fake()->numberBetween(34, 52),
                'farve' => $skofarve[$i],
                'pris' => fake()->numberBetween(500, 2000),
                'antal' => fake()->numberBetween(0, 30),
	        ]);
    	}
    }
*/