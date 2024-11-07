@extends('layouts.app')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Transaksi Harian</h4>
            <div class="table-responsive pt-3">
                <table id="transaksiTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Stock Code</th>
                            <th>Date Transaction</th>
                            <th>Volume</th>
                            <th>Value</th>
                            <th>Frequency</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksiHarians as $transaksi)
                        <tr>
                            <td>{{ $transaksi->stock_code }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaksi->date_transaction)->format('F Y') }}</td>
                            <td>{{ number_format($transaksi->volume) }}</td>
                            <td>{{ number_format($transaksi->value) }}</td>
                            <td>{{ number_format($transaksi->frequency) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jspage')
<!-- jQuery and DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#transaksiTable').DataTable({
            "pageLength": 10,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
@endsection

@section('csspage')
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endsection
