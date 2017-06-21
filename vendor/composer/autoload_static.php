<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55289c880739cdd16424f3133312b715
{
    public static $classMap = array (
        'Cliente' => __DIR__ . '/../..' . '/src/objetos/cliente.php',
        'ClienteBanco' => __DIR__ . '/../..' . '/src/banco/cliente_banco.php',
        'Usuario' => __DIR__ . '/../..' . '/src/objetos/usuario.php',
        'UsuarioBanco' => __DIR__ . '/../..' . '/src/banco/usuario_banco.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit55289c880739cdd16424f3133312b715::$classMap;

        }, null, ClassLoader::class);
    }
}
