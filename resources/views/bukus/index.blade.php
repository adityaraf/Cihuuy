@extends('layouts.app')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tabel Buku</h4>
            <div class="table-responsive pt-3">
                <a href="{{ route('bukus.create') }}" class="btn btn-primary mb-3">Tambah Buku Baru</a>
                <table id="books-table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Kode Buku </th>
                            <th> Judul Buku </th>
                            <th> Pengarang </th>
                            <th> ID Kategori </th>
                            <th> Dibuat Pada </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody id="books-table-body">
                        <!-- Data buku akan dimuat di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jspage')
<!-- jQuery and DataTables libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#books-table').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        });

        // Function to load book data
        function loadBooks() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/bukus', // Replace with your actual API endpoint
                type: 'GET',
                success: function(response) {
                    var booksTableBody = $('#books-table-body');
                    booksTableBody.empty();
                    $.each(response.data, function(index, book) {
                        var row = `
                            <tr>
                                <td>${book.idbuku}</td>
                                <td>${book.kode_buku}</td>
                                <td>${book.judul_buku}</td>
                                <td>${book.pengarang}</td>
                                <td>${book.id_kategori}</td>
                                <td>${book.created_at ? new Date(book.created_at).toLocaleDateString() : 'Tidak Tersedia'}</td>
                                <td>
                                    <a href="/bukus/${book.idbuku}/edit" class="btn btn-success btn-sm">
                                        <i class="ti ti-pencil"></i>
                                    </a>
                                    <form action="/bukus/${book.idbuku}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        `;
                        booksTableBody.append(row);
                    });

                    // Re-initialize DataTable after data load
                    table.clear().rows.add($(booksTableBody).find('tr')).draw();
                },
                error: function(xhr, status, error) {
                    alert('Error loading books: ' + error);
                }
            });
        }

        // Call function to load book data
        loadBooks();
    });
</script>
@endsection
