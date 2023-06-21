# Persist Value Object with Doctrine ODM

This repository is a code example presented in my blog post [How to persist Value Object with Doctrine ODM](https://whoami.lucasxciv.dev/blog/how-to-persist-value-object-with-doctrine-odm/).

## Running

### Requirements

- [Docker](https://docs.docker.com/install/)
- [Docker Compose](https://docs.docker.com/compose/install/)

### Execute

1. Start docker containers:
 
   `docker-compose up -d`
 
2. Install Composer dependencies:

   `docker exec -it persist-value-object-doctrine-odm-php composer install`
 
3. Execute example: 

   `docker exec -it persist-value-object-doctrine-odm-php php bin/run.php`
   
4. Access MongoDB database: 

   `docker exec -it persist-value-object-doctrine-odm-mongo mongo test_value_object`
   
5. Check the result: 

   `db.Product.find().pretty()`
