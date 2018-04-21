<?php
include_once 'controller/administrador.php';
include_once 'controller/empleado.php';
include_once 'controller/root.php';
include_once 'controller/login.php';

include_once 'dao/contratoDao.php';
include_once 'dao/empleadoDao.php';
include_once 'dao/empresaDao.php';
include_once  'dao/loginDao.php';
include_once 'dao/userDao.php';


include_once 'dto/cargoDto.php';
include_once 'dto/conceptoDto.php';
include_once 'dto/contratoDto.php';
include_once 'dto/departamentoDto.php';
include_once 'dto/empleadoDto.php';
include_once 'dto/empresaDto.php';
include_once 'dto/liquidacionConceptoDto.php';
include_once 'dto/liquidacionDto.php';
include_once 'dto/periodoDto.php';
include_once 'dto/tipoConceptoDto.php';
include_once 'dto/tipoContratoDto.php';
include_once 'dto/userDto.php';

include_once 'model/model.php';

require_once 'router/router.php';

session_start();

$router = new Router();
$router->router();
?>