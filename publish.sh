BASEDIR=$(dirname "$0")
cd $BASEDIR

echo Updating files from server...
git pull
echo Adding changed files...
git add .
echo Committing changes...
git commit -m "automated publish"
echo Pushing changes to server..
git push
echo done
exit 0