
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
- "illuminate/database": "*",
- "illuminate/events": "*",
- "chrisboulton/php-resque": "1.2.x"


### Default url now
- http://localhost:8000/ default site now
- http://localhost:8000/phpq/add ( add one fake job)
- http://localhost:8000/phpq ( show all jobs now)
- http://localhost:8000/api/common/1 ( api part use restful)

### PS
- plase uncomment once index.php \Phpq::up(); to create table stuff;