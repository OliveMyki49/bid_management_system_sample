<x-layout>

    <h6> Highest Bid Amount Php. <span class="text-primary">{{ number_format($highestbid, 2, '.', ',') }}</span></h6>
    <h6> Lowest Bid Amount Php. <span class="text-success-emphasis">{{ number_format($lowestbid, 2, '.', ',') }}</span></h6>
    <hr>
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><a href="/">All Item</a></li>
        <li class="list-group-item"><a href="/largestBid">Highest Bid</a></li>
    </ul>

    <table class="table border mt-3"  >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Company</th>
                <th scope="col">Address</th>
                <th scope="col">BID</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody id="myTable">
            @unless($bidCount == 0)
                @foreach($bid as $datum)
                    <tr>
                        
                        <th scope="row">{{$datum->id}}</th>
                        <td>{{$datum->company}}</td>
                        <td>{{$datum->address}}</td>
                        <td>{{ number_format($datum->bid, 2, '.', ',') }}</td>
                        <td>
                            <a href="/company/{{$datum->id}}/edit" class="btn btn-outline-success btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>

                            <a class="toggle-button btn btn-outline-danger btn-sm" href="#" data-target="paragraph-{{$datum->id}}"><i class="bi bi-trash"></i> remove</a>
                            <div class="collapse mt-2" style="width: 65%;" id="paragraph-{{$datum->id}}">
                                <div class="card card-body">
                                    Remove this item?
                                    <form action="/company/{{$datum->id}}/delete" method="POST">
                                        @csrf {{-- Prevents cross platform injection --}}
                                        @method('DELETE') {{-- method POST DELETE --}}
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>CONFIRM DELETE
                                        </button>
                                    </form>
                                </div>
                            </div> 
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th scope="row" colspan="4" class="text-center">
                        <p >No data Found</p>
                    </th>
                </tr>
            @endunless
        </tbody>
    </table>

        
        <div class="d-flex justify-content-center" id="pagination"></div>
       
        {{-- custom toggle button --}}
        <script type="text/javascript">
            // Get references to all toggle buttons on the page
            const toggleButtons = document.querySelectorAll('.toggle-button');
          
            // Loop through all toggle buttons and add a click event listener to each
            toggleButtons.forEach(function(button) {
              button.addEventListener('click', function(event) {
                event.preventDefault();
          
                // Get the ID of the target paragraph from the data-target attribute of the button
                const targetId = button.getAttribute('data-target');
          
                // Get a reference to the target paragraph using its ID
                const targetParagraph = document.getElementById(targetId);
          
                // Toggle the display style of the target paragraph
                if (targetParagraph.style.display === 'none') {
                  targetParagraph.style.display = 'block';
                //   button.textContent = 'Hide ' + targetId;
                } else {
                  targetParagraph.style.display = 'none';
                //   button.textContent = 'Show ' + targetId;
                }
              });
            });
          </script>

        <!-- include jQuery and Bootstrap JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/pagination.js') }}"></script> {{-- pagination here --}}
</x-layout>