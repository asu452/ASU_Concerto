#!/bin/bash
#
# Server backup to github
#
# github repository asu452/ASU_Concerto
#
# git@github.com:asu452/ASU_Concerto.git
# https://github.com/asu452/ASU_Concerto.git


# change to the github backup directory
cd /home/ubuntu/github_backup

# make git check with the server to be sure the files in the directory are current
git checkout master
git pull origin master

# create a mysql backup of the concerto DB
/home/ubuntu/github_backup/mysqlbackup.sh

# copy all of the website to the backup directory for git to store in the repository
#cp -R /var/www /home/ubuntu/github_backup
rsync -r /var/www /home/ubuntu/github_backup

# add all of the files to check against the repository
git add .

# create a commit to get ready to send to github
git commit -m "Automated Backup"

# upload commit to github
git push origin master
