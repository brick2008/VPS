#!/bin/bash

PATH="/var/www/html/"

VNSTATI="/usr/bin/vnstati"

${VNSTATI} --headertext vnstati -ne -vs -o ${PATH}/vnstati-vs.png
${VNSTATI} -nh -ne -nl -d -o ${PATH}/vnstati-d.png
${VNSTATI} -nh -ne -nl -m -o ${PATH}/vnstati-m.png