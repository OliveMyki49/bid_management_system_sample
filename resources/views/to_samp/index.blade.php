<x-layout>
  <h2 class="text-center">Sample Form</h2>
  <form method="POST" action="/addTo/create">
    @csrf {{-- prevent cross platform problem --}}
    
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="number" id="form6Example3" class="form-control" name="tin" pattern="[0-9]*" onkeydown="return event.keyCode !== 69" onkeyup="return event.keyCode !== 69"/>
      <label class="form-label" for="form6Example3">TIN (tax identification number)</label>
    </div>

    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form6Example1" class="form-control" name="name" />
          <label class="form-label" for="form6Example1">Name</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="number" id="form6Example2" class="form-control" name="salary" pattern="[0-9]*" onkeydown="return event.keyCode !== 69" onkeyup="return event.keyCode !== 69"/>
          <label class="form-label" for="form6Example2">Salary</label>
        </div>
      </div>
    </div>

    
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form6Example1" class="form-control" name="position" />
          <label class="form-label" for="form6Example1">Position</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form6Example2" class="form-control" name="division"/>
          <label class="form-label" for="form6Example2">Division</label>
        </div>
      </div>
    </div>
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="date" id="form6Example3" class="form-control" name="departure_date"/>
      <label class="form-label" for="form6Example3">Departure Date</label>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="date" id="form6Example3" class="form-control" name="arrival_date"/>
      <label class="form-label" for="form6Example3">Arrival Date</label>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="text" id="form6Example3" class="form-control" name="official_station" />
      <label class="form-label" for="form6Example3">Official Station</label>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="text" id="form6Example3" class="form-control" name="destination" />
      <label class="form-label" for="form6Example3">Destination</label>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
      <textarea class="form-control" id="form6Example3" rows="4" name="purpose_of_travel" ></textarea>
      <label class="form-label" for="form6Example3">Purpose Of Travel</label>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="text" id="form6Example3" class="form-control" name="per_diems" />
      <label class="form-label" for="form6Example3">Per Diems / Expenses Allowed</label>
    </div>

    <!-- Text input -->
    <div class="form-outline mb-4">
      <select type="text" id="form6Example3" class="form-control form-select" aria-label="Default select example" name="to_type">
        <option value="inRegion" selected>Inside Region</option>
        <option value="outRegion">Outside Region</option>
      </select>
      <label class="form-label" for="form6Example3">TO Type</label>
    </div>
  
    <!-- Submit button -->
    <button class="btn btn-primary btn-block mb-4">Place order</button>
  </form>
</x-layout>
