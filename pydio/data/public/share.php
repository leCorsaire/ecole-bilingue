<?php
                    define("AJXP_EXEC", true);
                    require_once("/Applications/MAMP/htdocs/ecole_bi_lingue/default/0.1.3/pydio/core/classes/class.AJXP_Utils.php");
                    $hash = AJXP_Utils::securePath(AJXP_Utils::sanitize($_GET["hash"], AJXP_SANITIZE_ALPHANUM));
                    if(file_exists($hash.".php")){
                        require_once($hash.".php");
                    }else{
                        require_once("/Applications/MAMP/htdocs/ecole_bi_lingue/default/0.1.3/pydio/publicLet.inc.php");
                        ShareCenter::loadShareByHash($hash);
                    }
                