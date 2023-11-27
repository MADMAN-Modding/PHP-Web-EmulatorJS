<h1>Welcome to E.P.W.F.!</h1>
<h1>Also known as EmulatorJS, PHP, Web, Frontend</h1>
<h2>This project was made in order to allow people to easily host their own roms on their local network</h2>

<p>Running this project is not too complicated, all you need to do is host a web server such as apache, with php installed. Here is a list of how to install this on different operating systems</p>

<h3>Debian/Ubuntu or anything else that's based on Debian/Ubuntu should be the same</h3>

<h2>Installing Dependencies</h2>

<p>First update your repositories with the following command</p>

    sudo apt update

<p>Now install the required packages. Note, git is optional and samba, but both are usefull. Git is used to clone the repo and samba is used for remote acces to the computer, if you have access to the file system through another perfered method just use the second script</p>

    sudo apt install apache2 php samba git
  
    sudo apt install apache2 php

  <p>You can now connect to the Apache default page using the ip of the computer you installed this on, the command <b>ip a</b> will list your ip address</p>

  <h2>Configuring Samba</h2>

  <h2>Cloning the repository</h2>

  <p>The directory that holds the code is protected by root, for future please run the following command to set the correct permissions</p>

    sudo chmod 777 /var/www/html/ -R
