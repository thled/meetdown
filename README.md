# MeetDown

![Version][version-badge]
[![Symfony][symfony-badge]][symfony]
[![Psalm][psalm-badge]][psalm]
[![PHPStan][phpstan-badge]][phpstan]

MeetDown is a MeetUp clone project for learning purposes.
The focus is on advanced software development concepts like
TDD, DDD, Hexagonal Architecture and CQRS.

## Requirements

### Production

- PHP 8.0
- Nginx 1.21
- MariaDB 10.6
- Elasticsearch 7.14

### Development

- [Docker][docker]
- [Docker-Compose][docker-compose]
- Free ports on host as defined in `.env`

## Installation

1. Clone this repository: `$ git clone git@github.com:thled/meetdown.git`
1. Change to project directory: `$ cd meetdown`
1. Copy .env for Docker-Compose: `$ cp .env.dist .env`
1. Build and start the docker containers: `$ docker-compose up -d`
1. Initialize the app: `$ docker-compose exec app composer bootstrap`

## Usage

- Access the application: `localhost:80`
- SSH into container: `$ docker-compose exec app sh`
- Manage DB with Adminer: `localhost:8080`
  - Start docker container: `$ docker run --network meetdown_default -p 8080:8080 -e ADMINER_DESIGN='dracula' adminer`
  - System: `MySQL`
  - Server: `db`
  - Username: `db`
  - Password: `db`
  - Database: `db`

## Code Quality

[![Psalm][psalm-badge]][psalm] [![PHPStan][phpstan-badge]][phpstan]

To ensure a high quality of the code base different tools are used to analyse, lint and fix code
which does not adhere to the standards (PSR, Symfony etc.).

- PHP-CS-Fixer: `$ rf` & `$ rl`
- Deptrac/Psalm/PHPStan: `$ ra`
- Continues Integration: `$ rc`

## Developing

### Tests

#### Usage

- Run whole test suite: `$ rt`
- Run test watcher: `$ rw`

## Contribute

Please do contribute! Issues and pull requests are welcome.

[version-badge]: https://img.shields.io/badge/version-0.0.0-blue.svg
[symfony-badge]: https://img.shields.io/badge/Symfony-5.3-blue.svg
[symfony]: https://symfony.com/releases/5.3
[psalm-badge]: https://img.shields.io/badge/Psalm-level%201-brightgreen.svg
[psalm]: https://github.com/vimeo/psalm
[phpstan-badge]: https://img.shields.io/badge/PHPStan-level%208-brightgreen.svg
[phpstan]: https://github.com/phpstan/phpstan
[docker]: https://docs.docker.com/install/
[docker-compose]: https://docs.docker.com/compose/install/

