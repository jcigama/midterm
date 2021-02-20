<?php

/* model/data-layer.php
 * returns data for my app
 *
 */

class DataLayer
{
    /** getMeals() returns an array of meals
     *  @return array
     */
    function getSurveyOptions()
    {
        return array("This midterm is hard", "This midterm is very hard", "We're taking a midterm?");
    }
}
