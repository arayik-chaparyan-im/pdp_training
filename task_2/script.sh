#!/bin/bash

export count=`ps -ef | grep chrome | wc -l` && echo "$(($count-1))"
