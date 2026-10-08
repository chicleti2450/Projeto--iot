<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteIndex;

use App\Livewire\Registro\RegistroCreate;
use App\Livewire\Registro\RegistroEdit;
use App\Livewire\Registro\RegistroIndex;

use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', Dashboard::class);

Route::get('ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('ambiente', AmbienteIndex::class)->name('ambiente.index');
Route::get('ambiente/editar/{id}', AmbienteEdit::class)->name('ambiente');

Route::get('registro/create', RegistroCreate::class)->name('registro.create');
Route::get('registro', RegistroIndex::class)->name('registro.index');
Route::get('registro/editar/{id}', RegistroEdit::class)->name('registro');

Route::get('sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('sensor', SensorIndex::class)->name('sensor.index');
Route::get('sensor/editar/{id}', SensorEdit::class)->name('sensor');