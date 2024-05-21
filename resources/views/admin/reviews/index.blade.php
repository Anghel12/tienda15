@extends('adminlte::page')

@section('title', 'Reseñas')

@section('content_header')

    <h1>Reseñas</h1>
    <a href="{{ route('admin.reviews.create') }}" class="btn btn-primary">Add Review</a>
    @if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif
@stop

@section('content')
    <div class="container">
        <h1>Reviews</h1>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Product</th>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $review)
                    <tr>
                        <td>{{ $review->user->name }}</td>
                        <td>{{ $review->post->name }}</td>
                        <td>{{ $review->rating }}</td>
                        <td>{{ $review->comment }}</td>
                        <td>{{ $review->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('admin.reviews.show', $review->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
@endsection

@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}


<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')

    <script> console.log('Hi!'); </script>
   {{--  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
  
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>


    $('#myTable').DataTable({
        responsive: true,
        autoWitdth: false
    });

        </script>
@stop