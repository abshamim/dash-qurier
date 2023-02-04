<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class ShipmentCreate extends Component
{
    public $search;
    public $request = [];
    public function render()
    {
        $customers = Customer::all();
        return view('livewire.shipment-create', [
            'customers' => $customers
        ]);
    }

    public function search() {



    }


}
