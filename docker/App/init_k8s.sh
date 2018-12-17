#!/usr/bin/env bash

echo "******** Changing permissions ********"
echo "\n"
mkdir -p var
chmod -R 777 var

echo "******** Copy files to shared directory ********"
echo "\n"
cp -a . /application




