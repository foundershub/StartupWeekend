# app..me

## Setup

This is a Symfony2-Project. See [their extensive documentation](http://symfony.com/doc/2.3/book/installation.html) on how to get this running.

In a nutshell:

    php composer.phar install
    npm install
    # Fix permissions
    APACHEUSER=`ps aux | grep -E '[a]pache|[h]ttpd' | grep -v root | head -1 | cut -d\  -f1`
    sudo setfacl -R -m u:$APACHEUSER:rwX -m u:`whoami`:rwX app/cache app/logs
    sudo setfacl -dR -m u:$APACHEUSER:rwX -m u:`whoami`:rwX app/cache app/logs
    # Build assets
    app/console assets:install --symlink
    app/console assetic:dump

