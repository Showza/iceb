-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2018 às 21:51
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novoiceb_iceb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) CHARACTER SET utf8 NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8 NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('02q34883fggphehjrjjimhmtlthrm801', '::1', 1542424532, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432343533323b6c6f6761646f7c623a303b),
('0d4ietmq4reki8s4bufr3tvek0hr3tvm', '::1', 1542428040, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432383034303b6c6f6761646f7c623a303b),
('1ceq3db189266ib9ia7045hp11o0smqv', '::1', 1542421097, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432313039373b6c6f6761646f7c623a303b),
('22eprhfpmqt4qd4tgr46lb8vg29igt6g', '::1', 1542423129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432333132393b6c6f6761646f7c623a303b),
('2k1a2ldpcec52rs16qes7sfq7g1jpqf6', '::1', 1542427368, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432373336383b6c6f6761646f7c623a303b),
('2renk48jrfjlt3r4ia0jb7kj1skfsoqf', '::1', 1542430625, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433303632353b6c6f6761646f7c623a303b),
('36ooblevtcl8id1arhbvtd3jmhtrtrfk', '::1', 1542433971, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433333937313b6c6f6761646f7c623a303b),
('3863bli8nffqq2cbh7gr7vip7sfd0f21', '::1', 1542419308, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323431393330383b6c6f6761646f7c623a303b),
('4ngi8qq849t7pv9dnr7ucf1ps4uk0fhp', '::1', 1542691995, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323639313939353b6c6f6761646f7c623a313b),
('56ge5o18h2okuaf8vq1kv1ceg5nflbkl', '::1', 1542425155, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432353135353b6c6f6761646f7c623a303b),
('672mhf00as73062qhvcdisfq2j9oev7k', '::1', 1542421722, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432313732323b6c6f6761646f7c623a303b),
('6qalutltk0mcm9fj2mrp9ef1o098fc29', '::1', 1542420129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432303132393b6c6f6761646f7c623a303b),
('7hblvviote0lrv096cn2fb7prg0id9fm', '::1', 1542669628, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323636393632383b),
('7j6r05mk7jevmfbm2lanqmlr3r86jupp', '::1', 1542432635, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433323633353b6c6f6761646f7c623a303b),
('7k00f1789cqrfmnph0tus1k9gl8c00je', '::1', 1542420451, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432303435313b6c6f6761646f7c623a303b),
('7mjgr0v41nh3acorsubes6l6jr46b0nv', '::1', 1542424141, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432343134313b6c6f6761646f7c623a303b),
('7o4kadgg9k1krk1bjim7fmfq4v9h4lo8', '::1', 1542691274, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323639313237343b6c6f6761646f7c623a303b),
('86eb1canedr7fs179s78t2hodcmm484v', '::1', 1542423836, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432333833363b6c6f6761646f7c623a303b),
('8n9cgr40i1nd24aahrbsoiur8ecdsq0m', '::1', 1542433982, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433333937313b6c6f6761646f7c623a303b),
('8o2g9pel4sr66tf81ugpj3mkji464i3g', '::1', 1542419828, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323431393832383b6c6f6761646f7c623a303b),
('ah4hu57u73pa7o3a577m7o28b506aoqq', '::1', 1542422681, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432323638313b6c6f6761646f7c623a303b),
('appn4p5colhfvi31o0ncqk30d3mm7cu8', '::1', 1542692025, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323639313939353b6c6f6761646f7c623a303b),
('atsc7s08qmtt9767dj4tif8jng3c3uif', '::1', 1542433326, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433333332363b6c6f6761646f7c623a303b),
('c18c7essdhe2ogibgt5rnoer8i6uthq1', '::1', 1542427036, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432373033363b6c6f6761646f7c623a303b),
('d7iop9t0oodnh08q2r8l0a5cema967cj', '::1', 1542487764, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323438373736343b),
('dcvbop2ios0h5n39iltu7c657d2ed06v', '::1', 1542424846, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432343834363b6c6f6761646f7c623a303b),
('ddou3cfp5fag7gj38a57s31b44gb33ct', '::1', 1542746961, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323734363936313b),
('ds4tintek4qdpqpr0p8ob5huvotvfkq3', '::1', 1542746962, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323734363936313b),
('euf41u2ejcmtea0u86c9j9u53suglh05', '::1', 1542690637, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323639303633373b6c6f6761646f7c623a303b),
('fhhgmslusl63hndf3plg8sdl4bl5fsv9', '::1', 1542430297, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433303239373b6c6f6761646f7c623a303b),
('gjcb0q97qtmh02f1cji1b2g3b1m0p0g8', '::1', 1542745980, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323734353938303b),
('gm234dci0ugf9phq0lt5cm5q628aom3c', '::1', 1542428367, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432383336373b6c6f6761646f7c623a303b),
('h41vufh42l6dgbs20bcdevvduo06j7ar', '::1', 1542429992, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432393939323b6c6f6761646f7c623a303b),
('hmjh89k0q1vqmdb3o0a7rarq1po9huca', '::1', 1542428668, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432383636383b6c6f6761646f7c623a303b),
('j1fbf8gtdc6mml1gbqa9fjefg06c81a2', '::1', 1542426210, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432363231303b6c6f6761646f7c623a303b),
('jvnpflcbpb45gnpe6l8tavtk51earqt1', '::1', 1542418181, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323431383138313b6c6f6761646f7c623a303b),
('k3fk9aok4e77faqi6p6r4pclpo9h51oh', '::1', 1542485113, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323438353131333b),
('koolg9t5j9to09cu3tvsbc6mbohe2jev', '::1', 1542431864, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433313836343b6c6f6761646f7c623a303b),
('ldha6usqglqeo04qru4lj2pj3bo15hd6', '::1', 1542425461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432353436313b6c6f6761646f7c623a303b),
('lof3ephc6jm3sddishc36iifp9qcvjt6', '::1', 1542421407, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432313430373b6c6f6761646f7c623a303b),
('lr8r87nsuccgmbo4aaivvi7voi6e45a2', '::1', 1542431558, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433313535383b6c6f6761646f7c623a303b),
('mntktm3jcratc6oea1g0eecc0t6u72bn', '::1', 1542426523, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432363532333b6c6f6761646f7c623a303b),
('n3nrls7c716egeivi1urj5f5jhr20p0u', '::1', 1542422029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432323032393b6c6f6761646f7c623a303b),
('ngseisng4e6ovv812mgf0m6pq7hkk9do', '::1', 1542663259, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323636333235393b),
('nnuptss6dn5hj5d6elue3o5ngf7robg0', '::1', 1542418699, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323431383639393b6c6f6761646f7c623a303b),
('obqpubh0cr89ikbv9kme1udg65o0binj', '::1', 1542670323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323637303332333b6c6f6761646f7c623a313b),
('omqlbk7tdla2audd86l17un2h8d6hq2c', '::1', 1542425843, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432353834333b6c6f6761646f7c623a303b),
('opevn9unk71fmeggankej8bd5c42jqg9', '::1', 1542420792, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432303739323b6c6f6761646f7c623a303b),
('pb4iukj3o47dpft674o7534gnapg0erk', '::1', 1542432314, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433323331343b6c6f6761646f7c623a303b),
('pbr5cc8th4eemt5vb1dmsdrs6mtj63k0', '::1', 1542432948, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433323934383b6c6f6761646f7c623a303b),
('pp63b3if1etfaq8vlj7nnrqtfp7ma0p3', '::1', 1542431246, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433313234363b6c6f6761646f7c623a303b),
('qjn8q322bg7j3n7uduo93ti0hjmlg4oc', '::1', 1542691691, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323639313639313b6c6f6761646f7c623a303b),
('r3kv1rep1a0oo03vppic713d6226rjb8', '::1', 1542433651, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433333635313b6c6f6761646f7c623a303b),
('r8sehjopoamgahhtogc1hser0jpuuk1d', '::1', 1542429677, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432393637373b6c6f6761646f7c623a303b),
('sagfggl8idm97tcbh07pf92fid3s99qu', '::1', 1542423533, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432333533333b6c6f6761646f7c623a303b),
('scsookhi6otm3emvmdm7bk47g764qrve', '::1', 1542428979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432383937393b6c6f6761646f7c623a303b),
('t127hauficv6obrlaqrv74spi1tp1gjq', '::1', 1542430943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323433303934333b6c6f6761646f7c623a303b),
('tb5aph95p32g8d1hk03rgqp8rs5evvas', '::1', 1542427704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432373730343b6c6f6761646f7c623a303b),
('u38fnn3k93412pcqe98d2e7kbd68km3o', '::1', 1542690306, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323639303330363b6c6f6761646f7c623a303b),
('v1f84lt1rrmfsonng17lsk0g5nqgdpm5', '::1', 1542422335, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432323333353b6c6f6761646f7c623a303b),
('v7pddfabd6k01cv2q2udnc2hpfro0u1l', '::1', 1542690971, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323639303937313b6c6f6761646f7c623a303b),
('vjrufn9e0rr1s8mkpep0s5ldte7nqp5p', '::1', 1542429365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534323432393336353b6c6f6761646f7c623a303b);

-- --------------------------------------------------------

--
-- Estrutura da tabela `colegiado`
--

CREATE TABLE `colegiado` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `sigla` varchar(10) NOT NULL,
  `link_curso` varchar(200) NOT NULL,
  `link_matriz` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `colegiado`
--

INSERT INTO `colegiado` (`id`, `nome`, `sigla`, `link_curso`, `link_matriz`) VALUES
(3, 'Colegiado de Ciência da Computação', 'COCIC', 'https://www.escolha.ufop.br/cursos/ciencia-da-computacao', 'https://zeppelin10.ufop.br/SistemaAcademico/MatrizCurricular?codCurso=COM'),
(5, 'Colegiado do Curso de Ciências Biológicas Bacharelado', 'COCBIB', 'https://www.escolha.ufop.br/cursos/ciencias-biologicas', 'https://zeppelin10.ufop.br/SistemaAcademico/MatrizCurricular?codCurso=CBB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `telefone`) VALUES
(1, 'DECBI', '3559-1672'),
(2, 'Biblioteca do ICEB', '3559-1502'),
(3, 'Colegiados', '3559-1312'),
(4, 'Laboratório Multiusuário', '3559-1743'),
(5, 'Seção de Ensino', '3559-1337'),
(6, 'Portaria do ICEB', '3559-1661'),
(7, 'Administrador de Prédios', '3559-1273'),
(8, 'Biotério', '3559-1673'),
(9, 'DEQUI', '3559-1707'),
(10, 'DEMAT', '3559-1700'),
(11, 'DEFIS', '3559-1667'),
(12, 'DECOM', '3559-1692'),
(13, 'DEEST', '3559-1400'),
(14, 'DEBIO', '3559-1603'),
(15, 'DEEMA', '3559-1293'),
(16, 'Bloco de Salas(1)', '3559-1028'),
(17, 'Bloco de Salas(2)', '3559-1029'),
(19, 'Diretoria', '3559-1660');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `descricao` text CHARACTER SET utf8 NOT NULL,
  `video` text CHARACTER SET utf8 NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL,
  `atuacao` text CHARACTER SET utf8 NOT NULL,
  `modalidade` varchar(100) CHARACTER SET utf8 NOT NULL,
  `duracao` int(11) NOT NULL,
  `vagas` int(11) NOT NULL,
  `turno` varchar(100) CHARACTER SET utf8 NOT NULL,
  `info` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `titulo`, `descricao`, `video`, `link`, `atuacao`, `modalidade`, `duracao`, `vagas`, `turno`, `info`) VALUES
(1, 'Física', 'O curso localizado no Instituto de Ciências Exatas e Biológicas (ICEB) oferece duas ênfases na modalidade de bacharelado: Física Básica e Ciências dos Materiais. Nos dois primeiros anos as disciplinas são comuns às duas áreas de atuação. A partir do quinto período, o aluno opta por se especializar em uma das áreas e, assim, passa a cursar disciplinas específicas de cada ênfase. O profissional de Ciência dos Materiais está apto a atuar tanto na pesquisa e desenvolvimento quanto na produção e utilização de diferentes materiais, tais como: cerâmicas, polímeros, vidros, metais e ligas, materiais nanoestruturados, semicondutores, etc. O curso foi planejado para formar profissionais com sólida base científica e com competência em ciências aplicadas, voltadas para a pesquisa e para o desenvolvimento de novos materiais, análise estrutural e de propriedades, ensaios e aplicações de materiais tradicionais e novos materiais. Assim, a formação em Física/Ciência dos Materiais habilita o graduando a trabalhar nas indústrias, nos centros de pesquisa, em empresas de consultoria ou, ainda, a continuar seus estudos em ciências físicas ou ciências aplicadas. A ênfase em Física Básica forma profissionais voltados às questões de física básica e fenomenologias. Em geral, estes profissionais encaminham-se para a carreira acadêmica de ensino superior e pesquisa. O curso oferece ao aluno uma formação sólida e atualizada, combinando ciências matemáticas e físicas. O programa de curso visa a proporcionar ao estudante a capacidade de abordar problemas físicos diversos aplicando modelos físicos e matemáticos para o seu entendimento e desenvolvimento de aplicações. Assim, o profissional formado em Física Básica pode estudar e interagir em temas de interesse multidisciplinar, atuando juntamente com matemáticos, químicos, biólogos e engenheiros. Além da habilitação de Bacharelado em Física, o curso localizado no ICEB/UFOP passa a oferecer, a partir de 2012, a habilitação em Licenciatura em Física. Esta habilitação visa à formação de profissionais com sólidas bases no entendimento de fenômenos físicos e aplicações de ferramentas matemáticas, voltados para a atuação no ensino de Física e ciências. Nesse caso, além das disciplinas comuns e de formação básica, o licenciando cursa também disciplinas de cunho pedagógico, didático e psico-pedagógico. O exercício da docência tem um vasto campo em instituições de ensino públicas e particulares. Há também a opção de continuação de estudos, voltado à carreira acadêmica de ensino superior e pesquisa. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ITJ_zNWeHXY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRZFIS2018_1.pdf', 'O mercado de trabalho do bacharel em Física é vasto e abrange setores do ensino superior, de centros de pesquisa públicos e privados e indústrias. O profissional pode se especializar em diversas áreas, tais como: física de materiais, propriedades fundamentais da matéria, física teórica e computacional, biofísica, econofísica, física de partículas, física nuclear e ensino de ciências. ', 'Bacharelado', 8, 25, 'Diurno', ''),
(2, 'Ciências Biológicas', 'Com a proposta de formar profissionais capacitados a compreender os fenômenos da natureza, a interferência do homem no meio ambiente e promover o desenvolvimento sustentável e conservação da biodiversidade, o curso oferece duas modalidades de formação: licenciatura e bacharelado. Com duração de oito semestres no bacharelado e nove semestres na licenciatura, ao longo da graduação o aluno é formado para lidar com desenvolvimento tecnológico e científico que envolve toda a área da biologia. A licenciatura tem como objetivo formar um profissional capacitado a trabalhar nos ensinos fundamental, médio e superior. A formação é composta por conhecimentos práticos interdisciplinares de biologia e pedagogia. O bacharelado forma profissionais qualificados a realizar pesquisas nas grandes áreas das Ciências Biológicas como a Parasitologia, Genética, Bioquímica, Ecologia, entre outras. A localização do curso na cidade de Ouro Preto se torna um fator de vantagem, já que as condições geológicas e biogeográficas são favoráveis para o desenvolvimento de pesquisas em Interações Biológicas, Biologia Evolutiva e Ecologia. O Parque do Itacolomy, o Parque Municipal das Andorinhas, a APA das Andorinhas e a Estação Ecológica do Tripuí são exemplos de ambientes amplamente estudados no curso. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JUVD5QYyXzs\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZCBB018_1.pdf', 'Além de seguir carreira na educação nos ensinos fundamental, médio e superior, o biólogo formado na UFOP está apto a formular e elaborar estudos, projetos ou pesquisa científica básica e aplicada nos diversos setores da biologia. Há também a possibilidade de orientar, dirigir, assessorar e prestar consultoria à empresas e fundações de âmbito público e privado relacionadas com biotecnologia, conservação biológica e estudos de impacto ambiental. ', 'Bacharelado', 8, 30, 'Diurno', 'https://docs.google.com/spreadsheets/d/1o8Zv2qmS3oLOemIHLXH17Vlk-lkCHGrm_j0QKle3Hhw/pubhtml'),
(3, 'Ciência da Computação', 'Computadores são empregados em quase todas as atividades humanas: nas comunicações, nas diferentes tarefas de administração de empresas, escolas, hospitais ou órgãos públicos, na produção de textos, músicas ou filmes, no controle da produção industrial, em transações bancárias, no controle de tráfego aéreo, terrestre ou marítimo, no projeto e fabricação de automóveis, aviões, navios, equipamentos médicos, robôs e até naves espaciais, e em inúmeras outras atividades de produção ou de pesquisa. Isso porque um computador é uma máquina versátil, que pode ser programada para realizar tarefas específicas. O objetivo do curso de bacharelado em Ciência da Computação oferecido pela UFOP é formar o profissional capacitado para atuar, com competência, no desenvolvimento de sistemas de computação e informação. Para isso, o curso oferece uma formação abrangente em tecnologias da computação, possibilitando aos alunos atuarem em diferentes atividades da área. O curso aborda os fundamentos básicos da computação e as mais modernas tecnologias nas áreas de linguagens de programação, redes de computadores, bancos de dados, inteligência artificial, computação gráfica e outras temáticas. Em sua infraestrutura, o curso de Ciência da Computação possui modernos laboratórios de programação e uma biblioteca composta por mais de 1200 títulos. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jCOWvyWyUuM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZCOM2018_1.pdf', 'Alunos formados no curso podem atuar em empresas, órgãos públicos, ou instituições de pesquisa das mais diferentes áreas, sejam em empresas que têm no desenvolvimento software a sua atividade fim, ou naquelas que utilizem sistemas de computação para apoio a suas atividades principais. As atividades na área são variadas: especificação, projeto, implantação e testes de software para diferentes aplicações, projeto e gerenciamento de redes de computadores e de bases de dados, pesquisas e inovação tecnológica. O aluno poderá também empreender seu próprio negócio ou dar continuidade a seus estudos em cursos de pós-graduação, ingressando em atividades de ensino e de pesquisa. ', 'Bacharelado', 8, 40, 'Diurno', 'https://docs.google.com/spreadsheets/d/1O3Vycf9bLnNe6cnC23PH4isrKCzP1h5457C81CcymdE/pubhtml'),
(4, 'Estatística', 'Autorizado pelo MEC em dezembro de 2007, desde o início de 2008 o curso de Estatística vem oferecendo 40 vagas anuais no turno da noite. Com oito semestres letivos de duração, o curso tem como meta propiciar uma formação sólida e atual aos alunos por meio de disciplinas que vão desde as áreas de fundamentos até as disciplinas mais profissionalizantes. O curso de Bacharelado em Estatística da UFOP permite ao aluno formado atuar em três grandes perfis específicos. O Estatístico-Pesquisador se ocupará das atividades de pesquisa em estatística em universidades e centros de pesquisa. O Estatístico-Educador forma com a capacidade de disseminação do conhecimento estatístico em diferentes organizações sociais, mas de forma especial nas escolas de ensino médio. Por fim, o Estatístico Aplicado é o profissional capacitado a formular e resolver problemas que envolvem a coleta, sistematização e análise de dados. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pK7CPwV2fzQ\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZEST22018_1.pdf', 'O curso oferecido pela UFOP apresenta um programa flexível, de forma a qualificar os seus graduados tanto para a pesquisa e o ensino de nível superior como para qualificá-lo para o mercado de trabalho  fora do ambiente acadêmico nas mais variadas áreas de aplicação da Estatística, como indústrias, hospitais, centros de pesquisa médica, empresas de pesquisa de opinião e mercado, bancos e seguradoras, mercados financeiros, instituições públicas e universidades. ', 'Bacharelado', 8, 40, 'Noturno', ''),
(5, 'Matemática', 'Com o objetivo de atender à demanda regional de professores com licenciatura plena em Matemática, a Universidade Federal de Ouro Preto (UFOP) criou, em 1998, o curso de Matemática na modalidade Licenciatura. Atualmente, o curso conta também com habilitação em Bacharelado. O primeiro ano de estudos é comum a ambas as formações e, ao final do segundo semestre, o aluno deve optar por uma delas. O Bacharelado capacita o estudante para a pesquisa científica. Por meio da continuidade de estudos em nível de mestrado e doutorado o aluno também está apto à docência no ensino superior. A Licenciatura forma professores de Matemática para atuarem na educação básica (ensino fundamental, a partir do 6º ano, e no ensino médio). Assim como no bacharelado o estudante que der continuidade aos estudos em nível de mestrado e doutorado nas áreas de educação, também estará apto à docência. Sediado no Instituto de Ciências Exatas e Biológicas (ICEB), o Departamento de Matemática (Demat) da UFOP dispõe de estruturas que permitem a imersão do aluno, como biblioteca, sala de seminários, laboratório de informática e uma sala para estudos e pesquisa em Educação Matemática. O corpo docente é formado por mestres e doutores que, além de ensinarem na graduação e na pós-graduação, fomentam as iniciativas de projetos de pesquisa e extensão, envolvendo os alunos. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xosjzD3nPxE\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZMTB32018_1.pdf', 'A presença da Matemática vai além do suporte teórico para as novas tecnologias; serve também como instrumento para interpretar e organizar informações, como na construção de tabelas de planos de saúde e imposto de renda. Assim, a compreensão matemática é fundamental para a vida em sociedade. O matemático poderá especializar-se em nível de pós-graduação para exercer a docência superior, especializar-se em áreas da Matemática pura ou aplicada a campos da engenharia, física, finanças, computação teórica, computação gráfica, entre outras. ', 'Bacharelado', 8, 40, 'Integral', 'https://www.google.com/'),
(6, 'Quimica Industrial', 'Pioneiro no estado de Minas Gerais, o curso foi criado em 1999 e reconhecido pelo MEC em 2003, ano em que se formou sua primeira turma. Além da formação específica na área ambiental, o curso oferece uma formação ampla que permite a atuação do profissional nos mais variados campos que o mercado de trabalho propõe. O químico industrial atua no controle de qualidade de matérias-primas, de produtos em processamentos e produtos acabados numa indústria química, além de elaborar laudos técnicos e prestar assessoria dentro de sua competência. O cumprimento do currículo do curso de Química Industrial da UFOP tem uma duração média de quatro anos, incluindo disciplinas obrigatórias, eletivas e horas de estágio. A grade curricular é composta por disciplinas que permeiam a matemática, física, química, biologia, administração, computação, expressão gráfica, tecnologia química, sempre alternando entre a teoria e a prática. A infraestrutura física da Universidade conta com laboratórios modernos, tanto de ensino, quanto de pesquisa e extensão. Tal estrutura, aliada aos diversos programas de bolsas ofertados pela instituição, permitem ao aluno o treinamento em recursos avançados e a maximização do seu aprendizado. A existência de monitorias para diversas disciplinas auxilia o processo de ensino-aprendizagem, e a possibilidade de participação em programas de iniciação científica completa o processo de produção do conhecimento. O corpo docente é composto essencialmente por professores doutores, cujos títulos foram obtidos nas mais renomadas instituições do país e do exterior. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/tA6CZwS0h7E\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZQUI22018_1.pdf', 'O químico industrial formado está efetivamente apto a desempenhar inúmeras funções, bem como produção; tratamentos prévios e complementares de produtos; pesquisa e desenvolvimento de operações e processos industriais; análise química e físico-química; químico-biológica, bromatológica, toxicológica e legal; padronização e controle de qualidade; operação e manutenção de equipamentos e instalações; execução de trabalhos técnicos; vistoria, perícia, avaliação, arbitrariamento e serviços técnicos; elaboração de pareceres, laudos e atestados; além de também poder exercer o magistério, conforme legislação vigente. ', 'Bacharelado', 8, 40, 'Diurno', ''),
(7, 'Licenciatura Ciências Biológicas', 'Com a proposta de formar profissionais capacitados a compreender os fenômenos da natureza, a interferência do homem no meio ambiente e promover o desenvolvimento sustentável e conservação da biodiversidade, o curso oferece duas modalidades de formação: licenciatura e bacharelado. Com duração de oito semestres no bacharelado e nove semestres na licenciatura, ao longo da graduação o aluno é formado para lidar com desenvolvimento tecnológico e científico que envolve toda a área da biologia. A licenciatura tem como objetivo formar um profissional capacitado a trabalhar nos ensinos fundamental, médio e superior. A formação é composta por conhecimentos práticos interdisciplinares de biologia e pedagogia. O bacharelado forma profissionais qualificados a realizar pesquisas nas grandes áreas das Ciências Biológicas como a Parasitologia, Genética, Bioquímica, Ecologia, entre outras. A localização do curso na cidade de Ouro Preto se torna um fator de vantagem, já que as condições geológicas e biogeográficas são favoráveis para o desenvolvimento de pesquisas em Interações Biológicas, Biologia Evolutiva e Ecologia. O Parque do Itacolomy, o Parque Municipal das Andorinhas, a APA das Andorinhas e a Estação Ecológica do Tripuí são exemplos de ambientes amplamente estudados no curso. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JUVD5QYyXzs\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZCBL32018_1.pdf', 'Além de seguir carreira na educação nos ensinos fundamental, médio e superior, o biólogo formado na UFOP está apto a formular e elaborar estudos, projetos ou pesquisa científica básica e aplicada nos diversos setores da biologia. Há também a possibilidade de orientar, dirigir, assessorar e prestar consultoria à empresas e fundações de âmbito público e privado relacionadas com biotecnologia, conservação biológica e estudos de impacto ambiental. ', 'Licenciatura', 9, 30, 'Noturno', 'https://docs.google.com/spreadsheets/d/1o8Zv2qmS3oLOemIHLXH17Vlk-lkCHGrm_j0QKle3Hhw/pubhtml'),
(8, 'Licenciatura Física', ' O curso de licenciatura em física da UFOP teve seu início em 2012 e passou pelo processo de reconhecimento em 2016. São oferecidas 10 vagas anualmente com entrada no início do ano. Mais de 85% do corpo docente é composto por doutores com vasta experiência em pesquisa, tanto em Física Básica quanto em Ensino de Física.  Além disso, os alunos do curso de Licenciatura em Física têm à sua disposição um conjunto de laboratórios de Ensino de alta qualidade. São 4 Laboratórios de Ensino de Física Básica e 2 Laboratórios dedicados exclusivamente para alunos dos cursos de Física nas disciplinas de Física Experimental Avançada e em projetos desenvolvidos em Iniciações Científicas.  Os alunos do curso de Licenciatura em Física podem continuar sua formação dentro da UFOP ao ingressarem no Mestrado Profissional em Ensino de Ciências (MPEC) http://www.mpec.ufop.br ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ITJ_zNWeHXY\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZFSL22018_1.pdf', 'O mercado de trabalho do bacharel em Física é vasto e abrange setores do ensino superior, de centros de pesquisa públicos e privados e indústrias. O profissional pode se especializar em diversas áreas, tais como: física de materiais, propriedades fundamentais da matéria, física teórica e computacional, biofísica, econofísica, física de partículas, física nuclear e ensino de ciências. ', 'Licenciatura', 8, 40, 'Diurno', ''),
(9, 'Licenciatura Química', 'Com a criação do Plano de Reestruturação e Expansão das Universidades Federais (Reuni), o curso de Química, que já era idealizado antes de 2005, pôde ser viabilizado em 2008. Tem por objetivo formar profissionais bem qualificados para as diversas áreas de educação em química e visa à formação crítica com ações transformadoras da realidade atual. A matriz curricular possibilita a aquisição de conhecimento em quatro grandes eixos articuladores voltados para a interdisciplinaridade, visando à formação global do aluno. 1) Disciplinas de química e de outras áreas das ciências naturais, que proporcionam um conhecimento profundo da química em todas as suas dimensões. 2) Disciplinas e atividades relacionadas à didática, envolvendo os conhecimentos filosóficos, educacionais e pedagógicos da ação educativa.   3) Disciplinas e atividades relacionadas à prática pedagógica; 4) Disciplinas voltadas para uma formação humanística para o exercício pleno de cidadania. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xMHay-Ps1Gw\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZQLI12018_1.pdf', 'O profissional formado no curso de licenciatura em química da UFOP pode atuar, imediatamente após a sua formatura, como professor de química no ensino básico (fundamental ou médio) ou exercer as atividades de consultoria, perícia, elaboração de laudos e pareceres, pesquisas em geral, análises químicas, físico-químicas, bromatológicas, toxicológicas e de controle de qualidade. Há também a opção de continuar seus estudos de pós-graduação para atuar como professor ou pesquisador em educação em química (área muito deficitária de profissionais dentre os cientistas no Brasil) com a importante missão de colaborar com as ações que definirão o futuro próximo da educação no Brasil. ', 'Licenciatura', 8, 40, 'Noturno', ''),
(10, 'Licenciatura Matemática', 'Com o objetivo de atender à demanda regional de professores com licenciatura plena em Matemática, a Universidade Federal de Ouro Preto (UFOP) criou, em 1998, o curso de Matemática na modalidade Licenciatura. Atualmente, o curso conta também com habilitação em Bacharelado. O primeiro ano de estudos é comum a ambas as formações e, ao final do segundo semestre, o aluno deve optar por uma delas. O Bacharelado capacita o estudante para a pesquisa científica. Por meio da continuidade de estudos em nível de mestrado e doutorado o aluno também está apto à docência no ensino superior. A Licenciatura forma professores de Matemática para atuarem na educação básica (ensino fundamental, a partir do 6º ano, e no ensino médio). Assim como no bacharelado o estudante que der continuidade aos estudos em nível de mestrado e doutorado nas áreas de educação, também estará apto à docência. Sediado no Instituto de Ciências Exatas e Biológicas (ICEB), o Departamento de Matemática (Demat) da UFOP dispõe de estruturas que permitem a imersão do aluno, como biblioteca, sala de seminários, laboratório de informática e uma sala para estudos e pesquisa em Educação Matemática. O corpo docente é formado por mestres e doutores que, além de ensinarem na graduação e na pós-graduação, fomentam as iniciativas de projetos de pesquisa e extensão, envolvendo os alunos. ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xosjzD3nPxE\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'MATRIZMTL22018_1.pdf', 'A presença da Matemática vai além do suporte teórico para as novas tecnologias; serve também como instrumento para interpretar e organizar informações, como na construção de tabelas de planos de saúde e imposto de renda. Assim, a compreensão matemática é fundamental para a vida em sociedade. O matemático poderá especializar-se em nível de pós-graduação para exercer a docência superior, especializar-se em áreas da Matemática pura ou aplicada a campos da engenharia, física, finanças, computação teórica, computação gráfica, entre outras. ', 'Licenciatura', 10, 40, 'Noturno', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `titulo` text NOT NULL,
  `sigla` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`id`, `link`, `titulo`, `sigla`) VALUES
(5, 'http://debio.ufop.br/', 'Departamento de Biodiversidade, Evolução e Meio Ambiente', 'DEBIO'),
(6, 'http://www.iceb.ufop.br/decbi/', 'Departamento de Ciências Biológicas', 'DECBI'),
(7, 'http://www.decom.ufop.br/decom/inicio/', 'Departamento de Computação', 'DECOM'),
(8, 'http://www.iceb.ufop.br/deest/', 'Departamento de Estatística', 'DEEST'),
(9, 'http://fisica.ufop.br/', 'Departamento de Física', 'DEFIS'),
(10, 'http://www.iceb.ufop.br/demat/', 'Departamento de Matemática', 'DEMAT'),
(11, 'http://deema.ufop.br/', 'Departamento de Educação Matemática', 'DEEMA'),
(12, 'http://www.iceb.ufop.br/dequi/', 'Departamento de Química', 'DEQUI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `diretoria`
--

CREATE TABLE `diretoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cargo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `diretoria`
--

INSERT INTO `diretoria` (`id`, `nome`, `cargo`) VALUES
(1, 'Prof. André Talvani Pedrosa da Silva', 'Diretor'),
(2, 'Prof. Rodrigo Fernando Bianchi', 'Vice-Diretor'),
(3, 'Roseany Mendes', 'Secretária'),
(4, 'Vânia Cristina Rosa', 'Recepcionista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `colegiado` int(100) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `membro` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `lattes` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `colegiado`, `nome`, `telefone`, `cargo`, `membro`, `email`, `lattes`) VALUES
(1, 5, 'Pedro Alves', '(31) 3559-1312', 'Secretário(a)', 'Membro do Colegiado', 'cocbib.iceb@ufop.edu.br', ''),
(2, 3, 'Joubert Castro Lima', '', 'Coordenador(a)', 'Membro do NDE', 'joubert@gmail.com', 'http://lattes.cnpq.br/4646114975554537'),
(4, 5, 'Eneida M. Eskinazi Sant’Anna', '(31) 3559-1312', 'Coordenador(a)', 'Membro do Colegiado', 'eskinazi@ufop.edu.br', 'http://lattes.cnpq.br/3676657135006759'),
(5, 5, 'Ana Letícia Pilz de Castro', '', 'Membro', 'Membro do Colegiado', 'anacastro@ufop.edu.br', 'http://lattes.cnpq.br/1636925361891899'),
(6, 5, 'Camila Carrião Machado Garcia', '(31) 3559-1698', 'Presidente', 'Membro do NDE', 'carriao@ufop.edu.br', 'http://lattes.cnpq.br/6201516426270860'),
(7, 5, 'Alexandre S.de Paula', '(31) 3559-1244', 'Membro', 'Membro do NDE', 'alexandre.paula@ufop.edu.br', 'http://lattes.cnpq.br/2193708427094253'),
(8, 5, 'Breno de Mello Silva', '(31) 3559-1695', 'Membro', 'Membro do NDE', 'breno@ufop.edu.br', 'http://lattes.cnpq.br/5291451453485893');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mapas`
--

CREATE TABLE `mapas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `arquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mapas`
--

INSERT INTO `mapas` (`id`, `nome`, `arquivo`) VALUES
(1, 'MapaICEB', 'mapaICEB.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `link` text NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `link`, `data`) VALUES
(10, '58° Congresso Brasileiro de Química', 'http://www.ufop.br/noticias/pesquisa-e-inovacao/58o-congresso-brasileiro-de-quimica', '2018-04-05'),
(11, 'Aluno da pós em Ciência da Computação ganha prêmio de melhor trabalho em evento internacional', 'http://www.ufop.br/noticias/pos-graduacao/aluno-da-pos-em-ciencia-da-computacao-ganha-premio-de-melhor-trabalho-em', '2018-04-08'),
(12, 'Ex-aluno da UFOP publica artigo em revista internacional', 'http://www.ufop.br/noticias/ex-aluno-da-ufop-publica-artigo-em-revista-internacional', '2018-04-09'),
(13, 'Abertas inscrições para pós do Programa Multicêntrico em Química', 'http://www.ufop.br/noticias/pos-graduacao/abertas-inscricoes-para-pos-do-programa-multicentrico-em-quimica', '2018-04-19'),
(14, 'Concurso para professor efetivo', 'http://www.ufop.br/noticias/concursos/concurso-para-professor-efetivo', '2018-05-02'),
(15, 'Inscrições abertas para Mestrado e Doutorado em Ciência da Computação', 'http://www.ufop.br/noticias/pos-graduacao/inscricoes-abertas-para-mestrado-e-doutorado-em-ciencia-da-computacao', '2018-05-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pos-graduacao`
--

CREATE TABLE `pos-graduacao` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `link` text NOT NULL,
  `video` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pos-graduacao`
--

INSERT INTO `pos-graduacao` (`id`, `titulo`, `link`, `video`) VALUES
(1, 'Ensino de Ciências', 'http://www.mpec.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UAk4dzhVdQ0\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(6, 'Ciência da Computação', 'http://www.decom.ufop.br/pos/inicio/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jrRLL2Vr5wA\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(7, 'Ciências - Física dos Materiais', 'http://fimat.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SL5eRTkZU8g\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(9, 'Engenharia de Materiais', 'http://www.redemat.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/G8r1acrMGD8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(10, 'Educação Matemática', 'http://www.ppgedmat.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/G8r1acrMGD8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(11, 'Química', 'http://www.ppgquimica.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/G8r1acrMGD8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(12, 'Ecologia de Biomas Tropicais', 'http://biomas.ufop.br/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6xE2s8Mtv3c\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

CREATE TABLE `salas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `arquivo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`id`, `nome`, `arquivo`) VALUES
(1, 'Bloco de salas - Segunda-feira', 'Alocacao_Segunda_2018_2_Bloco_de_Salas.pdf'),
(2, 'Bloco de salas - Terça-feira', 'Alocacao_Terca_2018_2_Bloco_de_Salas.pdf'),
(3, 'Bloco de salas - Quarta-feira', 'Alocacao_Quarta_2018_2_Bloco_de_Salas.pdf'),
(4, 'Bloco de salas - Quinta-feira', 'Alocacao_Quinta_2018_2_Bloco_de_Salas.pdf'),
(5, 'Bloco de salas - Sexta-feira', 'Alocacao_Sexta_2018_2_Bloco_de_Salas.pdf'),
(8, 'ICEB - Segunda-feira', 'Alocacao_Segunda_2018_2_ICEB.pdf'),
(9, 'ICEB - Terça-feira', 'Alocacao_Terca_2018_2_ICEB.pdf'),
(10, 'ICEB - Quarta-feira', 'Alocacao_Quarta_2018_2_ICEB.pdf'),
(11, 'ICEB - Quinta-feira', 'Alocacao_Quinta_2018_2_ICEB.pdf'),
(12, 'ICEB - Sexta-feira', 'Alocacao_Sexta_2018_2_ICEB.pdf'),
(6, 'Horário Complementar - Quarta-feira', 'horario_complementar_-_quarta-feira.pdf'),
(7, 'Bloco de salas - Sábado', 'bloco_de_salas_-_sabado.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `colegiado` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `arquivo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `download` tinyint(1) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `upload`
--

INSERT INTO `upload` (`id`, `colegiado`, `tipo`, `arquivo`, `descricao`, `download`, `nome`) VALUES
(4, 5, 'ata', 'Atas para o site.rar', 'ATAS COCBIB Reuniões 2018', 1, 'Atas do Colegiado'),
(5, 5, 'docs', 'Site ICEB.docx', 'Documento do departamento de biologia', 1, 'Documento 1'),
(6, 5, 'aacc', 'Tabela AACC_NOVA_Bacharelado 2018.pdf', 'Tabela AACC do departamento de biologia', 1, 'Tabela AACC 1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(20) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`user`, `senha`) VALUES
('VolutaSD', 'inovarsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `colegiado`
--
ALTER TABLE `colegiado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`) USING BTREE;

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diretoria`
--
ALTER TABLE `diretoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapas`
--
ALTER TABLE `mapas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pos-graduacao`
--
ALTER TABLE `pos-graduacao`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Titulo` (`titulo`) USING BTREE;

--
-- Indexes for table `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colegiado`
--
ALTER TABLE `colegiado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `diretoria`
--
ALTER TABLE `diretoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mapas`
--
ALTER TABLE `mapas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pos-graduacao`
--
ALTER TABLE `pos-graduacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `salas`
--
ALTER TABLE `salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
