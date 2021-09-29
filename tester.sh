#!/usr/bin/env bash
clear
if [[ -n "$1" ]]; then
    classname="$1"
    vendor/bin/phpunit src/${classname}/${classname}Test.php
else
    echo "Please specify the kata to test, e.g. : ./tester.sh HelloYou"
fi