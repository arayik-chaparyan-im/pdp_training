#!/bin/bash
dir="$(cd "$(dirname "$0")" && pwd)"
cp $dir/test.txt $dir/test.result.txt
sed -i 's/test/DONE/g' $dir/test.result.txt

