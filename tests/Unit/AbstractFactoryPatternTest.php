<?php


use Src\Creational\AbstractFactory\Template\Engine\Blade;
use Src\Creational\AbstractFactory\Template\Page;

require_once './init.php';

/**
 * Example Abstract Factory Pattern
 * @see Src\Creational\AbstractFactory\Template\Engine\Blade
 */
describe('Example Abstract Factory Pattern', function () {

    it('should render a page', function () {
        $page = new Page("Today is a good day", "Lorem ipsum dolor sit amet");

        // Example with blade template engine
        $result = $page->render(new Blade());

        expect($result)->toContain("Today is a good day");
    });
});
