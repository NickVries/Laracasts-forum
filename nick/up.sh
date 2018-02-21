#!/usr/bin/env bash

echo -e "\033[0;30;47m Starting containers \033[0m"
docker-compose up -d

echo "Forum server running on http://localhost:8080"

