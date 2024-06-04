@extends('layout.dashboard-nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                     {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
             </div>
         @endif
         
            <div class="card">
                <div class="card-header">Weekly Fee Page</div>

                <div class="card-body">
                    <form action="{{ route('admin.weekly_fee.index') }}" method="GET">
                        <div class="form-group">
                            <label for="search">Search by Month:</label>
                            <input type="month" id="search" name="search" class="form-control " value="{{ request('search') }}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Search</button>
                    </form>
                    <br>

                    @if (auth()->user()->is_admin && auth()->user()->is_admin == 2)
                    <button type="button" class="btn  btn-secondary mt-4 hover-btn-new log orange" id="openModalButton">New fee</button>
                    @endif
                    
                    <hr>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Created at:</th>
                                <th>Paid For:</th>
                                <th>Issued By</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accomodates as $accomodate)
                                <tr>
                                    <td>{{($accomodate->user)->name }}</td>
                                    <td>{{ $accomodate->amount }}/=</td>
                                    <td>{{ $accomodate->created_at }}</td>
                                    
                                    <td>{{ \Carbon\Carbon::parse($accomodate->payment_date)->format('d/m/Y') }} ({{ \Carbon\Carbon::parse($accomodate->payment_date)->format('l') }})</td>
                                    <td>{{ $accomodate->issued_by }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" style="text-align: right;"><strong>Total Monthly Revenue:</strong> ${{ $totalRevenue }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    {{$accomodates->links()}}
</div>

@include('admin.weekly_fee_making')

<script>

  // Get the modal and the button that opens it
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalButton");
var closeBtn = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on the close button, close the modal
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}

</script>

@endsection
