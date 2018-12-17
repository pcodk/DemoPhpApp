.PHONY: container push-container

container:
	docker build -t pcodk/masterclass-php -f docker/App/Dockerfile .

push-container:
	docker push pcodk/masterclass-php
