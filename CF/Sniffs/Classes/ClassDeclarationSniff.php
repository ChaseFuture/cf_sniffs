<?php
/**
 * Class Declaration Test.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * Class Declaration Test.
 *
 * Checks the declaration of the class and its inheritance is correct.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: 2.3.3
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class CF_Sniffs_Classes_ClassDeclarationSniff implements PHP_CodeSniffer_Sniff
{


  /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(
            T_CLASS,
            T_INTERFACE,
        );
    }//end register()
    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The current file being processed.
     * @param int                  $stackPtr  The position of the current token
     *                                        in the stack passed in $tokens.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        // get the class name
        $className = trim($phpcsFile->getDeclarationName($stackPtr));
        // compute the expected class name
        // [^_] means "something different from _", but not "nothing or something different from _"
        $lcClassNameChunk = preg_replace('/([^_])([A-Z])/', '${1}_${2}', $className);
        $classNameArray = explode('_', $lcClassNameChunk);

        $expectedClassName = '';

        foreach ($classNameArray as $name) {
            $expectedClassName = $expectedClassName . '_' . ucfirst($name);
        }

        $expectedClassName = ltrim ($expectedClassName, '_');

        // ensures that the current class name
        // and the expected class name are identical
        if (0 !== strcmp($className, $expectedClassName)) {
            $error =  'Class names should always have their first letter uppercase. Multiple words should be separated with an underscore, and CamelCased. Please consider ' . $expectedClassName . ' instead of ' . $className . '.';
            $phpcsFile->addError($error, $stackPtr);
        }
    }//end process()

}//end class
