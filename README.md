# EasyPoster
Proof of concept app for tracking package delivery via EasyPost

## How does this work?
1. [Install docker](https://docs.docker.com/)
1. Initiate the [EasyPost Submodule](https://github.com/EasyPost/easypost-php)
   ```
   git submodule update --init --recursive
   ```
1. Run the compose file with a specific ENV (`PROD` or `DEV`)
   ```
   ENV=DEV docker-compose run --rm easyposter
   ```
1. Modify the main function in [test.php](./easyposter/test.php) as necessary
1. Rerun

## To Do:
1. Use [Slim](https://www.slimframework.com/) to build an API to use the EasyPost functionality
1. Use Slim to create webhooks that EasyPost could post back to
