<?php

use App\Http\Livewire\Admin\AdminView;
use App\Http\Livewire\Admin\AnuncioCreate;
use App\Http\Livewire\Admin\AnuncioDelete;
use App\Http\Livewire\Admin\AnuncioEdit;
use App\Http\Livewire\Admin\AnuncioIndex;
use App\Http\Livewire\Admin\Solicitud;
use App\Http\Livewire\Admin\UsuarioCreate;
use App\Http\Livewire\Admin\UsuarioIndex;
use App\Http\Livewire\Admin\UsuariosEdit;
use App\Http\Livewire\Admin\UsuarioShow;
use App\Http\Livewire\Anuncios\AnunciosIndex;
use App\Http\Livewire\Conocenos\Mision;
use App\Http\Livewire\Conocenos\Valores;
use App\Http\Livewire\Conocenos\Vision;
use App\Http\Livewire\Documentos\DocumentosIndex;
use App\Http\Livewire\Index;
use App\Http\Livewire\IniciarSesion\Login;
use App\Http\Livewire\Requests\RequestCreate;
use App\Http\Livewire\Requests\RequestDelete;
use App\Http\Livewire\Usuarios\Usuario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('livewire.index');
// });

Route::get('/', Index::class)->name('index');

//conocenos
Route::get('/mision', Mision::class)->name('conocenos.mision');
Route::get('/vision', Vision::class)->name('conocenos.vision');
Route::get('/valores', Valores::class)->name('conocenos.valores');

//Inicio de sesion
Route::get('/login', Login::class)->name('login');

//Admin
Route::get('/admin', AdminView::class)->name('admin.view')->middleware('auth.admin');
Route::get('/admin/usuarios', UsuarioIndex::class)->name('admin.usuarios')->middleware('auth.admin');
Route::get('/admin/usuarios/crear-usuario', UsuarioCreate::class)->name('admin.create-user')->middleware('auth.admin');
Route::get('/admin/usuarios/{usuario}/editar-usuario', UsuariosEdit::class)->name('admin.user-edit')->middleware('auth.admin');
Route::get('/admin/usuarios/{usuario}/usuario', UsuarioShow::class)->name('admin.show-user')->middleware('auth.admin');
Route::get('/admin/usuarios/generar-pdf', [UsuarioIndex::class, 'generarPDF'])->name('admin.users.pdf')->middleware('auth.admin');


//Admin anuncios
Route::get('/admin/anuncios', AnuncioIndex::class)->name('admin.anuncios')->middleware('auth.admin');
Route::get('/admin/anuncios/crear-anuncio', AnuncioCreate::class)->name('admin.anuncio-create')->middleware('auth.admin');
Route::get('/admin/anuncios/{anuncio}/editar-anuncio', AnuncioEdit::class)->name('admin.anuncio-edit')->middleware('auth.admin');
Route::get('/admin/anuncio/{anuncio}/eliminar', AnuncioDelete::class)->name('admin.anuncio-delete')->middleware('auth.admin');
Route::get('/admin/anuncios/generar-pdf', [AnuncioIndex::class, 'generarPDF'])->name('admin.anuncio.pdf')->middleware('auth.admin');


//Admin Solicitudes
Route::get('/admin/solicitudes', Solicitud::class)->name('admin.solicitudes')->middleware('auth.admin');

//requests usuarios
Route::get('/usuario/solicitud', RequestCreate::class)->name('requests.create');
Route::get('/usuario/solicitud/{request}/delete', RequestDelete::class)->name('requests.delete');

//Anuncios usuarios
Route::get('/usuario/anuncios', AnunciosIndex::class)->name('anuncios.index');

//Documentos Usuarios
Route::get('/usuario/documentos', DocumentosIndex::class)->name('documentos.index');

