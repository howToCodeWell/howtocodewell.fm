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

install: build up db-create db-migrate import-feed
stop:
	docker-compose stop webserver
remove:
	docker-compose down
destroy:
	docker-compose down --rmi='all' -v

uninstall: db-drop stop destroy docker-prune

import-feed:
	docker-compose exec webserver bin/console app:rss-feed-importer

phpstan:
	docker-compose exec webserver ./vendor/bin/phpstan analyse
phpunit:
	docker-compose exec webserver php ./vendor/bin/phpunit
test: phpstan phpunit

docker-prune:
	docker system prune -a