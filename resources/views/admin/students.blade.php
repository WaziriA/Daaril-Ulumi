@extends('layout.dashboard-nav')

@section('content')
    

@if(session()->has('success'))
   <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
       {{ session('success') }}
    <button type="button" class="btn-close btn-primary" data-bs-dismiss="alert" aria-label="Close">&times;</button>
   </div>
@endif

@if(session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
    {{ session('error') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
  </div>
@endif

<div class="doctor-visiting">
    <div class="heading">
      <h1>Students</h1>
        <a href="#" class="btn">View All</a>
    </div>

     <table class="visiting">
     <thead>
        <td>Photo</td>
        <td>Name</td>
        <td>email</td>
        <td>Details</td>
      </thead>
      <tbody>
        @foreach ($users as $user)
            
        
        <tr>
          <td>
            <div class="img-box-smail">
            <img src="{{asset($user->image)}}" alt="photo" style="width:30px; height:30px;" >
            </div>
          </td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td><a href="{{ route('admin.student-view', $user) }}"  title="view student personal information"><i class="bi bi-eye"></i></a>

            @if (auth()->user()->is_admin && auth()->user()->is_admin == 2)
            <a href="{{ route('admin.student_edit', $user) }}"  title="view student personal information"><i class="bi bi-pencil"></i></a>
            <a href="#" onclick="confirmDelete({{ $user->id }})" title="Delete student"><i class="bi bi-trash"></i></a>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.student.destroy', $user) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
            @endif
            
          </td>
        </tr>
        @endforeach

     

      </tbody>
     </table>
</div>
</div>
<div class="mt-4">
{{ $users->links() }}
</div>

<!-- Delete Modal -->
<script>
  function confirmDelete(userId) {
      if (confirm("Are you sure you want to delete this user?")) {
          document.getElementById('delete-form-' + userId).submit();
      }
  }
</script>

@endsection