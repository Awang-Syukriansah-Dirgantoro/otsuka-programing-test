@extends('layout')
@push('css')
@endpush
@section('content')
    <div class="container-xxl">
        <div class="row justify-content-center text-center p-2">
            <span>Add product</span>
            <form action="product/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col p-2">
                    <label for="username">Name</label>
                    <input type="text" name="nama" id="nama">
                </div>
                <div class="col p-2">
                    <label for="password">Category</label>
                    <select name="category" id="category">
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col p-2">
                    <label for="image">Image</label>
                    <input name="image" type="file" class="dropify" data-height="100" />
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
            <div class="">
                <table class="table" id="myTable" name="myTable">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            @if ($role === 'approval')
                                <th scope="col">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr>
                                <th scope="col">{{ $item->id }}</th>
                                <th scope="col">{{ $item->nama }}</th>
                                <th scope="col">
                                    @foreach ($category as $cat)
                                        @if ($cat->id === $item->id_category)
                                            {{ $cat->nama }}
                                        @endif
                                    @endforeach
                                </th>
                                <th scope="col"><img style="height: 100px; object-fit: cover"
                                        src="images/{{ $item->image }}" alt=""></th>
                                <th scope="col">{{ $item->status }}</th>
                                @if ($role === 'approval')
                                    <th scope="col">
                                        <a
                                            href="{{ route('barang.approval', ['id' => $item->id, 'status' => 'approve']) }}">
                                            <button type="button" class="btn btn-success">Approve</button>
                                        </a>
                                        <a href="{{ route('barang.approval', ['id' => $item->id, 'status' => 'reject']) }}">
                                            <button type="button" class="btn btn-danger">Rejected</button>
                                        </a>
                                    </th>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('.dropify').dropify();
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
