#!/bin/bash
if [ "$1" == "failed" ]; then
  curl -s --user "api:$MAILGUN_API_KEY" \
    https://api.mailgun.net/v3/$DOMAIN_NAME/messages \
    -F from='CI <ci@$DOMAIN_NAME>' \
    -F to='mouylangpom@gmail.com' \
    -F to="$GITHUB_ACTOR@users.noreply.github.com" \
    -F subject='Build failed' \
    -F text='The latest build failed. Please check the CI logs.'
fi
