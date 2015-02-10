# regeneration-about
About package for regeneration

== CLI commands for this package ==
1) Run the following command in the root directory of your laravel installation:
php artisan controller:make NewController --bench=regeneration/about

2) Add the following line after the first php opening tag of the newly generated file inside the packages `controller` folder
namespace Regeneration\About\Controllers;

3) Run the following command in the root directory and your package directory
composer dump-autoload

=== Accessing admin area ===
Admin controller is restful, therefore has following pages available:
/about/manage/ 
/about/manage/create
/about/manage/{lobby_id}
/about/manage/{lobby_id}/edit