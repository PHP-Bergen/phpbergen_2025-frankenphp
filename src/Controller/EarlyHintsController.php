<?php

namespace phpbergen\app\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\WebLink\Link;

class EarlyHintsController extends AbstractController
{
    #[Route("/")]
    public function index(): Response
    {
        // Create links for the early hints.
        $links= [
            new Link('preload', 'resources/styles.css')->withAttribute('as', 'style'),
            new Link('preload', 'resources/hero-banner.jpg')->withAttribute('as', 'image'),
            new Link('preload', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&amp;display=swap')->withAttribute('as', 'style'),
        ];

        // Send the early hints.
        $response = $this->sendEarlyHints($links);

        // Pretend we do something time-consuming.
        sleep(5);

        // Create the HTML response that will use the resources we gave early hints for.
        $html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bergen</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/styles.css">
</head>
<body>
    <header>
        <div class="hero">
            <div class="hero-content">
            </div>
        </div>
    </header>

    <section class="about">
        <div class="container">
            <h1>Welcome to PHP Bergen</h1>
            <p>Your hub for PHP knowledge and innovation in Bergen!</p>
            <br>
            <hr>
            <br>

            <h2>About Us</h2>
            <p>PHP Bergen is a community of PHP developers and enthusiasts located in Bergen. We organize meetups, workshops, and events to foster learning, networking, and collaboration. Whether you\'re just starting or are an experienced developer, there\'s something here for everyone.</p>
        </div>
    </section>

    <section class="cta-banner bg-blue">
        <div class="container">
            <h2>Join Our Upcoming Events!</h2>
            <p>Don\'t miss out on our next meetup or workshop. Click below to see all the upcoming events and register now!</p>
            <a href="https://www.meetup.com/php-bergen/events/" target="_blank" class="cta-button">See Upcoming Events</a>
        </div>
    </section>


    <section class="cta-banner bg-steel">
        <div class="container">
            <h2>See our code!</h2>
            <p>All code and examples from our presentations are available on our github page:</p>
            <a href="https://github.com/PHP-Bergen" target="_blank" class="cta-button">See our repositories</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>© 2024 PHP Bergen</p>
        </div>
    </footer>


</body></html>';

        // Send the response that uses the early hints.
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'text/html');
        $response->setContent($html);

        return $response;
    }
}
