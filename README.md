# How To Code Well Podcast

## Requirements
- Docker Machine
- Docker Compose
- Make

### Install

1) Create the Docker machine
```bash
$ docker-machine create howtocodewell-fm.local
```

2) Get the env vars
```bash
$ docker-machine env howtocodewell-fm.local
```

3) Evaluate the env vars to the shell
```bash
$ eval $(docker-machine env howtocodewell-fm.local)
```
5) Create a .env.local in the root directory with the following variables
```bash
PODCAST_FEED_URL='https://anchor.fm/s/2d0cded8/podcast/rss'
DATABASE_URL="sqlite:///%kernel.project_dir%/var/app.db"
EMAIL_TO="please@change.me"
SITE_TITLE="Your Site Title"
# Change to your mailer config
MAILER_DSN=null://null
# This can be local | staging | production
SSL_STAGE=local 
SSL_STORE=./infra/docker/dev/ssl_certs
# Change my-site-name.com to what ever domain you have set in your host file
DOMAINS="my-site-name.com -> http://webserver"
FORCE_RENEW='false'
```

6) Install all the things
```bash
$ make install
```

67) Test the code
```bash
$ make test
```

### Run
1) Get the Docker machine IP
```bash
$ docker-machine ip howtocodewell-fm.local
```
3) Update the host file. On mac run the following
```bash
 sudo nano /etc/hosts
```
Add the following entry.  Change `<IP>` with the IP from ` docker-machine ip howtocodewell-fm.local`
```bash
<IP> howtocodewell-fm.local
```
4) Save the host file.  On mac run the following
```bash
$ sudo killall -HUP mDNSResponder
```
5) Access the local site [https://howtocodewell-fm.local](https://howtocodewell-fm.local) Or use whatever custom domain you have given it

## Useful Commands
Build
```bash
$ make build
```
Install and run
```bash
$ make install
```
Stop the containers
```bash
$ make stop
```
Remove the containers and network
```bash
$ make down
```
Uninstall (Removes the images, network, volumes, containers, etc...)
```bash
$ make uninstall
```
Enter the webserver container in a Bash shell
```bash
$ make enter
```
Runs the tests
```bash
$ make test
```
Imports the RSS feed
```bash
$ make import-feed
```