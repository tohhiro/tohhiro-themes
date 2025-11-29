<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return (new Config())
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => true,
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement' => [
            'statements' => ['return'],
        ],
        'cast_spaces' => true,
        'concat_space' => ['spacing' => 'one'],
        'function_declaration' => [
            'closure_function_spacing' => 'one',
        ],
        'new_with_braces' => true,
        'no_unused_imports' => true,
        'single_quote' => true,
        'trailing_comma_in_multiline' => true,
    ])
    ->setFinder(
        Finder::create()
            ->exclude('vendor')
            ->in([__DIR__ . '/jin-child'])
    );
