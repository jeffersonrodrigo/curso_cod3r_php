<?php

function loadModel($modelName) { // serve para carregar o model facilitando na hora de chamar ao inves de fazer require_once e td mais apenas chamar a função (src\models\Login.php) e (src\controllers\login.php) 
    require_once(MODEL_PATH . "/{$modelName}.php");
}

function loadView($viewName, $params = array()) { # O segundo parametro é opcional que por padrao vai receber um array vazio// src\controllers\login.php

    if(count($params) > 0) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0) { // se o valor da string $key for maior q 0 criar
                ${$key} = $value; //variavel variavel (ver aula 59)
            }
        }
    }

    require_once(VIEW_PATH . "/{$viewName}.php");
}

function loadTemplateView($viewName, $params = array()) {

    if(count($params) > 0) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }
    require_once(TEMPLATE_PATH . "/header.php");
    require_once(TEMPLATE_PATH . "/left.php");
    require_once(VIEW_PATH . "/{$viewName}.php");
    require_once(TEMPLATE_PATH . "/footer.php");
}

function renderTitle($title, $subtitle, $icon = null) {
    require_once(TEMPLATE_PATH . "/title.php");
}