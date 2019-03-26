# Howtocodewell Podcast

## Requirements
- Composer
- Docker
- Docker Machine
- Docker Compose

## Development
### Install

Build the Docker machine, image and container
```
$ docker-machine create howtocodewell.fm
$ docker-machine env howtocodewell.fm
$ eval $(docker-machine env howtocodewell.fm)
$ docker-compose -f docker-compose.dev.yml exec howtocodewell_fm_dev bin/sculpin generate --watch --server
```

Get the IP of the Docker Machine
```
$ docker-machine ip howtocodewell.fm
```
Now go to the browse and enter IP

## Logs
```
$ docker-compose -f docker-compose.dev.yml logs -f howtocodewell_fm_dev
```

Now go to the IP in the browser

## Production
### Deployment
```
$ git clone git@github.com:howToCodeWell/howToCodeWellFM.git howToCodeWellFM
$ chmod u+x howToCodeWellFM/bin/deploy.sh
$ ./howToCodeWellFM/bin/deploy.sh
```

