@extends('template')


@section('konten')
    <form id="proses" onsubmit="return false;" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-5">
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Penerbitan Surat Elektronik</h3>

                    </div>

                    <div class="card-body">
                        <div class="form-group mb-8">
                            <div class="alert alert-custom alert-default" role="alert">
                                <div class="alert-icon">
                                    <span class="svg-icon svg-icon-primary svg-icon-xl">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                                    fill="#000000" opacity="0.3"></path>
                                                <path
                                                    d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                                    fill="#000000" fill-rule="nonzero"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <div class="alert-text">Dokumen ini akan di tanda tangani secara elektronik yang di
                                    terbitkan oleh BSRE</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Tentang" name="nomor" id="nomor"
                                value="{{ rand_string(10) }}" readonly>
                            <span class="form-text text-muted">Nomor ini akan terisi secara otomatis</span>
                        </div>
                        <div class="form-group">
                            <label>Tentang
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Tentang" name="tentang" id="tentang">
                            <span class="form-text text-muted">Deskripsi Surat yang akan di terbitkan</span>
                        </div>

                        <div class="form-group">
                            <label>Upload PDF File Here
                                <span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="files" name="files">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <span class="form-text text-muted">Draft Surat PDF</span>
                        </div>
                    </div>
                    <!--end::Form-->
                </div>
            </div>
            <div class="col-md-7">
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Perangkat Validasi</h3>

                    </div>
                    <!--begin::Form-->

                    <div class="card-body">


                        <div class="form-group">
                            <label>Di Validasi Oleh :
                                <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for Perangkat..."
                                    name="tandatangan" id="tandatangan">
                                <input type="hidden" id="idpejabat">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="pilih">Pilih</button>
                                </div>
                            </div>
                            <span class="form-text text-muted">Pejabat yang akan menandatangani</span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="5%">No</th>
                                        <th>Nama</th>
                                        <th>N I K</th>
                                        <th>Jabatan</th>
                                        <th class="text-center" width="5%">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody id="tabel"></tbody>
                            </table>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>

                    <!--end::Form-->
                </div>
            </div>
        </div>
    </form>
@endsection



@section('jquery')
    <script>
        $('form#proses').submit(function(e) {
            $.LoadingOverlay('show');
            e.preventDefault();
            var form = new FormData($(this)[0]);
            $.ajax({
                url: "{{ route('documents.store') }}",
                method: "POST",
                dataType: 'json',
                data: form,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.id == 0) {
                        komentar(0, 'Opps', data.komen);
                    } else {
                        komentar(1, 'Success', data.komen);
                        $("div#konten-app").html(data.output);
                    }
                    $.LoadingOverlay('hide');
                },
                error: function(er) {}
            });
        });

        $('button#pilih').click(function(e) {
            $.LoadingOverlay('show');
            id = $('input#idpejabat').val();
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var v_id = [];
            $('input.v_id').each(function(i) {
                v_id[i++] = $(this).val();
            });
            $.post("{{ route('pilihpejabat') }}", {
                id: id,
                _token: csrfToken,
                v_id: v_id
            }, function(data) {
                if (data.id == 0) {
                    komentar(0, "Opps..", data.komen);
                } else {
                    $('tbody#tabel').append(data.row);
                    no = 1;
                    $('td.nomor').each(function() {
                        $(this).html(no);
                        no++;
                    });
                    $("#tandatangan").val("");
                    $("input#idpejabat").val("");
                }
                $.LoadingOverlay('hide');
            }, "json");

        });

        $('input#tandatangan').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('autopejabat') }}",
                    dataType: "json",
                    type: 'get',
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data);
                    }

                });
            },
            minLength: 2,
            select: function(event, ui) {
                $("input#tandatangan").val(ui.item.label);
                $("input#idpejabat").val(ui.item.value);

                return false;

            }
        });

        $(document).on('click', 'i.hapus_array', function(e) {
            id = $(this).attr('id');
            $('tr#array-' + id).fadeOut('slow', function(i) {
                $(this).remove();
            });
        });
    </script>
@endsection
