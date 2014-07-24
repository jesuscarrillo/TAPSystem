@echo off
title TAP Server conf

set hostPath=%systemroot%\system32\drivers\etc\hosts

echo # >> %hostPath%
echo # >> %hostPath%
echo #TAPSystem settings >> %hostPath%
echo #DBSettings >> %hostPath%
echo 127.0.0.1	tapserver.local >> %hostPath%
echo #System solve address >> %hostPath%
echo 127.0.0.1	tapsystem.com >> %hostPath%
echo 127.0.0.1	www.tapsystem.com >> %hostPath%

pause