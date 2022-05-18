#!/bin/bash
clear
chmod +x /etc/openvpn/active.sh
bash -f /etc/openvpn/active.sh
sleep 2
clear
chmod +x /etc/openvpn/inactive.sh
bash -f /etc/openvpn/inactive.sh
sleep 2
clear
chmod +x /etc/openvpn/freeze.sh
bash -f /etc/openvpn/freeze.sh
sleep 2
clear
chmod +x /etc/openvpn/delete.sh
bash -f /etc/openvpn/delete.sh
sleep 2
clear
chmod +x /etc/openvpn/userupdate.sh
bash -f /etc/openvpn/userupdate.sh
sleep 2
clear
chmod +x /etc/$Filename_alias.cron.php
php -q /etc/$Filename_alias.cron.php
sleep 2
clear