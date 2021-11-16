#!/usr/bin/env bash
clear
if [[ -n "$1" ]]; then
    classname="$1"
    php vendor/bin/phpunit --colors=auto src/${classname}/${classname}Test.php
else
    echo "Please specify the kata to test, e.g. : ./tester.sh HelloYou"
fi