<?php

    //
    // Not my code.
    //
    // Sample of:
    // 1. a funtion
    // 2. try/catch/finally
    // 3. Exception
    //
    // No warranty. No guarantee. No claims. You use at your own risk.
    //
    function onedividedby($x) {
        if (!$x) {
            throw new Exception( "Division by zero.\n" );
        }
        return 1/$x;
    }

    // The 'Main' execution starts here
    //
    try {
        echo onedividedby(5) . "\n";
    } catch (Exception $e) {
        echo "Exception trapped: ",  $e->getMessage(), "\n";
    } finally {
        echo "First finally.\n";
    }

    try {
        echo onedividedby(0) . "\n";
    } catch (Exception $e) {
        echo "Caught exception: ",  $e->getMessage(), "\n";
    } finally {
        echo "Second finally.\n";
    }
    //
    // Finished execution.
    echo "Done.\n";

?>
