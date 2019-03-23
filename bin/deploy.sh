#!/bin/bash -l

APP_ROOT=$HOME/app
REPO_NAME=howToCodeWellFM
LOCAL_APP=$APP_ROOT/$REPO_NAME
DOCKER_COMPOSE_FILE=$LOCAL_APP/docker-compose.yml

mkdir -p $APP_ROOT

GIT_REPO=git@github.com:howToCodeWell/howToCodeWellFM.git

git clone $GIT_REPO $LOCAL_APP

cd $LOCAL_APP

docker-compose up -d
docker-compose exec  jekyll jekyll build