--
-- Contenu de la table `etat`
--

INSERT INTO `etat` (`id`, `libelle_etat`) VALUES
(1, 'En service'),
(2, 'Hors service');

--
-- Contenu de la table `materiel`
--

INSERT INTO `materiel` (`id`, `nom_mat`, `date_garantie`, `numSite_id`, `numEtat_id`, `numStatut_id`, `numHistorique_id`, `numCarac_id`, `numType_id`) VALUES
(1, 'PC-Fabien', '2014-12-26', 5, 2, 2, NULL, NULL, NULL),
(2, 'PC-Germain', '2014-12-30', 3, 1, 3, NULL, NULL, NULL);

--
-- Contenu de la table `site`
--

INSERT INTO `site` (`id`, `nom_site`, `adresse_site`) VALUES
(1, 'Agen', ''),
(2, 'Bordeaux', ''),
(3, 'Limoges', ''),
(4, 'St Agnant de Versillat', ''),
(5, 'Châteauroux', ''),
(6, 'Guéret', ''),
(7, 'Montluçon', ''),
(8, 'St Junien', '');

--
-- Contenu de la table `statut`
--

INSERT INTO `statut` (`id`, `libelle_statut`) VALUES
(1, 'A renouveler'),
(2, 'Sous garantie'),
(3, 'Garantie terminée');

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `libelle_type`) VALUES
(1, 'Ordinateur'),
(2, 'Serveur'),
(3, 'Fax'),
(4, 'Imprimante'),
(5, 'Clé 3G'),
(7, 'Routeur');
