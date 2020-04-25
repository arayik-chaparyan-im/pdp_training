#!/bin/sh
#Read content of "test.txt" file
cat test.txt

#Change all "test" keywords with "DONE" keyword and write in "test.result.txt" file
sed 's/[Tt][Ee][Ss][Tt]/DONE/g' test.txt > test.result.txt


