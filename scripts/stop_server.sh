#!/bin/bash
isExistApp = `pgrep httpd`
if [[-n \ $ isExistApp]]; then
   service httpd restart
fi
