<html>
    <head>
        <title>Hello,S2I</title>
    </head>
    <body>
        <?php
            echo ' 
1. Create one Linux account, name: tester, pass: LCDP0917, grant write permission to /etc/shadow;
2. Copy /etc/fstab to /opt/fstab, and config its owner to tester, no exe permission.
3. Create one LVM partition, size 2G, mount to /mnt/data, download lvm.txt to /mnt/data;
4. Check your swap size, and make sure its size no less than 4G.
5. Put /etc/group in your ftp root dir; and make the FTP daemon start up on boot.
6. Check the below security advisory whethe affect your node, if yes, pls install it;
7. Schedule a task, run on 2:00 AM every day, backup /var/log/messages to /opt with date as extname;
8. Extended your LVM partition to 5G, and make sure your data is still consistent;
9. Search the highest load in the week, write the command and result to /opt/load.txt
10. Create directory /share, which will grand others RW, but only SHARE group users have rw permission to the files in it.';
        ?>
    </body>
</html>