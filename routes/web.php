<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;//CONTROLADOR DE NAVEGACION PARA LOS USUARIOS
use App\Http\Controllers\PaquetesController;
use App\Http\Controllers\ProfesorController;//CONTROLADOR DE PROFESORES
use App\Http\Controllers\AdminController;//CONTROLADOR DE ADMINISTRADOR

Route::get('/', [NavController::class, 'index'])->name('home');//VISTA PRINCIPAL
Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');//PANEL DE ADMINISTRADOR

Route::get('/profesor', [ProfesorController::class, 'index'])->name('profesor');//VISTA PRINCIPAL PROFESOR
Route::get('/profesor/registrar', [ProfesorController::class, 'registarse'])->name('profesor_registrarse');//REGISTRO COMO PROFESOR



Route::get('/admin/paquetes', [AdminController::class, 'paquetes'])->name('admin_paquetes');//CRUD DE PAQUETES
Route::get('/admin/paquetes/crear', [AdminController::class, 'crear_paquete'])->name('crear_paquete');//CREAR PAQUETE
Route::get('/admin/paquetes/{id}', [AdminController::class, 'editar_paquete'])->name('editar_paquete');//EDITAR PAQUETE


Route::get('/admin/profesores', [AdminController::class, 'profesores'])->name('admin_profesores');//CRUD DE PROFESORES
Route::get('/admin/profesores/crear', [AdminController::class, 'crear_profesor'])->name('crear_profesor');//CREAR PROFESOR
Route::get('/admin/profesores/{id}', [AdminController::class, 'editar_profesor'])->name('editar_profesor');//EDITAR PROFESOR