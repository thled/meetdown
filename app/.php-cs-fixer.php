<?php
/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:2.18.2|configurator
 * you can change this configuration by importing this file.
 */
return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        // Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
        'align_multiline_comment' => true,
        // Each element of an array must be indented exactly once.
        'array_indentation' => true,
        // Converts simple usages of `array_push($x, $y);` to `$x[] = $y;`.
        'array_push' => true,
        // PHP arrays should be declared using the configured syntax.
        'array_syntax' => ['syntax'=>'short'],
        // There MUST be one blank line after the namespace declaration.
        'blank_line_after_namespace' => true,
        // An empty line feed must precede any configured statement.
        'blank_line_before_statement' => ['statements'=>['continue','exit','return','throw']],
        // The body of each structure MUST be enclosed by braces. Braces should be properly placed. Body of braces should be properly indented.
        'braces' => ['allow_single_line_anonymous_class_with_empty_body'=>true,'allow_single_line_closure'=>true,'position_after_functions_and_oop_constructs'=>'same'],
        // A single space or none should be between cast and variable.
        'cast_spaces' => ['space'=>'none'],
        // Class, trait and interface elements must be separated with one or none blank line.
        'class_attributes_separation' => false,
        // Whitespace around the keywords of a class, trait or interfaces definition should be one space.
        'class_definition' => true,
        // Namespace must not contain spacing, comments or PHPDoc.
        'clean_namespace' => true,
        // Calling `unset` on multiple items should be done in one call.
        'combine_consecutive_unsets' => true,
        // Replace multiple nested calls of `dirname` by only one call with second `$level` parameter. Requires PHP >= 7.0.
        'combine_nested_dirname' => true,
        // Comments with annotation should be docblock when used on structural elements.
        'comment_to_phpdoc' => true,
        // Remove extra spaces in a nullable typehint.
        'compact_nullable_typehint' => true,
        // Concatenation should be spaced according configuration.
        'concat_space' => ['spacing'=>'one'],
        // The PHP constants `true`, `false`, and `null` MUST be written using the correct casing.
        'constant_case' => true,
        // Class `DateTimeImmutable` should be used instead of `DateTime`.
        'date_time_immutable' => true,
        // Equal sign in declare statement should be surrounded by spaces or not following configuration.
        'declare_equal_normalize' => ['space'=>'none'],
        // Force strict types declaration in all files. Requires PHP >= 7.0.
        'declare_strict_types' => true,
        // Replaces `dirname(__FILE__)` expression with equivalent `__DIR__` constant.
        'dir_constant' => true,
        // The keyword `elseif` should be used instead of `else if` so that all control keywords look like single words.
        'elseif' => true,
        // PHP code MUST use only UTF-8 without BOM (remove BOM).
        'encoding' => true,
        // Replace deprecated `ereg` regular expression functions with `preg`.
        'ereg_to_preg' => true,
        // Add curly braces to indirect variables to make them clear to understand. Requires PHP >= 7.0.
        'explicit_indirect_variable' => true,
        // Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
        'explicit_string_variable' => true,
        // All classes must be final, except abstract ones and Doctrine entities.
        'final_class' => true,
        // Internal classes should be `final`.
        'final_internal_class' => true,
        // All `public` methods of `abstract` classes should be `final`.
        'final_public_method_for_abstract_class' => true,
        // Order the flags in `fopen` calls, `b` and `t` must be last.
        'fopen_flag_order' => true,
        // The flags in `fopen` calls must omit `t`, and `b` must be omitted or included consistently.
        'fopen_flags' => true,
        // PHP code must use the long `<?php` tags or short-echo `<?=` tags and not other tag variations.
        'full_opening_tag' => true,
        // Transforms imported FQCN parameters and return types in function arguments to short version.
        'fully_qualified_strict_types' => true,
        // Spaces should be properly placed in a function declaration.
        'function_declaration' => true,
        // Replace core functions calls returning constants with the constants.
        'function_to_constant' => true,
        // Ensure single space between function's argument and its typehint.
        'function_typehint_space' => true,
        // There MUST be group use for the same namespaces.
        'group_import' => true,
        // Heredoc/nowdoc content must be properly indented. Requires PHP >= 7.3.
        'heredoc_indentation' => true,
        // Include/Require and file path should be divided with a single space. File path should not be placed under brackets.
        'include' => true,
        // Pre- or post-increment and decrement operators should be used if possible.
        'increment_style' => ['style'=>'post'],
        // Code MUST use configured indentation type.
        'indentation_type' => true,
        // Lambda must not import variables it doesn't use.
        'lambda_not_used_import' => true,
        // All PHP files must use same line ending.
        'line_ending' => true,
        // List (`array` destructuring) assignment should be declared using the configured syntax. Requires PHP >= 7.1.
        'list_syntax' => ['syntax'=>'short'],
        // Use `&&` and `||` logical operators instead of `and` and `or`.
        'logical_operators' => true,
        // Cast should be written in lower case.
        'lowercase_cast' => true,
        // PHP keywords MUST be in lower case.
        'lowercase_keywords' => true,
        // Class static references `self`, `static` and `parent` MUST be in lower case.
        'lowercase_static_reference' => true,
        // Magic constants should be referred to using the correct casing.
        'magic_constant_casing' => true,
        // Magic method definitions and calls must be using the correct casing.
        'magic_method_casing' => true,
        // Replace non multibyte-safe functions with corresponding mb function.
        'mb_str_functions' => true,
        // In method arguments and method call, there MUST NOT be a space before each comma and there MUST be one space after each comma. Argument lists MAY be split across multiple lines, where each subsequent line is indented once. When doing so, the first item in the list MUST be on the next line, and there MUST be only one argument per line.
        'method_argument_space' => ['on_multiline'=>'ensure_fully_multiline'],
        // Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
        'method_chaining_indentation' => true,
        // DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash.
        'multiline_comment_opening_closing' => true,
        // Forbid multi-line whitespace before the closing semicolon or move the semicolon to the new line for chained calls.
        'multiline_whitespace_before_semicolons' => true,
        // Function defined by PHP should be called using the correct casing.
        'native_function_casing' => true,
        // Native type hints for functions should use the correct case.
        'native_function_type_declaration_casing' => true,
        // All instances created with new keyword must be followed by braces.
        'new_with_braces' => true,
        // Master functions shall be used instead of aliases.
        'no_alias_functions' => true,
        // Master language constructs shall be used instead of aliases.
        'no_alias_language_construct_call' => true,
        // Replace control structure alternative syntax to use braces.
        'no_alternative_syntax' => true,
        // There should not be a binary flag before strings.
        'no_binary_string' => true,
        // There should be no empty lines after class opening brace.
        'no_blank_lines_after_class_opening' => true,
        // There should not be blank lines between docblock and the documented element.
        'no_blank_lines_after_phpdoc' => true,
        // There should be no blank lines before a namespace declaration.
        'no_blank_lines_before_namespace' => false,
        // There must be a comment when fall-through is intentional in a non-empty case body.
        'no_break_comment' => true,
        // The closing `? >` tag MUST be omitted from files containing only PHP.
        'no_closing_tag' => true,
        // There should not be any empty comments.
        'no_empty_comment' => true,
        // There should not be empty PHPDoc blocks.
        'no_empty_phpdoc' => true,
        // Remove useless (semicolon) statements.
        'no_empty_statement' => true,
        // Removes extra blank lines and/or blank lines following configuration.
        'no_extra_blank_lines' => true,
        // Replace accidental usage of homoglyphs (non ascii characters) in names.
        'no_homoglyph_names' => true,
        // Remove leading slashes in `use` clauses.
        'no_leading_import_slash' => true,
        // The namespace declaration line shouldn't contain leading whitespace.
        'no_leading_namespace_whitespace' => true,
        // Either language construct `print` or `echo` should be used.
        'no_mixed_echo_print' => true,
        // Operator `=>` should not be surrounded by multi-line whitespaces.
        'no_multiline_whitespace_around_double_arrow' => true,
        // Properties MUST not be explicitly initialized with `null` except when they have a type declaration (PHP 7.4).
        'no_null_property_initialization' => true,
        // Convert PHP4-style constructors to `__construct`.
        'no_php4_constructor' => true,
        // Short cast `bool` using double exclamation mark should not be used.
        'no_short_bool_cast' => true,
        // Single-line whitespace before closing semicolon are prohibited.
        'no_singleline_whitespace_before_semicolons' => true,
        // When making a method or function call, there MUST NOT be a space between the method or function name and the opening parenthesis.
        'no_spaces_after_function_name' => true,
        // There MUST NOT be spaces around offset braces.
        'no_spaces_around_offset' => true,
        // There MUST NOT be a space after the opening parenthesis. There MUST NOT be a space before the closing parenthesis.
        'no_spaces_inside_parenthesis' => true,
        // Replaces superfluous `elseif` with `if`.
        'no_superfluous_elseif' => true,
        // Removes `@param`, `@return` and `@var` tags that don't provide any useful information.
        'no_superfluous_phpdoc_tags' => ['allow_mixed'=>true,'remove_inheritdoc'=>true],
        // Remove trailing commas in list function calls.
        'no_trailing_comma_in_list_call' => true,
        // PHP single-line arrays should not have trailing comma.
        'no_trailing_comma_in_singleline_array' => true,
        // Remove trailing whitespace at the end of non-blank lines.
        'no_trailing_whitespace' => true,
        // There MUST be no trailing spaces inside comment or PHPDoc.
        'no_trailing_whitespace_in_comment' => true,
        // Removes unneeded parentheses around control statements.
        'no_unneeded_control_parentheses' => true,
        // Removes unneeded curly braces that are superfluous and aren't part of a control structure's body.
        'no_unneeded_curly_braces' => true,
        // A `final` class must not have `final` methods and `private` methods must not be `final`.
        'no_unneeded_final_method' => true,
        // Variables must be set `null` instead of using `(unset)` casting.
        'no_unset_cast' => true,
        // Unused `use` statements must be removed.
        'no_unused_imports' => true,
        // There should not be useless `else` cases.
        'no_useless_else' => true,
        // There should not be an empty `return` statement at the end of a function.
        'no_useless_return' => true,
        // There must be no `sprintf` calls with only the first argument.
        'no_useless_sprintf' => true,
        // In array declaration, there MUST NOT be a whitespace before each comma.
        'no_whitespace_before_comma_in_array' => true,
        // Remove trailing whitespace at the end of blank lines.
        'no_whitespace_in_blank_line' => true,
        // Remove Zero-width space (ZWSP), Non-breaking space (NBSP) and other invisible unicode symbols.
        'non_printable_character' => true,
        // Array index should always be written by using square braces.
        'normalize_index_brace' => true,
        // Adds or removes `?` before type declarations for parameters with a default `null` value.
        'nullable_type_declaration_for_default_null_value' => true,
        // There should not be space before or after object `T_OBJECT_OPERATOR` `->`.
        'object_operator_without_whitespace' => true,
        // Operators - when multiline - must always be at the beginning or at the end of the line.
        'operator_linebreak' => true,
        // Orders the elements of classes/interfaces/traits.
        'ordered_class_elements' => true,
        // Ordering `use` statements.
        'ordered_imports' => true,
        // Orders the interfaces in an `implements` or `interface extends` clause.
        'ordered_interfaces' => true,
        // Trait `use` statements must be sorted alphabetically.
        'ordered_traits' => true,
        // PHPUnit assertion method calls like `->assertSame(true, $foo)` should be written with dedicated method like `->assertTrue($foo)`.
        'php_unit_construct' => true,
        // PHPUnit assertions like `assertInternalType`, `assertFileExists`, should be used over `assertTrue`.
        'php_unit_dedicate_assert' => true,
        // PHPUnit assertions like `assertIsArray` should be used over `assertInternalType`.
        'php_unit_dedicate_assert_internal_type' => true,
        // Usages of `->setExpectedException*` methods MUST be replaced by `->expectException*` methods.
        'php_unit_expectation' => true,
        // Enforce camel (or snake) case for PHPUnit test methods, following configuration.
        'php_unit_method_casing' => ['case'=>'snake_case'],
        // Usages of `->getMock` and `->getMockWithoutInvokingTheOriginalConstructor` methods MUST be replaced by `->createMock` or `->createPartialMock` methods.
        'php_unit_mock' => true,
        // Usage of PHPUnit's mock e.g. `->will($this->returnValue(..))` must be replaced by its shorter equivalent such as `->willReturn(...)`.
        'php_unit_mock_short_will_return' => true,
        // PHPUnit classes MUST be used in namespaced version, e.g. `\PHPUnit\Framework\TestCase` instead of `\PHPUnit_Framework_TestCase`.
        'php_unit_namespaced' => true,
        // Changes the visibility of the `setUp()` and `tearDown()` functions of PHPUnit to `protected`, to match the PHPUnit TestCase.
        'php_unit_set_up_tear_down_visibility' => true,
        // Adds or removes @test annotations from tests, following configuration.
        'php_unit_test_annotation' => ['style'=>'annotation'],
        // Calls to `PHPUnit\Framework\TestCase` static methods must all be of the same type, either `$this->`, `self::` or `static::`.
        'php_unit_test_case_static_method_calls' => ['call_type'=>'self'],
        // All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically.
        'phpdoc_align' => ['align'=>'left'],
        // Fixes PHPDoc inline tags.
        'phpdoc_inline_tag_normalizer' => true,
        // Changes doc blocks from single to multi line, or reversed. Works for class constants, properties and methods only.
        'phpdoc_line_span' => ['const'=>'single','method'=>'single','property'=>'single'],
        // No alias PHPDoc tags should be used.
        'phpdoc_no_alias_tag' => true,
        // `@return void` and `@return null` annotations should be omitted from PHPDoc.
        'phpdoc_no_empty_return' => true,
        // Classy that does not inherit must not have `@inheritdoc` tags.
        'phpdoc_no_useless_inheritdoc' => true,
        // Annotations in PHPDoc should be ordered so that `@param` annotations come first, then `@throws` annotations, then `@return` annotations.
        'phpdoc_order' => true,
        // Order phpdoc tags by value.
        'phpdoc_order_by_value' => true,
        // Scalar types should always be written in the same form. `int` not `integer`, `bool` not `boolean`, `float` not `real` or `double`.
        'phpdoc_scalar' => true,
        // Single line `@var` PHPDoc should have proper spacing.
        'phpdoc_single_line_var_spacing' => true,
        // PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
        'phpdoc_summary' => true,
        // Fixes casing of PHPDoc tags.
        'phpdoc_tag_casing' => true,
        // Docblocks should only be used on structural elements.
        'phpdoc_to_comment' => true,
        // PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
        'phpdoc_trim' => true,
        // Removes extra blank lines after summary and after description in PHPDoc.
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        // The correct case must be used for standard PHP types in PHPDoc.
        'phpdoc_types' => true,
        // Sorts PHPDoc types.
        'phpdoc_types_order' => true,
        // `@var` and `@type` annotations must have type and name in the correct order.
        'phpdoc_var_annotation_correct_order' => true,
        // `@var` and `@type` annotations of classy properties should not contain the name.
        'phpdoc_var_without_name' => true,
        // Converts `pow` to the `**` operator.
        'pow_to_exponentiation' => true,
        // Converts `protected` variables and methods to `private` where possible.
        'protected_to_private' => true,
        // Callables must be called without using `call_user_func*` when possible.
        'regular_callable_call' => true,
        // Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method.
        'return_assignment' => true,
        // There should be one or no space before colon, and one space after it in return type declarations, according to configuration.
        'return_type_declaration' => ['space_before'=>'none'],
        // Inside class or interface element `self` should be preferred to the class name itself.
        'self_accessor' => true,
        // Inside a `final` class or anonymous class `self` should be preferred to `static`.
        'self_static_accessor' => true,
        // Instructions must be terminated with a semicolon.
        'semicolon_after_instruction' => true,
        // Cast shall be used, not `settype`.
        'set_type_to_cast' => true,
        // Cast `(boolean)` and `(integer)` should be written as `(bool)` and `(int)`, `(double)` and `(real)` as `(float)`, `(binary)` as `(string)`.
        'short_scalar_cast' => true,
        // Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (`${` to `{$`).
        'simple_to_complex_string_variable' => true,
        // Simplify `if` control structures that return the boolean result of their condition.
        'simplified_if_return' => true,
        // A return statement wishing to return `void` should not return `null`.
        'simplified_null_return' => true,
        // A PHP file without end tag must always end with a single empty line feed.
        'single_blank_line_at_eof' => true,
        // There should be exactly one blank line before a namespace declaration.
        'single_blank_line_before_namespace' => true,
        // There MUST NOT be more than one property or constant declared per statement.
        'single_class_element_per_statement' => ['elements'=>['property']],
        // There MUST be one use keyword per declaration.
        'single_import_per_statement' => false,
        // Each namespace use MUST go on its own line and there MUST be one blank line after the use statements block.
        'single_line_after_imports' => true,
        // Single-line comments and multi-line comments with only one line of actual content should use the `//` syntax.
        'single_line_comment_style' => true,
        // Ensures a single space after language constructs.
        'single_space_after_construct' => true,
        // Each trait `use` must be done as single statement.
        'single_trait_insert_per_statement' => true,
        // Fix whitespace after a semicolon.
        'space_after_semicolon' => true,
        // Increment and decrement operators should be used if possible.
        'standardize_increment' => true,
        // Replace all `<>` with `!=`.
        'standardize_not_equals' => true,
        // Comparisons should be strict.
        'strict_comparison' => false,
        // Functions should be used with `$strict` param set to `true`.
        'strict_param' => true,
        // All multi-line strings must use correct line ending.
        'string_line_ending' => true,
        // A case should be followed by a colon and not a semicolon.
        'switch_case_semicolon_to_colon' => true,
        // Removes extra spaces between colon and case value.
        'switch_case_space' => true,
        // Switch case must not be ended with `continue` but with `break`.
        'switch_continue_to_break' => true,
        // Standardize spaces around ternary operator.
        'ternary_operator_spaces' => true,
        // Use the Elvis operator `?:` where possible.
        'ternary_to_elvis_operator' => true,
        // Use `null` coalescing operator `??` where possible. Requires PHP >= 7.0.
        'ternary_to_null_coalescing' => true,
        // PHP multi-line arrays should have a trailing comma.
        'trailing_comma_in_multiline' => true,
        // Arrays should be formatted like function/method arguments, without leading or trailing single line space.
        'trim_array_spaces' => true,
        // Unary operators should be placed adjacent to their operands.
        'unary_operator_spaces' => true,
        // Anonymous functions with one-liner return statement must use arrow functions.
        'use_arrow_functions' => true,
        // Visibility MUST be declared on all properties and methods; `abstract` and `final` MUST be declared before the visibility; `static` MUST be declared after the visibility.
        'visibility_required' => true,
        // Add `void` return type to functions with missing or empty return statements, but priority is given to `@return` annotations. Requires PHP >= 7.1.
        'void_return' => false,
        // In array declaration, there MUST be a whitespace after each comma.
        'whitespace_after_comma_in_array' => true,
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->in([__DIR__.'/src', __DIR__.'/tests'])
        ->files()->notName(['Kernel.php', 'bootstrap.php'])
    )
;

