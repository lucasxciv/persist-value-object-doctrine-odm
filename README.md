# Persist Value Object with Doctrine ODM

This Repository is an code example presented in the post of my blog [How to persist Value Object/Type with Doctrine ODM]().

## Running

### Requirements

- [Docker](https://docs.docker.com/install/)
- [Docker Compose](https://docs.docker.com/compose/install/)

### Execute

1. Start docker containers:
 
   `docker-compose up -d`
  
2. Execute example: 

   `docker exec -it persist-value-object-doctrine-odm-php php bin/run.php`
   
3. Access MongoDB database: 

   `docker exec -it persist-value-object-doctrine-odm-mongo mongo test_value_object`
   
4. Check the result: 

   `db.Product.find().pretty()`
