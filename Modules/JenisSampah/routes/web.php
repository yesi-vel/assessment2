<?php
use Illuminate\Support\Facades\Route;
use Modules\JenisSampah\Http\Controllers\JenisSampahController;
Route::middleware(['auth', 'role:admin,user'])->group(function () {
Route::get('jenissampah', [JenisSampahController::class,
'index'])->name('jenissampah.index');
Route::get('jenissampah/data', [JenisSampahController::class,
'getData'])->name('jenissampah.data');
Route::post('jenissampah', [JenisSampahController::class,
'store'])->name('jenissampah.store');
Route::get('jenissampah/{jenis}/edit',
[JenisSampahController::class, 'edit'])->name('jenissampah.edit');
Route::put('jenissampah/{jenis}', [JenisSampahController::class,
'update'])->name('jenissampah.update');
Route::delete('jenissampah/{jenis}',
[JenisSampahController::class, 'destroy'])->name('jenissampah.destroy');
});