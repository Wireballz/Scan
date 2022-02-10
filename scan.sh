#!/bin/bash

current_time=$(date "+%Y.%m.%d-%H.%M.%S")

#files=$RANDOM
files=`date +%F_%H%M%S`
files1=$files.ppm

     # Note if the page being scanned is the 1st page, it will have a page number of ZERO

     #Next: Take the document name, File extension, and directory path as a string. Aftwards Convert the strings to the appropriate file paths below
directory='/var/www/scan/'$files



     #Will hold file path, document name followed by the page number





scanimage -d 'plustek:libusb:001:004' --resolution 300 -x 2550 -y 3300 > /var/www/scan/$files.ppm



#convert -density 300 $files1 -compress JPEG $files$'.pdf'

convert -density 300 $files1 -compress JPEG $files.pdf

rm $files*.ppm
