--
-- Database: `kohana`
--

CREATE DATABASE kohana;

-- --------------------------------------------------------

--
-- Table structure for table `photo_tags`
--

CREATE TABLE IF NOT EXISTS `kohana.photo_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(255) NOT NULL,
  `tags_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `kohana.tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tagname`) VALUES
(1, 'PHP'),
(2, 'Java');

