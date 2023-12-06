@props(['listing'])

<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{asset('img/pinkfloyd.jpg')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->name}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->album}}</div>
          
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$listing->location}}

            </div>
        </div>
    </div>
</div>