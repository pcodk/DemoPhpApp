FROM pcodk/poc-php:7.2-fpm as builder

COPY . /var/www/docroot

#We should add --no-dev but it fails for some reason
RUN mkdir var && composer install --verbose --prefer-dist --no-progress --no-interaction  --optimize-autoloader

# Change script permissions
RUN chmod +x /var/www/docroot/docker/App/init_k8s.sh

ARG GIT_REVISION

FROM pcodk/poc-php:7.2-fpm
LABEL vendor="Peytz & Co A/S"
LABEL author="Jan-Erik Revsbech"
COPY --from=builder /var/www/docroot/ /var/www/docroot

