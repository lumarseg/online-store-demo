#!/bin/bash

# Upload Template
aws s3 cp online-store.yaml s3://lumarseg-cf-templates/online-store/

# Create Stack
aws cloudformation create-stack \
  --stack-name online-store \
  --template-url https://lumarseg-cf-templates.s3.amazonaws.com/online-store/online-store.yaml \
  --capabilities CAPABILITY_NAMED_IAM

echo
echo Done !!!
echo

