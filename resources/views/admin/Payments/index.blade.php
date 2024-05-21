@extends('adminlte::page')

@section('title', 'CommentsAll')

@section('content_header')

    @can('admin.categories.create')
    <a class="btn btn-success btn-sm float-right" href="{{route('admin.categories.create')}}">Pagos</a>
    @endcan

    @if (session('info'))
    <div class="alert alert-success">
        <strong> {{session('info')}} </strong>
    </div>
    @endif
@stop
@section('content')

    <div class="card">
        <div class="card-body">
            <table id="paymentsTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Payment Method ID</th>
                        <th>Amount</th>
                        <th>Currency</th>
                        <th>Status</th>
                        <th>Card Last Four Digits</th>
                        <th>IP Address</th>
                        <th>Payment Details</th>
                    {{--     <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Payments as $payment)
                        <tr>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->user_id }}</td>
                            <td>{{ $payment->payment_method_id }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>{{ $payment->currency }}</td>
                            <td>{{ $payment->status }}</td>
                            <td>{{ $payment->card_last_four_digits }}</td>
                            <td>{{ $payment->ip_address }}</td>
                            <td>{{ $payment->payment_details }}</td>
           {{--                  <td>
                                <a href="{{ route('payments.edit', $payment) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('payments.destroy', $payment) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this payment?')">Delete</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#paymentsTable').DataTable({
                "responsive": true,
                "autoWidth": false,
                "language": {
                    "lengthMenu": "Display _MENU_ records per page",
                    "zeroRecords": "Nothing found - sorry",
                    "info": "Showing page _PAGE_ of _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Search:",
                    "paginate": {
                        "previous": "Previous",
                        "next": "Next"
                    }
                }
            });
        });
    </script>
@stop






