@if(session()->has('success'))
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="bg-blue-500 py-2 px-4 fixed bottom-3 right-3 text-white rounded-xl text-sm left-1/3 right-1/3">
        <p class="text-center">{{session('success')}}</p>
    </div>

@endif
