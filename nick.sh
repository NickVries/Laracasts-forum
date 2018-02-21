#!/usr/bin/env bash
set -eo pipefail

# run commands
if [ $# -gt 0 ]; then
  if [ -f "nick/$1.sh" ]; then
    SCRIPT="$1"
    shift 1
    ./nick/${SCRIPT}.sh "$@"
  else
    docker-compose "$@"
  fi
else
  docker-compose ps
fi

