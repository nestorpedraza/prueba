![image](https://github.com/nestorpedraza/prueba/assets/45646808/60887fe4-2661-46b4-91ab-2726cb496bad)

## Sistema TaskManamenget

Se utiliza  la version de Laravel 10: https://laravel.com/docs/10.x/releases
Plantilla utilizada sneat-1.0.0: https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/

## Instalacion 

correr en consola los siguientes comandos: 

npm install. 
php artisan migrate --seed
php artisan serve 

## Diagrama Entidad Relacion

![ER_diagrama](https://github.com/nestorpedraza/prueba/assets/45646808/8d72f9e1-aa85-4e69-96d4-86eefae268e4)

## Diccionario de datos

|tabla|columna_nombre|columna_defecto|columna_nulo|columna_tipo_dato|columna_longitud|columna_descripcion|
|-----|--------------|---------------|------------|-----------------|----------------|-------------------|
|comments|id||NO|bigint|20||
|failed_jobs|id||NO|bigint|20||
|password_reset_tokens|email||NO|varchar|255||
|proyects|id||NO|bigint|20||
|status|id||NO|bigint|20||
|tasks|id||NO|bigint|20||
|users|id||NO|bigint|20||
|comments|user_id||NO|bigint|20||
|failed_jobs|uuid||NO|varchar|255||
|password_reset_tokens|token||NO|varchar|255||
|proyects|user_id||NO|bigint|20||
|status|estado||NO|varchar|255||
|tasks|user_id||NO|bigint|20||
|users|name||NO|varchar|255||
|comments|task_id||NO|bigint|20||
|failed_jobs|connection||NO|text|65535||
|password_reset_tokens|created_at|NULL|YES|timestamp|||
|proyects|titulo||NO|varchar|255||
|status|created_at|NULL|YES|timestamp|||
|tasks|proyect_id||NO|bigint|20||
|users|email||NO|varchar|255||
|comments|comentario|NULL|YES|text|65535||
|failed_jobs|queue||NO|text|65535||
|proyects|descripcion|NULL|YES|text|65535||
|status|updated_at|NULL|YES|timestamp|||
|tasks|statu_id||NO|bigint|20||
|users|email_verified_at|NULL|YES|timestamp|||
|comments|created_at|NULL|YES|timestamp|||
|failed_jobs|payload||NO|longtext|4294967295||
|proyects|fecha_inicio||NO|date|||
|tasks|titulo||NO|varchar|255||
|users|password||NO|varchar|255||
|comments|updated_at|NULL|YES|timestamp|||
|failed_jobs|exception||NO|longtext|4294967295||
|proyects|created_at|NULL|YES|timestamp|||
|tasks|descripcion|NULL|YES|text|65535||
|users|remember_token|NULL|YES|varchar|100||
|comments|deleted_at|NULL|YES|timestamp|||
|failed_jobs|failed_at|current_timestamp()|NO|timestamp|||
|proyects|updated_at|NULL|YES|timestamp|||
|tasks|fecha_inicio||NO|date|||
|users|created_at|NULL|YES|timestamp|||
|proyects|deleted_at|NULL|YES|timestamp|||
|tasks|created_at|NULL|YES|timestamp|||
|users|updated_at|NULL|YES|timestamp|||
|tasks|updated_at|NULL|YES|timestamp|||
|tasks|deleted_at|NULL|YES|timestamp|||
