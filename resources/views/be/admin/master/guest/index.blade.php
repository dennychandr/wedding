@extends('be.layouts.app')

@push('css')
    <link href="{{ asset('') }}assets/be/vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/be/vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css"
        rel="stylesheet" />
@endpush

@section('container')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="title">
                Menu Master
            </div>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show col-lg-12" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('success') }}
                </div>
            @endif

            <div class="content-wrapper">
                <div class="row same-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Guest</h4>
                            </div>
                            <div class="card-body">
                                <a href="{{ url('admin/master/guest/create') }}" class="btn btn-primary mb-3"><i
                                        data-feather="plus"></i> Tambah Data [F1]</a>
                                {{-- <button type="button" class="btn btn-primary mb-3 btn-add">Tambah Data</button> --}}
                                <div class="table-responsive">
                                    {{ $dataTable->table() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('js')
    <script src="{{ asset('') }}assets/be/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}assets/be/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('') }}assets/be/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    {{ $dataTable->scripts() }}
    <script>
        $('#guest-table').on('click', '.action', function() {
            let data = $(this).data(); //mengambil nilai dari atribut data untuk setiap class bernama action
            let id = data.id; //di class action, terdapat data id dan data jenis
            let jenis = data.jenis; //di class action, terdapat data id dan data jenis


            if (jenis == 'delete') { //jika jenis nya delete maka jalankan fungsi ini
                Swal.fire({ //ini adalah template buat konfirmasi ketika button di tekan
                    title: 'Apakah anda yakin?',
                    text: "Data guest yang terpilih akan terhapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) { //bilaa konfirm untuk delete maka jalankan fungsi dibawah ni

                        $.ajax({
                            type: 'DELETE',
                            url: `{{ url('master/guest/') }}/${id}`,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content'), //tambahan CSRF token dari meta wajib
                            },
                            success: function(response) {
                                window.LaravelDataTables["guest-table"].ajax
                                    .reload(); //method untuk me refresh isi dari dataTables                    
                                Swal.fire(
                                    'Deleted!',
                                    response.message,
                                    response.success
                                )
                            }
                        });

                    }
                })
                return;
            }
        });
    </script>
@endpush
