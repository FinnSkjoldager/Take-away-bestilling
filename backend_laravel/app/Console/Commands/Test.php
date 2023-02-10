<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Customer;
use App\Models\Order;

class Test extends Command
{
    //  php artisan test 
    protected $signature = 'test';
    protected $description = 'Command description';
    public function handle()
    {
        $this->info('The command was successful!');
        //$this->testCustomer();
        $this->testOrder();
        return Command::SUCCESS;
    }
    function testOrder(){
        $c = Order::find(1);
       // $this->info(count($cList)); 
       $c->customer;
       $c->OrderItems;
       $this->info($c); 
    }
    function testCustomer(){
        $cList = Customer::all();
        $this->info(count($cList)); 
        $this->info(json_encode($cList)); 
    }
}
