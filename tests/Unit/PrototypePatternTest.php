<?php

use Src\Creational\Prototype\Blog\Author;
use Src\Creational\Prototype\Blog\Page;
use Src\Creational\Prototype\Product\Cart;
use Src\Creational\Prototype\Product\Laptop;
use Src\Creational\Prototype\Product\Smartphone;

require_once __DIR__ . '/../../init.php';

describe('Example Prototype Pattern 1 - cloning an object', function () {
    $smartphone = new Smartphone();

    $smartphoneClone = clone $smartphone;

    $laptop = new Laptop();

    $laptopClone = clone $laptop;

    $cart = new Cart();

    $cart->addProduct($laptop);

    $laptopClone->setPrice(5000);

    $cart->addProduct($laptopClone);

    it("should be equal smartphone object", function () use ($smartphone, $smartphoneClone) {
        expect($smartphone)->toEqual($smartphoneClone);
    });

    it("should be ID is equal smartphone object", function () use ($smartphone, $smartphoneClone) {
        expect($smartphone->getId())->toEqual($smartphoneClone->getId());
    });

    it("should be name is equal smartphone object", function () use ($smartphone, $smartphoneClone) {
        expect($smartphone->getName())->toEqual($smartphoneClone->getName());
    });

    it("should be equal but not same smartphone object", function () use ($smartphone, $smartphoneClone) {
        expect($smartphone)->not()->toBe($smartphoneClone);
    });

    it("should be cart has 2 product", function () use ($cart) {
        expect($cart->getProducts())->toHaveCount(2);
    });

    it("should be not equal laptop price with laptop clone price", function () use ($cart) {
        $laptop = $cart->getProducts()[0];
        $laptopClone = $cart->getProducts()[1];

        expect($laptop->getPrice())->not()->toEqual($laptopClone->getPrice());
    });
});

describe('Example Prototype Pattern 2', function () {
    $author = new Author("John Doe");

    $page = new Page("Today is a good day", "Lorem ipsum dolor sit amet", $author);

    $page->addComment("This is a comment");

    $draft = clone $page;

    it("should be different page object", function () use ($page, $draft) {
        expect($page)->not()->toEqual($draft);
    });

    it("should be different title", function () use ($page, $draft) {
        expect($page->getTitle())->not()->toEqual($draft->getTitle());
    });

    it("should be same author", function () use ($page, $draft) {
        expect($page->getAuthor())->toEqual($draft->getAuthor());
    });
});
