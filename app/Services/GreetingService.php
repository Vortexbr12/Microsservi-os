<?php

namespace App\Services;

class GreetingService
{
    public function getGreeting()
    {
        $hour = date('H');

        if ($hour < 12) {
            return "Bom dia!";
        } elseif ($hour < 18) {
            return "Boa tarde!";
        } else {
            return "Boa noite!";
        }
    }
}
