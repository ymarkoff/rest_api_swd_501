## About
A RESTful API for a simple **"Points of Interest"** application.

## Changelog
#### 14 April 2020
* Session management added to user authorisation
  * Session created during `PoiUserController::attemptLogin()`
  * Session destroyed during `PoiUserController::logout()`

#### 13 April 2020
- Simple authorisation endpoint added. This endpoint is intended for initial testing purposes, instead of an actual authorisation process

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
