<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Teste de templete</h1>
<p>Por: <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>