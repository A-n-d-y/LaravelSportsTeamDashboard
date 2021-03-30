
## Laravel Sports Team Dashboard

**WORK IN PROGRESS! Estimated completion: 30/03/21**

Key features:
- Create, read, update and delete teams via a dashboad
- Add players, including name and number
- Associate players to teams
- Set permission access to roles, permitting different user roles to list / view / edit / create / delete allowing a user to create teams and players.
- Project comes with preconfigured relationships, models, auth, seeders and migration files

## Screenshots

**Creating a player** <br>
![enter image description here](https://i.ibb.co/pynhJqc/Screenshot-2021-03-29-at-22-37-34.png)

**Displaying all players** <br>
![enter image description here](https://i.ibb.co/ch234DV/Screenshot-2021-03-29-at-23-08-45.png)

**View player details** <br>
![enter image description here](https://i.ibb.co/pJHT2nd/Screenshot-2021-03-29-at-23-08-56.png)

**View all teams** <br>
![enter image description here](https://i.ibb.co/TRh8xkn/Screenshot-2021-03-29-at-23-09-08.png)

**View dashboard roles** <br>
![enter image description here](https://i.ibb.co/RcP75J2/Screenshot-2021-03-29-at-23-09-47.png)

**Assign user roles** <br>
![enter image description here](https://i.ibb.co/sR3ww4L/Screenshot-2021-03-29-at-23-10-17.png)

## Routes
|||||
|--- |--- |--- |--- |
|POST|api/login|api.login|App\Http\Controllers\Api\AuthController@login|
|GET|api/user|api.user|Closure|
|GET|api/roles|api.roles.index|App\Http\Controllers\Api\RoleController@index|
|POST|api/roles|api.roles.store|App\Http\Controllers\Api\RoleController@store|
|GET|api/roles/{role}|api.roles.show|App\Http\Controllers\Api\RoleController@show|
|PUT|api/roles/{role}|api.roles.update|App\Http\Controllers\Api\RoleController@update|
|DELETE|api/roles/{role}|api.roles.destroy|App\Http\Controllers\Api\RoleController@destroy|
|GET|api/permissions|api.permissions.index|App\Http\Controllers\Api\PermissionController@index|
|POST|api/permissions|api.permissions.store|App\Http\Controllers\Api\PermissionController@store|
|GET|api/permissions/{permission}|api.permissions.show|App\Http\Controllers\Api\PermissionController@show|
|PUT|api/permissions/{permission}|api.permissions.update|App\Http\Controllers\Api\PermissionController@update|
|DELETE|api/permissions/{permission}|api.permissions.destroy|App\Http\Controllers\Api\PermissionController@destroy|
|GET|api/players|api.players.index|App\Http\Controllers\Api\PlayerController@index|
|POST|api/players|api.players.store|App\Http\Controllers\Api\PlayerController@store|
|GET|api/players/{player}|api.players.show|App\Http\Controllers\Api\PlayerController@show|
|PUT|api/players/{player}|api.players.update|App\Http\Controllers\Api\PlayerController@update|
|DELETE|api/players/{player}|api.players.destroy|App\Http\Controllers\Api\PlayerController@destroy|
|GET|api/teams|api.teams.index|App\Http\Controllers\Api\TeamController@index|
|POST|api/teams|api.teams.store|App\Http\Controllers\Api\TeamController@store|
|GET|api/teams/{team}|api.teams.show|App\Http\Controllers\Api\TeamController@show|
|PUT|api/teams/{team}|api.teams.update|App\Http\Controllers\Api\TeamController@update|
|DELETE|api/teams/{team}|api.teams.destroy|App\Http\Controllers\Api\TeamController@destroy|
|GET|api/teams/{team}/players|api.teams.players.index|App\Http\Controllers\Api\TeamPlayersController@index|
|POST|api/teams/{team}/players|api.teams.players.store|App\Http\Controllers\Api\TeamPlayersController@store|
|GET|/||Closure|
|GET|routes||Closure|
|GET|login|login|App\Http\Controllers\Auth\LoginController@showLoginForm|
|POST|login||App\Http\Controllers\Auth\LoginController@login|
|POST|logout|logout|App\Http\Controllers\Auth\LoginController@logout|
|GET|register|register|App\Http\Controllers\Auth\RegisterController@showRegistrationForm|
|POST|register||App\Http\Controllers\Auth\RegisterController@register|
|GET|password/reset|password.request|App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm|
|POST|password/email|password.email|App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail|
|GET|password/reset/{token}|password.reset|App\Http\Controllers\Auth\ResetPasswordController@showResetForm|
|POST|password/reset|password.update|App\Http\Controllers\Auth\ResetPasswordController@reset|
|GET|password/confirm|password.confirm|App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm|
|POST|password/confirm||App\Http\Controllers\Auth\ConfirmPasswordController@confirm|
|GET|home|home|App\Http\Controllers\HomeController@index|
|GET|roles|roles.index|App\Http\Controllers\RoleController@index|
|GET|roles/create|roles.create|App\Http\Controllers\RoleController@create|
|POST|roles|roles.store|App\Http\Controllers\RoleController@store|
|GET|roles/{role}|roles.show|App\Http\Controllers\RoleController@show|
|GET|roles/{role}/edit|roles.edit|App\Http\Controllers\RoleController@edit|
|PUT|roles/{role}|roles.update|App\Http\Controllers\RoleController@update|
|DELETE|roles/{role}|roles.destroy|App\Http\Controllers\RoleController@destroy|
|GET|permissions|permissions.index|App\Http\Controllers\PermissionController@index|
|GET|permissions/create|permissions.create|App\Http\Controllers\PermissionController@create|
|POST|permissions|permissions.store|App\Http\Controllers\PermissionController@store|
|GET|permissions/{permission}|permissions.show|App\Http\Controllers\PermissionController@show|
|GET|permissions/{permission}/edit|permissions.edit|App\Http\Controllers\PermissionController@edit|
|PUT|permissions/{permission}|permissions.update|App\Http\Controllers\PermissionController@update|
|DELETE|permissions/{permission}|permissions.destroy|App\Http\Controllers\PermissionController@destroy|
|GET|players|players.index|App\Http\Controllers\PlayerController@index|
|GET|players/create|players.create|App\Http\Controllers\PlayerController@create|
|POST|players|players.store|App\Http\Controllers\PlayerController@store|
|GET|players/{player}|players.show|App\Http\Controllers\PlayerController@show|
|GET|players/{player}/edit|players.edit|App\Http\Controllers\PlayerController@edit|
|PUT|players/{player}|players.update|App\Http\Controllers\PlayerController@update|
|DELETE|players/{player}|players.destroy|App\Http\Controllers\PlayerController@destroy|
|GET|teams|teams.index|App\Http\Controllers\TeamController@index|
|GET|teams/create|teams.create|App\Http\Controllers\TeamController@create|
|POST|teams|teams.store|App\Http\Controllers\TeamController@store|
|GET|teams/{team}|teams.show|App\Http\Controllers\TeamController@show|
|GET|teams/{team}/edit|teams.edit|App\Http\Controllers\TeamController@edit|
|PUT|teams/{team}|teams.update|App\Http\Controllers\TeamController@update|
|DELETE|teams/{team}|teams.destroy|App\Http\Controllers\TeamController@destroy|

