<?php
include("./app/Users.php");
test('Fetch Users Records', function () {    
    $users=new Users();    
    $result=$users->fetch_user();
    expect($result['success'])->toBeTrue();
});
test('Fetch Single User Records', function () {    
    $users=new Users();    
    $single_result=$users->fetch_single_user();
    expect($single_result['results'])->toBeArray();
});
it('Upcoming test in on way', function () {    
    expect(true)->toBe(true);
});

it('implementation of the home skip page', function () {
    expect(true)->toBe(true);
})->skip('Home page not available');