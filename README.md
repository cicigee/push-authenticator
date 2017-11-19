# push-authenticator
Authenticate to SSH using public keys and Pushover push notifications

How it works:
When logging in to an ssh server with a ssh key, pushover notification will be sent, and the url has to be visited to allow access. If this is not done before timeout, the connection will be closed.

Requirements:
- Web server directory access
- Pushover
  Android: https://play.google.com/store/apps/details?id=net.superblock.pushover&hl=en
  iOS: https://itunes.apple.com/us/app/pushover-notifications/id506088175?mt=8
- Redis
- OpenSSH

Optional:
- Client certificate for $approval url security 

Installation:
- add authorize script to /opt/own
- create private key
- add command + key public hash to authorized_keys
- configure server to rewrite pointed at $approval_url to run au.php
- install redis
- customize config file and place in /opt/own
