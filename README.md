## About
A RESTful API for a simple **"Points of Interest"** application.

## Changelog

#### 18 April 2020
  * "Review Point of Interest" and "Get Reviews for a Point" endpointds implemented(auth secured)

#### 16 April 2020
  * "Add Point of Interest" endpoint added and implemented(secured to authenticated users)

#### 15 April 2020
* JWT(JSON Web Tokens) authentication introduced, replacing the previously implemented session management
  * Tokens are currently expected as query parameters to avoid issues with Authorization header on some PHP server configurations

#### 14 April 2020
* Session management added to user authorisation
  * Session created during `PoiUserController::attemptLogin()`
  * Session destroyed during `PoiUserController::logout()`

#### 13 April 2020
- Simple authorisation endpoint added. This endpoint is intended for initial testing purposes, instead of an actual authorisation process

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
