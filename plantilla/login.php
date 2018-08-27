<!doctype html>
<html lang="es">
    <?php include '/head.php'; ?>
    <body>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="limiter">
                        <div class="container-login100">
                            <div class="wrap-login100">
                                <div class="login100-pic js-tilt" data-tilt>
                                    <img src="plantilla/assets/img/img-01.png" alt="IMG">
                                </div>

                                <form id="frm-login" class="login100-form validate-form" onsubmit="return false;">
                                    <span class="login100-form-title">
                                        Solo personal autorizado
                                    </span>

                                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                        <input class="input100" type="text" name="email" placeholder="Correo autorizado" required="">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                        <input class="input100" type="password" name="pass" placeholder="Clave" required="">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="container-login100-form-btn">
                                        <button type="submit" class="login100-form-btn">
                                            Entrar
                                        </button>
                                    </div>
                                    
                                    <input type="hidden" name="operacion" value="login" />

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include '/pie.php'; ?>
        <?php include '/js.php'; ?>
    </body>
</html>
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

