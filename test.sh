#!/bin/bash

sed -i 's/\btest\b/DONE/gI' test.txt

cp test.txt test.result.txt
