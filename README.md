# biologic

##### Setting up the Biologic project from scratch:
1) Set up a webserver e.g. apache
2) Install composer on your machine https://getcomposer.org/
3) Clone the biologic repository
4) Point your webserver at the public/ folder of this project
5) Navigate to the root project folder and run the command
"composer install" - this will install the required php packages
6) Acquire a copy of settings.local.php (the settings which shouldn't
be added to the repository) and place it in your config folder
7) If you need to use the legacy code, then do the same with a file called
babs_db.php and place it in src/legacy/util/


##### Useful notes:
1) If you are working on your local copy make sure to have debug set to true
in settings.local.php if you wish to see errors rendered in the browser
rather than sent to a log file.
2) "class not found" errors can occasionally occur with composer because of
caching. If you have a class which isn't being picked up try running
"composer dump-autoload". It may also be because it isn't using psr-4 or
the namespace isn't in composer.json

##### Settings file info
1) Making a project publicly accessible: add 'public_access' => true to the relevant
experiment settings file.

##### How do we know we are in a specific experiment section and what are the effects?

###### Determining we are in a specific experiment
1) The route we entered under was defined in a experiment specific routes file
2) The route we entered under had the experiment_code parameter inside it,
e.g. /{experiment_code}/category-view

###### The effects of being in a specific experiment
1) Any settings defined in an experiment folder will overwrite those defined inside
the main settings files.
2) Views defined with the same directory structure relative to a base views folder
will override those in the main views folder.


##### Overview of directory structure
* config/
    * settings.php --- various settings which should be globally available
    * settings.local.php --- settings which don't get committed to the repository
* docker/ --- contains configuration files for building with Docker
* public/
    * dist/ --- css/js should go in here
    * .htaccess --- routes incoming traffic to index.php
    * index.php --- the entry point of the application
* src/
    * core/
        * Classes/ --- classes which provide key application logic
        * Controllers/ --- classes with methods that handle incoming requests
        * functions/ --- some useful helper functions
        * init/ --- extra things to load in app.php
        * views/ --- html template files
        * app.php --- sets up the application
        * routes.php --- definitions on what to do with incoming urls
    * legacy/ --- files from the previous version of the project
    * experiments/ --- experiment specific files and overrides
* tests/ --- unit tests for the application
* vendor/ --- 3rd party packages which show up after running composer
* .gitignore --- defines files which won't be pushed to the repository
* composer.json --- manages packages and loads our classes
* database.php --- provides some 
* README.md


##### Common points of extension/modification

###### Adding extra functions/filters for use in twig
Open src/core/Classes/Renderer.php and locate the render method. Add your
required functions here in the same manner as those already defined.

###### Allowing extra permitted characters in route wildcards
Open src/core/Classes/Request.php and modify the ROUTE_VAR_ALLOWED_CHARS constant.

###### Adding experiment specific routes and controllers
Navigate to src/experiments/, then create a folder with the name of your project id.
Inside this folder create a file called routes.php in order to define new routes, and
create controller classes with psr-4 compliant namespaces.

###### Override default views for a specific experiment
Navigate to src/experiments/, then create a folder with the name of your experiment id.
Now create a folder called views. Inside that folder create a folder structure
identical to that inside src/core/views/ for the specific file you wish to override.
Then create a file with the same name in the same place.

e.g. you wish to override src/core/views/partials/header.twig for your experiment bio01.
So you create the file src/experiments/bio01/views/partials/header.twig and fill it
with your new header markup.

###### Override default settings for a specific experiment
Navigate to src/core/experiments/, then create a folder with the name of your experiment id.
Inside this folder create a file called settings.php - any settings defined in here
will override those of the default settings.php for specific experiments. This happens
_at the root node of a key_ so take care when overriding. See src/core/Classes/Settings.php
for more details.

##### Database considerations
This project uses the Laravel database package (independent of the framework). Fairly
extensive documentation can be found online, for example at:
1) https://github.com/illuminate/database (using the package independently)
2) https://laravel.com/docs/5.8/queries (using the query builder)
3) https://laravel.com/docs/5.8/eloquent (a popular ORM)

##### Database migrations and seeding
A script is available to run commands related to database creation and seeding. To use
it navigate to the root of the project and run: php database.php \<command\>\
Available commands:\
php database.php migrate - recreate the database schema (in the future this will run only the missing migrations)\
php database.php seed - clear the operational database of all its data and plants some seed data in its place\
php database.php refresh - resets the database and seeds it (i.e. runs the above two commands)

##### Running tests
Run the command: ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests

