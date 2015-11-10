<?php

$I = new WebGuy($scenario);
$I->wantTo('ensure that frontpage works');
$I->see('Welcome');
$I->see('CodeIgniter');
$I->dontSee('Error');


