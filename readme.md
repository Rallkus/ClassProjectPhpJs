"Taste" es una aplicación web que ofrece un servicio amplio a sus clientes, además de ser de fácil uso. Su estructura es toda MVC y está construida sobre una
plantilla.

Tenemos un home, la página principal de la aplicación a la que casi siempre seremos redirigidos después de casi cualquier operación, un profile al que
solo podemos acceder logueados (y si no tenemos cuenta en el login hay un link al register); hay un CRUD (solo para admins) de recetas con validación
tanto en js como php.

Tenemos también la opción de buscar en diversas zonas del país cualquier tipo de restaurante asociado a la api de yelp y una sección de cocina en la que
hay diversos productos que puedes comprar (solo si estás logueado); estos productos son guardados en localstorage y se los enviamos a php a través de ajax
el cual (php) comprueba que la cantidad es un número superior a 0 y lo busca en la base de datos (el producto) para obtener el precio y que el cliente
pueda efectuar su compra.


Como extra, tanto el login como el módulo de restaurants tiene para cada php un js asociado únicamente, y cada módulo tiene su propio top page en /view/inc.

El nombre de usuario/email/password se pueden cambiar en el profile (obviamente comprobando que la password antigua es esa y que el corre/username no estén
  en uso ya).

En la base de datos guardo en la tabla "compras" lo que viene a ser la factura y cada producto en la tabla "líneas" que depende de factura.

A las recetas puedes ponerle imágenes y se guardan en la aplicación(/module/recipe/view/uploads).

El usuario que se loguea y toda su información exceptuando la contraseña se guarda en $SESSION.

El admin puede borrar todas las recetas de golpe sin tener que ir una a una con un simple botón.

La base de datos está guardadada en /DB y actualizada.

Hay 3 tipos de usuarios: no registrados, clientes y admin (obviamente el que tiene más permisos es el admin).

La única forma de crear un admin es que se modifique el tipo de usuario de un cliente y se le cambie a admin.

Datos de cuenta de un admin:
-email: serhuegi@gmail.com
-username: admin
-pass: admin

Datos de cuenta de un usuario normal:
-email: a@gmail.com
-username: d
-pass: d 
