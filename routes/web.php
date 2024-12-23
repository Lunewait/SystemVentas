<?php
use App\Http\Controllers\categoriaController;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\compraController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\marcaController;
use App\Http\Controllers\presentacioneController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\proveedorController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ventaController;
use App\Http\Controllers\ReportController;
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
Route::get('/',[homeController::class,'index'])->name('panel');

Route::resources([
    'categorias' => categoriaController::class,
    'presentaciones' => presentacioneController::class,
    'marcas' => marcaController::class,
    'productos' => ProductoController::class,
    'clientes' => clienteController::class,
    'proveedores' => proveedorController::class,
    'compras' => compraController::class,
    'ventas' => ventaController::class,
    'users' => userController::class,
    'roles' => roleController::class,
    'profile' => profileController::class
]);

Route::get('/login',[loginController::class,'index'])->name('login');
Route::post('/login',[loginController::class,'login']);
Route::get('/logout',[logoutController::class,'logout'])->name('logout');

Route::get('/401', function () {
    return view('pages.401');
});
Route::get('/404', function () {
    return view('pages.404');
});
Route::get('/500', function () {
    return view('pages.500');
});

Route::get('/reportes', [ReportController::class, 'index'])->name('reportes.index');
Route::get('/reportes/impuestos', [ReportController::class, 'impuestos'])->name('reportes.impuestos');
Route::get('/reportes/resumen', [ReportController::class, 'resumen'])->name('reportes.resumen');
Route::get('/clientes/{id}/exportar', [ClienteController::class, 'exportarPDF'])->name('clientes.exportar');
Route::get('/proveedores/{id}/exportar', [ProveedorController::class, 'exportarPDF'])->name('proveedores.exportar');

Route::get('/ventas/{id}/boleta', [VentaController::class, 'generarBoleta'])->name('ventas.boleta');
Route::get('/reporte-ventas', [VentaController::class, 'generarReporteVentas'])->name('reporte.ventas');
Route::get('/reporte-compras', [CompraController::class, 'generarReporteCompras'])->name('reporte.compras');
Route::get('/reporte-clientes', [ClienteController::class, 'generarReporteClientes'])->name('reporte.clientes');
Route::get('/reporte-proveedores', [proveedorController::class, 'generarReporteProveedores'])->name('reporte.proveedores');

Route::get('/reportes', function () {
    return view('reportes');
})->name('reportes');