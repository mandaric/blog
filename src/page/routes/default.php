<?php

map('GET', '/{page}', function ($params) {
    echo $params['page'];
});