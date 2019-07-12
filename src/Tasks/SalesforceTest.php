<?php

namespace Sunnysideup\SalesforcePartner\Tasks;



use SForce\Client\Partner;

use SForce\SObject;

use SForce\Wsdl\create;
use BuildTask;
use MySalesforceContactApi;


class SalesforceTest extends BuildTask
{
    protected $title = 'Test Sales Force API';

    protected $description = 'Test Sales Cloud';

    protected $emailStub = '@test.best.co.com.org.net';

    protected $email = '';

    public function run($request)
    {
        MySalesforceContactApi::set_debug(true);

        $this->setEmail();
        $this->findContact();
        $this->createContact();
        $this->findContact();
        $this->updateContact();

        $this->setEmail();
        $this->createSubscriber();
        $this->findContact();
        $this->updateSubscriber();

        $this->setEmail();
        $this->createBadContact();
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
        $contact = MySalesforceContactApi::is_email_registered($this->email);
    }


    protected function createSubscriber()
    {
        MySalesforceContactApi::add_email_subscriber(
            $this->email,
            '(510) 555-5555',
            'John',
            'Smith',
            [
            ]
        );
    }

    protected function updateSubscriber()
    {
        MySalesforceContactApi::update_email_subscriber(
            $this->email,
            [
                'Phone' => '(511) 555-1111',
            ]
        );
    }


    protected function createBadContact()
    {
        MySalesforceContactApi::create_contact(
            [
                'FirstName' => 'John',
                'LastName' => 'Smith',
                'NON_EXISTING_FIELD' => 'RUBBISH',
                'Email' => $this->email,
            ]
        );
    }


    protected function setEmail()
    {
        $this->email = 'test'.rand(0,99999).$this->emailStub;

    }

}
