# Foundershub RheinMain Startup Weekend

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e2a6c40c-a8b7-45d3-8677-0670597a4fb6/big.png)](https://insight.sensiolabs.com/projects/e2a6c40c-a8b7-45d3-8677-0670597a4fb6)

## Setup

This is a Symfony2-Project. See [their extensive documentation](http://symfony.com/doc/2.3/book/installation.html) on how to get this running.

In a nutshell:

    # Set up db
    su postgres
    psql
    > CREATE ROLE "swrm" PASSWORD 'somepass' NOSUPERUSER NOCREATEDB NOCREATEROLE INHERIT LOGIN;
    > CREATE DATABASE "swrm" OWNER "swrm";
    # Install
    php composer.phar install
    npm install
    # Fix permissions
    APACHEUSER=`ps aux | grep -E '[a]pache|[h]ttpd' | grep -v root | head -1 | cut -d\  -f1`
    sudo setfacl -R -m u:$APACHEUSER:rwX -m u:`whoami`:rwX app/cache app/logs
    sudo setfacl -dR -m u:$APACHEUSER:rwX -m u:`whoami`:rwX app/cache app/logs
    # Build assets
    app/console assets:install --symlink
    app/console assetic:dump
    # Init db
    app/console --env=prod doctrine:schema:update --force

