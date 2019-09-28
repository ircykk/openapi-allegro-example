#!/bin/sh

docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i https://developer.allegro.pl/swagger.yaml -g php -o ./sdk 