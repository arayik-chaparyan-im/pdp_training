#!/bin/sh
#Bash command(s) to show count of all Google Chrome processes:#
ps aux | grep google.chrome | wc -l

#Bash command(s) to read content of "test.txt" file, change all "test" keywords with "DONE" keyword and write in "test_result.txt" file:#
sed -e 's/test/done/gI' test.txt > test_result.txt
