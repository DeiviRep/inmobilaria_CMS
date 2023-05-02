<?php

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
Route::get('{dominio}','DominioController@open_page')->name('open_page');
Route::get('{dominio}/contenido/pagina/galeria','DominioController@open_galeria')->name('open_galeria');
Route::get('{dominio}/contenido/pagina/blog','DominioController@open_blog')->name('open_blog');
Route::get('{dominio}/contenido/pagina/blog/{slug}','DominioController@open_blog_single')->name('open_blog_single');
Route::get('{dominio}/contenido/pagina/contacto','DominioController@open_contacto')->name('open_contacto');
Route::post('{dominio}/contenido/pagina/contacto','DominioController@store_contacto')->name('store_contacto');
Route::get('{dominio}/contenido/{slug}','DominioController@open_entrada')->name('open_entrada');


Route::get('home/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/', 'Auth\LoginController@showLogin')->middleware('guest')->name('loginform');
Route::post('login','Auth/LoginController@login')->name('login');

Route::get('op/registrar', 'RegistroController@index')->name('registro');
Route::post('op/registrar', 'RegistroController@store')->name('store.registro');

/* RUTAS DE PLANTILLAS */

Route::get('admin/plantillas','PlantillaController@index')->name('index.plantilla');
Route::get('admin/plantilla/crear','PlantillaController@create')->name('create.plantilla');
Route::post('admin/plantilla/crear','PlantillaController@store')->name('store.plantilla');
Route::get('admin/plantilla/actualizar/{id}','PlantillaController@edit')->name('edit.plantilla');
Route::patch('admin/plantilla/actualizar/{id}','PlantillaController@update')->name('update.plantilla');
Route::delete('admin/plantilla/{id}','PlantillaController@destroy')->name('destroy.plantilla');

/* RUTAS DE PAGINAS */

Route::get('admin/paginas','PaginaController@index')->name('index.pagina');
Route::get('admin/pagina/crear','PaginaController@create')->name('create.pagina');
Route::post('admin/pagina/crear','PaginaController@store')->name('store.pagina');
Route::patch('admin/pagina/{id}','PaginaController@update')->name('update.pagina');
Route::delete('admin/pagina/{id}','PaginaController@destroy')->name('destroy.pagina');
Route::patch('admin/pagina/current_page/{id}','PaginaController@current_page')->name('current_page');

/*Rutas MENU */
Route::get('admin/configuracion/menu','ConfigMenuController@index')->name('index.menu');
Route::patch('admin/configuracion/menu/{id}','ConfigMenuController@update')->name('update.menu');
Route::post('admin/configuracion/menu/','ConfigMenuController@store')->name('store.menu');
Route::get('admin/configuracion/menu/{id}','ConfigMenuController@edit_item')->name('edit_item');
Route::patch('admin/configuracion/menu/item/{id}','ConfigMenuController@update_item')->name('update_item');
Route::delete('admin/configuracion/menu/{id}','ConfigMenuController@destroy')->name('destroy.menu');

/*RUTAS GENERAL*/
Route::get('admin/configuracion/general','ConfigGeneralController@index')->name('index.general');
Route::patch('admin/configuracion/general/{id}','ConfigGeneralController@update_general')->name('update.general');

/*RUTAS FOOTER*/
Route::get('admin/configuracion/footer','ConfigFooterController@index')->name('index.footer');
Route::patch('admin/configuracion/footer/{id}','ConfigFooterController@update_footer')->name('update.footer');

/*RUTAS ENTARADAS */
Route::get('admin/entradas','EntradaController@index')->name('index.entrada');
Route::get('admin/entrada/crear','EntradaController@create')->name('create.entrada');
Route::post('admin/entrada/crear','EntradaController@store')->name('store.entrada');
Route::get('admin/entrada/{id}','EntradaController@edit')->name('edit.entrada');
Route::patch('admin/entrada/{id}','EntradaController@update')->name('update.entrada');
Route::delete('admin/entradas/{id}','EntradaController@destroy')->name('destroy.entrada');

/*RUTA EQUIPO*/
Route::get('admin/equipos','EquipoController@index')->name('index.equipo');
Route::get('admin/equipo/crear','EquipoController@create')->name('create.equipo');
Route::post('admin/equipo/crear','EquipoController@store')->name('store.equipo');
Route::get('admin/equipo/{id}','EquipoController@edit')->name('edit.equipo');
Route::patch('admin/equipo/{id}','EquipoController@update')->name('update.equipo');
Route::delete('admin/equipo/{id}','EquipoController@destroy')->name('destroy.equipo');
//Ruta para eliminar todo
Route::post('admin/equipo/eliminarTodos/{id}','EquipoController@destroyTodos')->name('destroyTodos.equipo');

/*RUTA ENLACES*/
Route::get('admin/enlaces','EnlaceController@index')->name('index.enlace');
Route::get('admin/enlace/crear','EnlaceController@create')->name('create.enlace');
Route::post('admin/enlace/crear','EnlaceController@store')->name('store.enlace');
Route::get('admin/enlace/{id}','EnlaceController@edit')->name('edit.enlace');
Route::patch('admin/enlace/{id}','EnlaceController@update')->name('update.enlace');
Route::delete('admin/enlace/{id}','EnlaceController@destroy')->name('destroy.enlace');
//Ruta para eliminar todo
Route::post('admin/enlace/eliminarTodos/{id}','EnlaceController@destroyTodos')->name('destroyTodos.enlace');
/*RUTA GALERY*/
Route::get('admin/galeria','GaleriaController@index')->name('index.galeria');
Route::post('admin/galeria/crear','GaleriaController@store')->name('store.galeria');;
Route::delete('admin/galeria/{id}','GaleriaController@destroy')->name('destroy.galeria');
//Ruta para eliminar todo
Route::post('admin/galeria/eliminarTodos/{id}','GaleriaController@destroyTodos')->name('destroyTodos.galeria');

/*RUTA SERVICIO*/
Route::get('admin/servicio','ServicioController@index')->name('index.servicio');
Route::get('admin/servicio/crear','ServicioController@create')->name('create.servicio');
Route::post('admin/servicio/crear','ServicioController@store')->name('store.servicio');
Route::get('admin/servicio/{id}','ServicioController@edit')->name('edit.servicio');
Route::patch('admin/servicio/{id}','ServicioController@update')->name('update.servicio');
Route::delete('admin/servicio/{id}','ServicioController@destroy')->name('destroy.servicio');
//Ruta para eliminar todo
Route::post('admin/servicio/eliminarTodos/{id}','ServicioController@destroyTodos')->name('destroyTodos.servicio');

/*RUTA Propiedad*/
Route::get('admin/propiedad','PropiedadController@index')->name('index.propiedad');
Route::get('admin/propiedad/crear','PropiedadController@create')->name('create.propiedad');
Route::post('admin/propiedad/crear','PropiedadController@store')->name('store.propiedad');
Route::get('admin/propiedad/{id}','PropiedadController@edit')->name('edit.propiedad');
Route::patch('admin/propiedad/{id}','PropiedadController@update')->name('update.propiedad');
Route::delete('admin/propiedad/{id}','PropiedadController@destroy')->name('destroy.propiedad');
//Ruta para eliminar todo
Route::post('admin/propiedad/eliminarTodos/{id}','PropiedadController@destroyTodos')->name('destroyTodos.propiedad');

/*SECCION ONE*/
Route::get('admin/seccion_uno','SeccionUnoController@index')->name('index.seccion_uno');
Route::patch('admin/seccion_uno/{id}','SeccionUnoController@update')->name('update.seccion_uno');

/*SECCION TWO*/
Route::get('admin/seccion_dos','SeccionDosController@index')->name('index.seccion_dos');
Route::patch('admin/seccion_dos/{id}','SeccionDosController@update')->name('update.seccion_dos');

/*RUTA SLIDER*/
Route::get('admin/slider','SliderController@index')->name('index.slider');
Route::get('admin/slider/crear','SliderController@create')->name('create.slider');
Route::post('admin/slider/crear','SliderController@store')->name('store.slider');
Route::get('admin/slider/{id}','SliderController@edit')->name('edit.slider');
Route::patch('admin/slider/{id}','SliderController@update')->name('update.slider');
Route::delete('admin/slider/{id}','SliderController@destroy')->name('destroy.slider');
//Ruta para eliminar todo
Route::post('admin/slider/eliminarTodos/{id}','SliderController@destroyTodos')->name('destroyTodos.slider');

/*Blog*/
Route::get('admin/blog','BlogController@index')->name('index.blog');
Route::get('admin/blog/crear','BlogController@create')->name('create.blog');
Route::post('admin/blog/crear','BlogController@store')->name('store.blog');
Route::get('admin/blog/{id}','BlogController@edit')->name('edit.blog');
Route::patch('admin/blog/{id}','BlogController@update')->name('update.blog');
Route::delete('admin/blog/{id}','BlogController@destroy')->name('destroy.blog');
//Ruta para eliminar todo
Route::post('admin/blog/eliminarTodos/{id}','BlogController@destroyTodos')->name('destroyTodos.blog');


/* bandeja de MENSJAE */
Route::get('admin/mensajes','ContactoController@index')->name('index.contacto');

/* CAMBIAR PLANTISHAA*/
Route::get('admin/change/plantillas','PaginaController@change_theme')->name('change_theme');

/* ATUALIZAR(UPDATE) PLANTISHAA*/
Route::patch('admin/change/plantillas','PaginaController@update_theme')->name('update_theme');

/*RUTA ADMIN*/
Route::get('administrador/usuarios','AdminController@index')->name('index.usuarios');

/*RUTA PATTERNS */
Route::get('admin/fondos','ConfigGeneralController@select_fondo')->name('index.fondo');
Route::patch('admin/fondos/{id}','ConfigGeneralController@update_select_fondo')->name('update.fondo');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* ===> RUTA CONFIGURACiÓN DE ASPECTO */
Route::get('admin/aspecto', 'AspectoController@index') -> name("index.aspecto");
Route::post('admin/aspecto/config', 'AspectoController@config') -> name("index.aspecto.config");
Route::patch('admin/aspecto/update/{id}', 'AspectoController@updateAspecto') -> name("index.aspecto.update");
Route::patch('admin/aspecto/create', 'AspectoController@createAspecto') -> name("index.aspecto.create");


/* ===> RUTA CONFIGURACiÓN DE PERFIL */
Route::get('admin/perfil', 'PerfilController@index') -> name("index.perfil");
Route::post('admin/perfil/config', 'PerfilController@config') -> name("index.perfil.config");



// Route::post('admin/aspecto/config', 'AspectoController@config') -> name("index.aspecto.config");
