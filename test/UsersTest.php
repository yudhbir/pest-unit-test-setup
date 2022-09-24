<?php
include_once('../app/Users.php');
test('Fetch Users Records', function () {
    $users=new Users();
    $result=$users->fetch_user();
    expect($result['success'])->toBe(true);
});
it('Upcoming test in on way', function () {
    $this->assertTrue(true);
    expect(true)->toBe(true);
});