# How To Code Well Podcast
[![Build Status](https://travis-ci.com/howToCodeWell/howToCodeWellFM.svg?branch=master)](https://travis-ci.com/howToCodeWell/howToCodeWellFM)

## Requirements
- Composer
- Docker
- Docker Machine
- Docker Compose

### Install

Build the Docker machine, image and container
```
$ docker-machine create howtocodewell.fm
$ docker-machine env howtocodewell.fm
$ eval $(docker-machine env howtocodewell.fm)
```
### Configure
Copy .env.dist to .env and update based on environment
```
$ cp .env.dist .env
$ vi .env
```
### Build the site 
```
$ docker-compose -f docker-compose.yml exec howtocodewell_fm bin/sculpin generate --watch --server
```

Get the IP of the Docker Machine
```
$ docker-machine ip howtocodewell.fm
```
Add the IP as a local host entry
```
$ sudo nano /etc/hosts
```
Use howtocodewellfm.com as the hostname or whatever is set in $DOMAINS in .env 

Now go to the browse and `https://howtocodewellfm.com` (This is local dev site)

## Logs
```
$ docker-compose -f docker-compose.yml logs -f howtocodewell_fm
```
