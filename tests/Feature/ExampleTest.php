<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;

uses(RefreshDatabase::class, WithFaker::class)->in('Feature');

beforeEach(function () {
    Artisan::call('migrate');
});

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
