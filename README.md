# How To Code Well Podcast

## Requirements
- Docker Machine
- Docker Compose

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
5) Create a local .env

6) Spin up the webserver container
```bash
$ docker-compose up -d
```

### Run
1) Get the Docker machine IP
```bash
$ docker-machine ip howtocodewell-fm.local
```
3) Update the host file
On mac run the following
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
5) Access the local site [http://howtocodewell-fm.local](http://howtocodewell-fm.local)