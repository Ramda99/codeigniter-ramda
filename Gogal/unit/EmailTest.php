<?php

use CodeIgniter\Email\Email;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Email as ConfigEmail;

/**
 *  @internal
 */
class EmailTest extends CIUnitTestCase
{
    public function testKirimEmail()
    {
        $email = new Email(new ConfigEmail());
        $email->setFrom('ramdamuhamad99@gmail.com');
        $email->setTo('12210436@bsi.ac.id');
        $email->setSubject('Testing Kirim Email');
        $email->setMessage('Hallo selamat <b>bergabung</b>');

        $this->assertTrue($email->send());
    }
}