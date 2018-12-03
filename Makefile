NAME = kongkow.nusantara

.PHONY: mysql-console
mysql-console:
	docker exec -i -t kongkownusantara_mysql_1_88a2855170d1 /bin/bash

.PHONY: php-console
php-console:
	docker exec -i -t kongkownusantara_php-fpm_1_dd062411489c /bin/bash

.PHONY: build
build:
	docker-compose build

.PHONY: stop
stop:
	docker-compose down

.PHONY: kill
kill:
	docker-compose kill

.PHONY: start
start:
	docker-compose up -d

.PHONY: restart
restart:
	docker-compose down && docker-compose up -d
