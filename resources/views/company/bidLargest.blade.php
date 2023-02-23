<x-layout>
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
            </tr>
        </thead>
        <tbody id="myTable">
            @unless($bidCount == 0)
                @foreach($bid as $datum)
                    @unless($datum->bid == $highestbid)
                    @else
                        <tr>   
                            <th scope="row">{{$datum->id}}</th>
                            <td>{{$datum->company}}</td>
                            <td>{{$datum->address}}</td>
                            <td>{{ number_format($datum->bid, 2, '.', ',') }}</td>
                        </tr>
                    @endunless
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