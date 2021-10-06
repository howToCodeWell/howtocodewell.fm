enter:
	docker-compose exec webserver bash
build:
	docker-compose build
up:
	docker-compose up -d
install: build up
stop:
	docker-compose stop webserver
remove:
	docker-compose down
destroy:
	docker-compose down --rmi='all' -v
uninstall: stop destroy
update-feed:
	docker-compose exec webserver bin/console app:rss-feed-importer

phpstan:
	docker-compose exec webserver ./vendor/bin/phpstan analyse