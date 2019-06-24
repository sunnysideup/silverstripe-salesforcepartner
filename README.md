# What does this module do:

It connects a Silverstripe Install to a Sales Force account using the Partner "approach".


# How to use this module

 1. add your wsdl file to your mysite folder and make sure it is protected, see below
 2. add to Silverstripe install as per usual
 3. see: `salesforcepartner/_config/salesforceconfig.yml.example` and implement in mysite
   as you see fit. You will definitely
   - you will definitely need to set the login credentials
   - e.g. extend SalesForceContact to add more fields.

# how to protect wsdl file (example only and NOT a good one):

 ```htaccess
     order deny,allow
     deny from all
 ```

# Getting Credentials

## username and password

The same as you use for logging in to the online CMS for Sales Force

## security token

Login to Sales Force CMS and follow these instructions
https://webkul.com/blog/security-token-salesforce/



# About the SForce Folder
This folder is automagically created by the `uuf6429/force.com-toolkit-for-php`
vendor package.  You can set the details in composer.json.

## changed files in the SForce Folder

changed due to double class names:
 - describeApprovalLayoutDouble
 - describeGlobalThemeDouble.php
 - describeLayoutDouble.php

## key File:
code/SForce/SforceService.php


# Useful Links

#### basic starting point
- https://developer.salesforce.com/index.php?title=Getting_Started_with_the_Force.com_Toolkit_for_PHP&oldid=51397

#### Actual SDK we are using
- https://github.com/uuf6429/Force.com-Toolkit-for-PHP

###### this is based on ...
- https://github.com/developerforce/Force.com-Toolkit-for-PHP

#### EXAMPLES!
- https://github.com/developerforce/Force.com-Toolkit-for-PHP/blob/master/test/SforcePartnerClientTest.php
- https://www.jitendrazaa.com/blog/salesforce/salesforce-toolkit-for-php/
