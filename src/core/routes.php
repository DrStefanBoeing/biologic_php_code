<?php

use Biologic\Core\Classes\Auth;

$router->get('/login', 'Biologic\Core\Controllers\Auth\AuthController::getLogin');
$router->post('/login', 'Biologic\Core\Controllers\Auth\AuthController::postLogin');
$router->get('/logout', 'Biologic\Core\Controllers\Auth\AuthController::getLogout');
$router->post('/logout', 'Biologic\Core\Controllers\Auth\AuthController::postLogout');

$router->post('/ajax/check-email', 'Biologic\Core\Controllers\Auth\PasswordResetController::ajaxCheckEmail');

$router->get('/password-reset', 'Biologic\Core\Controllers\Auth\PasswordResetController::sendResetLink');
$router->get('/password-reset/{token}', 'Biologic\Core\Controllers\Auth\PasswordResetController::getResetLink');
$router->post('/password-reset/{token}', 'Biologic\Core\Controllers\Auth\PasswordResetController::postResetLink');

/* Portal */
$router->auth(Auth::portal(), function() use ($router) {
    $router->get('/', 'Biologic\Core\Controllers\Portal\PortalController::index');
    $router->get('/experiments', 'Biologic\Core\Controllers\Portal\PortalController::experiments');
    $router->get('/project/{project_code}/manage', 'Biologic\Core\Controllers\Portal\ProjectAccessController::getUsers');
    $router->post('/project/{project_code}/manage', 'Biologic\Core\Controllers\Portal\ProjectAccessController::postUsers');
    $router->get('/project/{project_code}', 'Biologic\Core\Controllers\Portal\PortalController::project');
    $router->get('/experiment/{experiment_code}/manage', 'Biologic\Core\Controllers\Portal\ExperimentAccessController::getUsers');
    $router->post('/experiment/{experiment_code}/manage', 'Biologic\Core\Controllers\Portal\ExperimentAccessController::postUsers');
});

$router->auth(Auth::superuser(), function() use ($router) {
    $router->get('/manage/users', 'Biologic\Core\Controllers\Portal\ManageController::listUsers');
    $router->get('/manage/users/create', 'Biologic\Core\Controllers\Portal\ManageController::getCreateUser');
    $router->post('/manage/users/create', 'Biologic\Core\Controllers\Portal\ManageController::postCreateUser');
    $router->get('/manage/users/{user_id}', 'Biologic\Core\Controllers\Portal\ManageController::getUser');
    $router->post('/manage/users/{user_id}', 'Biologic\Core\Controllers\Portal\ManageController::postUser');

    $router->get('/manage/projects', 'Biologic\Core\Controllers\Portal\ManageController::listProjects');
    $router->get('/manage/projects/create', 'Biologic\Core\Controllers\Portal\ManageController::newProject');
    $router->post('/manage/projects/create', 'Biologic\Core\Controllers\Portal\ManageController::createProject');
    $router->get('/manage/projects/{project_id}', 'Biologic\Core\Controllers\Portal\ManageController::editProject');
    $router->post('/manage/projects/{project_id}', 'Biologic\Core\Controllers\Portal\ManageController::updateProject');

    $router->get('/manage/experiments', 'Biologic\Core\Controllers\Portal\ManageController::listExperiments');
    $router->get('/manage/experiments/create', 'Biologic\Core\Controllers\Portal\ManageController::newExperiment');
    $router->post('/manage/experiments/create', 'Biologic\Core\Controllers\Portal\ManageController::createExperiment');
    $router->get('/manage/experiments/{experiment_id}', 'Biologic\Core\Controllers\Portal\ManageController::editExperiment');
    $router->post('/manage/experiments/{experiment_id}', 'Biologic\Core\Controllers\Portal\ManageController::updateExperiment');
});

$router->get('/demo', 'Biologic\Core\Controllers\PageController::demo');
$router->get('/demo/index.html', 'Biologic\Core\Controllers\PageController::demo');

/* dynamic based on experiment */
$router->auth(Auth::experiment(), function() use ($router) {
    $router->get('/{experiment_code}/', 'Biologic\Core\Controllers\PageController::home');
    $router->get('/{experiment_code}/about', 'Biologic\Core\Controllers\PageController::about');
    $router->get('/{experiment_code}/venn', 'Biologic\Core\Controllers\VennController::get');
    $router->post('/{experiment_code}/venn', 'Biologic\Core\Controllers\VennController::get');
    $router->get('/{experiment_code}/gene-view', 'Biologic\Core\Controllers\GeneViewController::get');
    $router->get('/{experiment_code}/category-view', 'Biologic\Core\Controllers\CategoryViewController::browse');
    $router->get('/{experiment_code}/category-view/{category_query}', 'Biologic\Core\Controllers\CategoryViewController::display');
    $router->get('/{experiment_code}/scatterplot', 'Biologic\Core\Controllers\ScatterplotController::get');
    $router->get('/{experiment_code}/pca', 'Biologic\Core\Controllers\PCAController::get');
    $router->get('/{experiment_code}/report', 'Biologic\Core\Controllers\ReportController::get');
    $router->post('/{experiment_code}/report', 'Biologic\Core\Controllers\ReportController::post');
    $router->get('/{experiment_code}/report/revisions/{revision_id}', 'Biologic\Core\Controllers\ReportController::getRevision');
    $router->post('/{experiment_code}/report/revisions/{revision_id}', 'Biologic\Core\Controllers\ReportController::postRevision');

    // ajax
    $router->post('/{experiment_code}/ajax/venn/table', 'Biologic\Core\Controllers\AjaxController::tableEntries');
    $router->post('/{experiment_code}/ajax/table/ref-categories', 'Biologic\Core\Controllers\AjaxController::refCategories');
    $router->post('/{experiment_code}/ajax/table/local-categories', 'Biologic\Core\Controllers\AjaxController::localCategories');

    $router->get('/{experiment_code}/ajax/gene-list', 'Biologic\Core\Controllers\AjaxController::getGeneList');

    // downloads
    $router->get('/{experiment_code}/download/gene-table/{format}', 'Biologic\Core\Controllers\DownloadController::geneTable');

    // mounted files
    $router->get('/mdata/{experiment_code}/{filename}', 'Biologic\Core\Controllers\MountController::renderFile');
});

