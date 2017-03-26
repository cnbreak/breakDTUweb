<?php

/**
 * AccessCondition class
 *
 * This class contains static methods to be used in conditional clauses for authorization hooks.
 * Here you may add your own methods for use in access hook conditional expressions.
 * Every method of this class MUST be static and return a boolean value.
 *
 * @package UserFrosting
 * @author Alex Weissman
 * @see http://www.userfrosting.com/components/#authorization
 */
class AccessCondition {

    /**
     * Unconditionally grant permission - use carefully!
     * @return bool returns true no matter what.
     */
    static function always(){
        return true;
    
    }

    /**
     * Check if the specified values are identical to one another (strict comparison).
     * @param mixed $val1 the first value to compare.
     * @param mixed $val2 the second value to compare.     
     * @return bool true if the values are strictly equal, false otherwise.
     */    
    static function equals($val1, $val2){
        return ($val1 === $val2);
    }    

    /**
     * Check if the specified values are numeric, and if so, if they are equal to each other.
     * @param mixed $val1 the first value to compare.
     * @param mixed $val2 the second value to compare.     
     * @return bool true if the values are numeric and equal, false otherwise.
     */     
    static function equals_num($val1, $val2){
        if (!is_numeric($val1))
            return false;
        if (!is_numeric($val2))
            return false;
            
        return ($val1 == $val2);
    }
    
    /**
     * Check if all keys of the array $needle are present in the values of $haystack.
     *
     * This function is useful for whitelisting an array of key-value parameters.
     * @param array[mixed] $needle the array whose keys we should look for in $haystack
     * @param array[mixed] $haystack the array of values to search.    
     * @return bool true if every key in $needle is present in the values of $haystack, false otherwise.
     */      
    static function subset_keys($needle, $haystack){
        return count($needle) == count(array_intersect(array_keys($needle), $haystack));
    }

    /**
     * Check if all values in the array $needle are present in the values of $haystack.
     *
     * @param array[mixed] $needle the array whose values we should look for in $haystack
     * @param array[mixed] $haystack the array of values to search.    
     * @return bool true if every value in $needle is present in the values of $haystack, false otherwise.
     */          
    static function subset($needle, $haystack){
        return count($needle) == count(array_intersect($needle, $haystack));
    }
    
    /**
     * Check if the specified value $needle is in the values of $haystack.
     *
     * @param mixed $needle the value to look for in $haystack
     * @param array[mixed] $haystack the array of values to search.    
     * @return bool true if $needle is present in the values of $haystack, false otherwise.
     */      
    static function in($needle, $haystack){
        return in_array($needle, $haystack);
    }
    
    /**
     * Check if the specified user (by user_id) is in a particular group.
     *
     * @param int $user_id the id of the user.
     * @param int $group_id the id of the group. 
     * @return bool true if the user is in the group, false otherwise.
     */     
    static function in_group($user_id, $group_id){
        $user = \UserFrosting\User::find($user_id);
        $groups = $user->getGroups();
        return isset($groups[$group_id]);
    }
}
