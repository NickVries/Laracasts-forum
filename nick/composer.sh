#!/usr/bin/env bash

docker-compose exec app composer "$@"

./nick/helpers/fixpermissions.sh