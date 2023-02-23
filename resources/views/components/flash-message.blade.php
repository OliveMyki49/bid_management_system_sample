{{-- this will show up when the data have been inserted --}}
@if(session()->has('message')) 
    <div x-data="{show: true}" x-init="setTimeout(() => show=false, 3000)" x-show="show"  class="alert alert-primary" role="alert">
      {{session('message')}}
    </div>

    {{-- 
        alpine js added!!!
        x-data — value state is true
        x-time — timer 3 seconds before hiding message div
        x-show — state show
        --}}
@endif