<?php
/**
 * Created by PhpStorm.
 * Author: Agai
 * QQ: 295551092
 * Date: 2016/10/27
 * Time: 14:08
 */
namespace App\Services;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

class Markdowner
{

    public function toHTML($text)
    {
        $text = $this->preTransformText($text);
        $text = MarkdownExtra::defaultTransform($text);
        $text = SmartyPants::defaultTransform($text);
        $text = $this->postTransformText($text);
        return $text;
    }

    protected function preTransformText($text)
    {
        return $text;
    }

    protected function postTransformText($text)
    {
        return $text;
    }
}