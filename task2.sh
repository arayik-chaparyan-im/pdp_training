#!/bin/bash
echo "count of all Google Chrome processes: " 
ps aux | grep chrome | wc -l
