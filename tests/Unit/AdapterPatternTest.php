<?php

use Src\Structural\Adapter\Book\Book;
use Src\Structural\Adapter\Book\EbookAdapter;
use Src\Structural\Adapter\Book\Epub;
use Src\Structural\Adapter\Book\User;
use Src\Structural\Adapter\Notification\EmailNotification;
use Src\Structural\Adapter\Notification\Mastodon;
use Src\Structural\Adapter\Notification\MastodonNotification;

include_once "./init.php";

describe("Example Adapter Pattern 1 - Notification", function () {
    it('should send a mastodon notification', function () {
        $mastodon = new MastodonNotification(new Mastodon('@john_doe', '$$S3Cr3T!$$'), '1234');
        $response = $mastodon->send('Hello World', 'Hello World');

        expect($response)->toBe("send message to chat 1234 : Hello World success");
    });

    it('should send an email notification', function () {
        $sendEmail = new EmailNotification('john@doe');
        $response = $sendEmail->send('Test Email', 'Hello World');

        expect($response)->toBe("email from john@doe has been sent");
    });
});

describe("Example Adapter Pattern 2 - Book", function () {
    it('should be user open book', function () {
        $userBook = new User(new Book());

        expect($userBook->open())->toBe("open book");
    });

    it('should be user open epub', function () {
        $userEpub = new User(new EbookAdapter(new Epub()));

        expect($userEpub->open())->toBe("open epub");
    });
});
