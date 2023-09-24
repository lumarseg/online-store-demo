#!/bin/bash

# Compress the "db" folder into db-v2.tar.gz file and display progress.
tar zcfv db-v2.tar.gz db/

# Upload the db-v2.tar.gz file to an Amazon S3 bucket.
aws s3 cp db-v2.tar.gz s3://lumarseg-onlinestore-pub/ --acl public-read

# Remove file
rm db-v2.tar.gz

echo
echo Done !!!
echo

