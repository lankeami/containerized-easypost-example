# Easyposter
Dockerized proof of concept of calling the EasyPost API in PHP

## How to:
1. Run the container with an ENV
```
ENV=DEV docker-compose run --rm easyposter
```
1. Modify [test.php](./test.php) to check your tracking ids

## To Do:
1. Use [Slim](https://www.slimframework.com/) to turn this into an API
1. Use Slim to stand up a service that EasyPost can do webhooks to
