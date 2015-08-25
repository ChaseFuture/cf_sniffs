# ChaseFuture Coding Standard

The following page describes the coding styles adhered to in ChaseFuture Dev Team.

### File Format

Files should be saved with `Unicode (UTF-8) without BOM` encoding, and `Unix` format(line ending). 

### File Naming

Class files must be named in a Ucfirst-like manner with an underscore to separate each word, while any other file name (configurations, views, generic scripts, etc.) should be in all lowercase.

INCORRECT:
```
somelibrary.php
someLibrary.php
SOMELIBRARY.php
Some_library.php
Application_controller.php
applicationController.php
```

CORRECT:
```
Some_Library.php
Application_Controller.php
```

Furthermore, class file names should match the name of the class itself.


### PHP Closing Tag

All PHP files MUST OMIT the PHP closing tag and end with a single empty line instead.

### Class and Method Naming

Class names should always start with an uppercase letter. Multiple words should be separated with an underscore, and CamelCased.

INCORRECT:
```
class superclass
class SuperClass
```

CORRECT:
```
class Super_Class
```

Class methods should be entirely lowercased and named to clearly indicate their function, preferably including a verb.

INCORRECT:
```
function fileproperties()               // not descriptive and needs underscore separator
function fileProperties()               // not descriptive and uses CamelCase
function getfileproperties()            // Better!  But still missing underscore separator
function getFileProperties()            // uses CamelCase
function get_the_file_properties_from_the_file()        // wordy
```

CORRECT:
```
function get_file_properties()  // descriptive, underscore separator, and all lowercase letters
```

### Variable Names

Variables should contain only lowercase letters, use underscore separators.

INCORRECT:

```
$j = 'foo';             // single letter variables should only be used in for() loops
$Str                    // contains uppercase letters
$bufferedText           // uses CamelCasing, and could be shortened without losing semantic meaning
$groupid                // multiple words, needs underscore separator
$name_of_last_city_used // too long
```

### Constants

Constants follow the same guidelines as do variables, except constants should always be fully uppercase.
`TRUE, FALSE, and NULL` keywords should always be fully lowercase.


### Indenting

Code MUST use 4 spaces for indenting, not tabs.

### New Line

* Opening braces for classes MUST go on the next line, and closing braces MUST go on the next line after the body.
* Opening braces for methods MUST go on the next line, and closing braces MUST go on the next line after the body.

 Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before the visibility; static MUST be declared after the visibility.

### Control stucture

* Control structure keywords MUST have one space after them; method and function calls MUST NOT.
* Opening braces for control structures MUST go on the same line, and closing braces MUST go on the next line after the body.
* Opening parentheses for control structures MUST NOT have a space after them, and closing parentheses for control structures MUST NOT have a space before.


## References

* [PSR2](http://www.php-fig.org/psr/psr-2/)
* [CodeIgniter Coding Standard](http://www.codeigniter.com/userguide3/general/styleguide.html)
