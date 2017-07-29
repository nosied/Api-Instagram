<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony'                            => true,
        // Override @Symfony rules
        'pre_increment'                       => false,
        'blank_line_before_statement'         => ['statements' => ['return']],
        'phpdoc_align'                        => ['tags' => ['param', 'throws']],
        'method_argument_space'               => ['ensure_fully_multiline' => false],
        'binary_operator_spaces'              => [
            'align_double_arrow' => true,
            'align_equals'       => false,
        ],
        'phpdoc_annotation_without_dot'       => false,
        // Custom rules
        'phpdoc_add_missing_param_annotation' => true,
        'ordered_imports'                     => true,
        'phpdoc_order'                        => true,
        'array_syntax'                        => ['syntax' => 'short'],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
    );
