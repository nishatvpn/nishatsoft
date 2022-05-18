#!/bin/bash
##
## Copyright (c) SNFX NET SOLUTION 2018. All Rights Reserved
##

status=$(wget "http://APILink/signin/script/ubuntu16/authKey.php?user=$username&password=$password&key=APIKey&prefix=ServerPrefix" -q -O -)
[ "$status" != '' ] && [ "$status" = "1" ] && echo $status && exit 0 || echo $status && exit 1