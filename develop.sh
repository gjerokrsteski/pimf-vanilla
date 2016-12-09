#!/usr/bin/env bash

docker build -t pimf-vanilla-app .
docker run -d -p 1337:1337 pimf-vanilla-app
