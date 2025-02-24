<?php

return [
    'reset-password' => [
        'title' => 'Senha Expirada, Redefinir Senha',
        'heading' => 'Crie Uma Nova Senha',
        'sub_heading' => 'Sua senha expirou, por favor, crie uma nova senha',
        'form' => [
            'current_password' => [
                'label' => 'Senha Atual',
                'validation_attribute' => 'senha_atual',
            ],
            'password' => [
                'label' => 'Senha',
                'validation_attribute' => 'senha',
            ],
            'password_confirmation' => [
                'label' => 'Confirmar Senha',
            ],
        ],
        'reset_password' => 'Redefinir Senha',
        'password_reset' => 'Senha Redefinida',
        'notifications' => [
            'wrong_password' => [
                'title' => 'Senha Incorreta',
                'body' => 'A senha atual que você digitou está incorreta.',
            ],
            'column_not_found' => [
                'title' => 'Coluna Não Encontrada',
                'body' => 'A coluna ":column_name" ou a coluna de senha ":password_column_name" não foi encontrada na tabela :table_name.',
            ],
            'password_reset' => [
                'success' => 'Senha Redefinida com Sucesso',
            ],
            'same_password' => [
                'title' => 'Mesma Senha',
                'body' => 'A nova senha deve ser diferente da senha atual.',
            ],
        ],
        'exceptions' => [
            'column_not_found' => 'A coluna ":column_name" ou a coluna de senha ":password_column_name" não foi encontrada na tabela ":table_name". Por favor, publique as migrações e execute-as. Se o erro persistir, publique o arquivo de configuração e atualize os valores de table_name, column_name e password_column_name.',
        ],
    ],
];
