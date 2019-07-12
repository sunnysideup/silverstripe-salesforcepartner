2019-07-13 07:56

# running php upgrade upgrade see: https://github.com/silverstripe/silverstripe-upgrader
cd /var/www/upgrades/upgradeto4
php /var/www/upgrader/vendor/silverstripe/upgrader/bin/upgrade-code upgrade /var/www/upgrades/upgradeto4/salesforcepartner  --root-dir=/var/www/upgrades/upgradeto4 --write -vvv --prompt
Array
(
    [0] => Running upgrades on "/var/www/upgrades/upgradeto4/salesforcepartner"
    [1] => [2019-07-13 07:56:45] Applying UpdateConfigClasses to routes.yml...
    [2] => [2019-07-13 07:56:45] Applying RenameClasses to MySalesforcePartnerApi.php...
    [3] => [2019-07-13 07:56:45] Applying ClassToTraitRule to MySalesforcePartnerApi.php...
    [4] => [2019-07-13 07:56:45] Applying RenameClasses to MySalesforcePartnerApiConnectionOnly.php...
    [5] => 
    [6] => In ParserAbstract.php line 293:
    [7] => 
    [8] =>   [PhpParser\Error]
    [9] =>   Syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ')' on line 55
    [10] => 
    [11] => 
    [12] => Exception trace:
    [13] =>  () at /var/www/upgrader/vendor/nikic/php-parser/lib/PhpParser/ParserAbstract.php:293
    [14] =>  PhpParser\ParserAbstract->parse() at /var/www/upgrader/vendor/nikic/php-parser/lib/PhpParser/Parser/Multiple.php:50
    [15] =>  PhpParser\Parser\Multiple->tryParse() at /var/www/upgrader/vendor/nikic/php-parser/lib/PhpParser/Parser/Multiple.php:31
    [16] =>  PhpParser\Parser\Multiple->parse() at /var/www/upgrader/vendor/silverstripe/upgrader/src/Util/MutableSource.php:45
    [17] =>  SilverStripe\Upgrader\Util\MutableSource->__construct() at /var/www/upgrader/vendor/silverstripe/upgrader/src/UpgradeRule/PHP/RenameClasses.php:58
    [18] =>  SilverStripe\Upgrader\UpgradeRule\PHP\RenameClasses->upgradeFile() at /var/www/upgrader/vendor/silverstripe/upgrader/src/Upgrader.php:61
    [19] =>  SilverStripe\Upgrader\Upgrader->upgrade() at /var/www/upgrader/vendor/silverstripe/upgrader/src/Console/UpgradeCommand.php:95
    [20] =>  SilverStripe\Upgrader\Console\UpgradeCommand->execute() at /var/www/upgrader/vendor/symfony/console/Command/Command.php:255
    [21] =>  Symfony\Component\Console\Command\Command->run() at /var/www/upgrader/vendor/symfony/console/Application.php:924
    [22] =>  Symfony\Component\Console\Application->doRunCommand() at /var/www/upgrader/vendor/symfony/console/Application.php:273
    [23] =>  Symfony\Component\Console\Application->doRun() at /var/www/upgrader/vendor/symfony/console/Application.php:149
    [24] =>  Symfony\Component\Console\Application->run() at /var/www/upgrader/vendor/silverstripe/upgrader/bin/upgrade-code:55
    [25] => 
    [26] => upgrade [-r|--rule RULE] [-p|--prompt] [-d|--root-dir ROOT-DIR] [-w|--write] [--] <path>
    [27] => 
)
