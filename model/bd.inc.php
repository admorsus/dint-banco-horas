<<<<<<< HEAD
<?php	

/*
*	Conexión a la base de datos
*	E:
*	S: conn (variable de tipo connection)
*	SQL:
*/
function connection() {
	return true;
}

/*
*	Comprueba login
*	E:
*	S: booleano: conexión correcta
*	SQL: select * from usuarios WHERE ...
*/
function login_ok()	{
	return true;
}

/*
*	Guardar el mensaje en la BD
*	E:
*	S:boolean: operación correcta
*	SQL: INSERT into Mensaje (texto) values (?);	SELECT idMensaje, texto, fecha, hora, fichero, telefono from Mensajes
*/
function guardar_mensaje() {
	return true;
}

/*
*	Funcion que modifica el perfil
*	E:
*	S:
*	SQL: UPDATE into usuario ...
*/
function perfil_modificado() {
	return true;
}

/*
*	Comprueba el máximo número de caracteres del texto del estado del 
* 	usuario, configurable 
*	E:
*	S: booleano: número correcto
*	SQL: 
*/
function maximo_caracteres_estado() {
	return true;
}

/*
*	Guarda el color seleccionado en el fichero de configuración
*	E:
*	S: c
*	SQL:
*/
function color_seleccionado() {
	return true;
}

/*
*	Comprueba el tamaño de la imagen seleccionada, el tamaño de la 
* 	imagen estara en el fichero de configuración
*	E:
*	S: booleano: tamaño correcto
*	SQL: 
*/
function tamaño_img() {
	return true;
}


/*
*	Función que guarda el chat en un fichero backup.txt
*	E:
*	S: booleano: guardado correctamente
*	SQL:
*/
function backup_chat() {
	return true;
}




?>
=======
<?php	

/*
*	Conexión a la base de datos
*	E:
*	S: conn (variable de tipo connection)
*	SQL:
*/
function connection() {
	return true;
}

/*
*	Comprueba login
*	E:
*	S: booleano: conexión correcta
*	SQL: select * from usuarios WHERE ...
*/
function login_ok()	{
	
	return true;
}

/*
*	Guardar el mensaje en la BD
*	E:
*	S:boolean: operación correcta
*	SQL: INSERT into Mensaje (texto) values (?);	SELECT idMensaje, texto, fecha, hora, fichero, telefono from Mensajes
*/
function guardar_mensaje() {
	return true;
}

/*
*	Funcion que modifica el perfil
*	E:
*	S:
*	SQL: UPDATE into usuario ...
*/
function perfil_modificado() {
	return true;
}

/*
*	Comprueba el máximo número de caracteres del texto del estado del 
* 	usuario, configurable 
*	E:
*	S: booleano: número correcto
*	SQL: 
*/
function maximo_caracteres_estado() {
	return true;
}

/*
*	Guarda el color seleccionado en el fichero de configuración
*	E:
*	S: 
*	SQL:

*/
function color_seleccionado() {
	return true;
}

/*
*	Comprueba el tamaño de la imagen seleccionada, el tamaño de la 
* 	imagen estara en el fichero de configuración
*	E:
*	S: booleano: tamaño correcto
*	SQL: 
*/
function tamaño_img() {
	return true;
}


/*
*	Función que guarda el chat en un fichero backup.txt
*	E:
*	S: booleano: guardado correctamente
*	SQL:
*/
function backup_chat() {
	return true;
}




?>
>>>>>>> 4d28f59db5720a99da1bc9a9e66a7b7f43fe19de
