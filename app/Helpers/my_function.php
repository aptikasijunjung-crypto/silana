<?php

function alertBody($text)
{
    $t = null;
    $t .= '
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
                            <div class="alert-text">' . $text . '</div>
                        </div>
                    </div>
    ';

    return $t;
}

function notifikasi($text)
{
    $t = null;
    $t = "<div class='alert alert-custom alert-white alert-shadow fade show gutter-b' role='alert'>
									<div class='alert-icon'>
										<span class='svg-icon svg-icon-primary svg-icon-xl'>
											<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
											<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='24px' height='24px' viewBox='0 0 24 24' version='1.1'>
												<g stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
													<rect x='0' y='0' width='24' height='24'></rect>
													<path d='M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z' fill='#000000' opacity='0.3'></path>
													<path d='M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z' fill='#000000' fill-rule='nonzero'></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
									<div class='alert-text'>" . $text . "</div>
								</div>";
    return $t;
}

function hilang($name, $value)
{
    $t = null;
    $t .= "<input type='hidden' name='$name' value='$value' id='$name'>";
    return $t;
}

function hilangClass($name, $value, $class)
{
    $t = "<input type='hidden' name='" . $name . "' value='" . $value . "' id='" . $name . "' class='" . $class . "'>";
    return $t;
}


function rand_string($length)
{
    $ip = str_replace(".", "", $_SERVER['REMOTE_ADDR']);
    $Caracteres = "0123456789" . unixKey() . $ip;
    $QuantidadeCaracteres = strlen($Caracteres);
    $QuantidadeCaracteres--;
    $Hash = NULL;
    for ($x = 1; $x <= $length; $x++) {
        $Posicao = rand(0, $QuantidadeCaracteres);
        $Hash .= substr($Caracteres, $Posicao, 1);
    }

    return $Hash;
}

function unixKey()
{
    $t = date("YmdHis");
    return $t;
}

function teks($nama, $id, $class, $value, $read)
{
    if ($read == 0) {
        $t = "<input type='text' name='$nama' id='$id' class='form-control $class' value='$value' >";
    } else {
        $t = "<input type='text' name='$nama' id='$id' class='form-control $class' value='$value' readonly>";
    }
    return $t;
}
function teksp($nama, $id, $class, $value, $read, $placeholder)
{
    if ($read == 0) {
        $t = "<input type='text' name='" . $nama . "' id='" . $id . "' class='form-control " . $class . "' value='$value' 
		placeholder='" . $placeholder . "'>";
    } else {
        $t = "<input type='text' name='$nama' id='$id' class='form-control $class' value='$value' readonly>";
    }
    return $t;
}

function tandatanganbiasa($file, $password, $qrcode)
{
    $parameter = array(
        'file' => new CURLFILE($file, 'application/pdf'),
        // 'file' => 'df',
        'nik' => '1371026505830006',
        'passphrase' => $password,
        'tampilan' => 'visible',
        'image' => 'true',
        'imageTTD' => new CURLFILE($qrcode, 'image/png'),
        'width' => '60',
        'height' => '60',
        'tag_koordinat' => '^',
        'reason' => 'Sutan Mudo',
        'location' => 'Kabupaten Sijunjung'
    );

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://apibsre.sijunjung.go.id/api/sign/pdf',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $parameter,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic ZXNpZ246cXdlcnR5',
            'Cookie: JSESSIONID=09CBA6DA47B6027455504005DF7771BF'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
}

function cKombo($name, $title, $id, $ket,  $data, $ketemu)
{
    $t = null;
    $t .= "
    <select name='" . $name . "' id='" . $name . "' class='form-control'>
        <option value='#'>" . $title . "</option>";
    foreach ($data as $item) {
        if ($item->$id == $ketemu) {
            $t .= "<option value='" . $item->$id . "' selected>" . $item->$ket . "</option>";
        } else {
            $t .= "<option value='" . $item->$id . "'>" . $item->$ket . " </option>";
        }
    }
    $t .= "
    </select>
    ";
    return $t;
}

function TTESurat($file, $file_mime,  $qrcode, $qrcode_mime, $nik, $password)
{
    $parameter = array(
        // 'file' => new CURLFILE($file, 'application/pdf'),
        'file' => new CURLFILE($file, $file_mime),
        // 'file' => 'df',
        'nik' => $nik,
        'passphrase' => $password,
        'tampilan' => 'visible',
        'image' => 'true',
        'imageTTD' => new CURLFILE($qrcode, $qrcode_mime),
        'width' => '60',
        'height' => '60',
        'tag_koordinat' => '^',
        'reason' => 'Sutan Mudo',
        'location' => 'Kabupaten Sijunjung'
    );

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://apibsre.sijunjung.go.id/api/sign/pdf',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $parameter,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic ZXNpZ246cXdlcnR5',
            'Cookie: JSESSIONID=09CBA6DA47B6027455504005DF7771BF'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
}

function tampilPDF($data)
{
    $t = null;
    $t .=  '
    <iframe src="data:application/pdf;base64,' . $data . '" width="100%" height="600px" frameborder="0">
                Your browser does not support PDFs. Please download the PDF to view it: <a
                    href="data:application/pdf;base64,' . $data . '">Download PDF</a>
            </iframe>
    ';
    return $t;
}

function facebook_time_ago($timestamp)
{
    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;
    $minutes      = round($seconds / 60);           // value 60 is seconds  
    $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
    $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
    $weeks          = round($seconds / 604800);          // 7*24*60*60;  
    $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
    $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
    if ($seconds <= 60) {
        //return "Just Now";
        return "Hari ini";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            //return "one minute ago";
            return "Satu Menit yang lalu";
        } else {
            //return "$minutes minutes ago";
            return "$minutes Menit yang lalu";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "an hour ago";
            return "Satu Jam yang lalu";
        } else {
            //return "$hours hrs ago";  
            return "$hours Jam yang lalu";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            //return "yesterday"; 
            return "Kemaren";
        } else {
            //return "$days days ago";
            return "$days Hari yang lalu";
        }
    } else if ($weeks <= 4.3) //4.3 == 52/12  
    {
        if ($weeks == 1) {
            //return "a week ago";
            return "Seminggu yang lalu";
        } else {
            //return "$weeks weeks ago";
            return "$weeks Minggu yang lalu";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            //return "a month ago";
            return "Sebulan yang lalu";
        } else {
            //return "$months months ago";
            return "$months Bulan yang lalu";
        }
    } else {
        if ($years == 1) {
            //return "one year ago";
            return "Setahun yang lalu";
        } else {
            //return "$years years ago";
            return "$years Tahun yang lalu";
        }
    }
}
