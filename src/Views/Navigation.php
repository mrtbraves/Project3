<?php

namespace Views;


class Navigation
{
    public function __construct()
    {

        $this->content = <<<NAVIGATION

<style>
    .logout {

        background-color: #4E4790;

        color: whitesmoke;
        width:90px;
        height:30px;
        text-decoration: none;
        cursor: pointer;
        border:none;
        font-size: medium;

    }
</style>
<div class="nav">
    <a >CS4350 Project Three</a>

        <form style="float: right; margin-top:-5px; margin-right:10px">
            <input class="logout" type="submit" value="Logout">
        </form>

</div>

NAVIGATION;
    }
}







