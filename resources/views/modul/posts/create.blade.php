@extends('template')

@section('konten')
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                New Blog
            </h3>
        </div>
        <div class="card-body">
            <form id="proses" onsubmit="return false;">
                @csrf
                <input type="hidden" name="user_id" value="{{ $data->id }}">
                <input type="hidden" name="kelurahan_id" value="{{ $data->kelurahan_id }}">
                <div class="form-group">
                    <label for="judul">Post Title</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Post Title">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <div id="kt_quil_1" style="height: 325px">
                    </div>
                    <textarea id="quill-editor-area" class="d-none" name="content"></textarea>
                </div>

                <div class="form-group">
                    <label>Cover Post Image</label>
                    <div></div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="files"
                            accept=".png, .jpg, .jpeg">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Categories</label>
                    <div class="col-lg-6 col-md-9 col-sm-12">
                        <input id="kt_tagify_1" class="form-control tagify" name='tags' placeholder='type...'
                            value='Desa, Nagari, Pemerintahan' autofocus="" data-blacklist='.NET,PHP' />
                        <div class="mt-3">
                            <a href="javascript:;" id="kt_tagify_1_remove"
                                class="btn btn-sm btn-light-primary font-weight-bold">Remove tags</a>
                        </div>
                        <div class="mt-3 text-muted">In this example, the field is pre-occupied with 4 tags. The last tag
                            (CSS) has the same value as the first tag, and will be removed, because the duplicates setting
                            is set to true.</div>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('jquery')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/tagify.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (document.getElementById('quill-editor-area')) {
                var quill = new Quill('#kt_quil_1', {
                    modules: {
                        toolbar: [
                            [{
                                header: [1, 2, false]
                            }],
                            ['bold', 'italic', 'underline'],
                            ['image', 'code-block']
                        ]
                    },
                    placeholder: 'Type your Content here...',
                    theme: 'snow' // or 'bubble'
                });
                var editor = document.getElementById('quill-editor-area');
                quill.on('text-change', function() {
                    // console.log(quill.root.innerHTML);
                    editor.value = quill.root.innerHTML;

                });

                editor.addEventListener('input', function() {
                    quill.root.innerHTML = editor.value;
                });

                $(document).ready(function() {
                    quill.root.innerHTML = editor.value;
                });

            }
        });
    </script>

    <script>
        $('form#proses').submit(function(e) {
            e.preventDefault();
            var form = new FormData($(this)[0]);
            $.ajax({
                method: "POST",
                url: "{{ route('post.store.new') }}",
                data: form,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.id == 0) {
                        komentar(0, 'Oppss', data.komen);
                    } else {
                        komentar(1, 'Success', data.komen);
                        $('div.card-body').html(data.notifikasi);
                    }
                }

            });

        });
    </script>
@endsection
