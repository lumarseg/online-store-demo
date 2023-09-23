#!/bin/bash

# Upload Template
aws s3 cp tiendaonline.yaml s3://lumarseg-cf-templates/tiendaonline/

# Update Stack
aws cloudformation update-stack \
  --stack-name tiendaonline \
  --template-url https://lumarseg-cf-templates.s3.amazonaws.com/tiendaonline/tiendaonline.yaml \
  --capabilities CAPABILITY_IAM

echo
echo Done !!!
echo

