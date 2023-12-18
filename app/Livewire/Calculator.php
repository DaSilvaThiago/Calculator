<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $result = 0;

    public $math = '';

    public function render()
    {
        return view('livewire.calculator');
    }

    public function mathCalculate($number){
        $this->math .= $this->handleOperation($number);
    }

    public function operation($operation){
        if ($operation == '=') {
            $tmp = $this->handleOperation($operation);
            $this->result = eval('return '. $this->math .';');
        }
        else{
            $this->math .= $this->handleOperation($operation);
        }
    }

    public function clear(){
        $this->math = '';
        $this->result = 0;
    }   

    public function handleOperation($operation): string{
        return match ($operation) {
            'barf' => '(',
            'barr' => ')',
            default => $operation
        };
    }
}
