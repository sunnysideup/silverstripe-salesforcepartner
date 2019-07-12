2019-07-13 07:56

# running php upgrade inspect see: https://github.com/silverstripe/silverstripe-upgrader
cd /var/www/upgrades/upgradeto4
php /var/www/upgrader/vendor/silverstripe/upgrader/bin/upgrade-code inspect /var/www/upgrades/upgradeto4/salesforcepartner/src  --root-dir=/var/www/upgrades/upgradeto4 --write -vvv
Array
(
    [0] => Running post-upgrade on "/var/www/upgrades/upgradeto4/salesforcepartner/src"
    [1] => [2019-07-13 07:56:57] Applying ApiChangeWarningsRule to MySalesforcePartnerApi.php...
    [2] => PHP Fatal error:  Class 'SForce\Client\Partner' not found in /var/www/upgrades/upgradeto4/salesforcepartner/src/Api/MySalesforcePartnerApi.php on line 8
)

# running php upgrade inspect see: https://github.com/silverstripe/silverstripe-upgrader
cd /var/www/upgrades/upgradeto4
php /var/www/upgrader/vendor/silverstripe/upgrader/bin/upgrade-code inspect /var/www/upgrades/upgradeto4/salesforcepartner/src  --root-dir=/var/www/upgrades/upgradeto4 --write -vvv
Array
(
    [0] => Running post-upgrade on "/var/www/upgrades/upgradeto4/salesforcepartner/src"
    [1] => [2019-07-13 07:57:15] Applying ApiChangeWarningsRule to MySalesforcePartnerApi.php...
    [2] => PHP Fatal error:  Class 'SForce\Client\Partner' not found in /var/www/upgrades/upgradeto4/salesforcepartner/src/Api/MySalesforcePartnerApi.php on line 8
)
