@extends('template')

@section('konten')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Posts
                    <span class="d-block text-muted pt-2 font-size-sm">Daftar Posts {{ $data->kelurahan_id }}</span>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->

                <!--end::Dropdown-->
                <!--begin::Button-->
                <button type="button" class="btn btn-primary font-weight-bolder modal-post" id="0"
                    user_id="{{ $data->id }}" kelurahan_id="{{ $data->kelurahan_id }}">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                <path
                                    d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                    fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>New Record</button>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">

            @php
                echo tabelPosts($posts);

            @endphp
        </div>
    </div>

    @php
        echo xlModal();
    @endphp
@endsection

@section('jquery')
    <script>
        $(document).on("click", "button.modal-post", function(e) {
            e.preventDefault();
            $('#xlModal').modal('show');
            id = $(this).attr('id');
            user_id = $(this).attr('user_id');
            kelurahan_id = $(this).attr('kelurahan_id');
            csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            $.post("{{ route('post.modal') }}", {
                id: id,
                user_id: user_id,
                kelurahan_id: kelurahan_id,
                _token: csrfToken
            }, function(data) {
                $('div.xl-modal').html(data);
            });

        });
    </script>
@endsection
