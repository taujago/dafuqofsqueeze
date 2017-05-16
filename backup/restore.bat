@echo off
mysql -u root --port=4418  simdeskel --force --verbose < %1%  
