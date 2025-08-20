<div>
    <a wire:navigate href="/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md cursor-pointer m-4">
    Add Book
    </a>
    <input wire:model.live.debounce.300ms="term" type="text" placeholder="Search books" class="border"/>
    <ul class="flex justify-between flex-row">
    @foreach ($books as $book)
        <li wire:key="book-{{$book->id}}" class="flex gap-2 p-8 flex-col items-center py-4 bg-indigo-500 text-white">
            <h2>{{$book->title}}</h2>
            <p>{{$book->intro}}</p>
            <p>{{$book->rating}}</p>
            <div class="flex flex-row justify-between">
                <a wire:navigate href="#" class="border-black text-white p-2 cursor-pointer">View</a>
                <a wire:navigate href="{{route('book.edit', $book->id)}}"class="border-black text-white p-2 cursor-pointer">Edit</a>
                <button wire:click="delete({{$book->id}})" class="border-black text-white p-2 cursor-pointer">Delete</button>
            </div>
        </li>    
    @endforeach
    </ul>
</div>
