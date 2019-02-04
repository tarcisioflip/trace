

/* ========== NOME DO BANCO (  db_trace  ) ==========*/


-- Setando formato de hora
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/* ========== CRIANDO TABELA ADMINISTRADOR ==========*/
CREATE TABLE `adm` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `cpf` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL, 
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- AUTO_INCREMENT for table `administrador`
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
-- INSERINDO ADMINISTRADOR --
INSERT INTO `adm` (`id`, `nome`, `cpf`, `senha`) VALUES (NULL, 'Tarcísio Claudinei Alencar Santos', '07408194371', MD5('SenhaNova2020')), (NULL, 'Coordenador', '123456789', MD5('123456789'));




/* ========== CRIANDO TABELA CURSOS ==========*/
CREATE TABLE `cursos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `area_do_conhecimento` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- AUTO_INCREMENT for table `cursos`
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2001;







/* ========== CRIANDO TABELA TURMAS ==========*/
CREATE TABLE `turmas` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `sigla_turma` char(5) UNIQUE,   
  `semestre_turma` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `curso_turma` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- AUTO_INCREMENT for table `turmas`
ALTER TABLE `turmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3001;







/* ========== CRIANDO TABELA MATERIAS  ==========*/

CREATE TABLE `materias` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `titulo_materia` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `carga_horaria` int(4) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- AUTO_INCREMENT for table `alunos`
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4001;




/* ========== CRIANDO TABELA PROFESORES ========== */
CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `curso_professor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` char(20) UNIQUE,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Indexes for table `professor`
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);
-- AUTO_INCREMENT for table `alunos`
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5001;




/* ========== CRIANDO TABELA ALUNOS ========== */
CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `rgm` int(8) UNIQUE,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `cpf` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `turma_aluno` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `curso_aluno` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Indexes for table `alunos`
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);
-- AUTO_INCREMENT for table `alunos`
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6001;




/* ========== CRIANDO TABELA EVENTOS ========== */

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo_evento` char(255),
  `data_evento` char (10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hora_evento` char (10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `membros` int(10),
  `observacao_evento` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `curso_evento` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `turma_evento` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Indexes for table `alunos`
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);
-- AUTO_INCREMENT for table `alunos`
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7001;


/* ========== ADICIONAR AQUIPE ========== */

CREATE TABLE `equipes` (
  `id_equipe` int(11) NOT NULL,
  `titulo_equipe` char(255),
  `data_equipe` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `nota_equipe` char(5),
  `anexo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,

  `rgm1` char (10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `nome1` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nota_aluno1` char(5),

  `rgm2` char (10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `nome2` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nota_aluno2` char(5),

  `rgm3` char (10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `nome3` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nota_aluno3` char(5),

  `rgm4` char (10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `nome4` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nota_aluno4` char(5),

  `rgm5` char (10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,  
  `nome5` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nota_aluno5` char(5)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- CRIANDO NOVA COLUNA NA TABELA EQUIPES
ALTER TABLE `equipes`
  ADD COLUMN evento_equipe int(11);

-- DECLARANDO CHAVE ESTRANGEIRA ENTRE (EVENTOS E EQUIPE)
ALTER TABLE `equipes`
  ADD FOREIGN KEY (evento_equipe) REFERENCES eventos (id);  

-- DECLARANDO CHAVE PRIMARIA A TABELA
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id_equipe`);
-- DEFININDO NOVO VALOR DE CHAVE PRIMARIA
ALTER TABLE `equipes`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8001;


