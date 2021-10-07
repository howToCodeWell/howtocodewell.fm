ui-build:
	docker-compose pull node
ui-install:
	docker-compose run --rm -w /app --no-deps node bash -ci 'yarn install'
ui-upgrade:
	docker-compose run --rm -w /app --no-deps node bash -ci 'yarn upgrade'
ui-clear-yarn-cache:
	 docker-compose run --rm -w /app --no-deps node bash -ci 'yarn cache clean --all'
ui-dev:
	docker-compose run --rm -w /app --no-deps node bash -ci 'yarn run dev'
ui-purge:
	rm -Rf node_modules/*
composer-purge:
	rm -Rf vendor/*

enter:
	docker-compose exec webserver bash
build:
	docker-compose build
up:
	docker-compose up -d
db-create:
	docker-compose exec webserver php bin/console doctrine:database:create
db-migrate:
	docker-compose exec webserver php bin/console doctrine:migrations:migrate --no-interaction
db-drop:
	docker-compose exec webserver php bin/console doctrine:database:drop  --force --no-interaction

cache-clear:
	docker-compose exec webserver php bin/console cache:clear

install: build up db-create cache-clear ui-build ui-install ui-dev db-migrate import-feed

stop:
	docker-compose stop webserver
remove:
	docker-compose down
destroy:
	docker-compose down --rmi='all' -v

uninstall: db-drop stop destroy ui-purge composer-purge docker-prune

import-feed:
	docker-compose exec webserver bin/console app:rss-feed-importer

phpstan:
	docker-compose exec webserver ./vendor/bin/phpstan analyse
phpunit:
	docker-compose exec webserver php ./vendor/bin/phpunit
test: phpstan phpunit

docker-prune:
	docker system prune -a