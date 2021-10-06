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