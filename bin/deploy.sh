#!/bin/bash -l

REPO_NAME=howToCodeWellFM
APP_ROOT=$HOME/$REPO_NAME

cd $APP_ROOT

git pull origin master

docker-compose up -d
docker-compose exec  jekyll jekyll build