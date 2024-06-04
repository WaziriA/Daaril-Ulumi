<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-body">
            <h4>Attendance</h4>
            <form method="POST" action="{{ route('admin.attendance.store') }}">
                @csrf
                <label>Date:</label>
                <input type="date" name="date" required><br><br>
                
                <table>
                    <thead>
                        <tr style="background-color: #333; color: white;">
                            <th>S/No</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $counter++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <input type="radio" name="status[{{ $user->id }}]" value="present" required> Present
                                    <input type="radio" name="status[{{ $user->id }}]" value="absent"> Absent
                                    <input type="radio" name="status[{{ $user->id }}]" value="permitted"> Permitted
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <button type="submit" class="btn btn-primary mt-4">Submit Attendance</button>
            </form>
        </div>
    </div>
</div>
