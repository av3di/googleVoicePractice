# googleVoicePractice

A barebones PHP app that can easily be deployed to Heroku.
It is a simple webhook that can be used to communicate with api.ai. Under the
Fulfillment tab, make sure to link directly to webhook.php

This application supports the [How to Deploy a Static Site to Heroku](http://blog.teamtreehouse.com/deploy-static-site-heroku) article - check it out.

## Deploying

Install the [Heroku Toolbelt](https://toolbelt.heroku.com/).

```sh
$ git clone git@github.com:av3di/googleVoicePractice.git # or clone your own fork
$ cd googleVoicePractice
$ heroku create
$ git push heroku master
$ heroku open
```

or

[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)
