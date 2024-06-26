INSERT IGNORE INTO `parameters` (`id`, `code`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`, `type`, `has_options`, `required`) VALUES
(1, 'nome', 1, 1, NULL, '2019-06-24 12:49:20', '2023-10-26 08:02:51', NULL, 'text', 0, 1),
(2, 'sexo', 1, 1, NULL, '2019-06-24 12:51:54', '2020-01-22 06:50:42', NULL, 'dropdown', 1, 1),
(4, 'estado_civil', 1, 1, NULL, '2019-06-24 12:59:07', '2020-01-15 10:24:06', NULL, 'dropdown', 1, 0),
(5, 'data_de_nascimento', 1, 1, NULL, '2019-06-24 13:03:05', '2023-10-26 08:05:23', NULL, 'date', 0, 1),
(6, 'nacionalidade', 1, 1, NULL, '2019-06-24 13:04:38', '2020-01-15 10:21:49', NULL, 'dropdown', 1, 0),
(14, 'n_bilhete_de_identidade', 1, 1, NULL, '2019-06-24 13:37:15', '2023-10-26 08:03:17', NULL, 'text', 0, 1),
(15, 'data_emissao_bi', 1, 1, NULL, '2019-06-24 13:40:53', '2023-10-26 08:03:33', NULL, 'date', 0, 0),
(16, 'data_de_validade_bi', 1, 1, NULL, '2019-06-24 13:42:28', '2023-10-26 08:03:24', NULL, 'date', 0, 0),
(17, 'documento_bi', 1, 1, NULL, '2019-06-24 13:46:37', '2023-09-19 10:27:55', NULL, 'file_pdf', 0, 0),
(19, 'n_mecanografico', 1, 1, NULL, '2019-06-25 07:13:13', '2024-01-09 09:36:29', NULL, 'text', 0, 1),
(22, 'zonas', 1, 1, NULL, '2019-06-25 07:52:56', '2023-09-18 14:13:26', NULL, 'dropdown', 1, 0),
(23, 'nome_do_pai', 1, 1, NULL, '2019-06-25 07:54:47', '2023-10-26 08:03:00', NULL, 'text', 0, 0),
(24, 'nome_da_mae', 1, 1, NULL, '2019-06-25 07:55:57', '2023-10-26 08:03:10', NULL, 'text', 0, 0),
(25, 'fotografia', 1, 1, NULL, '2019-06-25 07:57:21', '2024-01-30 11:51:21', NULL, 'file_image', 0, 1),
(26, 'numero_de_passaporte', 1, 1, NULL, '2019-06-25 08:04:14', '2021-08-04 20:11:17', NULL, 'text', 0, 0),
(27, 'data_de_emissao_do_passaporte', 1, 1, NULL, '2019-06-25 08:12:42', '2023-10-06 09:28:17', NULL, 'date', 0, 0),
(28, 'data_de_validade_do_passaporte', 1, 1, NULL, '2019-06-25 08:14:03', '2021-08-04 20:10:58', NULL, 'date', 0, 0),
(29, 'pdf_do_passaporte', 1, 1, NULL, '2019-06-25 08:18:25', '2021-08-04 20:11:28', NULL, 'file_pdf', 0, 0),
(30, 'altura', 1, 1, NULL, '2019-06-25 08:19:55', '2023-10-26 08:04:11', NULL, 'float', 0, 0),
(31, 'peso', 1, 1, NULL, '2019-06-25 08:20:35', '2020-01-15 10:14:56', NULL, 'float', 0, 0),
(32, 'tipo_de_sangue', 1, 1, NULL, '2019-06-25 08:25:40', '2020-01-15 10:12:36', NULL, 'dropdown', 1, 0),
(34, 'e-mail_2', 1, 1, NULL, '2019-06-25 08:37:11', '2023-10-09 08:48:54', NULL, 'text', 0, 0),
(35, 'e-mail_alternativo', 1, 1, NULL, '2019-06-25 08:42:06', '2021-08-04 20:48:37', NULL, 'text', 0, 0),
(36, 'telemovel_principal', 1, 1, NULL, '2019-06-25 08:43:45', '2023-10-26 08:03:48', NULL, 'integer', 0, 1),
(37, 'telemovel_alternativo', 1, 1, NULL, '2019-06-25 08:44:44', '2023-10-26 08:03:58', NULL, 'integer', 0, 0),
(38, 'telefone_fixo', 1, 1, NULL, '2019-06-25 08:45:31', '2021-08-04 13:21:15', NULL, 'integer', 0, 0),
(39, 'whatsapp', 1, 1, NULL, '2019-06-25 08:46:37', '2023-10-06 09:24:56', NULL, 'integer', 0, 0),
(40, 'skype', 1, 1, NULL, '2019-06-25 08:47:19', '2021-08-04 19:44:26', NULL, 'text', 0, 0),
(41, 'nome_da_escola_do_ensino_medio', 1, 1, NULL, '2019-06-25 09:03:57', '2023-10-26 08:04:04', NULL, 'text', 0, 0),
(42, 'tipo_de_ensino_medio', 1, 1, NULL, '2019-06-25 09:13:14', '2020-01-15 10:13:00', NULL, 'dropdown', 1, 0),
(45, 'bairro', 1, 1, NULL, '2019-06-25 12:48:58', '2023-10-06 09:28:03', NULL, 'text', 0, 0),
(46, 'rua', 1, 1, NULL, '2019-06-25 12:49:38', '2023-10-26 08:03:40', NULL, 'text', 0, 0),
(47, 'numero_de_porta', 1, 1, NULL, '2019-06-25 12:51:03', '2023-10-09 08:48:20', NULL, 'text', 0, 0),
(48, 'ponto_de_referencia', 1, 1, NULL, '2019-06-25 12:53:56', '2023-10-09 09:00:28', NULL, 'text', 0, 0),
(49, 'numero_de_identificacao_fiscal', 1, 1, NULL, '2019-06-25 13:10:06', '2023-10-06 09:22:19', NULL, 'text', 0, 0),
(50, 'pdf_do_nif', 1, 1, NULL, '2019-06-25 13:17:09', '2020-01-15 10:16:38', NULL, 'file_pdf', 0, 0),
(51, 'numero_da_carta_de_conducao', 1, 1, NULL, '2019-06-25 13:19:02', '2023-10-06 09:23:19', NULL, 'text', 0, 0),
(52, 'pdf_da_carta_de_conducao', 1, 1, NULL, '2019-06-25 13:21:16', '2020-01-15 10:17:15', NULL, 'file_pdf', 0, 0),
(53, 'numero_de_seguranca_social', 1, 1, NULL, '2019-06-25 13:22:53', '2023-10-06 09:21:32', NULL, 'integer', 0, 0),
(54, 'pdf_seguranca_social', 1, 1, NULL, '2019-06-25 13:26:58', '2021-08-04 19:50:03', NULL, 'file_pdf', 0, 0),
(55, 'nuemro_do_atestado_medico', 1, 1, NULL, '2019-06-25 13:31:41', '2023-10-06 09:21:25', NULL, 'text', 0, 0),
(56, 'pdf_do_atestado_medico', 1, 1, NULL, '2019-06-25 13:32:58', '2023-09-19 10:28:01', NULL, 'file_pdf', 0, 0),
(57, 'numero_do_certificado_registo_criminal', 1, 1, NULL, '2019-06-25 13:38:36', '2021-08-04 06:48:05', NULL, 'text', 0, 0),
(58, 'pdf_do_registo criminal', 1, 1, NULL, '2019-06-25 13:42:02', '2021-08-04 07:05:39', NULL, 'file_pdf', 0, 0),
(59, 'numero_do_talao_do_recenseamento_militar', 1, 1, NULL, '2019-06-25 13:45:40', '2021-08-04 07:07:43', NULL, 'text', 0, 0),
(60, 'pdf_talao_do_recenseamento_militar', 1, 1, NULL, '2019-06-25 13:47:45', '2020-01-15 10:15:25', NULL, 'file_pdf', 0, 0),
(61, 'pdf_do_cartao_de_vacina', 1, 1, NULL, '2019-06-25 13:49:39', '2020-01-15 10:16:53', NULL, 'file_pdf', 0, 0),
(62, 'trabalhador_estudante', 1, 1, NULL, '2019-06-25 14:04:47', '2020-01-15 10:12:19', NULL, 'checkbox', 1, 0),
(63, 'pdf_trabalhador_estudante', 1, 1, NULL, '2019-06-25 14:07:31', '2020-01-15 10:15:09', NULL, 'file_pdf', 0, 0),
(68, 'ensino-medio', 1, 1, NULL, '2019-07-11 07:14:32', '2021-08-04 13:28:18', NULL, 'dropdown', 1, 1),
(69, 'lista_municipios_bengo', 1, 1, NULL, '2019-07-11 08:48:23', '2020-01-15 10:32:52', NULL, 'dropdown', 1, 0),
(71, 'lista_municipios_benguela', 1, 1, NULL, '2019-07-11 09:09:50', '2020-01-15 10:33:03', NULL, 'dropdown', 1, 0),
(72, 'lista_comuna_balombo', 1, 1, NULL, '2019-07-11 12:16:38', '2020-01-15 10:30:08', NULL, 'dropdown', 1, 0),
(73, 'lista_comuna_baia_farta', 1, 1, NULL, '2019-07-12 05:33:17', '2020-01-15 10:29:39', NULL, 'dropdown', 1, 0),
(74, 'lista_comuna_bocoio', 1, 1, NULL, '2019-07-12 05:38:18', '2020-01-15 10:31:32', NULL, 'dropdown', 1, 0),
(75, 'lista_comuna_caimbambo', 1, 1, NULL, '2019-07-12 05:42:31', '2020-01-15 10:35:04', NULL, 'dropdown', 1, 0),
(76, 'lista_comuna_catumbela', 1, 1, NULL, '2019-07-12 05:46:54', '2020-01-15 11:30:39', NULL, 'dropdown', 1, 0),
(77, 'lista_comuna_chogoroi', 1, 1, NULL, '2019-07-12 05:50:18', '2020-01-15 11:32:50', NULL, 'dropdown', 1, 0),
(78, 'lista_comuna_cubal', 1, 1, NULL, '2019-07-12 05:57:17', '2020-01-15 11:34:01', NULL, 'dropdown', 1, 0),
(79, 'lista_comuna_ganda', 1, 1, NULL, '2019-07-12 06:04:30', '2020-01-15 10:15:35', NULL, 'dropdown', 1, 0),
(80, 'lista_comuna_lobito', 1, 1, NULL, '2019-07-12 06:09:05', '2020-01-15 10:17:26', NULL, 'dropdown', 1, 0),
(81, 'lista_comuna_benguela', 1, 1, NULL, '2019-07-12 06:14:00', '2020-01-15 10:31:07', NULL, 'dropdown', 1, 0),
(82, 'lista_comuna_ambriz', 1, 1, NULL, '2019-07-12 06:37:55', '2020-01-15 10:28:29', NULL, 'dropdown', 1, 0),
(83, 'lista_comuna_bula_atumba', 1, 1, NULL, '2019-07-12 06:43:06', '2020-01-15 10:32:25', NULL, 'dropdown', 1, 0),
(85, 'lista_comuna_dande', 1, 1, NULL, '2019-07-12 06:58:18', '2020-01-15 10:13:45', NULL, 'dropdown', 1, 0),
(86, 'lista_comuna_dembos', 1, 1, NULL, '2019-07-12 07:07:23', '2020-01-15 10:13:55', NULL, 'dropdown', 1, 0),
(87, 'lista_comuna_nambuangongo', 1, 1, NULL, '2019-07-12 07:11:09', '2020-01-15 10:24:41', NULL, 'dropdown', 1, 0),
(88, 'lista_comuna_pango_aluquém', 1, 1, NULL, '2019-07-12 07:15:20', '2020-01-15 10:25:53', NULL, 'dropdown', 1, 0),
(89, 'lista_comuna_andulo', 1, 1, NULL, '2019-07-12 12:26:57', '2020-01-15 10:29:20', NULL, 'dropdown', 1, 0),
(90, 'lista_comuna_camacupa', 1, 1, NULL, '2019-07-12 12:38:09', '2020-01-15 10:36:15', NULL, 'dropdown', 1, 0),
(91, 'lista_comuna_catabola', 1, 1, NULL, '2019-07-12 12:41:47', '2020-01-15 11:30:10', NULL, 'dropdown', 1, 0),
(92, 'lista_comuna_chinguar', 1, 1, NULL, '2019-07-12 12:45:21', '2020-01-15 11:32:25', NULL, 'checkbox', 1, 0),
(93, 'lista_comuna_lista_chitembo', 1, 1, NULL, '2019-07-15 12:57:38', '2020-01-15 10:17:19', NULL, 'dropdown', 1, 0),
(94, 'lista_comuna_cuemba', 1, 1, NULL, '2019-07-15 13:04:56', '2020-01-15 11:34:12', NULL, 'dropdown', 1, 0),
(95, 'lista_comuna_cunhinga', 1, 1, NULL, '2019-07-15 13:22:53', '2020-01-15 11:36:36', NULL, 'dropdown', 1, 0),
(96, 'lista_comuna_kuito', 1, 1, NULL, '2019-07-15 13:26:49', '2020-01-15 10:16:44', NULL, 'checkbox', 1, 0),
(97, 'lista_comuna_nharea', 1, 1, NULL, '2019-07-15 13:37:23', '2020-01-15 10:25:23', NULL, 'dropdown', 1, 0),
(98, 'lista_comuna_belize', 1, 1, NULL, '2019-07-15 13:48:21', '2020-01-15 10:30:55', NULL, 'dropdown', 1, 0),
(99, 'lista_comuna_cabinda', 1, 1, NULL, '2019-07-15 13:52:32', '2020-01-15 10:33:46', NULL, 'dropdown', 1, 0),
(100, 'lista_comuna_buco_zau', 1, 1, NULL, '2019-07-15 13:55:28', '2020-01-15 10:31:59', NULL, 'dropdown', 1, 0),
(101, 'lista_comuna_cacongo', 1, 1, NULL, '2019-07-15 13:58:20', '2020-01-15 10:34:23', NULL, 'dropdown', 1, 0),
(102, 'lista_comuna_calai', 1, 1, NULL, '2019-07-18 06:09:08', '2020-01-15 10:35:25', NULL, 'dropdown', 1, 0),
(103, 'lista_comuna_cuangar', 1, 1, NULL, '2019-07-18 06:35:25', '2020-01-15 11:33:30', NULL, 'dropdown', 1, 0),
(109, 'lista_comuna_cuito cuanavale', 1, 1, NULL, '2019-07-19 07:37:12', '2020-01-15 11:35:11', NULL, 'dropdown', 1, 0),
(110, 'lista_comuna_dirico', 1, 1, NULL, '2019-07-19 07:40:39', '2020-01-15 10:14:04', NULL, 'dropdown', 1, 0),
(111, 'lista_comuna_mavinga', 1, 1, NULL, '2019-07-19 07:43:02', '2020-01-15 10:21:35', NULL, 'dropdown', 1, 0),
(112, 'lista_comuna_menongue', 1, 1, NULL, '2019-07-19 07:45:45', '2020-01-15 10:23:47', NULL, 'dropdown', 1, 0),
(113, 'lista_comuna_nancova', 1, 1, NULL, '2019-07-19 07:47:57', '2020-01-15 10:25:00', NULL, 'dropdown', 1, 0),
(114, 'lista_comuna_rivungo', 1, 1, NULL, '2019-07-19 07:56:39', '2020-01-15 10:28:35', NULL, 'dropdown', 1, 0),
(115, 'lista_comuna_canhama', 1, 1, NULL, '2019-07-19 08:00:07', '2020-01-15 11:29:15', NULL, 'dropdown', 1, 0),
(116, 'lista_comuna_cuanhama', 1, 1, NULL, '2019-07-19 08:06:16', '2020-01-15 11:33:45', NULL, 'dropdown', 1, 0),
(117, 'lista_comuna_curoca', 1, 1, NULL, '2019-07-19 08:08:21', '2020-01-15 11:36:56', NULL, 'dropdown', 1, 0),
(118, 'lista_comuna_cuvelai', 1, 1, NULL, '2019-07-19 08:10:22', '2020-01-15 10:12:28', NULL, 'dropdown', 1, 0),
(119, 'lista_comuna_namacunde', 1, 1, NULL, '2019-07-19 08:13:32', '2020-01-15 10:24:33', NULL, 'dropdown', 1, 0),
(120, 'lista_comuna_ombadja', 1, 1, NULL, '2019-07-19 08:16:15', '2020-01-15 10:25:45', NULL, 'dropdown', 1, 0),
(121, 'lista_comuna_huambo', 1, 1, NULL, '2019-07-19 08:18:45', '2020-01-15 10:15:50', NULL, 'dropdown', 1, 0),
(122, 'lista_comuna_bailundo', 1, 1, NULL, '2019-07-19 08:21:19', '2020-01-15 10:29:57', NULL, 'dropdown', 1, 0),
(123, 'lista_comuna_ekunha', 1, 1, NULL, '2019-07-19 08:24:17', '2020-01-15 10:14:42', NULL, 'dropdown', 1, 0),
(124, 'lista_comuna_caála', 1, 1, NULL, '2019-07-19 08:26:20', '2020-01-15 10:33:26', NULL, 'dropdown', 1, 0),
(125, 'lista_comuna_catchiungo', 1, 1, NULL, '2019-07-19 08:29:29', '2020-01-15 11:30:24', NULL, 'dropdown', 1, 0),
(126, 'lista_comuna_londuimbale', 1, 1, NULL, '2019-07-19 08:31:52', '2020-01-15 10:17:35', NULL, 'dropdown', 1, 0),
(127, 'lista_comuna_longojo', 1, 1, NULL, '2019-07-19 08:42:32', '2020-01-15 10:19:28', NULL, 'dropdown', 1, 0),
(128, 'lista_comuna_mungo', 1, 1, NULL, '2019-07-19 08:44:25', '2020-01-15 10:24:15', NULL, 'dropdown', 1, 0),
(129, 'lista_comuna_tchicala-tcholoanga', 1, 1, NULL, '2019-07-19 08:46:44', '2020-01-15 10:29:51', NULL, 'dropdown', 1, 0),
(130, 'lista_comuna_tchindjenje', 1, 1, NULL, '2019-07-19 08:50:01', '2020-01-15 10:30:00', NULL, 'dropdown', 1, 0),
(131, 'lista_comuna_ucama', 1, 1, NULL, '2019-07-19 08:52:11', '2020-01-15 10:30:15', NULL, 'dropdown', 1, 0),
(132, 'lista_comuna_caconda', 1, 1, NULL, '2019-07-19 08:54:48', '2020-01-15 10:34:10', NULL, 'dropdown', 1, 0),
(133, 'lista_comuna_cacula', 1, 1, NULL, '2019-07-19 08:59:39', '2020-01-15 10:34:52', NULL, 'dropdown', 1, 0),
(134, 'lista_comuna_caluquembe', 1, 1, NULL, '2019-07-19 09:01:08', '2020-01-15 10:35:39', NULL, 'dropdown', 1, 0),
(135, 'lista_comuna_chiange', 1, 1, NULL, '2019-07-19 09:02:32', '2020-01-15 11:31:37', NULL, 'dropdown', 1, 0),
(136, 'lista_comuna_chibia', 1, 1, NULL, '2019-07-19 09:05:54', '2020-01-15 11:31:55', NULL, 'dropdown', 1, 0),
(137, 'lista_comuna_chicomba', 1, 1, NULL, '2019-07-19 09:09:00', '2020-01-15 11:32:11', NULL, 'checkbox', 1, 0),
(138, 'lista_comuna_chipindo', 1, 1, NULL, '2019-07-19 09:11:47', '2020-01-15 11:32:37', NULL, 'dropdown', 1, 0),
(139, 'lista_comuna_cuvango', 1, 1, NULL, '2019-07-19 09:15:41', '2020-01-15 10:12:15', NULL, 'dropdown', 1, 0),
(140, 'lista_cursos_ensino_médio_ensino_geral', 1, 1, NULL, '2019-07-19 09:16:03', '2020-01-15 10:32:05', NULL, 'dropdown', 1, 0),
(141, 'lista_cursos_ensino_formacao_de_professores_ensino_medio', 1, 1, NULL, '2019-07-19 09:20:03', '2020-01-15 10:31:54', NULL, 'dropdown', 1, 0),
(142, 'lista_comuna_humpata', 1, 1, NULL, '2019-07-19 09:20:45', '2020-01-15 10:16:00', NULL, 'dropdown', 1, 0),
(143, 'lista_cursos__tecnico_profissional_medio', 1, 1, NULL, '2019-07-19 09:23:11', '2020-01-15 10:31:42', NULL, 'dropdown', 1, 0),
(144, 'lista_comuna_jamba', 1, 1, NULL, '2019-07-19 09:23:17', '2020-01-15 10:16:18', NULL, 'dropdown', 1, 0),
(145, 'lista_comuna_Lubango', 1, 1, NULL, '2019-07-19 09:28:17', '2020-01-15 10:20:14', NULL, 'dropdown', 1, 0),
(146, 'lista_comuna_matala', 1, 1, NULL, '2019-07-19 09:32:51', '2020-01-15 10:21:26', NULL, 'dropdown', 1, 0),
(147, 'lista_comuna_quilengues', 1, 1, NULL, '2019-07-19 09:34:53', '2020-01-15 10:28:00', NULL, 'dropdown', 1, 0),
(148, 'lista_comuna_quipungo', 1, 1, NULL, '2019-07-19 09:36:11', '2020-01-15 10:28:09', NULL, 'dropdown', 1, 0),
(150, 'lista_de_provincias', 1, 1, NULL, '2019-07-19 12:08:22', '2020-06-05 13:00:56', NULL, 'dropdown', 1, 0),
(151, 'lista_municipios_bie', 1, 1, NULL, '2019-07-19 12:19:35', '2020-06-05 12:55:40', NULL, 'dropdown', 1, 0),
(152, 'lista_municipios_cabinda', 1, 1, NULL, '2019-07-19 12:22:12', '2020-01-15 10:33:21', NULL, 'dropdown', 1, 0),
(153, 'lista_municipios_cuando-cubango', 1, 1, NULL, '2019-07-19 12:28:19', '2020-01-15 10:33:29', NULL, 'dropdown', 1, 0),
(154, 'morada_principal', 1, 1, NULL, '2019-07-19 12:33:42', '2023-08-07 06:35:11', NULL, 'dropdown', 1, 1),
(155, 'lista_municipios_cunene', 1, 1, NULL, '2019-07-19 12:34:12', '2020-01-15 10:33:59', NULL, 'dropdown', 1, 0),
(156, 'lista_municipios_huambo', 1, 1, NULL, '2019-07-19 12:38:33', '2020-01-15 10:34:18', NULL, 'dropdown', 1, 0),
(157, 'lista_municipios_huila', 1, 1, NULL, '2019-07-19 12:43:46', '2020-01-15 10:34:33', NULL, 'dropdown', 1, 0),
(158, 'morada_de_origem', 1, 1, NULL, '2019-07-19 12:44:04', '2020-01-15 10:22:49', NULL, 'dropdown', 1, 0),
(159, 'lista_municipios_cuanza-norte', 1, 1, NULL, '2019-07-19 12:49:05', '2020-01-15 10:33:39', NULL, 'dropdown', 1, 0),
(160, 'lista_comuna_ambaca (ex-camabatela)', 1, 1, NULL, '2019-07-19 12:51:39', '2020-01-15 10:25:55', NULL, 'dropdown', 1, 0),
(161, 'lista_comuna_banga', 1, 1, NULL, '2019-07-19 12:53:55', '2020-01-15 10:30:21', NULL, 'dropdown', 1, 0),
(162, 'lista_comuna_bolongongo', 1, 1, NULL, '2019-07-19 12:55:50', '2020-01-15 10:31:46', NULL, 'dropdown', 1, 0),
(163, 'lista_comuna_dondo', 1, 1, NULL, '2019-07-19 12:57:51', '2020-01-15 10:14:26', NULL, 'dropdown', 1, 0),
(164, 'lista_comuna_cazengo', 1, 1, NULL, '2019-07-19 12:59:37', '2020-01-15 11:31:08', NULL, 'dropdown', 1, 0),
(165, 'lista_comuna_golungo alto', 1, 1, NULL, '2019-07-19 13:02:03', '2020-01-15 10:15:41', NULL, 'dropdown', 1, 0),
(166, 'lista_comuna_Lucala', 1, 1, NULL, '2019-07-19 13:04:25', '2020-01-15 10:20:23', NULL, 'dropdown', 1, 0),
(167, 'lista_comuna_ngonguembo', 1, 1, NULL, '2019-07-19 13:07:12', '2020-01-15 10:25:16', NULL, 'dropdown', 1, 0),
(168, 'lista_comuna_quiculungo', 1, 1, NULL, '2019-07-19 13:08:20', '2020-01-15 10:27:44', NULL, 'dropdown', 1, 0),
(169, 'lista_comuna_samba cajú', 1, 1, NULL, '2019-07-19 13:09:32', '2020-01-15 10:28:43', NULL, 'checkbox', 1, 0),
(170, 'lista_municipios_cuanza-sul', 1, 1, NULL, '2019-07-19 13:14:21', '2020-01-15 10:33:50', NULL, 'dropdown', 1, 0),
(171, 'lista_comuna_amboim', 1, 1, NULL, '2019-07-19 13:16:16', '2020-01-15 10:26:15', NULL, 'dropdown', 1, 0),
(172, 'lista_comuna_cassongue', 1, 1, NULL, '2019-07-19 13:18:21', '2020-01-15 11:30:00', NULL, 'dropdown', 1, 0),
(173, 'lista_comuna_cela', 1, 1, NULL, '2019-07-19 13:23:15', '2020-01-15 11:31:24', NULL, 'dropdown', 1, 0),
(174, 'lista_comuna_conda', 1, 1, NULL, '2019-07-19 13:33:44', '2020-01-15 11:33:04', NULL, 'dropdown', 1, 0),
(175, 'lista_comuna_ebo', 1, 1, NULL, '2019-07-19 13:35:29', '2020-01-15 10:14:34', NULL, 'dropdown', 1, 0),
(176, 'lista_comuna_libolo', 1, 1, NULL, '2019-07-19 13:37:21', '2020-01-15 10:17:11', NULL, 'dropdown', 1, 0),
(177, 'lista_comuna_mussende', 1, 1, NULL, '2019-07-19 13:39:43', '2020-01-15 10:24:24', NULL, 'dropdown', 1, 0),
(178, 'lista_comuna_porto amboim', 1, 1, NULL, '2019-07-19 13:42:20', '2020-01-15 10:26:01', NULL, 'checkbox', 1, 0),
(179, 'lista_comuna_quilenda', 1, 1, NULL, '2019-07-19 13:43:57', '2020-01-15 10:27:52', NULL, 'dropdown', 1, 0),
(180, 'lista_comuna_quibala', 1, 1, NULL, '2019-07-19 13:45:32', '2020-01-15 10:26:17', NULL, 'dropdown', 1, 0),
(181, 'lista_comuna_seles', 1, 1, NULL, '2019-07-19 13:47:13', '2020-01-15 10:29:18', NULL, 'dropdown', 1, 0),
(182, 'lista_municipios_luanda', 1, 1, NULL, '2019-07-19 13:51:05', '2020-01-15 10:24:28', NULL, 'dropdown', 1, 0),
(183, 'lista_comuna_luanda', 1, 1, NULL, '2019-07-19 13:53:28', '2020-01-15 10:19:56', NULL, 'dropdown', 1, 0),
(184, 'lista_comuna_belas', 1, 1, NULL, '2019-07-19 14:07:58', '2020-01-15 10:30:42', NULL, 'dropdown', 1, 0),
(185, 'lista_comuna_viana', 1, 1, NULL, '2019-07-22 06:07:37', '2020-01-15 10:31:09', NULL, 'dropdown', 1, 0),
(186, 'lista_comuna_cacuaco', 1, 1, NULL, '2019-07-22 06:14:11', '2020-01-15 10:34:36', NULL, 'dropdown', 1, 0),
(187, 'lista_comuna_quiçama', 1, 1, NULL, '2019-07-22 06:18:42', '2020-01-15 10:27:33', NULL, 'dropdown', 1, 0),
(188, 'lista_comuna_cazenga', 1, 1, NULL, '2019-07-22 06:22:19', '2020-01-15 11:30:53', NULL, 'dropdown', 1, 0),
(189, 'lista_comuna_icolo e bengo', 1, 1, NULL, '2019-07-22 06:25:17', '2020-01-15 10:16:08', NULL, 'dropdown', 1, 0),
(190, 'lista_comuna_cambulo', 1, 1, NULL, '2019-07-22 06:29:52', '2020-01-15 11:27:22', NULL, 'dropdown', 1, 0),
(191, 'lista_comuna_capenda-camulemba', 1, 1, NULL, '2019-07-22 06:31:34', '2020-01-15 11:29:43', NULL, 'dropdown', 1, 0),
(192, 'lista_comuna_cangula', 1, 1, NULL, '2019-07-22 06:34:10', '2020-01-15 11:28:30', NULL, 'dropdown', 1, 0),
(193, 'lista_comuna_lauchimo', 1, 1, NULL, '2019-07-22 06:36:26', '2020-01-15 10:16:54', NULL, 'dropdown', 1, 0),
(194, 'lista_comuna_cuílo', 1, 1, NULL, '2019-07-22 06:38:56', '2020-01-15 11:34:44', NULL, 'dropdown', 1, 0),
(195, 'lista_comuna_lóvua', 1, 1, NULL, '2019-07-22 06:40:29', '2020-01-15 10:19:38', NULL, 'dropdown', 1, 0),
(196, 'lista_comuna_lucapa', 1, 1, NULL, '2019-07-22 06:59:54', '2020-01-15 10:20:31', NULL, 'dropdown', 1, 0),
(197, 'lista_comuna_xá-muteba', 1, 1, NULL, '2019-07-22 07:01:53', '2020-01-15 10:31:21', NULL, 'dropdown', 1, 0),
(198, 'lista_comuna_dala', 1, 1, NULL, '2019-07-22 07:07:51', '2020-01-15 10:12:44', NULL, 'dropdown', 1, 0),
(199, 'lista_comuna_muconda', 1, 1, NULL, '2019-07-22 07:10:25', '2020-01-15 10:24:06', NULL, 'dropdown', 1, 0),
(200, 'lista_comuna_saurimo', 1, 1, NULL, '2019-07-22 07:12:36', '2020-01-15 10:29:08', NULL, 'dropdown', 1, 0),
(202, 'diploma_ensino_médio_pdf', 1, 1, NULL, '2019-07-22 12:45:09', '2023-08-08 11:54:45', NULL, 'file_pdf', 0, 0),
(204, 'lista_municipios_lunda-norte', 1, 1, NULL, '2019-07-23 06:43:51', '2020-01-15 10:24:15', NULL, 'dropdown', 1, 0),
(205, 'lista_municipios_lunda-sul', 1, 1, NULL, '2019-07-23 06:46:29', '2020-01-15 10:24:02', NULL, 'dropdown', 1, 0),
(206, 'lista_municipios_malange', 1, 1, NULL, '2019-07-23 06:54:12', '2020-01-15 10:23:48', NULL, 'dropdown', 1, 0),
(207, 'lista_comuna_caombo', 1, 1, NULL, '2019-07-23 07:12:57', '2020-01-15 11:29:30', NULL, 'dropdown', 1, 0),
(208, 'lista_comuna_kakuso', 1, 1, NULL, '2019-07-23 07:14:40', '2020-01-15 10:16:26', NULL, 'dropdown', 1, 0),
(209, 'lista_comuna_kalandula', 1, 1, NULL, '2019-07-23 07:16:58', '2020-01-15 10:16:36', NULL, 'dropdown', 1, 0),
(210, 'lista_comuna_cabundi-catembo', 1, 1, NULL, '2019-07-23 07:19:12', '2020-01-15 10:33:57', NULL, 'dropdown', 1, 0),
(211, 'lista_comuna_cangandala', 1, 1, NULL, '2019-07-23 07:21:40', '2020-01-15 11:28:05', NULL, 'dropdown', 1, 0),
(212, 'lista_comuna_cuaba nzogo', 1, 1, NULL, '2019-07-23 07:23:21', '2020-01-15 11:33:19', NULL, 'dropdown', 1, 0),
(214, 'lista_comuna_cunda-dia-baze', 1, 1, NULL, '2019-07-23 07:28:01', '2020-01-15 11:35:23', NULL, 'dropdown', 1, 0),
(218, 'lista_municipios_moxico', 1, 1, NULL, '2019-07-23 07:36:12', '2020-01-15 10:23:36', NULL, 'dropdown', 1, 0),
(219, 'lista_comuna_luquembo', 1, 1, NULL, '2019-07-23 07:39:00', '2020-01-15 10:20:55', NULL, 'dropdown', 1, 0),
(222, 'lista_comuna_malenge', 1, 1, NULL, '2019-07-23 07:44:07', '2020-01-15 10:21:03', NULL, 'dropdown', 1, 0),
(224, 'lista_municipio_namibe', 1, 1, NULL, '2019-07-23 07:52:15', '2020-01-15 10:32:28', NULL, 'dropdown', 1, 0),
(225, 'lista_municipios_uige', 1, 1, NULL, '2019-07-23 07:57:29', '2020-01-15 10:23:13', NULL, 'dropdown', 1, 0),
(226, 'lista_comuna_zaire', 1, 1, NULL, '2019-07-23 08:01:06', '2020-01-15 10:31:29', NULL, 'dropdown', 1, 0),
(227, 'lista_comuna_alto-zambeze', 1, 1, NULL, '2019-07-23 08:04:43', '2020-01-15 10:25:37', NULL, 'dropdown', 1, 0),
(228, 'lista_comuna_Bundas', 1, 1, NULL, '2019-07-23 08:18:38', '2020-01-15 10:32:57', NULL, 'dropdown', 1, 0),
(229, 'lista_comuna_camongue', 1, 1, NULL, '2019-07-23 08:27:41', '2020-01-15 11:27:51', NULL, 'dropdown', 1, 0),
(230, 'lista_comuna_cameia', 1, 1, NULL, '2019-07-23 08:28:39', '2020-01-15 11:27:40', NULL, 'dropdown', 1, 0),
(231, 'lista_comuna_luacano', 1, 1, NULL, '2019-07-23 08:30:14', '2020-01-15 10:19:47', NULL, 'dropdown', 1, 0),
(232, 'lista_comuna_luau', 1, 1, NULL, '2019-07-23 08:31:09', '2020-01-15 10:20:06', NULL, 'dropdown', 1, 0),
(233, 'lista_comuna_luchazes', 1, 1, NULL, '2019-07-23 08:32:33', '2020-01-15 10:20:40', NULL, 'dropdown', 1, 0),
(234, 'lista_comuna_luena', 1, 1, NULL, '2019-07-23 08:35:11', '2020-01-15 10:20:48', NULL, 'dropdown', 1, 0),
(235, 'lista_comuna_léua', 1, 1, NULL, '2019-07-23 08:39:06', '2020-01-15 10:17:04', NULL, 'dropdown', 1, 0),
(236, 'lista_comuna_bibala', 1, 1, NULL, '2019-07-23 08:41:51', '2020-01-15 10:31:20', NULL, 'dropdown', 1, 0),
(237, 'lista_comuna_camacuio', 1, 1, NULL, '2019-07-23 08:43:32', '2020-01-15 10:35:57', NULL, 'dropdown', 1, 0),
(238, 'lista_comuna_namibe', 1, 1, NULL, '2019-07-23 08:48:15', '2020-01-15 10:24:51', NULL, 'dropdown', 1, 0),
(239, 'lista_comuna_ambuíla', 1, 1, NULL, '2019-07-23 08:50:49', '2020-01-15 10:28:54', NULL, 'dropdown', 1, 0),
(240, 'lista_comuna_bumbe', 1, 1, NULL, '2019-07-23 08:52:47', '2020-01-15 10:32:46', NULL, 'dropdown', 1, 0),
(241, 'lista_comuna_buengas', 1, 1, NULL, '2019-07-23 08:54:05', '2020-01-15 10:32:13', NULL, 'dropdown', 1, 0),
(242, 'lista_comuna_bungo', 1, 1, NULL, '2019-07-23 08:55:13', '2020-01-15 10:33:08', NULL, 'dropdown', 1, 0),
(243, 'lista_comuna_cangola', 1, 1, NULL, '2019-07-23 08:56:57', '2020-01-15 11:28:19', NULL, 'dropdown', 1, 0),
(244, 'lista_comuna_damba', 1, 1, NULL, '2019-07-23 08:58:41', '2020-01-15 10:13:04', NULL, 'dropdown', 1, 0),
(245, 'lista_comuna_maquela do zombo', 1, 1, NULL, '2019-07-23 09:00:27', '2020-01-15 10:21:15', NULL, 'dropdown', 1, 0),
(246, 'lista_comuna_mucaba', 1, 1, NULL, '2019-07-23 09:01:47', '2020-01-15 10:23:58', NULL, 'dropdown', 1, 0),
(247, 'lista_comuna_negaje', 1, 1, NULL, '2019-07-23 09:03:22', '2020-01-15 10:25:08', NULL, 'dropdown', 1, 0),
(248, 'lista_comuna_puri', 1, 1, NULL, '2019-07-23 09:04:21', '2020-01-15 10:26:08', NULL, 'dropdown', 1, 0),
(251, 'lista_comuna_qumbele', 1, 1, NULL, '2019-07-23 09:09:13', '2020-01-15 10:28:26', NULL, 'dropdown', 1, 0),
(252, 'lista_comuna_quitexe', 1, 1, NULL, '2019-07-23 09:11:51', '2020-01-15 10:28:17', NULL, 'dropdown', 1, 0),
(253, 'lista_comuna_santa cruz', 1, 1, NULL, '2019-07-23 09:13:35', '2020-01-15 10:28:52', NULL, 'dropdown', 1, 0),
(254, 'lista_comuna_sanza pombo', 1, 1, NULL, '2019-07-23 09:15:04', '2020-01-15 10:29:01', NULL, 'dropdown', 1, 0),
(255, 'lista_comuna_songo', 1, 1, NULL, '2019-07-23 09:16:28', '2020-01-15 10:29:25', NULL, 'dropdown', 1, 0),
(256, 'lista_comuna_uíge', 1, 1, NULL, '2019-07-23 09:17:17', '2020-01-15 10:31:01', NULL, 'dropdown', 1, 0),
(257, 'lista_comuna_cuimba', 1, 1, NULL, '2019-07-23 09:18:53', '2020-01-15 11:34:58', NULL, 'dropdown', 1, 0),
(258, 'lista_comuna_mbanza congo', 1, 1, NULL, '2019-07-23 09:21:01', '2020-01-15 10:23:39', NULL, 'dropdown', 1, 0),
(259, 'lista_comuna_nzeto', 1, 1, NULL, '2019-07-23 09:22:40', '2020-01-15 10:25:37', NULL, 'checkbox', 1, 0),
(260, 'lista_comuna_nóqui', 1, 1, NULL, '2019-07-23 09:23:49', '2020-01-15 10:25:30', NULL, 'checkbox', 1, 0),
(261, 'lista_comuna_soyo', 1, 1, NULL, '2019-07-23 09:25:32', '2020-01-15 10:29:34', NULL, 'dropdown', 1, 0),
(262, 'lista_comuna_tomboco', 1, 1, NULL, '2019-07-23 09:27:14', '2020-01-15 10:30:08', NULL, 'dropdown', 1, 0),
(263, 'ensino_superior_licenciatura', 1, 1, NULL, '2019-07-24 12:28:36', '2020-01-15 10:19:23', NULL, 'dropdown', 1, 0),
(264, 'nome_ies_bacharelato', 1, 1, NULL, '2019-07-24 12:31:30', '2021-07-21 20:33:54', NULL, 'text', 0, 0),
(265, 'licenciatura_no_curso', 1, 1, NULL, '2019-07-24 12:38:19', '2020-01-15 10:25:14', NULL, 'text', 0, 0),
(266, 'diploma_ensino_licenciatura_pdf', 1, 1, NULL, '2019-07-24 12:39:41', '2020-01-15 10:15:58', NULL, 'file_pdf', 0, 0),
(268, 'nome_da_escola_do_ensino_basico', 54, 8754, NULL, '2019-07-25 07:10:45', '2023-09-19 10:33:58', NULL, 'text', 0, 0),
(269, 'nome_ies_licenciatura', 1, 1, NULL, '2019-07-25 07:17:09', '2020-01-15 10:19:42', NULL, 'text', 0, 0),
(270, 'nome_ies_mestrado', 1, 1, NULL, '2019-07-25 07:18:34', '2020-01-15 10:19:25', NULL, 'text', 0, 0),
(271, 'nome_ies_doutoramento', 1, 1, NULL, '2019-07-25 07:20:38', '2020-01-15 10:19:58', NULL, 'text', 0, 0),
(272, 'bacharel_no_curso', 1, 1, NULL, '2019-07-25 07:23:37', '2021-07-21 20:32:26', NULL, 'text', 0, 0),
(273, 'mestre_no_curso', 1, 1, NULL, '2019-07-25 07:24:09', '2020-01-15 10:23:01', NULL, 'text', 0, 0),
(274, 'doutoramento_no_curso', 1, 1, NULL, '2019-07-25 07:25:04', '2020-01-15 10:17:18', NULL, 'text', 0, 0),
(276, 'diploma_ensino_basico_pdf', 1, 1, NULL, '2019-07-25 07:33:34', '2020-01-15 10:14:40', NULL, 'file_pdf', 0, 0),
(277, 'diploma_ensino_bacharelato_pdf', 1, 1, NULL, '2019-07-25 07:34:38', '2021-07-21 20:33:08', NULL, 'file_pdf', 0, 0),
(278, 'diploma_ensino_mestrado_pdf', 1, 1, NULL, '2019-07-25 07:40:44', '2020-01-15 10:16:37', NULL, 'file_pdf', 0, 0),
(279, 'diploma_ensino_doutoramento_pdf', 1, 1, NULL, '2019-07-25 07:41:43', '2020-01-15 10:15:01', NULL, 'file_pdf', 0, 0),
(282, 'lista_municipio_zaire', 1, 1, NULL, '2019-07-25 12:13:55', '2020-01-15 10:32:43', NULL, 'dropdown', 1, 0),
(284, 'ensino-basico', 1, 1, NULL, '2019-07-25 12:23:50', '2020-01-15 10:20:31', NULL, 'dropdown', 1, 0),
(285, 'ensino_superior_bacherelato', 1, 1, NULL, '2019-07-25 12:28:00', '2021-07-21 20:33:39', NULL, 'dropdown', 1, 0),
(286, 'ensino_superior_mestrado', 1, 1, NULL, '2019-07-25 12:29:39', '2020-01-09 14:09:47', NULL, 'dropdown', 1, 0),
(287, 'ensino_superior_doutoramento', 1, 1, NULL, '2019-07-25 12:31:47', '2021-08-12 18:05:30', NULL, 'dropdown', 1, 0),
(288, 'lista_comuna_sumbe', 1, 1, NULL, '2019-07-25 12:40:44', '2020-01-15 10:29:42', NULL, 'checkbox', 1, 0),
(289, 'necessidades_especiaisx', 54, 10166, NULL, '2019-07-25 13:21:14', '2023-10-06 09:29:26', NULL, 'checkbox', 1, 0),
(298, 'Curriculum _Vitae', 1, 1, NULL, '2019-08-05 14:14:53', '2020-01-15 10:12:47', NULL, 'file_pdf', 0, 0),
(300, 'facebook', 1, 1, NULL, '2019-08-21 12:29:47', '2023-08-08 11:57:35', NULL, 'text', 0, 0),
(302, 'numero_de_conta', 1, 1, NULL, '2019-08-22 07:15:34', '2020-01-15 10:18:46', NULL, 'text', 0, 0),
(303, 'pdf_do_rnumero de conta', 1, 1, NULL, '2019-08-22 07:18:41', '2020-01-15 10:15:57', NULL, 'file_pdf', 0, 0),
(307, 'contrato_de_trabalho_pdf', 1, 1, NULL, '2019-11-28 11:53:25', '2020-01-15 10:11:49', NULL, 'file_pdf', 0, 0),
(308, 'contrato_de_trabalho_data_termo', 1, 1, NULL, '2019-11-28 11:54:26', '2020-01-15 10:11:36', NULL, 'datetime-local', 0, 0),
(310, 'assinatura_do_candidato_a_estudante', 1, 1, NULL, '2020-01-11 10:38:12', '2021-08-04 21:24:52', NULL, 'text', 0, 0),
(311, 'n_candidado', 1, 1, NULL, '2021-07-22 07:20:53', '2021-08-04 13:07:35', NULL, 'text', 0, 0),
(312, 'e-mail', 1, 1, NULL, '2021-08-03 19:25:30', '2021-08-04 13:08:32', NULL, 'email', 0, 0);
