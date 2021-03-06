# sublime-php-grammar

sublime-php-grammar plugin for Sublime Text. Provides a PHP syntax definition, decent indentation rules, macros, and other useful features.

## Overview

* [Features](#features)
* [Macros](#macros)
* [Installation](#installation)
* [Contributing](#contributing)
* [Changelog](#changelog)
* [Complementary Plugins](#complementary-plugins)
* [Credits](#credits)
* [License](#license)

## Features

* Updated syntax definition support for PHP [~5.6][semver] builtin classes, functions, and constants which provides more up to date support for syntax highlighters.
* Decent indentation rules

    Reindent.

    ```php
    Menu > Edit > Line > Reindent
    ---------------------------------------------------------------------
    Original                  -> | Reindented
    ---------------------------------------------------------------------
    $val = array(                | $val = array(
    array(                       |     array(
    array(                       |         array(
    array(                       |             array(
    array(                       |                 array(
    array(                       |                     array(
    )                            |                     )
    )                            |                 )
    )                            |             )
    )                            |         )
    ),                           |     ),
    'x' => 'y',                  |     'x' => 'y',
    "multi" => array(            |         "multi" => array(
    "dimensional" => array(      |             "dimensional" => array(
    "array" => "x"               |                 "array" => "x"
    'x' => array(                |                 'x' => array(
    'y' => 'z'                   |                     'y' => 'z'
    )                            |                 )
    )                            |             )
    )                            |     )
    );                           | );
    ```

    Press closing parentheses in an array context automatically indents to the correct position.

    ```php
    Press )
    ---------------------------------------------------------------------
    $val = array(               | $val = array(
        array(                  |     array(
            array(              |         array(
                array(          |             array(
                    |           |             )|
    ```

* Decent macros

    <kbd>Enter</kbd>

    ```php
    $val = array(|)             | $val = array(
                                |     |
                                | )
    ```

    <kbd>Enter</kbd>

    ```php
    $val = array(               | $val = array(
        'str|'                  |     'str',
    )                           |     |
                                | )
    ```

    <kbd>Ctrl</kbd>+<kbd>;</kbd>

    ```
    $val = 'str|ing'            | $val = 'str|ing';
    ```

    <kbd>Ctrl</kbd>+<kbd>Enter</kbd>

    ```
    $val = 'str|ing'            | $val = 'string';
                                | |
    ```

## Macros

*To insert a literal newline <kbd>Shift</kbd>+<kbd>Enter</kbd>.*

*To insert literal in a an overriden context prefix the literal with <kbd>Ctrl</kbd>.*

| Keymap | Context | Description |
|--------|---------| ------------|
| <kbd>Enter</kbd> | Empty array | Wrap cursor with `\n`'s and indent cursor line |
| <kbd>Enter</kbd> | Array string | Append `,\n` |
| <kbd>Ctrl</kbd>+<kbd>Enter</kbd> | *\** | Append `;\n` |
| <kbd>Ctrl</kbd>+<kbd>;</kbd> | *\** | Append `;` |

*\* means contexts where the result of the macro makes sense and is valid syntax.*

## Installation

_Note_: Sublime text has a native package for PHP. However, when sublime-php-grammar is enabled, the native package causes some conflicts. For this reason, sublime-php-grammar will automatically disable it. Since it doesn't bring anything new over sublime-php-grammar, this is not a loss. But remember, when you disable sublime-php-grammar, you have to reenable the native PHP package manually (if you want). Also, sublime-php-grammar provides [completions][php-completions] and [snippets][php-snippets] as separate packages.

If you are using Sublime Text 2, you have to disable the native package _manually_. To do that, add `PHP` to your `ignored_packages` list in ST user settings:

```
"ignored_packages": [..., "PHP"]
```

### Manual installation

1. Download or clone this repository to a directory named `php-grammar` in the Sublime Text Packages directory for your platform: 
    * Sublime Text 3
        - Linux: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/.config/sublime-text-3/Packages/php-grammar`
        - OS X: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/Library/Application\ Support/Sublime\ Text\ 3/Packages/php-grammar`
        - Windows: `git clone https://github.com/gerardroche/sublime-php-grammar.git %APPDATA%\Sublime/ Text/ 3/Packages/php-grammar`
2. Restart Sublime Text to complete installation. The features listed above should now be available.
  * Sublime Text 2
        - Linux: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/.config/sublime-text-2/Packages/php-grammar`
        - OS X: `git clone https://github.com/gerardroche/sublime-php-grammar.git ~/Library/Application\ Support/Sublime\ Text\ 2/Packages/php-grammar`
        - Windows: `git clone https://github.com/gerardroche/sublime-php-grammar.git %APPDATA%\Sublime/ Text/ 2/Packages/php-grammar`

*Cloning into the Packages while ST is open can cause some warning message dialogs to appear and syntax highlighting to appear broken. This is harmless. Close the dialogs and files with no syntax highlighting and reopen them, and  restart ST. to avoid the dialog messages, close ST before cloning.*

## Contributing

Issue reports and pull requests are always welcome.

See [CONTRIBUTING.md](CONTRIBUTING.md).

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## Complementary Plugins

* [php-completions]
* [php-grammar]
* [php-snippets]
* [phpunit-completions]
* [phpunit-snippets]
* [phpunit]

## Credits

Originally converted from the [PHP TextMate bundle](https://github.com/textmate/php.tmbundle) and bundled with Sublime Text.

## License

sublime-php-grammar is released under the [BSD 3-Clause License][license].

[license]: LICENSE
[Package Control]: https://packagecontrol.io
[php-completions]: https://github.com/gerardroche/sublime-phpck
[php-fig]: http://www.php-fig.org
[php-grammar]: https://github.com/gerardroche/sublime-php-grammar
[php-snippets]: https://github.com/gerardroche/sublime-php-snippets
[phpunit-completions]: https://github.com/gerardroche/sublime-phpunitck
[phpunit-snippets]: https://github.com/gerardroche/sublime-phpunit-snippets
[phpunit]: https://github.com/gerardroche/sublime-phpunit
[semver]: http://semver.org
