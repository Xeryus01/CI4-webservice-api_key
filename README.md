# CI4-webservice-api_key

## Migrate database
php spark migrate
OPTIONAL  
    5. Database pakai migration
    
    - php spark migrate
    - php spark db:seed DataSeeder
OR  
    5. Import DB dari ...\riset5\new.sql

## To print JSON
get all item --> http://localhost:8080/api/get?api_key={:num}

create item --> http://localhost:8080/api/create?api_key={:mum}

get item by id --> http://localhost:8080/api/get/(:num)?api_key={:num}

delete item --> http://localhost:8080/api/delete/(:num)?api_key={:num}
