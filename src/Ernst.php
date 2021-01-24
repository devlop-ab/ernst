<?php

declare(strict_types=1);

namespace Devlop\Ernst;

final class Ernst
{
    /**
     * @var array<string>
     */
    public const QUOTES = [
        'När man var liten var man inte riktigt trygg med tomten.',
        'Vad är det som gör att vissa granar faktiskt bestämmer sig för att bli julgranar och andra bara är fula.',
        'Jag vill ha sommar över precis hela kroppen, inte bara doppa tårna i den.',
        'Varför gå den logiska vägen när det finns så många andra vägar?',
        'Man kanske borde tälja på en pinne då och då för att må lite bättre',
        'Egentligen är mat och fest det viktigaste i livet',
        'Man känner sig aldrig så rik som när man plockar färskt bröd ut ur ugnen',
        'Är man avslappnad nog för att sitta och titta på en nyckelpiga en stund slipper man äta magmedicin till hösten.',
        'Det här är en sån här glädjekälla som man kan återvända till.',
    ];

    /**
     * Man känner sig aldrig så rik som när man plockar färskt bröd ut ur ugnen.
     */
    public static function quote() : string
    {
        return self::QUOTES[array_rand(self::QUOTES)];
    }
}
