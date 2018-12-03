# Docker Lumen

### Install

Before you start make sure you have [Docker Compose](https://docs.docker.com/compose/install/) installed on your machine.

Clone the repo by running the following command

    $ git clone https://github.com/bye-webster/kickstart-project.git

### Config
Before you start your application make sure you have created the file **.env** with the correct Docker configuration values. Please take a look into the example on the file **.env.example**

    $ cp .env.example .env

### Run
To start you application you just need to run the following command 

    $ docker-compose up -d --build
    
### Test
##### PHP-FPM
Give it 5min while composer installs all the Lumen dependencies automatically under the vendor folder.

Once it has finished you should be able to see Lumen's default page on your [browser](http://127.0.0.1).

##### PHP-CLI
In order to run PHP on the command line you can list all the containers by running 

    $ docker-compose ps
    
Assuming you left the the config value `COMPOSE_PROJECT_NAME=app` you should see a container running with the name **app_workspace_1**


All you have to do is to run the following command to use the workspace container as your main bash 

    $ docker exec -i -t app_workspace_1 /bin/bash

After you go inside to the container, you have to update your composer..

    $ composer install or update

Create new tables for Passport & other table

	$ php artisan migrate

Install encryption keys and other necessary stuff for Passport

	$ php artisan passport:install

And then you will have PHP ready for you, just give it a try!

    $ php artisan

...

    ## License

The MIT License (MIT)
Copyright (c) 2016 Denis Mysenko

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
