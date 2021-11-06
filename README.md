# How To Code Well Podcast

## Requirements
- Docker
- Docker Compose
- Make

### Install

1) Create a .env.local in the root directory with the following variables
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
# Change howtocodewell-local.fm to what ever domain you have set in your host file
DOMAINS="howtocodewell-local.fm -> http://webserver"
FORCE_RENEW='false'
```

2) Install all the things
```bash
$ make install
```

3) Test the code
```bash
$ make test
```

### Run

1) Update the host file. On mac run the following
```bash
 sudo nano /etc/hosts
```
Add the following entry.
```bash
127.0.0.1 howtocodewell-local.fm
```
2) Save the host file.  On mac run the following
```bash
$ sudo killall -HUP mDNSResponder
```
3) Access the local site [https://howtocodewell-local.fm](https://howtocodewell-local.fm) Or use whatever custom domain you have given it

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