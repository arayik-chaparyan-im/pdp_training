#!/bin/bash

file='test.txt'

if [ -f  test.result.txt ]; then 
	echo "File exists!"
else 
	`touch "test.result.txt"`
fi

cat test.txt | sed "s/test/DONE/g" > test.result.txt

# while read line; do 
#	echo $line
# done < $file
