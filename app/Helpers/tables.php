<?php

use Illuminate\Support\Facades\Storage;

function tabelPerangkat($data, $token, $rute)
{
    $t = null;
    $t .= "
    <div class='table-responsive'>
        <table class='table table-striped table-bordered'>
            <thead>
                <tr>
                    <th class='text-center'>No</th>
                    <th class='text-center'>Photo</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jabatan</th>
                    <th>Email</th>
                    <th>Tempat</th>
                    <th>Tanggal</th>
                    <th>Telp</th>
                    <th class='text-center'>Edit</th>
                </tr>
            </thead>
            <tbody>";
    $no = 1;
    foreach ($data as $i) {
        $t .= "
        <tr>
            <td class='text-center'>" . $no . ".</td>
            <td>
            <div class='symbol symbol-50 symbol-light mt-1'>
                    <span class='symbol-label'>
                        <img  class='h-100 align-self-end' src='data:image/png;base64," . base64_encode(Storage::get('photos/' . $i->photo)) . "' alt=''>
                    </span>
                </div>
            </td>
            <td>" . $i->name . "</td>
            <td>" . $i->nik . "</td>
            <td>" . $i->jabatan . "</td>
            <td>" . $i->email . "</td>
            <td>" . $i->tempat . "</td>
            <td>" . $i->tanggal . "</td>
            <td>" . $i->telp . "</td>
            <td class='text-center'>
            <button type='button' class='btn btn-link btn-sm font-weight-bold mr-2 modal-perangkat' id='" . $i->id . "'
                    kelurahan_id='" . $i->kelurahan_id . "'
                    token='" . $token . "' rute='" . $rute . "'>
                    <i class='icon-2x text-primary flaticon-edit-1'></i></button>
            </td>
        </tr>
            ";
        $no++;
    }
    $t .= "
            </tbody>
        </table>
    </div>
    ";
    return $t;
}

function tabelNotifikasi($data)
{
    $t = null;
    $t .= "
    <div class='table-responsive'>
        <table class='table table-striped table-bordered'>
            <thead>
                <tr>
                    <th class='text-center'>No</th>
                    <th>id surat</th>
                    <th>Tentang</th>
                    <th>Draft</th>                 
                </tr>
            </thead>
            <tbody>";
    $no = 1;
    foreach ($data as $i) {
        $t .= "
        <tr>
            <td class='text-center'>" . $no . ".</td>
            <td>" . $i->nomor . "</td>
            <td>" . $i->tentang . "</td>
            <td>
                <button type='button' 
                class='btn btn-light-primary font-weight-bolder btn-sm modal-tte' id='" . $i->id . "'>Proses</button>
            </td>
            
        </tr>
            ";
        $no++;
    }
    $t .= "
            </tbody>
        </table>
    </div>
    ";

    $t .= "
    
    ";
    return $t;
}

function umpanKeterangan($text)
{
    $t = null;
    $t = '
        <div class="form-group mb-8">
            <div class="alert alert-custom alert-default" role="alert">
                <div class="alert-icon">
                    <span class="svg-icon svg-icon-primary svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
                                <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
                <div class="alert-text">' . $text . '</div>
            </div>
        </div>';


    return $t;
}

function tabelPenduduk($data)
{
    $t = null;
    $t .= "
    <div class='table-responsive'>
        <table class='table table-striped table-bordered'>
            <thead>
                <tr>
                    <th class='text-center'>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat</th>
                    <th>Tanggal Lahir</th>
                    <th class='text-center' width='4%'>Edit</th>
                   
                </tr>
            </thead>
            <tbody>";
    $no = 1;
    foreach ($data as $i) {
        $t .= "
        <tr>

            <td class='text-center'>" . $no . ".</td>
            <td>" . $i->nik . "</td>
            <td>" . $i->nama . "</td>
            <td>" . $i->tempat . "</td>
            <td>" . $i->tanggal . "</td>
            <td class='text-center'>
                <button type='button' class='btn btn-link btn-sm font-weight-bolder font-size-sm modal-penduduk' id='" . $i->id . "'
                    warga_id='" . $i->warga_id . "'>
                    <i class='icon-2x text-success flaticon2-writing'></i>
                </button>
            </td>
            
        </tr>
            ";
        $no++;
    }
    $t .= "
            </tbody>
        </table>
    </div>
    ";
    return $t;
}

function tabelLayananKurangMampu($data)
{
    $t = null;
    $t .= "
    <div class='table-responsive'>
        <table class='table table-striped table-bordered'>
            <thead>
                <tr>
                    <th class='text-center'>No</th>
                    <th class='text-center'>Nomor</th>
                    <th class='text-center'>Pejabat</th>
                    <th class='text-center'>NIK</th>
                    <th class='text-center'>Jabatan</th>
                    <th class='text-center'>Pemohon</th>
                    <th class='text-center'>Orang Tua</th>
                    <th class='text-center'>Kegunaan</th>
                    <th class='text-center'>Draft</th>
                    <th class='text-center'>Terbit</th>
                    <th class='text-center'>Hasil</th>
                    <th class='text-center'>TTE</th>
                    <th class='text-center'>Hapus</th>
                    
                   
                </tr>
            </thead>
            <tbody>";
    $no = 1;
    foreach ($data as $i) {
        $t .= "
        <tr id='baris-" . $i->id . "'>
            <td class='text-center'>" . $no . ".</td>
            <td class='text-center'>" . $i->nomor . "</td>
            <td class='text-center'>" . $i->pejabat_name . "</td>
            <td class='text-center'>" . $i->pejabat_nik . "</td>
            <td class='text-center'>" . $i->jabatan . "</td>
            <td class='text-center'>" . $i->anak_name . "</td>
            <td class='text-center'>" . $i->ortu_name . "</td>
            <td class='text-center'>" . $i->alasan_name . "</td>
            <td class='text-center'>
                <button type='button' class='btn btn-link btn-sm lihat-draft' file='bahan/" . $i->bahan . "'>
                    <i class='icon-2x text-warning flaticon-file'></i>
                </button>
            </td>
            <td class='text-center'>" . $i->created_at . "</td>";
        if (empty($i->hasil)) {
            $t .= "<td class='text-center'><i class='icon-2x text-dark-50 flaticon-danger'></i></td>";
        } else {
            $t .= "<td class='text-center'>
                    <button type='button' class='btn btn-link btn-sm lihat-draft' file='" . $i->hasil . "'>
                        <i class='icon-2x text-success flaticon-list'></i>
                    </button>
                    </td>";
        }
        $t .= "<td class='text-center'>" . $i->updated_at . "</td>
                <td class='text-center'>
                    <button type='button' class='btn btn-link modal-delete' id='" . $i->id . "'>
                        <i class='icon-2x text-danger flaticon-delete'></i>
                    </button>
                </td>";


        $t .= "    
        </tr>
            ";
        $no++;
    }
    $t .= "
            </tbody>
        </table>
    </div>
    ";
    return $t;
}

function tabelPosts($data)
{
    $t = null;
    $t .= "
    <div class='table-responsive'>
        <table class='table table-striped table-bordered'>
            <thead>
                <tr>
                    <th class='text-center'>No</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Categories</th>
                    <th>Edit</th>
                                    
                </tr>
            </thead>
            <tbody>";
    $no = 1;
    foreach ($data as $i) {
        $t .= "
        <tr>
            <td class='text-center'>" . $no . ".</td>
            <td>" . $i->title . "</td>
            <td>" . $i->created_at . "</td>
            <td>" . $i->categories . "</td>
            <td>
            <button type='button' class='btn btn-link font-weight-bolder modal-post' id='" . $i->id . "' user_id='" . $i->user_id . "' kelurahan_id='" . $i->kelurahan_id . "'>
                    <i class='icon-2x text-success flaticon-list'></i></button>
            </td>
           
            
        </tr>
            ";
        $no++;
    }
    $t .= "
            </tbody>
        </table>
    </div>
    ";

    $t .= "
    
    ";
    return $t;
}
