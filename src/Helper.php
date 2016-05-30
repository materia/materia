<?php

namespace Materia;



class Helper
{
    public static function route($generator, $name, $parameters = [])
    {
        return $generator->generate($name, $parameters);
    }
}
