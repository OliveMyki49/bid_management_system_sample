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

                            <a class="btn btn-outline-danger btn-sm" data-bs-toggle="collapse" href="#collapseExample{{$datum->id}}" role="button" aria-expanded="false" aria-controls="collapseExample{{$datum->id}}">
                                <i class="bi bi-trash"></i> remove
                            </a>

                            <div class="collapse mt-2" id="collapseExample{{$datum->id}}">
                                <div class="card card-body">
                                    Remove this item?
                                    <form action="/company/{{$datum->id}}/delete" method="POST">
                                        @csrf {{-- Prevents cross platform injection --}}
                                        @method('DELETE') {{-- method POST DELETE --}}
                                        <button class="btn btn-danger">
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
       
        <!-- include jQuery and Bootstrap JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/pagination.js') }}"></script> {{-- pagination here --}}
</x-layout>