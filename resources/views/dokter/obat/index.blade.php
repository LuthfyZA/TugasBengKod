@section('content_body')
<div class="card">
<div class="card-header">
    <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah Obat</a>
</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Kemasan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($obat as $o)
                <tr>
                    <th scope="row">{{ $o->id }}</th>
                    <td>{{ $o->nama_obat }}</td>
                    <td>{{ $o->kemasan }}</td>
                    <td>{{ $o->harga }}</td>
                    <td>
                        <a href="{{ route('obat.edit', $o->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('obat.destroy', $o->id) }}" method="POST" style="display:inline;">
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
</div>
@endsection