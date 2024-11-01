<?php

use Src\Creational\Factory\Payment\PaymentHandler;
use Src\Creational\Factory\Social\SocialNetwork;
use Src\Creational\Factory\Social\Poster\FacebookPoster;

require_once __DIR__ . '/../../init.php';

/**
 * Example Factory Pattern 1 - Payment
 * @see \Src\Creational\Factory\Payment\PaymentHandler
 */
describe('Example Factory Pattern 1 - Payment', function () {
    it('should return true, payment method only accepts Gopay, Dana, CreditCard', function () {
        $paymentMethod = ["Gopay", "Dana", "CreditCard"];

        $gopay = $paymentMethod[0];

        $payment = new PaymentHandler;

        $payment = $payment->getPaymentMethod($gopay);

        expect($payment->getStatus())->toBeTrue();
    });
});

/**
 * Example Factory Pattern 2 - Social
 * @see \Src\Creational\Factory\Social\SocialNetwork
 */
describe('Example Factory Pattern 2 - Social', function () {
    $username = 'john_doe';
    $password = '$$S3Cr3T!$$';
    $social = new SocialNetwork;
    $facebook = $social->getInstance(new FacebookPoster($username, $password));

    it("should be login with username : $username", function () use ($facebook) {
        expect($facebook->logIn())->toBe("login with username : john_doe");
    });

    it("should be Create post : Hello World", function () use ($facebook) {
        expect($facebook->createPost('Hello World'))->toBe("Create post : Hello World");
    });

    it(
        "should be goodbye $username",
        function () use ($facebook) {
            expect($facebook->logOut())->toBe("goodbye john_doe");
        }
    );
});
