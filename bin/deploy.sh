#!/bin/bash -l

REPO_NAME=howToCodeWellFM
APP_ROOT=$HOME/$REPO_NAME
GIT_REPO=git@github.com:howToCodeWell/howToCodeWellFM.git

git clone $GIT_REPO $APP_ROOT

cd $APP_ROOT

docker-compose up -d
docker-compose exec  jekyll jekyll build