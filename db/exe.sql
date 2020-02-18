CREATE DATABASE `gran_cursos` CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

CREATE TABLE `gran_cursos`.`tb_assuntos`  (
  `id_assunto` bigint(20) NOT NULL,
  `ds_assunto` varchar(255),
  `id_parent` bigint(20),
  `created_at` timestamp(0),
  `updated_at` timestamp(0),
  PRIMARY KEY (`id_assunto`)
);

INSERT INTO `tb_assuntos`(`id_assunto`, `ds_assunto`, `id_parent`, `created_at`, `updated_at`) VALUES (1, 'Orçamento Público', NULL, '2020-02-16 23:14:56', '2020-02-16 23:14:56');
INSERT INTO `tb_assuntos`(`id_assunto`, `ds_assunto`, `id_parent`, `created_at`, `updated_at`) VALUES (2, 'Receita', 1, '2020-02-16 23:16:48', '2020-02-16 23:16:48');
INSERT INTO `tb_assuntos`(`id_assunto`, `ds_assunto`, `id_parent`, `created_at`, `updated_at`) VALUES (3, 'Receita Pública', 1, '2020-02-17 23:54:42', '2020-02-17 23:54:42');
INSERT INTO `tb_assuntos`(`id_assunto`, `ds_assunto`, `id_parent`, `created_at`, `updated_at`) VALUES (5, 'Ciclo Orçamentário', NULL, '2020-02-17 23:55:41', '2020-02-17 23:55:41');
INSERT INTO `tb_assuntos`(`id_assunto`, `ds_assunto`, `id_parent`, `created_at`, `updated_at`) VALUES (6, 'Introdução ao Ciclo Orçamentário', 5, '2020-02-17 23:55:53', '2020-02-17 23:55:53');

CREATE TABLE `gran_cursos`.`tb_banca`  (
  `id_banca` bigint(20) NOT NULL,
  `no_banca` varchar(255),
  `created_at` timestamp(0),
  `updated_at` timestamp(0),
  PRIMARY KEY (`id_banca`)
);

INSERT INTO `tb_banca`(`id_banca`, `no_banca`, `created_at`, `updated_at`) VALUES (1, 'CESPE', '2020-02-14 20:25:19', '2020-02-14 20:25:19');
INSERT INTO `tb_banca`(`id_banca`, `no_banca`, `created_at`, `updated_at`) VALUES (2, 'IADES', '2020-02-14 20:27:07', '2020-02-14 20:27:07');
INSERT INTO `tb_banca`(`id_banca`, `no_banca`, `created_at`, `updated_at`) VALUES (3, 'ACAFE', '2020-02-14 20:27:43', '2020-02-14 20:27:43');
INSERT INTO `tb_banca`(`id_banca`, `no_banca`, `created_at`, `updated_at`) VALUES (4, 'USP', '2020-02-14 20:28:42', '2020-02-14 20:28:42');
INSERT INTO `tb_banca`(`id_banca`, `no_banca`, `created_at`, `updated_at`) VALUES (5, 'SESC', '2020-02-14 20:30:03', '2020-02-14 20:30:03');

CREATE TABLE `gran_cursos`.`tb_orgao`  (
  `id_orgao` bigint(20) NOT NULL,
  `no_orgao` varchar(255),
  `created_at` timestamp(0),
  `updated_at` timestamp(0),
  PRIMARY KEY (`id_banca`)
);

INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (1, 'PGDF', '2020-02-14 19:08:28', '2020-02-14 19:08:28');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (2, 'PCDF', '2020-02-14 19:21:40', '2020-02-14 19:21:40');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (3, 'CBMDF', '2020-02-14 19:21:52', '2020-02-14 19:21:52');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (4, 'PMDF', '2020-02-14 19:21:57', '2020-02-14 19:21:57');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (5, 'TCDF', '2020-02-14 19:22:03', '2020-02-14 19:22:03');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (6, 'Correios', '2020-02-14 20:12:07', '2020-02-14 20:12:07');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (7, 'BRB', '2020-02-14 20:12:12', '2020-02-14 20:12:12');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (8, 'Banco do Brasil', '2020-02-14 20:12:20', '2020-02-14 20:12:20');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (9, 'Caixa Econômica Federal', '2020-02-14 20:12:38', '2020-02-14 20:12:38');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (10, 'AGEPEN', '2020-02-14 20:12:42', '2020-02-14 20:12:42');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (11, 'Receita Federal', '2020-02-14 20:13:59', '2020-02-14 20:13:59');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (12, 'TJDFT', '2020-02-14 20:14:17', '2020-02-14 20:14:17');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (13, 'PF', '2020-02-14 20:14:27', '2020-02-14 20:14:27');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (14, 'PRF', '2020-02-14 20:14:30', '2020-02-14 20:14:30');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (15, 'DETRAN', '2020-02-14 20:14:50', '2020-02-14 20:14:50');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (16, 'Banco do Nordeste', '2020-02-14 20:15:56', '2020-02-14 20:15:56');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (17, 'AGU', '2020-02-14 20:16:07', '2020-02-14 20:16:07');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (18, 'SENADO', '2020-02-14 20:16:16', '2020-02-14 20:16:16');
INSERT INTO `tb_orgao`(`id_orgao`, `no_orgao`, `created_at`, `updated_at`) VALUES (19, 'PMMG', '2020-02-14 20:29:48', '2020-02-14 20:29:48');

CREATE TABLE `gran_cursos`.`tb_questoes`  (
  `id_questao` bigint(20) NOT NULL,
  `tx_questao` text(0),
  `id_orgao` bigint(20) NOT NULL,
  `id_banca` bigint(20) NOT NULL,
  `id_assunto` bigint(20) NOT NULL,
  `ds_assunto` varchar(255) NOT NULL,
  `created_at` timestamp(0),
  `updated_at` timestamp(0),
  PRIMARY KEY (`id_questao`)
);

INSERT INTO `tb_questoes`(`id_questao`, `tx_questao`, `id_assunto`, `ds_assunto`, `id_orgao`, `id_banca`, `created_at`, `updated_at`) VALUES (1, 'Dentre os anexos criados pela Lei de Responsabilidade Fiscal – LRF – para a LDO, está o Anexo de Metas Fiscais, que apresenta a avaliação de possíveis dívidas (passivos contingentes) que poderão afetar as contas públicas.', 1, 'Orçamento Público', 1, 1, '2020-02-18 00:01:49', '2020-02-18 00:01:49');
INSERT INTO `tb_questoes`(`id_questao`, `tx_questao`, `id_assunto`, `ds_assunto`, `id_orgao`, `id_banca`, `created_at`, `updated_at`) VALUES (2, 'Um dos objetivos constitucionais da LDO é o de apresentar metas e prioridades da administração pública para o exercício financeiro subsequente, de acordo com as orientações da LOA, segundo o Anexo de Metas e Prioridades, que lista os programas, seus objetivos e suas ações, com os valores correspondentes, que terão prioridade na execução orçamentária do ano seguinte.', 1, 'Orçamento Público', 1, 1, '2020-02-18 00:13:59', '2020-02-18 00:13:59');
INSERT INTO `tb_questoes`(`id_questao`, `tx_questao`, `id_assunto`, `ds_assunto`, `id_orgao`, `id_banca`, `created_at`, `updated_at`) VALUES (3, 'A alternativa que de acordo com o artigo 165 da Constituição Federal de 1988, faz referência a determinado instrumento de planejamento, que compreenderá as metas e prioridade da Administração Pública Federal, incluindo as despesas de capital para o exercício financeiro seguinte é:', 1, 'Orçamento Público', 1, 1, '2020-02-18 00:19:16', '2020-02-18 00:19:16');
INSERT INTO `tb_questoes`(`id_questao`, `tx_questao`, `id_assunto`, `ds_assunto`, `id_orgao`, `id_banca`, `created_at`, `updated_at`) VALUES (4, 'A área de atuação governamental na qual determinada despesa será realizada é identificada pela classificação', 3, '--Receita Pública', 2, 2, '2020-02-18 00:19:16', '2020-02-18 00:19:16');
INSERT INTO `tb_questoes`(`id_questao`, `tx_questao`, `id_assunto`, `ds_assunto`, `id_orgao`, `id_banca`, `created_at`, `updated_at`) VALUES (5, 'A Administração Pública corresponde às atividades que o Estado deve exercer para atender as necessidades coletivas. No desempenho de suas atribuições, a atuação administrativa ocorre de forma direta ou indireta. A respeito do tema, assinale a alternativa correta.', 1, 'Orçamento Público', 1, 1, '2020-02-18 00:19:16', '2020-02-18 00:19:16');
INSERT INTO `tb_questoes`(`id_questao`, `tx_questao`, `id_assunto`, `ds_assunto`, `id_orgao`, `id_banca`, `created_at`, `updated_at`) VALUES (6, '“Dentre os instrumentos de planejamento da Administração Pública, há um instrumento, o mais relevante, que serve de base para a elaboração da Lei de Diretrizes Orçamentárias e Lei Orçamentária Anual.” Este instrumento denomina-se:', 2, '--Receita', 1, 1, NULL, NULL);
