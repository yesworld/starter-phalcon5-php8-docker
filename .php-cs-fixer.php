<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/public')
    ->in(__DIR__ . '/tests')
    ->files()
    ->name(['*.php', '*.phtml'])
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP80Migration' => true,
        '@PHP80Migration:risky' => true,

        // Disable annoying risky rules
        'native_function_invocation' => false,
        'self_accessor' => false,
        'declare_strict_types' => true,

        'list_syntax' => ['syntax' => 'short'],
        'yoda_style' => false,
        //        'ordered_class_elements' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private', 'property_public', 'property_protected', 'property_private', 'construct', 'destruct', 'magic', 'phpunit', 'method_public', 'method_protected', 'method_private'],
        'ordered_traits' => true,
        'single_line_comment_style' => true,
        'elseif' => true,
        'no_superfluous_elseif' => true,
        'no_useless_else' => true,
        'doctrine_annotation_braces' => true,
        'doctrine_annotation_indentation' => true,
        'doctrine_annotation_spaces' => true,
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
        'no_useless_sprintf' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'void_return' => true,
        'combine_consecutive_unsets' => true,
        'no_homoglyph_names' => true,
        'concat_space' => ['spacing' => 'one'],
        'operator_linebreak' => true,
        'return_assignment' => true,
        'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
        'strict_comparison' => true,
        'strict_param' => true,
        'escape_implicit_backslashes' => true,
        'explicit_string_variable' => true,
        'array_indentation' => true,
        'blank_line_before_statement' => ['statements' => ['return', 'switch', 'throw', 'try']],
        'heredoc_indentation' => ['indentation' => 'same_as_start'],
        'method_chaining_indentation' => true,
        'trailing_comma_in_multiline' => ['elements' => ['arrays', 'arguments', 'parameters']],
        'class_attributes_separation' => ['elements' => ['property' => 'only_if_meta', 'method' => 'one']],
        'assign_null_coalescing_to_coalesce_equal' => false,
        // Convert double quotes to single quotes for simple strings.
        'single_quote' => ['strings_containing_single_quote_chars' => true],
    ])->setFinder($finder);

// global_namespace_import
// declare_strict_types
