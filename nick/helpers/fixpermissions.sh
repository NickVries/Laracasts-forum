#!/usr/bin/env bash

docker-compose run --rm app chown -R $(id -u):$(id -g) .
docker-compose run --rm app chown -R www-data:www-data ./storage/ ./bootstrap/cache/
