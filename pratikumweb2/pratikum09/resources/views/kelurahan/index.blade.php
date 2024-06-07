@include('kelurahan.header')
@include('kelurahan.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="my-4">Daftar Kelurahan</h1>
                    <a href="{{ route('kelurahans.create') }}" class="btn btn-primary">Tambah Pasien</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelurahan as $kel)
                                <tr>
                                    <td>{{ $kel->id }}</td>
                                    <td>{{ $kel->nama }}</td>
                                    <td>{{ $kel->kecamatan_id }}</td>
                                    <td>
                                        <a href="{{ route('kelurahans.show', $kel->id) }}" class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('kelurahans.edit', $kel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('kelurahans.destroy', $kel->id) }}" method="POST" style="display: inline;">
                                          @csrf
                                          @method('DELETE')
                                         <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this pasien?')">Delete</button>
                                         </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('kelurahan.footer')