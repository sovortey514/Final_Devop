<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

uses(Tests\TestCase::class)->in('Feature', 'Unit');

uses(RefreshDatabase::class)->in('Feature');
uses(WithFaker::class)->in('Feature');
