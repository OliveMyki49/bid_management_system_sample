<x-layout>
    <form method="POST" action="/addBid/perform">
        @csrf {{-- prevent cross platform problem --}}
        <!-- Gutter g-1 -->
        <div class="row g-1">
            <div class="col">
            <!-- Company Name input -->
            <div class="form-outline">
                <input type="text" id="form9Example1" class="form-control" name="company" />
                @error('company') {{-- show error message here if company input have error --}}
                    <span class="badge text-white bg-danger text-wrap">
                        {{$message}}
                    </span>
                @enderror

                <label class="form-label" for="form9Example1">Company</label>
            </div>
            </div>
            <div class="col">
            <!-- Address input -->
            <div class="form-outline">
                <input type="text" id="form9Example2" class="form-control" name="address" />
                @error('address') {{-- show error message here if company input have error --}}
                    <span class="badge text-white bg-danger text-wrap">
                        {{$message}}
                    </span>
                @enderror

                <label class="form-label" for="form9Example2">Address</label>
            </div>
            </div>
        </div>
        
        <hr />
        
        <!-- Gutter g-5 -->
        <div class="row g-5">
            <div class="col">
                <!-- Name input -->
                <div class="form-outline">
                    <input type="number" id="form9Example3" class="form-control" name="bid" pattern="[0-9]*" onkeydown="return event.keyCode !== 69" onkeyup="return event.keyCode !== 69" />
                    @error('bid') {{-- show error message here if company input have error --}}
                        <span class="badge text-white bg-danger text-wrap">
                            {{$message}}
                        </span>
                    @enderror
                    <label class="form-label" for="form9Example3">Bidding Amount</label>
                </div>
            </div>
        </div>

        <hr />
        
        <!-- Gutter g-5 -->
        <div class="row g-5">
            <div class="col">
                <!-- submit button -->
                <div class="form-outline">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary" style="width: 90%">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-layout>