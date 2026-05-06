<?php
return [
'~^/$~' => [\App\Controllers\MainController::class, 'getContent'],
'~^/contacts$~' => [\App\Controllers\ContactsController::class, 'getContent'],
'~^/private$~' => [\App\Controllers\PrivateController::class, 'getContent'],
'~^/email$~' => [\App\Controllers\EmailController::class, 'getContent'],
'~^/(corpus|soft|hrom|matrasses)/(.*)$~' => [\App\Controllers\CategoryController::class, 'getContent'],
//'~^/(corpus|soft|hrom|matrasses)/([a-zA-Z0-9-]+)/([0-9]+)$~' => [\App\Controllers\ProductController::class, 'getContent'],
'~^/product/([a-zA-Z0-9-]+)/([0-9]+)$~' => [\App\Controllers\ProductController::class, 'getContent'],
];