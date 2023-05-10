<x-layout>
    <div class="container">
        <div class="row">
            @foreach ( $products as $product )
            <div class="col">
                <a href="{{ route('products.show', $product->id)}}"> {{$product->name}} </a>
               
             </div>
            
            @endforeach
        </div>
       
     </div>
    
         
   
</x-layout>