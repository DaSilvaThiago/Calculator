<div class="p-4">
    <div class="container m-auto w-56 bg-gray-800 border-white border-2 rounded-lg">
        <div class="text-white text-center p-3">
            <p>Thiago from Laravel | <span class="text-orange-300">Calculator</span></p>
        </div>
        <div class="bg-gray-600 flex flex-row-reverse h-20">
            <div class="flex flex-col p-3 mt-2">
                <span class="text-white">{{$math}}</span>
                <span class="text-orange-300 flex justify-end">{{$result}}</span>
            </div>
        </div>
        <div class="container bg-gray-800 p-4">
            <div class="flex justify-center">
                <div class="flex flex-col">
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click="operation('%')">%</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(7)'>7</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(4)'>4</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(1)'>1</button>
                    <button class="bg-orange-300 text-white p-3 m-1 rounded-lg hover:bg-orange-500" wire:click="clear('c')">C</button>
                </div>
                <div class="flex flex-col">
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click="operation('barf')">(</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(8)'>8</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(5)'>5</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(2)'>2</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(0)'>0</button>
                </div>
                <div class="flex flex-col">
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click="operation('barr')">)</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(9)'>9</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(6)'>6</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click='mathCalculate(3)'>3</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click="operation('.')">.</button>
                </div>
                <div class="flex flex-col">
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click="operation('/')">/</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click="operation('*')">x</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click="operation('-')">-</button>
                    <button class="bg-gray-700 text-white p-3 m-1 rounded-lg hover:bg-gray-500" wire:click="operation('+')">+</button>
                    <button class="bg-orange-300 text-white p-3 m-1 rounded-lg hover:bg-orange-500" wire:click="operation('=')">=</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
