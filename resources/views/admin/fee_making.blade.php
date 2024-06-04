<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-body">
            <h4>Fee</h4>
         


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Monthly Fee Taking Form</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                 
                    <form action="{{ route('admin.fee.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="user_id">Name:</label>
                                        <select id="user_id" name="user_id" class="form-control mt-2">
                                            <option>--- Choose the name from the list below ---</option>
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                        </div>
                        <div class="form-group mt-2">
                            <label for="amount">Amount:</label>
                            <input type="number" id="amount" name="amount" class="form-control" value="{{ old('amount') }}">
                        </div>
                        <div class="form-group mt-2">
                            <label for="month">Month:</label>
                            <input type="month" id="month" name="month" class="form-control" value="{{ old('month') }}">
                        </div>
                        <div class="form-group mt-2">
                            <label for="payment_date">Payment Date:</label>
                            <input type="date" id="payment_date" name="payment_date" class="form-control" value="{{ old('payment_date') }}">
                        </div>
                        <div class="form-group mt-2">
                            <label for="issued_by">Issued By:</label>
                            <input type="text" id="issued_by" name="issued_by" class="form-control" value="{{ old('issued_by') }}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                    
                </div>
            </div>
            <p><i>Designed and Developed by</i>: Waziri A. Mussa</p>
        </div>
    </div>
</div>
</div>
</div>
</div>


      