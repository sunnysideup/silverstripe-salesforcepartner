<?php


use SForce\Client\Partner;

use SForce\SObject;

use SForce\Wsdl\create;

class SalesforceTest extends BuildTask
{
    protected $title = 'Test Sales Force API';

    protected $description = 'Test Sales Cloud';

    protected $email = '@test.best.co.com.org.net';

    public function run($request)
    {
        MySalesforceContactApi::set_debug(true);

        $this->email = 'test'.rand(0,99999).$this->email;

        $this->findContact();
        $this->createContact();
        $this->updateContact();
    }

    protected function createContact()
    {
        MySalesforceContactApi::create_contact(
            [
                'FirstName' => 'John',
                'LastName' => 'Smith',
                'Phone' => '(510) 555-5555',
                'Email' => $this->email,
            ]
        );
    }

    protected function updateContact()
    {
        MySalesforceContactApi::update_contact(
            [
                'FirstName' => 'Joan',
                'LastName' => 'Smith',
                'Phone' => '(510) 555-5555',
                'Email' => $this->email,
            ]
        );
    }

    protected function findContact()
    {
        $contact = MySalesforceContactApi::retrieve_contact($this->email);
    }


}
