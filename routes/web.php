<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AutoController, DashboardController, DocumentsController, KiercodeController, PdfController, PerangkatController, PostController, ProfileController, ProfilkelurahanController, SuratController, TteController};
use App\Http\Controllers\backend\PendudukController;
use App\Http\Controllers\frontend\PortalController;
use App\Http\Controllers\surat\KurangmampuController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(SuratController::class)->group(function () {
        Route::get('/surat/buat',  'index')->name('form.surat');
        Route::get('/buat/surat', 'create')->name('buat.surat');
        Route::post('/store/surat', 'store')->name('store.surat');
        Route::get('/tampilpdf', 'tampilPDF')->name('tampilpdf');
        Route::get('/pdfdinamis', 'tampilPDFDinamis')->name('pdfdinamis');
        Route::get('/edit/surat/{id}', 'edit')->name('fedit.surat');
        Route::get('/box/tte/{id}', 'tte')->name('box.tte');
        Route::post('/signature', 'signature')->name('signature.surat');
        Route::post('/surat/lihat/draft', 'viewdraft')->name('surat.lihat.draft');
    });
    Route::get('/qrcode', [KiercodeController::class, 'index']);

    Route::controller(PerangkatController::class)->group(function () {

        Route::get('/perangkat', 'index')->name('perangkat');
        Route::get('/perangkat/add', 'add')->name('perangkat.add');
        Route::post('/perangkat/store', 'store')->name('perangkat.store');
        Route::post('/perangkat/modal', 'modal')->name('modal.perangkat');
    });

    Route::controller(DocumentsController::class)->group(function () {
        Route::get('/documents', 'index')->name('documents');
        Route::post('/documents', 'store')->name('documents.store');
        Route::get('/autopejabat', 'autopejabat')->name('autopejabat');
        Route::post('/pilihpejabat', 'pilih')->name('pilihpejabat');
        Route::get('/notifikasi', 'notifikasi')->name('notifikasi');
        Route::post('/modal/tte', 'modaltte')->name('modal.tte');
        Route::post('/proses/tte', 'prosestte')->name('proses.tte');
        Route::post('/buat/qr', 'buatqr')->name('buatqr');
    });
    Route::controller(PendudukController::class)->group(function () {
        Route::get('/penduduk', 'index')->name('penduduk');
        Route::post('/penduduk/box', 'box')->name('penduduk.box');
        Route::post('/penduduk/modal', 'modal')->name('penduduk.modal');
        Route::post('/penduduk/store', 'store')->name('penduduk.store');
    });
    Route::controller(KurangmampuController::class)->group(function () {
        Route::get('/kurang/mampu', 'index')->name('kurang.mampu');
        Route::post('/kurang/mampu/modal', 'modal')->name('kurang.mampu.modal');
        Route::post('/kurang/mampu/modal/delete', 'modaldelete')->name('kurang.mampu.modal.delete');
        Route::post('/kurang/mampu/store', 'store')->name('kurang.mampu.store');
    });
    Route::controller(AutoController::class)->group(function () {
        Route::get('/auto/perangkat', 'autoperangkat')->name('auto.perangkat');
        Route::get('/auto/penduduk', 'autopenduduk')->name('auto.penduduk');
    });
    Route::controller(TteController::class)->group(function () {
        Route::get('/tte/bahan', 'index')->name('notifikasi_');
        Route::post('/tte/modal', 'modal')->name('modal.tte.layanan');
        Route::post('/tte/proses', 'proses')->name('proses.tte.layanan');
    });

    Route::controller(PostController::class)->group(function () {
        Route::get('/post/master', 'index')->name('post.master');
        Route::get('/post', 'create')->name('post.create.new');
        Route::post('post/store', 'store')->name('post.store.new');
        Route::post('post/modal', 'modal')->name('post.modal');
        Route::post('post/modal/store', 'storemodal')->name('post.store.modal');
    });

    Route::controller(ProfilkelurahanController::class)->group(function () {
        Route::get("/profil/organisasi", 'index')->name('profil.kelurahan');
        Route::post("/profil/update", 'update')->name('profil.update');
        Route::post("/profil/ganti/banner", 'gantibanner')->name('ganti.banner');
        Route::post("/profil/ganti/logo", 'gantilogo')->name('ganti.logo');
    });
});

// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::post('/keluar', [ProfileController::class, 'logout'])->name('profile.logout');

Route::get('/pdf', [PdfController::class, 'index']);


Route::controller(PortalController::class)->group(function () {
    Route::get('/portal/{id}', 'index')->name('portal.index', ['id']);
});
