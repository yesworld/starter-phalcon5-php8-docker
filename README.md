# Simple starter Web-project for PHP Phalcon

## Description
- 🦅 Phalcon [5.2.1](https://docs.phalcon.io/5.0/en/introduction)
- 🐘 PHP 8.2.4
- 🐛 Xdebug 3
- 🗄 MySql 8
- 🚧 PHPUnit 10

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

## PHPUnit - PHPStorm settings
> [Setting PHPStorm](docs/phpunity/SETTING.md)

```shell
docker exec -it phalcon-php bash -c "vendor/bin/phpunit tests/Functional"
```

```shell
docker exec -it phalcon-php bash -c "vendor/bin/phpunit tests/Units"
```

## Troubleshooting with Windows

If you get an error like this when starting Docker.
> [phalcon-php | exec /usr/local/bin/entrypoint.sh: no such file or directory](docs/issues/INDEX.md)
