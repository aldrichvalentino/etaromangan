<h1 align="center">
  <br>
  Eta Ro Mangan!
  <br>
  <br>
</h1>

<p align="center">
  <a href="https://travis-ci.org/aldrichvalentino/etaromangan"><img src="https://api.travis-ci.org/aldrichvalentino/etaromangan.svg?branch=master" alt="travis"></a>
  <a href="https://www.php-fig.org/psr/psr-2/"><img src="https://img.shields.io/badge/code--style-PSR2-blue.svg" alt="PSR2 Coding Standard for PHP"></a>
  <a href="https://david-dm.org/aldrichvalentino/etaromangan" title="dependencies status"><img src="https://david-dm.org/aldrichvalentino/etaromangan/status.svg"/></a>
  <a href="https://david-dm.org/aldrichvalentino/etaromangan?type=dev" title="devDependencies status"><img src="https://david-dm.org/aldrichvalentino/etaromangan/dev-status.svg"/></a>
</p>

<p align="center">
  This repository contains the Eta Ro Mangan! Web Application
</p>

---

## Installation
1. Clone this repo
2. Configure `.env.docker`
3. Run in your preferred server

## Running using Docker in development

Prerequisites: [Docker Engine](https://docs.docker.com/engine/installation/) and [Docker Compose](https://docs.docker.com/compose/install/) __must be installed__;

Internet access for pulling gradle dependencies and Docker images.

**Note: Docker commands might need root privileges/sudo.**

1. Navigate to the project directory.
2. Run `./scripts/init`. Docker will download gradle dependecies and build image docker based on Dockerfile.
3. Run `./scripts/start` to start the application and its supporting services (Nginx, Oracle). Docker will download images if necessary.
4. Voila you're done running docker!

### Note :

- Run `./scripts/shell` to get into PHP shell

- Run `docker-compose ps` to see running containers. Take note of the name of the container running the app service

- To stop the containers, do `CTRL + C` to get out of continous build and run `'./scripts/stop'`

- To remove the containers, run `docker-compose down`

- If the Dockerfile is modified, you will need to rebuild the Docker images by removing the containers and running `./scripts/init` again

---

## Keynote

<h2 align="center">
<br/>
ALWAYS FOLLOW CODING STANDARD PSR2
<br/>
<br/>
</h2>

### Command

- `./scripts/checkstyle` to see the differences with PSR2
- `./scripts/formatstyle` to auto-format code in PSR2 standard

---

## To Do

- Nothing at the moment
---

## Contributors
- Aldrich Valentino Halim (https://github.com/aldrichvalentino)
- Ray Andrew O.S. (https://github.com/rayandrews)
