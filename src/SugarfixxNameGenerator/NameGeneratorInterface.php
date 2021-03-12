<?php


namespace SugarfixxNameGenerator;


interface NameGeneratorInterface
{
    public function setConfig(NameGeneratorConfig $config);

    public function generate();
}
