#!/bin/bash -l

APP_ROOT=/app
REPO_NAME=howToCodeWellFM
LOCAL_APP=$APP_ROOT/$REPO_NAME
DOCKER_COMPOSE_FILE=$LOCAL_APP/docker-compose.yml

mkdir -p $APP_ROOT

GIT_REPO=git@github.com:howToCodeWell/howToCodeWellFM.git

git clone $GIT_REPO $LOCAL_APP

docker-compose -f $DOCKER_COMPOSE_FILE up -d
docker-compose -f $DOCKER_COMPOSE_FILE exec  jekyll jekyll build -s $TMP_GIT_CLONE