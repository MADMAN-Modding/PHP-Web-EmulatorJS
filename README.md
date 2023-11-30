<h1>Welcome to E.P.W.F.!</h1>
<h1>Also known as EmulatorJS, PHP, Web, Frontend</h1>
<h2>This project was made in order to allow people to easily host their own roms on their local network</h2>

<p>Running this project is not too complicated, all you need to do is host a web server such as apache, with php installed. Here is a list of how to install this on different operating systems.</p>

<h2>Windows</h2>

<h3>Installing Dependencies</h3>

<p>Installing PHP is a bit of an inaccuracy, on Windows all you have to do is <a href="https://windows.php.net/download#php-8.3">download it</a>. I recommend getting the .zip of the non thread safe. Once downloaded, extract the .zip file by right-clicking and press extract all. Now you can move this to whatever folder you want, or not, it doesn't matter.</p>

<h3>Adding PHP to the PATH (optional)</h3>

<h2>Debian/Ubuntu or anything else that's based on Debian/Ubuntu should be the same</h2>

<h3>Installing Dependencies</h3>

<p>First update your repositories with the following command</p>

    sudo apt update

<p>Now install the required packages. Note, git is optional and samba, but both are usefull. Git is used to clone the repo and samba is used for remote acces to the computer, if you have access to the file system through another perfered method just use the second command</p>

    sudo apt install apache2 php samba git

<p>This is the alternative command</p>
    
    sudo apt install apache2 php

  <p>You can now connect to the Apache default page using the ip of the computer you installed this on, the command <b>ip a</b> will list your ip address</p>

<h3>Configuring Samba</h3>

<p>By default, the smb.conf file in /etc/samba/ is very messy with comments and configs for samba. Since this isn't really need ed I like to just remove it and make my own, this is up to you as we are just simply adding a share to the file.</p>

    sudo rm /etc/samba/smb.conf

<p>Now that you have deleted your config file, or have just left it alone. Open it with the vim command or nano</p>

    nano /etc/samba/smb.conf

<p>Copy the next part into the config file, feel free to edit what's in bracket, comments, and guest setting</p>

    [EPFW]
        comment=A share for EPFW
        path = /var/ww/html
        guest ok = no
        browsable = yes
    
<p>If you set guest to yes than you should skip this step. Replace username with your username, you will use this to login to the share</p>

    smbpasswd -a username

<p>Run the following command to restart samba</p>

    sudo systemctl restart smb

<p>Try testing this connection, on a Windows machine, open file explorer and enter the following into the searchbar, make sure to replace the ip with the machine' ip and the name of the share with what you put in brackets</p>

    \\ip-address\EPFW

<p>On Linux or MacOS the command is a little different to enter</p>

    smb://ip-address/EPFW

<h3>Cloning the repository</h3>

<p>The directory that holds the code is protected by root, for future please run the following command to set the correct permissions</p>

    sudo chmod 777 /var/www/html/ -R

<p>Now cd into the directory and clone the repo</p>

    cd /var/www/html && git clone https://github.com/MADMAN-Modding/EPWF.git

<h3>Setting up the final parts</h3>

<p>If you were to try and login to the website as of now, it would simply display the apache installation succesful screen, we need to delete the index.html file so that it uses the index.php file</p>

    rm index.html

<p>Now the website should be accessable by the machines ip address, but no consoles or games will show as there aren't any in the appropriate folders. You need to have all of the games as of now, sorted by console. Make a folder called roms in the current directory</p>

    mkdir roms

<p>Now cd into the directory and make a folder for the respective games, check the <a>list</a> at the top for info on the folder structure.</p>

    cd roms

    mkdir consoleAbbreviatedName

<p>Once your games are in the correct folder, you should be able to click any console then click a game and you will be all set. Enjoy playing your games!</p>
