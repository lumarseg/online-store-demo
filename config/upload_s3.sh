#!/bin/bash

# Compress folders into tar.gz files and display progress.
tar zcfv cafe-v2.tar.gz cafe/
echo
tar zcfv db-v2.tar.gz db/
echo
tar zcfv setup-v2.tar.gz setup/
echo

# Upload the tar.gz files to an Amazon S3 bucket.
aws s3 cp cafe-v2.tar.gz s3://lumarseg-onlinestore-pub/ --acl public-read
aws s3 cp db-v2.tar.gz s3://lumarseg-onlinestore-pub/ --acl public-read
aws s3 cp setup-v2.tar.gz s3://lumarseg-onlinestore-pub/ --acl public-read

# Remove the tar.gz files
rm cafe-v2.tar.gz
rm db-v2.tar.gz
rm setup-v2.tar.gz

echo
echo Done !!!
echo

