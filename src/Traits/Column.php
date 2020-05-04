<?php 

namespace Viitortest\LivewireSimpleTable\Traits;

use Illuminate\Support\Str;

class Column
{
    /**
     * @var
     */
    public $text;

    /**
     * @var string
     */
    public $attribute;

    /**
     * Column constructor.
     *
     * @param $text
     * @param $attribute
     */
    public function __construct($text, $attribute)
    {
        $this->text = $text;
        $this->attribute = $attribute ?? Str::snake(Str::lower($text));
    }

    /**
     * @param  null  $text
     * @param  null  $attribute
     *
     * @return static
     */
    public static function make($text = null, $attribute = null)
    {
        return new static($text, $attribute);
    }
}