#! /bin/sh
#
# Prepares theme for publishing

rm Dazzling.zip
zip -r Dazzling.zip * -x ".git" ".gitignore" "Gruntfile.js" "publish.sh" "Dazzling.sublime-project"
echo "Theme zipped for publishing"