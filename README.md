## Kampernet Aspects

 This package provides a very simple way to get aspect oriented programming capabilities in your PHP classes with
 little overhead.  Please see the code in tests/AspectTest.php to see how to use it.

        $aspectee = Aspect::getAspectedInstance('Aspectee');
        $aspectee->doThisThing();

 You can easily hijack or create a PHP class autoloader that implements AOP this way.  Using this Aspect class you
 make classes that are Aspectees and use the @has annotation to say what Aspects they have.  The naming convention is
 such that it looks for the class you say it has plus the word Aspect.

 eg: @has Example looks for and loads a class by the name of ExampleAspect.

 The Aspect class methods are either named \(before\|after\)\<Classname\>\<MethodName\> or have the @match annotation in the same
 format to get applied correctly.  Using the @match annotation you can also match to regular expressions.