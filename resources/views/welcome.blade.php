<x-layout>
    @if (session('message'))
       <div class="alert success">
        {{session('message')}}
        </div> 
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1">Benvenuti su Spotibook</h1>
            </div>
        </div>
    </div>
</x-layout>