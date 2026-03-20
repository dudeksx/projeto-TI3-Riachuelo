# Find&Go 📍

O **Find&Go** é uma plataforma focada em facilitar o registro e a descoberta de eventos locais. O projeto visa oferecer uma interface simples, didática e performática, minimizando carregamentos desnecessários e focando na experiência do usuário.

---

## 🎯 Objetivo

O sistema tem como propósito armazenar, disponibilizar e direcionar eventos, sejam eles criados pelos próprios usuários ou integrados pelo sistema (eventos públicos).

A filosofia inicial do projeto prioriza o crescimento da base de usuários e o engajamento, adotando uma estratégia de baixo custo (sem anúncios e com taxas mínimas) nos primeiros trimestres para maximizar a difusão da aplicação.

---

## 🛠 Tecnologias Usadas

Este projeto foi desenvolvido utilizando as seguintes tecnologias e ferramentas:

* **Backend e Lógica:** PHP
* **Frontend:** Bastante HTML e CSS, com suporte do Framework **Bootstrap** para responsividade.
* **Funcionalidades Cliente:** Javascript (pouco uso).
* **Banco de Dados:** SQL para a estrutura de dados.
* **Ambiente de Desenvolvimento:** Rodado utilizando o servidor **WAMP**.

---

## 📁 Estrutura de Pastas

Abaixo, apresentamos a organização dos arquivos e diretórios do projeto. A pasta inicial contém o `index.php` e um diretório `telas`.

A maioria dos arquivos PHP específicos das telas do site está localizada dentro do diretório `telas`, que também contém subdiretórios com informações de apoio.

```text
Pasta-Raiz-do-Projeto/
├── index.php           <-- Arquivo de entrada principal
└── telas/              <-- Diretório com as telas e apoios
    ├── config/         <-- Arquivos de configuração
    ├── css/            <-- Arquivos de estilo adicionais
    ├── estaticos/      <-- Arquivos de imagem/mídia
    ├── js/             <-- Arquivos JavaScript
    ├── processos/      <-- Scripts de processamento (backend)
    ├── conexao.php     <-- Script de conexão com o banco de dados
    ├── eventosUsuario.php <-- Tela de eventos específicos do usuário
    ├── inserir.php
    ├── login.php
    ├── registro.php
    ├── telaAlugarLocal.php
    ├── telaEventosGlobal.php
    ├── usuario.php
    └── WIP.php         <-- Work In Progress (arquivo temporário)
```

---

## 🚀 Utilização e Regras de Negócio

O acesso às funcionalidades completas requer login. A partir da tela principal, o usuário pode buscar eventos, gerenciar seu perfil e criar novos registros.

### Criação de Eventos

* **Pessoa Física:** É necessária uma verificação de identidade e ser maior de idade. Para evitar eventos falsos ou mal-intencionados, aplica-se uma taxa inicial de registro.
* **Empresas:** Isenção de taxa de criação, sendo descontada apenas uma taxa de manutenção (com foco em manter o custo mínimo para incentivar a adoção nacional).

---

## 📋 Requisitos Funcionais

### 🔐 Telas de Acesso

* **Tela de Login:**
  * Campos de usuário e senha.
  * Recuperação de senha e criação de conta.
  * Validação de dados com mensagens de erro.
  * Login via redes sociais (terceiros).
* **Tela de Cadastro:**
  * Formulário completo (E-mail/Número, Nome, Senha, Data de Nascimento).
  * Aceite de termos de serviço e privacidade.

### 🏠 Tela Principal (Dashboard)

Interface com barra lateral contendo:

* **Página Inicial.**
* **Eventos Criados:** Gestão de eventos privados (gratuitos/convite) e públicos (pagos).
* **Favoritos:** Gerenciamento de perfis e eventos seguidos.
* **Lista de Convidados:** Visualização de presença confirmada.
* **Locação:** Canal de comunicação com responsáveis pelos locais.
* **Perfil:** Edição de dados, fotos e visualização de estatísticas (seguidores/eventos).

### 🗺️ Tela do Mapa

Visualização interativa para descoberta de eventos:

* **Tooltips Informativos:** Dados do local, preço, limite de participantes e data/hora.
* **Interações Rápidas:** Botões para "Marcar Presença", "Salvar Evento" e "Abrir Perfil".
* **Compartilhamento:** Geração de links diretos para WhatsApp, E-mail, etc.

---

## ⚙️ Requisitos Não-Funcionais

* **Multiplataforma:** O sistema deve rodar perfeitamente em dispositivos móveis e desktops.
* **Responsividade:** Interface adaptável a diversos tamanhos de tela.

---

## 🗄️ Banco de Dados (Preview)

O projeto utiliza uma estrutura SQL inicial focada em usuários e eventos.

```sql
-- Estrutura para tabela `usuario`
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registro` varchar(20) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `senha` text NOT NULL,
  `dt_nascimento` date NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- Estrutura para tabela `evento`
CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `nome` varchar(99) NOT NULL,
  `endereco` varchar(151) NOT NULL,
  `data` varchar(21) NOT NULL,
  `hora` varchar(20) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
