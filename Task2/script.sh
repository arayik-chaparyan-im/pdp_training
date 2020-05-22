#!/bin/bash

myarray=( $(ps aux | grep chrome | awk ' { print $2 } ') )

echo ${#myarray[@]}


