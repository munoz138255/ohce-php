.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t ohce-php .

build-container:
	docker run -dt --name ohce-php -v .:/540/Boilerplate ohce-php
	docker exec ohce-php composer install

start:
	docker start ohce-php

test: start
	docker exec ohce-php ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it ohce-php /bin/bash

stop:
	docker stop ohce-php

clean: stop
	docker rm ohce-php
	rm -rf vendor
