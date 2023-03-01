# Simple starter Web-project for PHP Phalcon

## Description
- 🦅 Phalcon framework version [5.1.4](https://docs.phalcon.io/5.0/en/introduction)
- 🐘 PHP 8.1
- 🐛 Xdebug 3
- 🗄 MySql 8

### Configuration
⚠️ You need at least 2GB of memory for Docker.

to build:
```shell
docker-compose build
```

to start:
```shell
docker-compose up
```

and go to web 🕸: 
```
http://localhost:80
```

## PHP Fixer
```
docker exec -it phalcon-php bash -c "vendor/bin/php-cs-fixer fix"
```

## Phalcon 5 Autocomplete
⚙️ **Settings > Plugins > Marketplace**

Search: _Phalcon 5 Autocomplete_

## Xdebug
> [How to install and configure PHPStorm for Xdebug.](docs/xdebug/INSTALL.md)
