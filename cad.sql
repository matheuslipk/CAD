SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `cad` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cad`;

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `aluno` (
  `matricula` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `aluno` VALUES
(0, '', '', '', 0),
(123, 'Outro usuario', '40404040', '123', 0),
(1053253, 'Matheus', '94012914', '123456', 1),
(1053254, 'Usuario 4', '123456', '1010', 0);

CREATE TABLE `arquivos` (
  `id_arquivos` int(11) NOT NULL,
  `link_arquivo` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `data_evento` datetime NOT NULL,
  `data_publicacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `evento` VALUES
(1, 'Evento 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing...Lorem ipsum dolor sit amet, consectetur adipiscing...', '2017-08-20 00:00:00', '2017-08-18 14:26:00'),
(2, 'Evento 2', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum nisl nunc, eu ultricies magna pharetra in. Nullam nec metus pellentesque, pharetra sapien a, mattis lectus. Vivamus vitae semper ligulLorem ipsum dolor sit amet, consectetur adipiscing...a. Nam sit amet dignissim Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum nisl nunc, eu ultricies magna pharetra in. Nullam nec metus pellentesque, pharetra sapien a, mattis lectus. Vivamus vitae semper ligulLorem ipsum dolor sit amet, consectetur adipiscing...a. Nam sit amet dignissim \r\n', '2017-08-21 00:00:00', '2017-08-18 14:26:21'),
(3, 'Evento 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum nisl nunc, eu ultricies magna pharetra in. Nullam nec metus pellentesque, pharetra sapien a, mattis lectus. Vivamus vitae semper ligulLorem ipsum dolor sit amet, consectetur adipiscing...a. Nam sit amet dignissim Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rutrum nisl nunc, eu ultricies magna pharetra in. Nullam nec metus pellentesque, pharetra sapien a, mattis lectus. Vivamus vitae semper ligulLorem ipsum dolor sit amet, consectetur adipiscing...a. Nam sit amet dignissim ', '2017-08-23 00:00:00', '2017-08-18 14:26:26');

CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `data_publicacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `noticia` VALUES
(1, 'UESPI divulga resultado do Programa Auxílio Alimentação', 'O resultado final referente ao Programa Auxílio Alimentação da Universidade Estadual do Piauí já se encontra disponível para conferência. A lista contendo os classificados e cadastro de reserva foi divulgada hoje (18) pela Pró-reitoria de Extensão, Assuntos Estudantis e Comunitários-PREX.\r\n\r\nOs alunos agora deverão efetuar, de 12 a 14 do próximo mês de setembro, assinatura do termo de compromisso. Os classificados deverão assinar o termo de compromisso na secretaria do campus onde estuda, munidos do comprovante de matrícula.\r\n\r\nOs candidatos classificados no Campus Poeta Torquato Neto/Teresina deverão assinar o termo de compromisso na Pró-Reitoria de Extensão, Assuntos Estudantis e Comunitários – PREX, munidos do comprovante de matrícula.\r\n\r\nOs discentes que se encontram no cadastro reserva deverão aguardar chamadas posteriores no site da UESPI.', '2017-08-18 11:49:23'),
(2, 'Teresina é História: a cidade plural', 'Teresina não é dotada de uma só identidade. A capital piauiense é plural, devido a forte presença de inúmeros monumentos, casarões antigos, ruas distintas e praças. Além dos cheiros e sabores de uma culinária que compõe a mesa do teresinense, de ritmos que repercutem em diversos pontos da cidade.\r\n\r\nQuando se fala em patrimônio cultural, Teresina engloba diversos elementos, arquitetônicos. “Podemos destacar os sítios históricos da cidade, como a avenida Frei Serafim, a Praça da Bandeira, a Praça Saraiva, a Praça Pedro II, lugares privilegiados que detém exemplares daquilo que compõe a história urbana da cidade”, ressalta Viviane Pedrazzani, pesquisadora e professora de História da UESPI.\r\n\r\nMas o patrimônio cultural de uma cidade não é formado somente por esses elementos. Ele também é formado por tradições e manifestações culturais. “Por exemplo, a lenda do Cabeça de Cuia entre outras manifestações culturais como Reisado. Então, tudo isso compõe esse mosaico cultural da cidade, que possui também seu viés histórico”, afirma Viviane e acrescenta: “a gente não pode dissociar essas questões, que também compõe a memória da cidade”.\r\n\r\nDentro do aspecto de patrimônio imaterial destaca-se o Bumba Meu Boi, objeto de pesquisa de doutorado da professora Viviane Pedrazzani. Ela explica que esta manifestação cultural cria um senso de comunidade e laços de identificação. “Se a gente for perceber as comunidades, os diferentes grupos que formam a cidade, vamos ver os grupos de Bumba Meu Boi, que se desenvolvem em diferentes bairros da cidade de Teresina. Os integrantes se percebem como grupo, enquanto agentes, então, isso também deve ser posto como uma importante contribuição para a identidade da cidade”, ressalta.\r\n\r\nO patrimônio que o teresinense elegeu\r\n\r\nViviane Pedrazzani destaca que há um reconhecimento da Ponte Estaiada pelos teresinenses como um importante símbolo da cidade. “Atualmente há um bem na cidade que eu penso que as pessoas se reconhecem, embora ele ainda não seja reconhecido formalmente, mas que o teresinense tem uma relação muito forte, que é a ponte Estaiada”, afirma a professora de História. “Eu falo isso com bastante certeza, porque tenho pesquisado sobre isso. Teresina não tem muitos símbolos que consigam reunir o que a ponte Estaiada reúne”, destaca.', '2017-08-18 11:49:31'),
(3, 'Teresina é Tecnologia: o aumento do mercado de startups', 'Dando continuidade à série de reportagens especiais em comemoração ao aniversário de 165 de Teresina, hoje vamos falar sobre uma forma tecnológica e inovadora que está sendo muito procurada por empresas diversas e que é objeto de estudo e de interesse de pesquisadores da UESPI.\r\n\r\nInvestir em um negócio é sempre um desafio, ainda mais em períodos de crise. Mas, mesmo diante das incertezas e dos riscos, os investimentos em startups vêm crescendo. Isso se dá, principalmente, por uma característica especial: esse tipo de projeto se dispõem a solucionar problemas. No Piauí, com destaque para a capital Teresina, o fenômeno já é perceptível.\r\n\r\nStartups são pequenas empresas digitais em fase inicial que usam intensivamente a tecnologia da informação e possuem grande potencial de crescimento. São programadas para crescer em ritmo acelerado e buscam a inovação em qualquer ramo ou atividade.\r\n\r\nO termo começou a ser popularizado nos anos 1990, após a queda da bolsa eletrônica dos Estados Unidos, durante a chamada “Bolha da Internet” (em 2000), quando várias empresas do ramo da Tecnologia da Informação e Comunicação faliram. “Diante disso essas empresas sentiram a necessidade de sair do sistema tradicional de investimento e criação de empresas para um sistema de experimentação”, explica Carlos Giovanni, professor doutor do curso de Ciência da Computação da Universidade Estadual do Piauí.\r\n\r\nTais empresas buscaram ressurgir, investindo em ideias promissoras e inovadoras e que se mostravam extremamente lucrativas, além de sustentáveis. Grande parte das empresas do ramo surgiu no Vale do Silício, uma região da Califórnia (Estados Unidos), a exemplo do Google e Apple.\r\n\r\n“As startups estão ligadas à identificação de oportunidades e resolução de problemas, por isso se destacam”, afirma o professor doutor do curso de Administração da UESPI, estudioso do fenômeno das startups, Helano Pinheiro.\r\n\r\nInstituições públicas e privadas, cada vez mais estão interessadas nesse potencial de solucionar problemas e inovador dos startups. “Tem mais ou menos uns dois anos que o mercado de startups vem engrenando em um ritmo mais acelerado por aqui e promete crescer ainda mais com os incentivos que o setor vem ganhando. O programa Inova Piauí, por exemplo, já foi uma sinalização positiva do governo”, afirma o mentor de startups e prof. Dr. do curso de Computação da Universidade Estadual do Piauí, Carlos Giovanni.', '2017-08-18 11:49:40'),
(4, 'Mais de 200 estudantes participam do Congresso Internacional de Espanhol em Piripiri', 'Mais de 200 estudantes participam do II Congresso Internacional de Ensino de Espanhol no Brasil que acontece no campus prof. Antonio Giovani Sousa da Universidade Estadual do Piauí (UESPI) no município de Piripiri, região Norte do estado. O evento iniciou nesta quinta-feira, 17, e segue até o sábado, 19, é realizado pelo curso de Licenciatura Plena em Letras Espanhol do Núcleo de Educação à Distância (NEAD/UESPI) e pelo Núcleo de Estudos Hispânicos (NUEHIS) da UESPI.\r\n\r\nAlém do Congresso acontecem simultaneamente o III Colóquio do Núcleo de Estudos Hispânicos e II Seminário de Formação Docente do Parfor (Plano Nacional de Formação de Professores da Educação Básica). A programação inclui palestras, mesas redondas, minicursos e apresentações de trabalho.\r\n\r\nMesa de honra do II Congresso Internacional de Ensino de Espanhol do Brasil\r\n\r\nAntônio Alves Pereira, aluno do 6 período do curso de Letras Espanhol do NEAD, é um dos discentes que irá apresentar o resultado de seus estudos e pesquisa no evento com a mostra do trabalho: “Os pressupostos sociointeracionistas no ensino de língua espanhola”. Para ele é uma oportunidade acadêmica muito importante. “A minha expectativa é de poder aprofundar o conhecimento na área de modo que eu possa ampliar a experiência curricular, profissional e acadêmica”, descreve Antônio.\r\n\r\nA abertura do evento contou com a presença do pro-reitor de Extensão, Assuntos Estudantis e Comunitários, professor doutor Raimundo Dutra de Araújo, que na ocasião recebeu uma placa de agradecimentos pelo apoio ao desenvolvimento do ensino de espanhol na UESPI. Estiveram presentes ainda a diretora adjunta do Núcleo de Educação a Distância da UESPI, professora Laura Torres, a coordenadora do NUEHIS, a Profa.Dra Margareth Torres, a Profa.Dra Edileuza Maria Lucena.', '2017-08-18 14:30:46');


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

ALTER TABLE `aluno`
  ADD PRIMARY KEY (`matricula`);

ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id_arquivos`);

ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`);


ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `arquivos`
  MODIFY `id_arquivos` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
