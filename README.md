# Aplicação .php para consulta de CEP

Objetivo: Disponibilizar uma interface para o usuário efetuar consultas de CEP.


### Pré-requisitos
Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[Git](https://git-scm.com), [Xampp](https://www.apachefriends.org/pt_br/index.html). 
Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### Informações Relevantes
   * API utilizada: Via Cep (https://viacep.com.br/).
   * Content Type: JSON.

### Arquivos:
   * Arquivo Html (index.html)
   * Arquivo CSS (style.css)
   * Arquivo PHP (viaCep.php)


### Instalação
### Descrição Funções
   * Tratamento dos erros – dados inválidos:
      * Função para validação de String (CEP):
      * *Uso de expressões regulares
      * function isCep (String $cep):bool{
          * return preg_match('/^[0-9]{5}-?[0-9]{3}$/',$cep);
      * }
      * Objetivo: verificar se a String informada é um CEP válido.
      * Recebe uma String e retorna uma booleano.

====================================================================
   * Tratamento dos erros – dados inexistentes:
      * function getAddress(){
      * Trecho: Linhas 11 a 14 do arquivo viaCep.php
      * 11          if (property_exists($address, 'erro')){
      * 12              $address = addressEmpty();
      * 13              $address->cep = 'CEP não encontrado!';
      * 14          }

====================================================================

   * Função para consumo da API::
      * function addressEmpty () {
      * return (object)[
      * 'cep' => '',
      * 'logradouro' => '',
      * 'bairro' => '',
      * 'localidade' => '',
      * 'uf' => ''
      * ];
      * }
      * Objetivo: se não houver um CEP digitado deverá retornar um objeto vázio.

====================================================================
   * Função para consumo da API:
      * function getAddressViaCep (String $cep) {
      * $url = "https://viacep.com.br/ws/{$cep}/json/";
      * return json_decode(file_get_contents($url));
      * }
      * Objetivo: consumir os dados da API ViaCep.
      * Recebe o CEP e retorna os dados referentes a ele.

====================================================================
   * Função para formatação de String (CEP):
      * Uso de expressões regulares
      * function filterCep (String $cep):String {
      * return preg_replace('/[^0-9]/','',$cep);
      * }
      * Objetivo: filtrar o CEP.

====================================================================

<!--ts-->
   * Tecnologias Usadas
      * HTML
      * CSS
      * PHP
   * Autor
      * Lucas Santiago 🚀 Entre em contato!👋
<!--te-->

