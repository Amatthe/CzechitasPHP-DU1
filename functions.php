<?php
    // Načítání controllerů
    function loadController(): string
    {
        // Default šablona je ZATÍM contact
        $page = $_GET['page'] ?? 'contact';

        // Pokud šablona i ovladač existují, vrátí ovladač
        if (is_file(__DIR__ . '/controllers/' . $page . '.php') && is_file(__DIR__ . '/templates/' . $page . '.php')) {
            return __DIR__ . '/controllers/' . $page . '.php';
        }

        // ZATÍM jediná funkční šablona/ovladač je contact
        else {
            return __DIR__ . '/controllers/contact.php';
        }
    }