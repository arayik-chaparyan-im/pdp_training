#!/bin/sh
array=( $(ps aux | grep chrome | awk ' { print $2 } ') )
echo "${#array[@]}"

