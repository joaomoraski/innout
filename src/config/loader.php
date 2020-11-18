<?php
//carregar a view e model
function loadModel($modelName){
    require_once(MODEL_PATH . "/{$modelName}.php");
}

function loadView($viewName, $params = array()){ //Para carregar a view tem que passar dados para view
    if (count($params) > 0){
        foreach ($params as $key => $value){
            if (strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }
    require_once(VIEW_PATH . "/{$viewName}.php");
}

function loadTemplateView($viewName, $params = array()){ //Para carregar a view tem que passar dados para view
    if (count($params) > 0){
        foreach ($params as $key => $value){
            if (strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }
    require_once(TEMPLATE_PATH . "/header.php");
    require_once(TEMPLATE_PATH . "/menu.php");
    require_once(VIEW_PATH . "/{$viewName}.php");
    require_once(TEMPLATE_PATH . "/footer.php");
}

function renderTitle($title, $subtitle, $icon = null){ //Tem acesso as variaveis
    require_once(TEMPLATE_PATH . "/title.php");
}