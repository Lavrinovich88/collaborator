.PHONY: build up down test composer-install start

start: build composer-install up

build:
	docker compose build

up:
	docker compose up -d

down:
	docker compose down

test:
	docker compose run --rm php vendor/bin/phpunit tests/Unit/services/

composer-install:
	docker compose run --rm php composer install