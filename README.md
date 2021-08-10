# Indigitous #HACK Theme

## Installation
1. Install packages: `npm i`
2. Install composer dependencies: `composer install`
3. Copy **.env.sample** to **.env** and adjust settings to your environment

## Environment
I use [Lando](https://lando.dev/download/) for my local environment, available for both Mac and PC

Lando will require a **.lando.yml** file, this is a copy of recipe I use:

```
name: hack.local
recipe: wordpress
config:
  php: '7.4'
  webroot: www
  via: apache
services:
  database:
    type: mariadb
    portforward: 3410
  appserver:
    run_as_root:
      - "apt-get update -y"
      - "apt-get install nano -y"
  mailhog:
    type: mailhog
    hogfrom: 
      - appserver
proxy:
  mailhog:
    - hack.sandbox.local.lndo.site
```

## Commits
This repository is fitted with a continuous deployment [Github action](https://github.com/features/actions) workflow, using [Semantic Versioning](https://semantic-release.gitbook.io/semantic-release/) to deploy new releases and simultaneously deploy to the production server.

When pushing commits to the **master** branch, if a new release should be built (determined by the commits), then this will also trigger deployment.

You do not have to follow Angular commit convention, though if you do not then your commit will not be deployed automatically.

Here are a couple examples of commit messages you can use

* `feat: update images on about page template`
* `fix: broken link on contact page`
