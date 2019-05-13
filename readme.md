# Laravel 5.8 REST APi
This API is created using Laravel 5.8 API Resource. It has Users, Posts and Comments. Protected routes are also added. Protected routes are accessed via Passport access token.

#### Following are the Models
* User
* Post
* Comment

#### Usage
Clone the project via git clone or download the zip file.

##### .env
Copy contents of .env.example file to .env file. Create a database and connect your database in .env file.
##### Composer Install
cd into the project directory via terminal and run the following  command to install composer packages.
###### `composer install`
##### Generate Key
then run the following command to generate fresh key.
###### `php artisan key:generate`
##### Run Migration
then run the following command to create migrations in the databbase.
###### `php artisan migrate`
##### Passport Install
run the following command to install passport
###### `php artisan passport:install`
##### Make Auth System
then run the following command to generate the auth Scaffolding.
###### `php artisan make:auth`
##### Database Seeding
finally run the following command to seed the database with dummy content.
###### `php artisan db:seed`

### API EndPoints
##### User
* User GET `http://localhost:8000/api/v1/user`
##### Post
* Post GET All `http://localhost:8000/api/v1/posts`
* Post GET Single `http://localhost:8000/api/v1/posts/1`
* Post POST Create `http://localhost:8000/api/v1/posts`
* Post PUT Update `http://localhost:8000/api/v1/posts/1`
* Post DELETE destroy `http://localhost:8000/api/v1/posts/1`

Same For Comments.