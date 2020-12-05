git -C ~/GoogleDrive/workspace/gayhomophobe.com/ add ~/GoogleDrive/workspace/gayhomophobe.com/
git -C ~/GoogleDrive/workspace/gayhomophobe.com/ commit -am "update"
git -C ~/GoogleDrive/workspace/gayhomophobe.com/ push
rsync -vrSzhPc --exclude="- .git" ~/GoogleDrive/workspace/gayhomophobe.com/ gayhomophobe@gayhomophobe.com:~/gayhomophobe.com
