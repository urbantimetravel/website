#!/bin/sh

npm run prod
./vendor/bin/jigsaw build production
echo www.urbantimetravel.com > build_production/CNAME
git add -f build_production
git commit -m "Build for deploy"
git subtree split --prefix build_production -b gh-pages
git push -f origin gh-pages:gh-pages
git branch -D gh-pages
git reset --hard origin/master
