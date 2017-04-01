### Fatfree

I love to use fatfree framework, simple and good enough to build small or large projects.
Forked and create this resp , because it is quite hard to start with 0.

I make some change in the repo;
- Add Basic Folder Structure.
- Add Laravel illuminate ORM ( if you have no join table , plz use orginal ORM)
- Add Php-Resque ( now you can do some worker task )
- Add Docker (to fast deploy this project , developing in your computer and deploy to server.)
- Add some basic test controller and model , so you can follow

**
For Detail please check https://github.com/bcosca/fatfree

### Base Structure

- app 
-- configs 
-- controllers
-- dict
-- models
-- views
-- jobs ( worker jobs)
- conf/nginx (docker's things)
- docker (plz check richarvey/nginx-php-fpm:latest , redis , mysql)
- lib (fatfree framework core)
- logs ( log folder)
- public (public folder /var/www)
- scripts (docker's things)
- vendor (composer library)

### Docker 
- 1 php nginx 
- 1 mysql
- 1 redis

### Different ( add new orm and q services)
- "illuminate/database": "*",           // https://github.com/illuminate/database
- "illuminate/events": "*",
- "chrisboulton/php-resque": "1.2.x"   // https://github.com/chrisboulton/php-resque


### Default url now
- http://localhost:8000/ default site now
- http://localhost:8000/phpq/add ( add one fake job)
- http://localhost:8000/phpq ( show all jobs now)
- http://localhost:8000/api/common/1 ( api part use restful)

### PS
- plase uncomment once index.php \Phpq::up(); to create table stuff;