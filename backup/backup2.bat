@echo off
echo SEDANG MELAKUKAN BACKUP. HARAP TUNGGU
echo JENDELA INI AKAN HILANG DENGAN SENDIRINYA SETELAH PROSES BACKUP SELESAI 
mysqldump -u root --port=3668  simdeskel  --verbose  --log-error=error.txt > tmp/backupme.sql
 