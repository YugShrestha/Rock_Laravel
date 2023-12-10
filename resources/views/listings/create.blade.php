  <x-layout>
      <main>
          <div class="mx-4">
              <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                  <header class="text-center">
                      <h2 class="text-2xl font-bold uppercase mb-1">
                          Create
                      </h2>
                      <p class="mb-4">Post a songs</p>
                  </header>

                  <form method="POST" action="/listings" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-6">
                          <label for="company" class="inline-block text-lg mb-2">Band Name</label>
                          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="artist" value="{{old('artist')}}" />
                          @error('artist')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror


                      </div>

                      <div class="mb-6">
                          <label for="title" class="inline-block text-lg mb-2">Title</label>
                          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{old('title')}}" />
                          @error('title')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                      </div>

                      <div class="mb-6">
                          <label for="location" class="inline-block text-lg mb-2"> Location</label>
                          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Your Country & city" value="{{old('location')}}" />
                          @error('location')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                      </div>

                      <div class="mb-6">
                          <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('artist')}}" />
                          @error('email')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror

                      </div>

                      <div class="mb-6">
                          <label for="list" class="inline-block text-lg mb-2">
                              Lists
                          </label>
                          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="list" placeholder="Example:speak,breathe " value="{{old('artist')}}" />
                          @error('list')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror


                      </div>



                      <div class="mb-6">
                          <label for="logo" class="inline-block text-lg mb-2">
                              Band Logo
                          </label>
                          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" value="{{old('logo')}}" />
                          @error('logo')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror

                      </div>

                      <div class="mb-6">
                          <label for="description" class="inline-block text-lg mb-2">
                              Description
                          </label>
                          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>
                          @error('description')
                          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                      </div>

                      <div class="mb-6">
                          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                              Create
                          </button>

                          <a href="/" class="text-black ml-4"> Back </a>
                      </div>
                  </form>
              </div>
          </div>
      </main>
  </x-layout>