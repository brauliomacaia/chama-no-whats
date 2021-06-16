<?php
/**

 * Plugin Name:       Chama No Whats
 * Plugin URI:        https://cesarmacaia.com/chama-no-whats
 * Description:       Um simples plugin que cria um botão de chat para o whatsapp.
 * Version:           1.0.0
 * Author:            César Macaia
 * Author URI:        https://cesarmacaia.com
 */

 // Se  for chamado diretamente , então abortar!
if (! defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// Definir a versão
define ('CHAMA_WHATS', '1.0.0');

// O que vai rodar no momento que o plugin for ativado!

function ativar_chama_whats () {
    require_once plugin_dir_path( __FILE__ ) . 'include/class-chama-whats-ativador.php';
    chama_whats_ativador::activate();
}