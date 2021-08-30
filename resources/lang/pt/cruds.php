<?php

return [
    'userManagement' => [
        'title'          => 'Gestão de usuários',
        'title_singular' => 'Gestão de usuários',
    ],
    'permission'     => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Título',
            'title_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Funções',
        'title_singular' => 'Função',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Título',
            'title_helper'       => '',
            'permissions'        => 'Permissões',
            'permissions_helper' => '',
            'created_at'         => 'Criado em',
            'created_at_helper'  => '',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deletado em',
            'deleted_at_helper'  => '',
        ],
    ],

    'company'     => [
        'title'          => 'Empresa',
        'title_singular' => 'Empresa',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Empresa',
            'title_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deletado em',
            'deleted_at_helper' => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuários',
        'title_singular' => 'Usuário',
        'general_users'  => 'Usuários Gerais',
        'talnet'         => 'Talnet',
        'artist_users'   => 'Usuários de Artistas',
        'agents'         => 'Agentes',
        'student_import_success' => 'Alunos importados com sucesso.',
        'fields'         => [
            'id'                       => '#',
            'id_helper'                => '',
            'name'                     => 'Nome',
            'name_helper'              => '',
            'group_file'               => 'Selecionar Arquivo',
            'first_name'               => 'Primeiro Nome',
            'last_name'                => 'Último Nome',
            'email'                    => 'Email',
            'company'                  => 'Empresa',
            'business'                 => 'Negócio',
            'department'               => 'Departamento',
            'market_stall'             => 'Tenda do Mercado',
            'home'                     => 'Casa',
            'city'                     => 'Cidade',
            'state'                    => 'Estado',
            'phone'                    => 'Telefone',
            'notes'                    => 'Notas',
            'avatar'                   => 'Foto',
            'cpf_cnpj'                 => 'CPF / CNPJ',
            'takedowns'                => 'Takedowns',
            'contract'                 => 'Contrato',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verificado em',
            'email_verified_at_helper' => '',
            'password'                 => 'Senha',
            'password_helper'          => '',
            'roles'                    => 'Funções',
            'roles_helper'             => '',
            'remember_token'           => 'Lembrar do token',
            'remember_token_helper'    => '',
            'created_at'               => 'Criado em',
            'created_at_helper'        => '',
            'updated_at'               => 'Atualizado em',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deletado em',
            'deleted_at_helper'        => '',
            'status'                   => 'Status',
        ],
    ],
    'detections'        => [
        'title'  => 'Detection',

        'fields' => [
            'id'                    => 'ID',
            'all_component'         => 'Todos os componentes',
            'dec_id'                => 'ID da Detecção',
            'title'                 => 'Título',
            'created_date'          => 'Data de criação',
            'datetime'              => 'Data e Hora',
            'category'              => 'Categoria',
            'analyst'               => 'Analista',
            'creater'               => 'Criador',
            'description'           => 'Descrição',
            'detection_level'       => 'Nível da detecção',
            'mark_read'             => 'Marcar como lido',
            'send_feedback'         => 'Enviar Feedback',
            'feedback'              => 'Feedback',
            'detection_type'        => 'Tipo da Detecção',
            'emergency'             => 'Emergência',
            'tlp'                   => 'TLP',
            'pap'                   => 'PAP',
            'clients_detections'    => 'Clientes para enviar a detecção',
            'tags_detection'        => 'Tags para a detecção',
            'analyst_comments'      => 'Comentários do analista',
            'detection_description' => 'Descrição da detecção',
            'threat_scenery'        => 'Cenário de ameaça',
            'tech_details'          => 'Detalhes técnicos',
            'reference_url'         => 'Referências (Uma URL por linha)',
            'evidences'             => 'Evidências',
            'ioc'                   => 'Indicadores de comprometimento (IOC)',
            'cves'                  => 'CVEs',
            'cvss'                  => 'CVSS',
        ],
    ],
    'tags'        => [

        'fields' => [

        ],
    ],
    'contacts'        => [

        'fields' => [
            'reason' => 'Razão de contato',
            'contents' => 'Conteúdo',
            'sender_name' => 'Sender Name',
            'receive_name' => 'Receiver Name',
        ],
    ],
];
