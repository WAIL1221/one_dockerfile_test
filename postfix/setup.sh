#!/bin/bash

echo "[smtp.gmail.com]:587 wail123@gmail.com:WAIL20004" > /etc/postfix/sasl_passwd
postmap /etc/postfix/sasl_passwd
chown root:root /etc/postfix/sasl_passwd /etc/postfix/sasl_passwd.db
chmod 600 /etc/postfix/sasl_passwd /etc/postfix/sasl_passwd.db
