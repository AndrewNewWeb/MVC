<?php

use Dev\Mvc\core\route;

route::get('category/index', ['users', 'index']);
route::get('/', ['users', 'edit']);