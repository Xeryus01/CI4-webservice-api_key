# CI4-webservice-api_key

## Migrate database
php spark migrate

## To print JSON
get all item --> http://localhost:8080/api/get?api_key=

create item --> http://localhost:8080/api/create?api_key=

get item by id --> http://localhost:8080/api/get/(:num)?api_key=

delete item --> http://localhost:8080/api/delete/(:num)?api_key=
