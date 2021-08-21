#!/bin/sh
cd cbps-db
git config --global user.name "CsvUpdater"
git config --global user.email "psp1080p@googlemail.com"


git checkout -b $1
git commit -a -m $1
git push https://CsvUpdater:<REDACTED>@github.com/KuromeSan/cbps-db.git $1

cd ..

rm -rf cbps-db