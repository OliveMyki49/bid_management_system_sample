<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('mdb/css/mdb.min.css')}}">
    <!-- Plugin file -->
    <link rel="stylesheet" href="{{asset('mdb/css/addons/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('mdb/css/style.css')}}">
  </head>
  <body>
    
    {{-- Table Here --}}
    <div class="m-3">
      <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">Id</th>
            <th class="th-sm">Company</th>
            <th class="th-sm">Address</th>
            <th class="th-sm">BID</th>
            <th class="th-sm">Action</th>
          </tr>
        </thead>
        <tbody>
          @unless($bidCount == 0)
              @foreach($bid as $datum)
                  <tr>
                      
                      <th scope="row">{{$datum->id}}</th>
                      <td>{{$datum->company}}</td>
                      <td>{{$datum->address}}</td>
                      <td>{{ number_format($datum->bid, 2, '.', ',') }}</td>
                      <td class="text-success"><i class="bi bi-pencil"></i> Edit</td>
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
        <tfoot>
          <tr>
            <th class="th-sm">Id</th>
            <th class="th-sm">Company</th>
            <th class="th-sm">Address</th>
            <th class="th-sm">BID</th>
            <th class="th-sm"></th>
          </tr>
        </tfoot>
      </table>
    </div>

    {{-- files needed --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('mdb/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
    <!-- Plugin file -->
    <script src="{{asset('mdb/js/addons/datatables.min.js')}}"></script>

    {{-- pagination js --}}
    <script type="text/javascript">
      $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
      });
    </script>
  </body>
</html>