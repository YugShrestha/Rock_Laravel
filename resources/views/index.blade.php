 @include ('partials._hero')
 @include ('partials._search')

  <x-layout>
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
       
       @if($listings->count() > 0)
       @foreach($listings as $listing)
            <x-list-card :listing="$listing" />
        @endforeach
        @else {{"no record found"}}

        @endif
     
  </div>
       </x-layout>
       <div class="mt-6 p-6">
        {{$listings->links()}}
         </div>