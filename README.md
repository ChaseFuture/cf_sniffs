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
Some_Library.php
Application_controller.php
applicationController.php
```

CORRECT:
```
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


- Code MUST use 4 spaces for indenting, not tabs.

_ There MUST NOT be a hard limit on line length; the soft limit MUST be 120 characters; lines SHOULD be 80 characters or less.

- There MUST be one blank line after the namespace declaration, and there MUST be one blank line after the block of use declarations.
- 
- Opening braces for classes MUST go on the next line, and closing braces MUST go on the next line after the body.
- 
- Opening braces for methods MUST go on the next line, and closing braces MUST go on the next line after the body.
- 
- Visibility MUST be declared on all properties and methods; abstract and final MUST be declared before the visibility; static MUST be declared after the visibility.
- 
- Control structure keywords MUST have one space after them; method and function calls MUST NOT.
- 
- Opening braces for control structures MUST go on the same line, and closing braces MUST go on the next line after the body.
- 
- Opening parentheses for control structures MUST NOT have a space after them, and closing parentheses for control structures MUST NOT have a space before.
