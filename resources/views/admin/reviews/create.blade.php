@extends('adminlte::page')

@section('title', 'Reseñas')

@section('content_header')

    <h1>Reseñas Crear</h1>
    @if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

@stop

@section('content')


<div class="container">
    <h1>Create Review</h1>
    <form action="{{ route('admin.reviews.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="post">Product:</label>
            <select class="form-control" id="post" name="post" >
                    <option value="{{ $post->id }}">{{ $post->name }}</option>
        
            </select>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <select class="form-control" id="rating" name="rating" >
                <option value="">Select a rating</option>
                <option value="1">1 - Poor</option>
                <option value="2">2 - Fair</option>
                <option value="3">3 - Good</option>
                <option value="4">4 - Very Good</option>
                <option value="5">5 - Excellent</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Optional"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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