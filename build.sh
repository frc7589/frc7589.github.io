#!/bin/sh
cd "$(dirname "$0")/php"
rm -r ../html/*

EF=""
for f in `ls *.inc.php`; do
	EF="$EF -ef $f"
done

python3 ../php2html.py -o ./ ../html $EF