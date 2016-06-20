-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `blog`
--
DROP DATABASE IF EXISTS `eseg_t2_restr_dupla1`;
CREATE DATABASE `eseg_t2_restr_dupla1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eseg_t2_restr_dupla1`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `email`, `name`, `content`, `date`) VALUES
(1, 3, 'aparecido@email.com', 'Aparecido', 'first!', '2013-11-20 01:18:59'),
(2, 3, 'android@email.com', 'Android', 'Essa Apple... tsc tsc...', '2013-11-20 01:19:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `date`) VALUES
(2, 1, 'Patente da Samsung revela vÃ¡rios recursos em celular de tela curva', '<div>A recente moda dos smartphones com tela curva estÃ¡ inspirando mais projetos. Agora uma patente da Samsung equipa diversas novas funcionalidades nos aparelhos com visual inusitado: recursos que envolvem opÃ§Ãµes de desbloqueio e melhor aproveitamento do formato do dispositivo entÃ£o incluÃ­dos. Conforme a empresa, as mudanÃ§as prometem facilitar a vida do usuÃ¡rio.</div><div>O documento tem como base o protÃ³tipo apresentado pela Samsung na CES. O modelo permite que uma das bordas do aparelho ofereÃ§a vÃ¡rios recursos interessantes para agilizar o uso. Um bom exemplo dessas possibilidades Ã© a utilizaÃ§Ã£o do espaÃ§o lateral para destravar o aparelho: ao invÃ©s de deslizar os dedos como fazemos hoje, a Samsung idealiza que no smartphone com tela curva seria possÃ­vel reservar a borda do gadget especificamente para o gesto de desbloqueio.</div><div>Outra novidade descrita pela Samsung Ã© o uso da parte curva do display como um tipo de Ã¡rea de transferÃªncia persistente. Nesse recurso, os arquivos que sÃ£o copiados de uma pasta para outra, por exemplo, poderiam ser mantidos em evidÃªncia, facilitando a transmissÃ£o caso o usuÃ¡rio deseje copiar ou mover os dados de um lugar para o outro. No mesmo sentido, esse espaÃ§o na tela poderia abrigar um novo tipo de gerenciador de tarefas.</div><div>Segundo a patente da Samsung, seria possÃ­vel ainda percorrer e abrir e-mails, reservando o espaÃ§o lateral curvo para a exibiÃ§Ã£o de anexos. Outra imagem do documento mostra que a borda do display poderia tambÃ©m funcionar como medidor de energia, enquanto o aparelho Ã© recarregado.</div><div>Um detalhe interessante presente nas imagens da patente Ã© que o dispositivo de tela curva abandona o uso das teclas fÃ­sicas, comuns nos gadgets da fabricante sul-coreana.</div><div><br></div><div>Fonte:&nbsp;<a href="http://www.techtudo.com.br/noticias/noticia/2013/11/patente-da-samsung-revela-varios-recursos-em-celular-de-tela-curva.html" title="TechTudo" target="_blank">TechTudo</a></div>', '2013-11-20 00:49:05'),
(3, 1, 'Tela Retina do novo iPad mini Ã© inferior a do iPad 3, aponta especialista', '<div>Apesar das promessas da Apple, a tela Retina do novo iPad mini nÃ£o possui a mesma qualidade dos displays utilizados nos iPads maiores, como o iPad 3 e o novo iPad Air. De acordo com o especialista e CEO da AnandTech, Anand Lal Shimpi, isso ocorre por conta da saturaÃ§Ã£o dos tons vermelhos, que Ã© mais baixa no tablet menor.</div><div><br></div><div>Isso nÃ£o muda o fato de o iPad mini com tela Retina ter a melhor densidade de pixels por polegadas que um produto da Apple jÃ¡ possuiu, empatado com o iPhone 5S: 326 ppi. Com um display de 7,85 polegadas e resoluÃ§Ã£o de 2048 x 1536 pixels, ele apresenta evoluÃ§Ã£o em relaÃ§Ã£o ao seu antecessor, mas, se comparado a â€œirmÃ£os maioresâ€, a qualidade ainda Ã© inferior .</div><div><br></div><div>â€œO iPad mini 2 tem a mesma gama de cores do iPad mini, que Ã© mais limitada do que a do iPad Air, e, por isso, possui menos cores no esquema sRGB. A resoluÃ§Ã£o melhorou, mas, essa questÃ£o, infelizmente, continua igual. Acredito que a Apple imagine que seja melhor para os profissionais do ramo da imagem terem um iPad maiorâ€, explicou o especialista.</div><div>Nas avaliaÃ§Ãµes feitas por Anand Lal Shimpi, a diferenÃ§a pode ser notada por meio de uma comparaÃ§Ã£o de imagens idÃªnticas exibidas no iPad Air e no iPad mini com Retina display. A diferenÃ§a nÃ£o Ã© tÃ£o grande, mas perceptÃ­vel, e prova que os dois nÃ£o tÃªm, de fato, uma mesma qualidade de reproduÃ§Ã£o de cores.</div><div><br></div><div>Fonte: <a href="http://www.techtudo.com.br/noticias/noticia/2013/11/tela-retina-do-novo-ipad-mini-e-inferior-do-ipad-3-aponta-especialista.html" title="TechTudo" target="_blank">TechTudo</a></div>', '2013-11-20 00:52:51'),
(4, 1, 'Plugin para Chrome confirma leitura de mensagem no Gmail; similar ao WhatsApp', '<div>O MailTrack, um plugin para Google Chrome , leva uma funcionalidade bastante semelhante a do WhatsApp para a sua conta do Gmail: a confirmaÃ§Ã£o de leitura com os sinais de "visto".</div><div><br></div><div>No mensageiro, os sinais em verde em cada mensagem significam que o texto nÃ£o sÃ³ chegou aos servidores do aplicativo, mas que tambÃ©m foi entregue ao aparelho do destinatÃ¡rio. Sem confirmar completamente a leitura, jÃ¡ que o aparelho pode estar longe do seu dono ou a mensagem jamais ser aberta. PorÃ©m, com a extensÃ£o para Chrome, a certeza Ã© ainda maior. Ã‰ possÃ­vel adicionar os sinais de visto tÃ£o comuns ao WhatsApp e descobrir quando um destinatÃ¡rio abre um e-mail enviado por vocÃª no Gmail sem pagar nada por isso.</div><div><br></div><div>NÃ£o sÃ³ a extensÃ£o confirma a entrega do seu e-mail na caixa do destinatÃ¡rio, como informa o horÃ¡rio que a pessoa abriu sua mensagem e em qual dispositivo â€“ PC, Mac, iPhone etc. O plugin Ã© capaz ainda de dizer a localizaÃ§Ã£o e se algum link que no corpor do e-mail foi clicado.</div><div><br></div><div>Para usar, basta instalar a extensÃ£o no Chrome e enviar qualquer mensagem. Depois Ã© sÃ³ acessar sua caixa de mensagens enviadas e checar os sinais de visto ao lado do e-mail na caixa de entrada, verificando se a pessoa leu, entre outras informaÃ§Ãµes que o plugin oferece.</div><div><br></div><div>O serviÃ§o garante que Ã© muito difÃ­cil que o destinatÃ¡rio saiba que sua mensagem estÃ¡ sendo rastreada, a nÃ£o ser que seja familiarizado com a tecnologia utilizada pelo plugin, que acompanha as conversas por meio de uma imagem (oculta) enviada junto com o e-mail.</div><div><br></div><div>No entanto, o MailTrack inclui um link para o serviÃ§o um pouco antes da sua assinatura do e-mail. Portanto, Ã© importante lembrar de apagar todas as vezes que for enviar um e-mail, jÃ¡ que nÃ£o Ã© possÃ­vel retirar este link permanentemente por meio de configuraÃ§Ãµes originais.</div><div><br></div><div>Fonte: <a href="http://www.techtudo.com.br/noticias/noticia/2013/11/plugin-para-chrome-confirma-leitura-de-mensagem-no-gmail-similar-ao-whatsapp.html" title="TechTudo" target="_blank">TechTudo</a></div>', '2013-11-20 00:56:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin@email.com', '123@admin', 'Administrador');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
