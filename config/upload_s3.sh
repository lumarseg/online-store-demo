#!/bin/bash

# Compress folders into tar.gz files and display progress.
tar zcfv store.tar.gz store/
echo
tar zcfv db.tar.gz db/
echo
tar zcfv setup.tar.gz setup/
echo

# Upload the tar.gz files to an Amazon S3 bucket.
aws s3 cp store.tar.gz s3://lumarseg-onlinestore-pub/ --acl public-read
aws s3 cp db.tar.gz s3://lumarseg-onlinestore-pub/ --acl public-read
aws s3 cp setup.tar.gz s3://lumarseg-onlinestore-pub/ --acl public-read

# Remove the tar.gz files
rm store.tar.gz
rm db.tar.gz
rm setup.tar.gz

echo
echo Done !!!
echo

