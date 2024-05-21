@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a class="btn btn-success btn-sm float-right" href=" {{route('admin.posts.create')}}" > Nuevo post</a>
    <h1>LISTADO DE POST</h1>
@stop

@section('content')


@livewire('admin.posts-index')

@stop

@section('css')

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">

{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}


<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')


@if (session('info'))
<script>
    Swal.fire({
    title: "Deleted!",
    text: "Your file has been deleted.",
    icon: "success"
    }); 
    </script>
@endif

    <script> console.log('Hi!'); </script>
   {{--  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
  
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault(); // Cambié preventdefault() a preventDefault()
            Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                /* Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                }); */
                this.submit();
            }
            });
        });
    </script>
    
    
    <script>
    $('#myTable').DataTable({
        responsive: true,
        autoWitdth: false
    });
        </script>
@stop