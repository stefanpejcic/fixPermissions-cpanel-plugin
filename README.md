## fixPermissions cpanel plugin

Fix permissions for each domain under a cpanel account

<img src="https://raw.githubusercontent.com/stefanpejcic/fixPermissions-cpanel-plugin/main/assets/screenshot.png"></img>

----------------------

### Currently the plugin can do the following:

#### main domain:

- change permissions to 750 and set user as owner
- change ownership over all files inside public_html
- change permissions for all directories to 755
- change permissions for all files to 644
- change permissions for all all .cgi and .pl files to 755
- change ownership for all .htaccess files

#### addon&subdomains:

- change permissions to 755 and set user as owner
- change permissions for all directories to 755
- change permissions for all files to 644
- change permissions for all all .cgi and .pl files to 755
- change ownership for all .htaccess files

----------------------

### Using another cpanel template?

Change the path to the fixperms.sh in index.live.php on line 38:
```/usr/local/cpanel/base/frontend/paper_lantern/fix/./fixperms.sh```

### Run the script for all cpanel accounts?

Use the -all flag:
```/usr/local/cpanel/base/frontend/paper_lantern/fix/./fixperms.sh -all```

----------------------

Based on https://github.com/PeachFlame/cPanel-fixperms
