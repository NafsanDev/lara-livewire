<div>
    <h1 class="bg-purple-900 text-white rounded-b-md p-2">{{$hello}}</h1>
    <p>{{ $count }}</p>
 
    <button wire:click="increment" class="bg-purple-900 text-white rounded-b-md p-2">+</button>
 
    <button wire:click="decrement" class="bg-purple-900 text-white rounded-b-md p-2">-</button>
</div>