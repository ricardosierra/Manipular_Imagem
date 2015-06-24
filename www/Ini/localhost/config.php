<?php
define('SIS_SERVER',        'localhost');// Seu servidor do bando de dados
define('SIS_USUARIO',        'root');// Nome de usuario do banco de dados
define('SIS_SENHA',        'jmedtyqw');// Senha do banco de dados
define('SIS_BANCO',        'Cliente_Skafe');

// Principais
define('SISTEMA_DEBUG',        true);


define('SRV_NAME_SQL',          'agenciardsmk.com.br');

define('SISTEMA_LINGUAGEM_PADRAO',          'pt_BR');
// CONFIGURACOES PHP
define('SOBRE_DIREITOS',        'Skafe');
define('SOBRE_SLOGAN',          'Skafe');
define('SOBRE_COMPANY',         'www.agenciardsmk.com.br');
define('SISTEMA_URL',           'http://localhost/');
define('SISTEMA_DIR',           'Framework/www/');
define('SISTEMA_NOME',          'Skafe');
define('SISTEMA_EMAIL',         'sac@skafe.com.br');

define('SESSION_ADMIN_LOG',     'cliente_login');
define('SESSION_ADMIN_SENHA',   'cliente_senha');
define('SESSION_ADMIN_ID',      'cliente_id');
// modulos
define('FINANCEIRO_DIASVENCIMENTO', 6); //ISO-8859-1


define('CONFIG_CLI_0_NOME' , 'Free');
define('CONFIG_CLI_1_NOME' , 'Master');
define('CONFIG_CLI_1_PRECO', 1000);
define('CONFIG_CLI_1_PORC1', 10);
define('CONFIG_CLI_1_PORC2', 5);
define('CONFIG_CLI_1_PORC3', 5);
define('CONFIG_CLI_2_NOME' , 'Bronze');
define('CONFIG_CLI_2_PRECO', 2000);
define('CONFIG_CLI_2_PORC1', 12);
define('CONFIG_CLI_2_PORC2', 5);
define('CONFIG_CLI_2_PORC3', 5);
define('CONFIG_CLI_3_NOME' , 'Prata');
define('CONFIG_CLI_3_PRECO', 3000);
define('CONFIG_CLI_3_PORC1', 15);
define('CONFIG_CLI_3_PORC2', 5);
define('CONFIG_CLI_3_PORC3', 5);
define('CONFIG_CLI_4_NOME' , 'Gold');
define('CONFIG_CLI_4_PRECO', 4000);
define('CONFIG_CLI_4_PORC1', 20);
define('CONFIG_CLI_4_PORC2', 5);
define('CONFIG_CLI_4_PORC3', 5);
define('CONFIG_CLI_5_NOME' , 'Platinum');
define('CONFIG_CLI_5_PRECO', 5000);
define('CONFIG_CLI_5_PORC1', 30);
define('CONFIG_CLI_5_PORC2', 5);
define('CONFIG_CLI_5_PORC3', 5);


// BANCOS E SUAS TABELAS
define('MYSQL_CAT',                          'Categoria');
define('MYSQL_CAT_ACESSO',                   'Categoria_Acesso');
define('MYSQL_LOGURL',                       'log_url');
define('MYSQL_LOG_SQL',                      'log_sql');

define('MYSQL_SIS_GRUPO',                    'Sistema_Grupo');
define('MYSQL_SIS_GRUPO_PERMISSAO',          'Sistema_Grupo_Permissao');
define('MYSQL_SIS_PERMISSAO',                'Sistema_Permissao');
define('MYSQL_USUARIO_PERMISSAO',            'Usuario_Permissao');

// BASICOS
define('MYSQL_USUARIOS',                     'usuarios');
define('MYSQL_USUARIO_VEICULO_ALUGUEL',      'usuarios_aluguel');
define('MYSQL_USUARIO_VEICULO',              'Veiculos');
define('MYSQL_USUARIO_VEICULO_MARCAS',       'Veiculos_Marcas');
define('MYSQL_USUARIOS_MENS',                'usuarios_mensagem');
define('MYSQL_USUARIOS_MENS_RESP',           'usuarios_mensagem_resp');
define('MYSQL_FINANCEIRO_MOV_EXT',        'Pagamento_Mov_Ext');
define('MYSQL_FINANCEIRO_MOV_INT',        'Pagamento_Mov_Int');
define('MYSQL_USUARIOS_COMENTARIOS',         'usuarios_comentarios');
define('MYSQL_BANNERS',                      'banners');
define('MYSQL_NOTICIAS',                     'noticias');

// AUTO
define('MYSQL_PROJ',                         'Desenvolvimento_Projeto');
define('MYSQL_PROJ_CLI',                     'Desenvolvimento_Projeto_Clientes');
define('MYSQL_PROJ_CONT',                    'Desenvolvimento_Projeto_Contas');
define('MYSQL_SOCIAL',               'Usuario_social');
define('MYSQL_SOCIAL_ACAO',         'Usuario_social_acoes');
define('MYSQL_SOCIAL_TIPO',          'Usuario_social_tipo');
define('MYSQL_SOCIAL_HIST_FACE',     'Usuario_social_Historico_Face');
define('MYSQL_SOCIAL_HIST_FACE_MGS', 'Usuario_social_Historico_Face_Mensagens');
define('MYSQL_SOCIAL_RELACOES',      'Usuario_social_Relacoes');
define('MYSQL_USUARIO_AGENDA_COMPROMISSOS',  'agenda_compromissos');
define('MYSQL_USUARIO_AGENDA_ATIVIDADES',    'Agenda_Atividades');

// adv
define('MYSQL_ADVOGADO_CLIENTES',            'adv_clientes');
define('MYSQL_ADVOGADO_COMARCA',             'adv_comarcas');
define('MYSQL_ADVOGADO_VARAS',               'adv_varas');
define('MYSQL_ADVOGADO_COLABORADORES',       'adv_colaboradores');
define('MYSQL_ADVOGADO_AUDIENCIAS',          'adv_audiencias');
define('MYSQL_ADVOGADO_TIPOAUDIENCIAS',      'adv_tipoaudiencias');
define('MYSQL_ADVOGADO_FASES',               'adv_fases');
define('MYSQL_ADVOGADO_TIPOFASES',           'adv_tipofases');
define('MYSQL_ADVOGADO_PROCESSOS',           'adv_processos');
define('MYSQL_ADVOGADO_AUTORES',             'adv_autores');
define('MYSQL_ADVOGADO_CONTRARIA',           'adv_contraria');  // reus

// CONFIGURACOES DO BANCO DE DADOS
$mysql_tab_admin                           = 'administradores';
$mysql_tab_fin                             = 'Financeiro';
$mysql_tab_fin_tipo                        = 'Financeiro_tipo';
$mysql_tab_taref                           = 'tarefas';
$mysql_tab_taref_feitas                    = 'tarefas_feitas';
$mysql_tab_subtipos                        = 'Subtipos';
$mysql_tab_anotacoes                       = 'anotacoes';
$mysql_tab_compromisso                     = 'compromissos';
define('MYSQL_USUARIO_PESSOAL_FINANCAS',     'Financeiro');

define('MYSQL_SIS_LOCALIZACAO_PAIZES',       'localizacao_paises');
define('MYSQL_SIS_LOCALIZACAO_ESTADOS',      'localizacao_estados');
define('MYSQL_SIS_LOCALIZACAO_CIDADES',      'localizacao_cidades');
define('MYSQL_SIS_LOCALIZACAO_BAIRROS',      'localizacao_bairros');
define('MYSQL_SIS_LOCAIS',                   'local');
define('MYSQL_SIS_LOCAIS_TIPOS',             'local_tipos');




// Temas
define('TEMA_PADRAO', 'metrolab');
define('TEMA_COLOR', 'green');

// Configuracoes Tecnicas
define('CFG_TEC_IDADMINDEUS'        ,      12);
define('CFG_TEC_IDADMIN'            ,      12);
define('CFG_TEC_IDNEWSLETTER'       ,      11);
define('CFG_TEC_IDCLIENTE'          ,       8);
define('CFG_TEC_CAT_ID_ADMIN'       ,       5);
define('CFG_TEC_CAT_ID_CLIENTES'    ,       6);
define('CFG_TEC_CAT_ID_FUNCIONARIOS',       7);

// Se add e edita paises
define('CFG_TEC_PAISES_EXTRAGEIROS' ,        true);

define('MYSQL_USUARIO_MENSAGEM_ASSUNTO'             , 'comercio_assunto');
define('MYSQL_USUARIO_MENSAGEM_SETOR'               , 'comercio_setor');
define('MYSQL_USUARIO_MENSAGEM_SETOR_RESPONSAVEL'   , 'comercio_setor_responsavel');
?>
