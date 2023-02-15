
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900">

    <div class="text-center">
      <div class="py-12">
          <img src="{{asset('img/logo/logo.png')}}" class="h-36">
      </div>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4   overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
