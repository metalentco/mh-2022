<?php
return function ($site) {
    return $site->page('programm')->children()->listed();
};