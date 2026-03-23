<?php 

namespace App\Libraries;

// Can't be used with section-layout template.

use CodeIgniter\View\Parser;
use Config\View;

class MyParser extends Parser 
{
    public function __construct($config = null)
    {
        parent::__construct($config ?? new View());
    }

    protected $filters = [
        // Built-in Filters (copied from system/View/Parser.php)
        'upper'          => '\CodeIgniter\View\Filters::upper',
        'lower'          => '\CodeIgniter\View\Filters::lower',
        'capitalize'     => '\CodeIgniter\View\Filters::capitalize',
        'title'          => '\CodeIgniter\View\Filters::title',
        'strip_tags'     => '\CodeIgniter\View\Filters::stripTags',
        'esc'            => '\CodeIgniter\View\Filters::esc',
        'nl2br'          => '\CodeIgniter\View\Filters::nl2br',
        'number_format'  => '\CodeIgniter\View\Filters::numberFormat',
        'date'           => '\CodeIgniter\View\Filters::date',
        'date_modify'    => '\CodeIgniter\View\Filters::dateModify',
        'round'          => '\CodeIgniter\View\Filters::round',
        'local_currency' => '\CodeIgniter\View\Filters::localCurrency',
        'limit_chars'    => '\CodeIgniter\View\Filters::limitChars',
        'limit_words'    => '\CodeIgniter\View\Filters::limitWords',
        'trim'           => '\CodeIgniter\View\Filters::trim',
        'wordwrap'       => '\CodeIgniter\View\Filters::wordwrap',

        // Custom Filters
        'HideNumbers'    => 'App\Libraries\MyParser::hideNumbers',
    ];

    public static function hideNumbers(?string $value, int $display = 4): string 
    {
        if($value === null) 
        {
            return '';
        }

        $txt = '';
        
        for($i = 0; $i < strlen($value); $i++)
        {
            $txt .= $i < $display ? $value[$i] : "X";
        }

        return $txt;
    }
}
