![image](https://github.com/nestorpedraza/prueba/assets/45646808/60887fe4-2661-46b4-91ab-2726cb496bad)


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

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
