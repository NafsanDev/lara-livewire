<div class="max-w-lg max-auto px-6 bg-gray-900 rounded-lg shadow-lg">
    <form wire:submit="update" class="flex flex-col">
        <label for="title">Title</label>
        <input wire:model="title" type="text" placeholder="Add title" class="w-full px-4 py-4 rounded-lg bg-gray-400">
        @error('title')
            <div class="text-sm text-red-500">{{$message}}</div>
        @enderror

        <textarea wire:model="intro" class="w-full px-4 py-4 rounded-lg bg-gray-400">Add Book Review</textarea>
         @error('intro')
            <div class="text-sm text-red-500">{{$message}}</div>
        @enderror

        <label for="rating">Rating</label>
        <input wire:model="rating" type="text" placeholder="Add rating" class="w-full px-4 py-4 rounded-lg bg-gray-400">
         @error('ratting')
            <div class="text-sm text-red-500">{{$message}}</div>
        @enderror

        <button class="bg-blue-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded shadow-md cursor-pointer m-4">
        Edit Book
        </button>
    </form>
    <a wire:navigate href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md cursor-pointer m-4 mt-5">
    Book List
    </a>
</div>
