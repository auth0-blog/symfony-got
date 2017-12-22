# Symfony App with Auth0 authentication

A basic Symfony application with examples of Auth0 Authentication included.

## Requirements

- [MySQL](https://dev.mysql.com/downloads/mysql/)
- [Composer](https://getcomposer.org/)

## Install

### Check out the app
```bash
$ git clone git@github.com:auth0-blog/symfony-got.git
```

### Change to app directory
```bash
$ cd symfony-got/
```

### Composer install and follow instructions
```bash
$ composer install
```

## Run app
```bash
$ SYMFONY__AUTH0__BASE_URL=https://<YOUR AUTH0 DOMAIN> \
  SYMFONY__AUTH0__CLIENT_ID=<YOUR AUTH0 CLIENT ID> \
  SYMFONY__AUTH0__CLIENT_SECRET=<YOUR AUTH0 CLIENT SECRET> \
  bin/console server:run
```