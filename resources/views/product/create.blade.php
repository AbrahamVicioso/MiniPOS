<x-app-layout> 
    <form method="POST" action="{{ route('product.create') }}">
        @csrf

        <div class="grid lg:grid-cols-4 sm:grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col p-3">
                <label for="">Name of product</label>
                <input type="text" placeholder="Name of product"
                name="name"
                class="rounded
                my-5
                mt-2 
                border 
                border-slate-300
                ">
            </div>

            <div class="flex flex-col p-3">
                <label for="">Unit Price</label>
                <input type="text" placeholder="Unit Price"
                type="number"
                name="unitprice"
                class="rounded
                my-5
                mt-2 
                border 
                border-slate-300
                ">
            </div>

            <div class="flex flex-col p-3">
                <label for="">Code Reference</label>
                <input type="text" placeholder="Code Reference"
                name="refcode"
                type="number"
                class="rounded
                my-5
                mt-2 
                border 
                border-slate-300
                ">
            </div>
        </div>

        <div class="mt-6">
            <button 
            class="py-2 px-16 bg-blue-600 rounded-full text-white block mx-auto"
            type="submit">Submit</button>
        </div>
        
    </form>
</x-app-layout>