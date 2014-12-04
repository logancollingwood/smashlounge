-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 04, 2014 at 04:47 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thalounge`
--

-- --------------------------------------------------------

--
-- Table structure for table `chargif`
--

DROP TABLE IF EXISTS `chargif`;
CREATE TABLE `chargif` (
`id` int(1) NOT NULL,
  `charid` int(2) DEFAULT NULL,
  `url` varchar(44) DEFAULT NULL,
  `description` varchar(160) DEFAULT NULL,
  `source` varchar(12) DEFAULT NULL,
  `pageid` int(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=302 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chargif`
--

INSERT INTO `chargif` (`id`, `charid`, `url`, `description`, `source`, `pageid`) VALUES
(3, 24, 'MarvelousMedicalFlee', 'aMSa going hard', '', 0),
(5, 4, 'ValidEdibleIndochinesetiger', 'MMG | Shroomed demonstrating the importance of wavelanding with Dr. Mario', '', 0),
(6, 2, 'HarmlessShamefulHalicore', 'Lord vs S2J with an amazing finisher at TNE. LONG LIVE THE HYPE.', '', 0),
(7, 14, 'BlankWickedAmmonite', 'Mew2King demonstrating the importance of juggling and keeping your opponent above you', '', 0),
(8, 6, 'EuphoricCookedHornshark', 'Westballz demonstrating technical edge guarding with Fox', '', 0),
(9, 18, 'FamiliarEthicalHomalocephale', 'The Armada double-Stitchface shield break combo\r\n', '', 0),
(11, 5, 'SnappyBlissfulChickadee', 'Short hop lasers are a crucial part of Falco''s movement.', '', 0),
(12, 5, 'RingedIdolizedAidi', 'A typical Falco combo, where shines are followed by down-airs. Notice how Zhu uses a laser reset to initiate the combo', '', 0),
(13, 6, 'NewCaringFurseal', 'Hax demonstrating ridiculously fast multishines to pressure an enemy in shield', '', 0),
(14, 6, 'EarlyOptimalCondor', 'Leffen demonstrating how to pressure your opponent as Fox', '', 0),
(15, 14, 'OrganicAnimatedBream', 'Azen demonstrating a clean Marth combo', '', 0),
(16, 20, 'ClumsyCompetentAidi', 'Axe demonstrating a clean Pikachu combo by patiently waiting for Tai to stand up', '', 0),
(17, 23, 'SeriousOptimalCougar', 'One of Shiek''s most powerful combos is down throw -> forward air', '', 0),
(18, 12, 'GrippingVariableGnu', 'Luigi''s great movement allow you to quickly surprise your opponent with unexpected plays', '', 0),
(19, 9, 'UncommonIckyBangeltiger', 'Jigglypuff can be very offensive offstage, since 5 jumps allow for many recovery options', '', 0),
(20, 22, 'ColorfulDistinctAustralianshelduck', 'Darrel showing how to combo with Samus', '', 0),
(21, 24, 'UnpleasantRepulsiveAlbacoretuna', 'aMSa taking Westballz stock in 11 seconds with a disgusting combo', '', 0),
(22, 18, 'BelatedParallelAnnashummingbird', 'Armada demonstrating how to use a turnip to reduce PPMD''s recovery options', '', 0),
(24, 5, 'AlarmingConcreteHagfish', 'Bam demonstrating how to keep constant pressure on your opponent', '', 0),
(25, 2, 'RemorsefulYellowLangur', 'Hax demonstrating an efficient 0 to death', '', 0),
(26, 26, 'DeterminedBogusFerret', 'Cosmo demonstrates Zelda''s power', 'Jahan Sandhu', 0),
(27, 20, 'WindyAnotherAmericanpainthorse', 'If you cling the second dash of Pikachu''s Quick Attack (Up-B) with a move of equal priority, Pikachu performs a "Super W', 'https://www.', 0),
(28, 16, 'JovialDemandingBluebottle', 'M2K shows off G&W''s difficult to DI throws and followup', 'Jahan Sandhu', 0),
(29, 11, 'ArtisticAdorableAlaskanhusky', 'Link''s recovery is pretty good ', 'Jahan Sandhu', 0),
(30, 17, 'SlimyMedicalBoto', 'Mofo using the yoyo glitch on Hax', 'David Alligo', 0),
(31, 8, 'ChillyAptJaeger', 'Wobbles demonstrating the infinite grab technique known as "Wobbling" ', 'Smashwiki', 0),
(32, 6, 'SomberCarelessAppaloosa', 'Mango demonstrating the use of a Shine Grab', 'Mayday', 0),
(33, 23, 'AgreeableFlawedBlackmamba', 'Mew2King tech chasing a Fox with grabs and down throw + dash attack.', 'mkolpnji', 0),
(34, 25, 'FondPlayfulCarp', 'How to edgeguard as Young Link', '', 0),
(35, 20, 'SpanishPastelCock', 'Axe using the multiple hitboxes of Pikachu''s Uair to gimp Westballz', 'Kings of Cal', 0),
(36, 2, 'unluckyhardgnu', 'NMW showing the effectiveness of instant uair ', 'Nicholas M. ', 0),
(37, 7, 'TalkativeJovialGalah', 'Great example of how to use Ganon''s Dair by Bizzarroflame', '', 0),
(38, 4, 'FamiliarAdvancedAcaciarat', 'MMG | Shroomed demonstrates Dr. Mario''s gimping abilities with back air and cape', '', 0),
(39, 19, 'SaltyEnergeticBadger', 'KoreanDJ showing how Pichu can secure quick kills near ledges', 'Dazwa', 0),
(41, 17, 'FoolishSlushyFawn', 'Ness''s double jump cancel allows him to perform extremely low aerials ', 'Shuffle V (H', 0),
(42, 13, 'LeanDifferentDorado', 'Mango''s (Scorpion Master) 0% to death combo with Mario', 'Mayday', 0),
(43, 3, 'CluelessWastefulIaerismetalmark', 'Green Ranger shows us how brutal DK''s combo game can be. ', 'Beanwolf, MO', 0),
(44, 22, 'WelcomeAgileBluetickcoonhound', 'Power Missile Edge Guarding with Samus ', 'Mayday', 0),
(45, 25, 'MealyHatefulArmadillo', 'Axe tethers to the pillar underneath Pokemon Stadium and successfully recovers ', '', 0),
(46, 21, 'ConcreteFamiliarGlowworm', 'An interesting combo by Mew2King', 'CEO 2014', 0),
(47, 23, 'TightBarrenGnu', 'Mew2King demonstrating an insane Sheik combo on EG | PPMD at EVO2k14', '', 0),
(48, 12, 'SameOffbeatBushbaby', 'With Luigi''s wavedash distances and his powerful Up B he can get very hard punishes upon reading techrolls ', '', 0),
(49, 1, 'WelldocumentedShoddyBufeo', 'Jab 1', 'Stratocaster', 1),
(50, 1, 'HardThreadbareHarpseal', 'Jab 2', 'Stratocaster', 1),
(51, 1, 'WildCheapAntarcticgiantpetrel', 'Low F Tilt', 'Stratocaster', 1),
(52, 1, 'JitteryHeavenlyAmericanriverotter', 'High F Tilt', 'Stratocaster', 1),
(53, 1, 'ElasticMedicalAmazonparrot', 'F Tilt', 'Stratocaster', 1),
(54, 1, 'HardCrazyIndianjackal', 'U Tilt', 'Stratocaster', 1),
(55, 1, 'VagueDamagedHomalocephale', 'U Smash', 'Stratocaster', 1),
(56, 1, 'HairyGiganticFrigatebird', 'D Tilt', 'Stratocaster', 1),
(57, 1, 'OilyWelloffAmericancrow', 'Dash Attack', 'Stratocaster', 1),
(58, 1, 'YearlyHonorableArchaeocete', 'U Air', 'Stratocaster', 1),
(59, 1, 'LinearNervousApatosaur', 'N Air', 'Stratocaster', 1),
(60, 1, 'EverlastingGenerousAustrianpinscher', 'F Smash', 'Stratocaster', 1),
(61, 1, 'DistantShadyCopperhead', 'D Air', 'Stratocaster', 1),
(62, 1, 'CluelessNastyBeardeddragon', 'Run Grab', 'Stratocaster', 1),
(63, 1, 'KindheartedUnderstatedAtlasmoth', 'Spot Dodge', 'Stratocaster', 1),
(64, 1, 'WarlikeBowedHerald', 'D Smash', 'Stratocaster', 1),
(65, 1, 'UnderstatedTenseHare', 'B Air', 'Stratocaster', 1),
(66, 1, 'ElaborateMaleAustraliankestrel', 'Down B from ground', 'Stratocaster', 1),
(67, 1, 'SmoggyBriefHyracotherium', 'Up B from air', 'Stratocaster', 1),
(68, 1, 'IlliterateMadDassierat', 'Standing Grab', 'Stratocaster', 1),
(69, 1, 'DangerousPessimisticAmericanredsquirrel', 'Up B from ground', 'Stratocaster', 1),
(70, 1, 'CourteousWarmFairybluebird', 'Down B from air', 'Stratocaster', 1),
(71, 1, 'ValidHatefulIraniangroundjay', 'Forward B', 'Stratocaster', 1),
(72, 1, 'OddTiredIvorybackedwoodswallow', 'F Air', 'Stratocaster', 1),
(73, 1, 'FarflungDeliriousChipmunk', 'Air Dodge', 'Stratocaster', 1),
(74, 1, 'DamagedFlippantHanumanmonkey', 'Roll', 'Stratocaster', 1),
(75, 2, 'WarlikeImperfectAsiaticgreaterfreshwaterclam', 'Jab 3', 'Stratocaster', 1),
(76, 2, 'SingleOddHare', 'F Air', 'Stratocaster', 1),
(77, 2, 'ThinSparklingAmazontreeboa', 'High F Tilt', 'Stratocaster', 1),
(78, 2, 'MediumPoliticalHarrier', 'F Tilt', 'Stratocaster', 1),
(79, 3, 'ShorttermAppropriateBlackrussianterrier', 'Jab 1', 'Stratocaster', 1),
(80, 3, 'BaggyNearDragonfly', 'Jab 2', 'Stratocaster', 1),
(81, 3, 'ClumsyTatteredBee', 'High F Tilt', 'Stratocaster', 1),
(82, 3, 'SpotlessRewardingJapanesebeetle', 'U Smash', 'Stratocaster', 1),
(83, 3, 'AptBetterDalmatian', 'B Air', 'Stratocaster', 1),
(84, 3, 'ThinIckyGrackle', 'Neutral B', 'Stratocaster', 1),
(85, 3, 'ComplexRevolvingBantamrooster', 'Up B from ground', 'Stratocaster', 1),
(86, 3, 'ObedientAnimatedGuillemot', 'Up B from air', 'Stratocaster', 1),
(87, 4, 'ClassicRealAfricanclawedfrog', 'Jab 1', 'Stratocaster', 1),
(88, 4, 'BetterLiquidAfricanaugurbuzzard', 'Jab 2', 'Stratocaster', 1),
(89, 4, 'RigidExcellentAdamsstaghornedbeetle', 'Jab 3', 'Stratocaster', 1),
(90, 4, 'CreativeAshamedHoiho', 'F Tilt', 'Stratocaster', 1),
(91, 4, 'RepentantCriminalGardensnake', 'Low F Tilt', 'Stratocaster', 1),
(92, 4, 'ThirdBiodegradableIvorybackedwoodswallow', 'High F Tilt', 'Stratocaster', 1),
(93, 4, 'ComplexFrequentArcticseal', 'D Tilt', 'Stratocaster', 1),
(94, 4, 'LightImpureHoneycreeper', 'F Air', 'Stratocaster', 1),
(95, 5, 'WastefulEducatedKilldeer', 'Jab', 'Stratocaster', 1),
(96, 5, 'DeliriousSleepyDamselfly', 'Jab 2', 'Stratocaster', 1),
(97, 5, 'RealSeveralCommabutterfly', 'Jab 3', 'Stratocaster', 1),
(98, 5, 'MasculineJollyGlobefish', 'Dash Attack', 'Stratocaster', 1),
(99, 5, 'UnluckyPhysicalAruanas', 'F Tilt', 'Stratocaster', 1),
(100, 5, 'CompetentGenuineKitty', 'High F Tilt', 'Stratocaster', 1),
(101, 5, 'FabulousGracefulInexpectatumpleco', 'U Tilt', 'Stratocaster', 1),
(102, 5, 'SardonicUnevenIndigowingedparrot', 'U Air', 'Stratocaster', 1),
(103, 5, 'OrderlyNecessaryHorsemouse', 'Down Air', 'Stratocaster', 1),
(104, 5, 'NaturalEsteemedIndianhare', 'Neutral B', 'Stratocaster', 1),
(105, 6, 'YearlyEdibleHarpseal', 'Jab', 'Stratocaster', 1),
(106, 6, 'FirmForsakenAngwantibo', 'Jab 2', 'Stratocaster', 1),
(107, 6, 'SpotlessSameArmadillo', 'Jab 3', 'Stratocaster', 1),
(108, 6, 'SkinnyGrimyDeviltasmanian', 'High F Tilt', 'Stratocaster', 1),
(109, 6, 'PaltryCoarseFowl', 'Low F Tilt', 'Stratocaster', 1),
(110, 6, 'ZigzagSlipperyKoodoo', 'F Tilt', 'Stratocaster', 1),
(111, 6, 'AllTeemingBarnowl', 'D Tilt', 'Stratocaster', 1),
(112, 6, 'MenacingEquatorialHydra', 'U Tilt', 'Stratocaster', 1),
(113, 6, 'BackDistortedAoudad', 'F Smash', 'Stratocaster', 1),
(114, 6, 'PleasantAdventurousKissingbug', 'U Smash', 'Stratocaster', 1),
(115, 6, 'AggressiveUnluckyDinosaur', 'N Air', 'Stratocaster', 1),
(116, 6, 'QualifiedCostlyIaerismetalmark', 'U Air', 'Stratocaster', 1),
(117, 6, 'FlatAdorableHorsechestnutleafminer', 'D Smash', 'Stratocaster', 1),
(118, 6, 'LoathsomeBeneficialAmericanbittern', 'Roll Back', 'Stratocaster', 1),
(119, 6, 'UnequaledHappygoluckyAsianporcupine', 'D Air', 'Stratocaster', 1),
(120, 6, 'EasygoingGraciousHorse', 'Neutral B', 'Stratocaster', 1),
(121, 6, 'RemorsefulGreatGallowaycow', 'Dash attack', 'Stratocaster', 1),
(122, 6, 'KaleidoscopicShabbyDalmatian', 'F Air', 'Stratocaster', 1),
(123, 6, 'ZealousLiquidDuck', 'B Air', 'Stratocaster', 1),
(124, 6, 'EntireMajorAtlasmoth', 'Blaster Air', 'Stratocaster', 1),
(125, 6, 'FamiliarBoilingDarklingbeetle', 'Air Dodge', 'Stratocaster', 1),
(126, 6, 'DeepBlondAngelfish', 'Running grab', 'Stratocaster', 1),
(127, 6, 'HalfFlamboyantElver', 'Forward B in air', 'Stratocaster', 1),
(128, 6, 'GrayHarmfulGallowaycow', 'Spot Dodge', 'Stratocaster', 1),
(129, 6, 'PrestigiousNextGuineapig', 'Roll Forward', 'Stratocaster', 1),
(130, 6, 'VibrantSevereKarakul', 'Grab', 'Stratocaster', 1),
(131, 6, 'DampSeparateDamselfly', 'Down B', 'Stratocaster', 1),
(132, 6, 'JaggedCreepyHuia', 'Up B', 'Stratocaster', 1),
(133, 7, 'AthleticCapitalChuckwalla', 'Jab', 'Stratocaster', 1),
(134, 7, 'DapperDeliriousCleanerwrasse', 'High F Tilt', 'Stratocaster', 1),
(135, 7, 'HiddenBigGangesdolphin', 'F Tilt', 'Stratocaster', 1),
(136, 7, 'DisguisedPointedHamster', 'Low F Tilt', 'Stratocaster', 1),
(137, 7, 'VastWarlikeAdmiralbutterfly', 'U Tilt', 'Stratocaster', 1),
(138, 7, 'AgitatedCrazyCub', 'Down Tilt', 'Stratocaster', 1),
(139, 7, 'AppropriateCleanJellyfish', 'High F Smash', 'Stratocaster', 1),
(140, 7, 'LazyIllAsianlion', 'B Air', 'Stratocaster', 1),
(141, 7, 'DismalDrearyBobwhite', 'D Air', 'Stratocaster', 1),
(142, 7, 'TintedWelcomeBlueshark', 'D Smash', 'Stratocaster', 1),
(143, 7, 'EnviousBogusDodo', 'Neutral B', 'Stratocaster', 1),
(144, 8, 'PoshLameHogget', 'Jab', 'Stratocaster', 1),
(145, 8, 'BlandVastIndianabat', 'Roll Back', 'Stratocaster', 1),
(146, 8, 'CalculatingSlightBallpython', 'D Tilt', 'Stratocaster', 1),
(147, 8, 'FrankHeartyGrunion', 'Running Grab', 'Stratocaster', 1),
(148, 8, 'YellowFavoriteBlacknorwegianelkhound', 'Dash Attack', 'Stratocaster', 1),
(149, 8, 'ChiefPlainBrontosaurus', 'U Tilt', 'Stratocaster', 1),
(150, 8, 'KindFailingCockatiel', 'Jab 2', 'Stratocaster', 1),
(151, 8, 'WholeShockingDolphin', 'Low F Tilt', 'Stratocaster', 1),
(152, 8, 'WellmadeDifferentFluke', 'Down B', 'Stratocaster', 1),
(153, 8, 'SpeedyTenseGodwit', 'F Smash', 'Stratocaster', 1),
(154, 8, 'AridQuestionableCaecilian', 'N Air', 'Stratocaster', 1),
(155, 8, 'EagerUnsteadyGoral', 'D Smash', 'Stratocaster', 1),
(156, 8, 'BadBossyBass', 'U Smash', 'Stratocaster', 1),
(157, 8, 'EsteemedFatIndusriverdolphin', 'B Air', 'Stratocaster', 1),
(158, 8, 'VerifiableShrillAustralianshelduck', 'Neutral B', 'Stratocaster', 1),
(159, 8, 'WatchfulAntiqueIchneumonfly', 'Roll Forward', 'Stratocaster', 1),
(160, 8, 'TallShortGalapagoshawk', 'F Air', 'Stratocaster', 1),
(161, 8, 'LightheartedAbsoluteAnemone', 'High F Tilt', 'Stratocaster', 1),
(162, 8, 'HatefulHomelyDolphin', 'Forward B', 'Stratocaster', 1),
(163, 8, 'DisloyalDistortedEasternglasslizard', 'D Air', 'Stratocaster', 1),
(164, 8, 'DesertedAcidicFattaileddunnart', 'Spot Dodge', 'Stratocaster', 1),
(165, 8, 'FalseMemorableGrackle', 'U Air', 'Stratocaster', 1),
(166, 8, 'TautLoneGrayfox', 'Up B', 'Stratocaster', 1),
(167, 8, 'IdioticIdolizedErin', 'Air Dodge', 'Stratocaster', 1),
(168, 9, 'FineUnknownAffenpinscher', 'Jab 1', 'Stratocaster', 1),
(169, 9, 'SandyMeekEuropeanfiresalamander', 'Jab 2', 'Stratocaster', 1),
(170, 9, 'ImpossibleDarkAntelope', 'F Tilt', 'Stratocaster', 1),
(171, 9, 'GenuineWaterloggedIridescentshark', 'High F Tilt', 'Stratocaster', 1),
(172, 9, 'RewardingDisguisedAztecant', 'Low F Tilt', 'Stratocaster', 1),
(173, 9, 'SelfreliantFakeCero', 'D Tilt', 'Stratocaster', 1),
(174, 9, 'PaleWarmArmyant', 'U Tilt', 'Stratocaster', 1),
(175, 9, 'ShortLazyHammerheadshark', 'B Air', 'Stratocaster', 1),
(176, 9, 'WideeyedAgonizingGemsbuck', 'Down B', 'Stratocaster', 1),
(177, 10, 'QuarrelsomeOffbeatDormouse', 'Jab 1', 'Stratocaster', 1),
(178, 10, 'DenseLightheartedHypacrosaurus', 'Jab 2', 'Stratocaster', 1),
(179, 10, 'FreshKaleidoscopicAnole', 'Jab 3', 'Stratocaster', 1),
(180, 10, 'FalseWigglyElephant', 'Forward B in air', 'Stratocaster', 1),
(181, 11, 'NeglectedWiltedAzurevasesponge', 'Jab 1', 'Stratocaster', 1),
(182, 11, 'ChubbyMassiveBug', 'F Tilt', 'Stratocaster', 1),
(183, 11, 'CavernousTornFlamingo', 'D Tilt', 'Stratocaster', 1),
(184, 11, 'NaturalColossalAntipodesgreenparakeet', 'N Air', 'Stratocaster', 1),
(185, 11, 'TangibleAccurateCur', 'Dash attack', 'Stratocaster', 1),
(186, 12, 'EnragedBasicJaguarundi', 'Jab 1', 'Stratocaster', 1),
(187, 12, 'IllustriousReliableAmbushbug', 'Jab 2', 'Stratocaster', 1),
(188, 12, 'AmbitiousPitifulCockerspaniel', 'High F Tilt', 'Stratocaster', 1),
(189, 12, 'HatefulTestyHog', 'Jab 3', 'Stratocaster', 1),
(190, 12, 'EvergreenFragrantCorydorascatfish', 'F Tilt', 'Stratocaster', 1),
(191, 12, 'AnotherDesertedJabiru', 'Low F Tilt', 'Stratocaster', 1),
(192, 12, 'SerpentineSecondHochstettersfrog', 'N Air', 'Stratocaster', 1),
(193, 13, 'MistyHilariousArrowana', 'Jab 1', 'Stratocaster', 1),
(194, 13, 'MenacingClumsyCockerspaniel', 'Jab 2', 'Stratocaster', 1),
(195, 13, 'SecretEssentialHanumanmonkey', 'Jab 3', 'Stratocaster', 1),
(196, 13, 'UnconsciousTediousHagfish', 'High F Tilt', 'Stratocaster', 1),
(197, 13, 'PeriodicTanChafer', 'F Tilt', 'Stratocaster', 1),
(198, 13, 'FaithfulMeatyCrustacean', 'Low F Tilt', 'Stratocaster', 1),
(199, 13, 'DependentInsecureBug', 'D Tilt', 'Stratocaster', 1),
(200, 13, 'RepentantPerfumedBobwhite', 'U Tilt', 'Stratocaster', 1),
(201, 13, 'ShallowNecessaryChinesecrocodilelizard', 'High F Smash', 'Stratocaster', 1),
(202, 13, 'BoringGoldenGrosbeak', 'U Smash', 'Stratocaster', 1),
(203, 13, 'UnconsciousElectricBlacklemur', 'Forward B', 'Stratocaster', 1),
(204, 13, 'NextDimAmberpenshell', 'Dash attack', 'Stratocaster', 1),
(205, 14, 'ValuableBlackChuckwalla', 'Jab', 'Stratocaster', 1),
(206, 14, 'DamagedBlondFirecrest', 'Jab 2', 'Stratocaster', 1),
(207, 14, 'BowedAmbitiousGuineapig', 'F Tilt', 'Stratocaster', 1),
(208, 14, 'LikablePlayfulEft', 'D Tilt', 'Stratocaster', 1),
(209, 14, 'CapitalIncompatibleAlaskankleekai', 'U Tilt', 'Stratocaster', 1),
(210, 14, 'GrizzledChillyFlyinglemur', 'Dash Attack', 'Stratocaster', 1),
(211, 14, 'WelcomeTatteredBarasingha', 'F Smash', 'Stratocaster', 1),
(212, 14, 'TepidAjarBaiji', 'U Smash', 'Stratocaster', 1),
(213, 14, 'FearfulCorruptHoki', 'D Smash', 'Stratocaster', 1),
(214, 14, 'SpitefulLivelyIntermediateegret', 'Nair', 'Stratocaster', 1),
(215, 14, 'FreshThinAntbear', 'Fair', 'Stratocaster', 1),
(216, 14, 'BarrenShrillFalcon', 'Down B', 'Stratocaster', 1),
(217, 14, 'ImportantTintedApatosaur', 'Forward B 3 (low)', 'Stratocaster', 1),
(218, 14, 'HeartyFlamboyantGuillemot', 'Neutral B', 'Stratocaster', 1),
(219, 15, 'FaithfulDisfiguredFanworms', 'Jab 1', 'Stratocaster', 1),
(220, 15, 'PopularAliveGypsymoth', 'Jab 2', 'Stratocaster', 1),
(221, 15, 'BlondLightheartedFugu', 'F Tilt', 'Stratocaster', 1),
(222, 15, 'GranularTeemingAnteater', 'D Tilt', 'Stratocaster', 1),
(223, 15, 'SatisfiedDismalGallinule', 'B Air', 'Stratocaster', 1),
(224, 15, 'GoodBlushingFrigatebird', 'Dash Attack', 'Stratocaster', 1),
(225, 15, 'DifficultWindingIrishterrier', 'D Smash', 'Stratocaster', 1),
(226, 15, 'NeatOrganicBichonfrise', 'U Smash', 'Stratocaster', 1),
(227, 15, 'GlossySilkyFattaileddunnart', 'N Air', 'Stratocaster', 1),
(228, 15, 'ImpartialCooperativeBudgie', 'F Air', 'Stratocaster', 1),
(229, 15, 'ShadowyFavorableDogwoodtwigborer', 'F Smash', 'Stratocaster', 1),
(230, 16, 'AngelicFlashyAfricanparadiseflycatcher', 'N Air', 'Stratocaster', 1),
(231, 16, 'JaggedAliveJavalina', 'F Air', 'Stratocaster', 1),
(232, 16, 'FeminineThoseDragonfly', 'Down B', 'Stratocaster', 1),
(233, 16, 'ExcitableShimmeringCoelacanth', 'Down B (after 3 charges)', 'Stratocaster', 1),
(234, 16, 'CraftySmoothClingfish', 'Up B', 'Stratocaster', 1),
(235, 17, 'SharpCarelessAfricanpiedkingfisher', 'Jab 1', 'Stratocaster', 1),
(236, 17, 'PortlySlightAmericanavocet', 'High F Tilt', 'Stratocaster', 1),
(237, 17, 'SlimySaneGartersnake', 'F Smash', 'Stratocaster', 1),
(238, 17, 'MeaslySecretEyra', 'Jab 3', 'Stratocaster', 1),
(239, 17, 'AssuredAmazingAlpinegoat', 'Jab 2', 'Stratocaster', 1),
(240, 17, 'RawAggressiveCuscus', 'Low F Tilt', 'Stratocaster', 1),
(241, 17, 'VigorousVioletCub', 'U Tilt', 'Stratocaster', 1),
(242, 18, 'BoldUntriedBlackwidowspider', 'F Tilt', 'Stratocaster', 1),
(243, 18, 'FarawayMammothCockerspaniel', 'D Smash', 'Stratocaster', 1),
(244, 18, 'GentleImpartialFoal', 'Running Grab', 'Stratocaster', 1),
(245, 18, 'InformalBrightBantamrooster', 'D Air', 'Stratocaster', 1),
(246, 18, 'GrizzledCooperativeGemsbok', 'B Air', 'Stratocaster', 1),
(247, 18, 'DishonestGranularAlpinegoat', 'F Air', 'Stratocaster', 1),
(248, 18, 'DapperOrdinaryBlackbear', 'Turnip Smash Throw', 'Stratocaster', 1),
(249, 18, 'LittlePinkEmperorshrimp', 'Dash Attack', 'Stratocaster', 1),
(250, 18, 'QuarrelsomeAggressiveIslandcanary', 'F Smash Golf Club', 'Stratocaster', 1),
(251, 18, 'SpecificShorttermBurro', 'F Smash Racket', 'Stratocaster', 1),
(252, 18, 'MilkyCautiousElectriceel', 'U Tilt', 'Stratocaster', 1),
(253, 18, 'ResponsibleImaginaryGoa', 'F Smash Frying Pan', 'Stratocaster', 1),
(254, 18, 'VictoriousHideousFlyingfish', 'U Smash', 'Stratocaster', 1),
(255, 19, 'ZestyOrangeFattaileddunnart', 'U Tilt', 'Stratocaster', 1),
(256, 19, 'ExemplaryDecimalFawn', 'Spot Dodge', 'Stratocaster', 1),
(257, 20, 'SatisfiedLameEmeraldtreeskink', 'High F Tilt', 'Stratocaster', 1),
(258, 20, 'BriefWearyBaleenwhale', 'Jab', 'Stratocaster', 1),
(259, 20, 'ExemplaryGiantDesertpupfish', 'Low F Tilt', 'Stratocaster', 1),
(260, 20, 'SoulfulBarrenGonolek', 'U Tilt', 'Stratocaster', 1),
(261, 20, 'IlliterateWhiteHogget', 'D Tilt', 'Stratocaster', 1),
(262, 20, 'EntireVictoriousHyrax', 'D Smash', 'Stratocaster', 1),
(263, 20, 'MemorableFrayedDunlin', 'Down B', 'Stratocaster', 1),
(264, 21, 'ClassicMagnificentKakapo', 'Dash Attack', 'Stratocaster', 1),
(265, 21, 'GargantuanGleamingHairstreakbutterfly', 'N Air', 'Stratocaster', 1),
(266, 21, 'AngryLavishFlyingfish', 'Spot Dodge', 'Stratocaster', 1),
(267, 21, 'HarmoniousWildBoutu', 'F Air', 'Stratocaster', 1),
(268, 21, 'SpiffyEnlightenedIchneumonfly', 'D Air', 'Stratocaster', 1),
(269, 21, 'OffensiveViciousCob', 'D Tilt', 'Stratocaster', 1),
(270, 21, 'ImperturbablePlushGhostshrimp', 'U Smash', 'Stratocaster', 1),
(271, 21, 'GleamingTightGuppy', 'U Tilt', 'Stratocaster', 1),
(272, 21, 'ScratchyGratefulEagle', 'F Tilt', 'Stratocaster', 1),
(273, 21, 'LivelyGrimyIndri', 'B Air', 'Stratocaster', 1),
(274, 21, 'ScarceRichKingfisher', 'D Smash', 'Stratocaster', 1),
(275, 21, 'VioletClosedKid', 'Down B', 'Stratocaster', 1),
(276, 21, 'GlamorousBetterJenny', 'U Air', 'Stratocaster', 1),
(277, 21, 'PertinentPinkIndianabat', 'Jab', 'Stratocaster', 1),
(278, 21, 'GlitteringGaseousIbadanmalimbe', 'F Smash', 'Stratocaster', 1),
(279, 21, 'YoungLinearAmazondolphin', 'Neutral B', 'Stratocaster', 1),
(280, 21, 'AffectionateSeparateEarthworm', 'Up B', 'Stratocaster', 1),
(281, 22, 'DaringVacantBluetonguelizard', 'Jab 1', 'Stratocaster', 1),
(282, 22, 'WealthyDistantArgentineruddyduck', 'B Air', 'Stratocaster', 1),
(283, 22, 'FlamboyantGiganticHuia', 'Up B', 'Stratocaster', 1),
(284, 22, 'RashFantasticGecko', 'D Air', 'Stratocaster', 1),
(285, 23, 'ElegantVelvetyGreatargus', 'Jab 1', 'Stratocaster', 1),
(286, 23, 'LameGlaringAmericanrobin', 'Jab 3', 'Stratocaster', 1),
(287, 23, 'DeliciousCoordinatedGodwit', 'D Tilt', 'Stratocaster', 1),
(288, 23, 'ImpureHealthyCod', 'Jab 2', 'Stratocaster', 1),
(289, 23, 'LavishTanDotterel', 'F Tilt', 'Stratocaster', 1),
(290, 23, 'HappyOrneryHanumanmonkey', 'Dash Attack', 'Stratocaster', 1),
(291, 23, 'FlippantRequiredAfricanpiedkingfisher', 'N Air', 'Stratocaster', 1),
(292, 23, 'SecondBigheartedCrocodile', 'F Air', 'Stratocaster', 1),
(293, 23, 'HiddenFittingGrebe', 'Standing Grab', 'Stratocaster', 1),
(294, 23, 'SameFlippantAbyssiniangroundhornbill', 'Up B', 'Stratocaster', 1),
(295, 24, 'ShamefulNecessaryDobermanpinscher', 'Jab 1', 'Stratocaster', 1),
(296, 24, 'SolidShowyCoqui', 'U Tilt', 'Stratocaster', 1),
(297, 24, 'CorruptAmbitiousAiredaleterrier', 'F Tilt', 'Stratocaster', 1),
(298, 25, 'FittingZanyHagfish', 'Jab 2', 'Stratocaster', 1),
(299, 25, 'GrandInferiorHammerheadshark', 'Jab 3', 'Stratocaster', 1),
(300, 25, 'DishonestVapidCicada', 'U Air', 'Stratocaster', 1),
(301, 25, 'SingleImmediateGermanshepherd', 'Up B', 'Stratocaster', 1);

-- --------------------------------------------------------

--
-- Table structure for table `charinfo`
--

DROP TABLE IF EXISTS `charinfo`;
CREATE TABLE `charinfo` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `tierdata` int(11) DEFAULT NULL,
  `weight` varchar(11) NOT NULL,
  `fallspeed` varchar(11) NOT NULL,
  `guide` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charinfo`
--

INSERT INTO `charinfo` (`id`, `name`, `tierdata`, `weight`, `fallspeed`, `guide`) VALUES
(1, 'Bowser', 24, '1st', '12th-14th', 'Bowser is the heaviest character in the game, making him very tanky and hard to kill at low percents. His body is enormous though, making him prone to extended combos that usually would not work on any other character. Bowser has trouble dealing with any character with more range than him, or characters that can out-maneuver him.\n'),
(2, 'Captain Falcon', 7, '6th-7th', '2nd', 'Falcon is the fastest character in the game in terms of run speed. His speed allows him to be many places at once, and though most of his moves are slow on startup, he makes up for it with his unmatched speed. Falcon''s main combo finisher is the infamous knee (forward air) as it combos from many of his moves and kills at low percents.\n'),
(3, 'Donkey Kong', 17, '2nd', '4th-5th', 'Donkey Kong is a character that lacks reliable attacks with hit boxes in front of him. Instead his back air, which hits very far behind him, is his greatest asset in the spacing game. DK''s best strategy is to abuse his grab combos, as he can set up for multi-hit juggles against the majority of the cast. Additionally he has a very good horizontal recovery, but not a good vertical.\n'),
(4, 'Dr. Mario', 9, '8th-10th', '16th-18th', 'Dr. Mario is a compact powerhouse, packed with quick aerials and a solid ground game. Overall his range and recovery are weak, but they are made up with his powerful kill moves and ability to get quick kills using his back air and forward b (the cape).'),
(5, 'Falco', 2, '20th-21st', '1st', 'Falco is an aggressive character whose primary strategy is to pressure the opponent. Falco''s vertical mobility is possibly the best in the game. Additionally by using his ''short hop laser'', he can control space horizontally, opening up his opponents for high pressure combos.'),
(6, 'Fox', 1, '22nd', '3rd', 'Fox is easily the most agile character in the game. His speed and combo setups are optimized when paired with SHFFLing and proper use of the shine (down B). Fox is ranked #1 for a good reason, having one of the strongest up-smashes, unmatched speed and close range fighting, as well as the infamous shine. \n'),
(7, 'Ganondorf', 12, '4th', '10th', 'Ganondorf is a bulky and heavy powerhouse. Ganon often gets dominated because of his slow moves and giant body-- but his moves pack a punch. Ganondorf''s attacks kill most characters at low percents and is one of the hardest punishing mid-tiers in the game. Although he spends much of his time simply working for his openings, when he gets them they count.\n'),
(8, 'Ice Climbers', 8, '15th', '19th-21st', 'The Ice Climbers is a character in which the player controls Popo (blue IC depending on costume color), while Nana follows and mimics Popo''s inputs with a slight delay. The main strategy with Ice Climbers is abusing their grab combos, as they can kill off of most grabs. Strategies change constantly with IC''s based on if your Nana is present or not. \n'),
(9, 'Jigglypuff', 5, '24th-25th', '26th', 'Being the 2nd lightest character in the game, Jigglypuff is prone to dying at low percents. Although this is a disadvantage, her elusiveness in the air paired with some of the best aerial attacks in the game makes her a powerful character. Jigglypuff has 5 jumps and is able to float back on to the stage with ease, making recovery very simple. \n'),
(10, 'Kirby', 26, '23rd', '19th-21st', 'A shell of its former self in Smash 64, Kirby has almost no good qualities as a character. Besides the fact that Kirby has 5 jumps, his ground and aerial mobility are terrible.\n'),
(11, 'Link', 16, '6th-7th', '7th-9th', 'Link is a slower but more powerful version of Young Link. He does not have the speed, maneuverability, or projectile game that Young Link offers, but he makes up for it with his strong sword. Additionally, Link has one of the farthest reaching grapple recoveries, making him a unique character to edge-guard.\n'),
(12, 'Luigi', 13, '8th-10th', '19th-21st', 'Luigi has the longest wavedash range in the game because of his low traction. Luigi''s slow run and aerial speeds are made up for with his obscenely long wavedash. Luigi has one of the most unique recoveries in the game, as his up b only sends him vertically, and his forward b sends him horizontally. When using the two in combination, he has a very adequate recovery. \n'),
(13, 'Mario', 14, '8th-10th', '16th-18th', 'Mario is one of the most basic characters in the game. His strengths are similar to Dr. Mario''s in that he has a powerful ground game and is able to set up for edge-guard situations with most of his attacks. Mario''s recovery and range are also weak, but he makes up for it with his powerful ground game.\n'),
(14, 'Marth', 4, '16th', '6th', 'Marth has the most range of anyone in the game. Being one of the few characters that wields a sword, his hitboxes extend very far out, making his defense game great. Marth is a unique character in that his attacks have different hitboxes based on where you hit with the sword (hilt = weak hit, middle = regular hit, tip = strong hit). \n'),
(15, 'Mewtwo', 21, '17th-19th', '22nd-23rd', 'Mewtwo is a poorly designed character, having almost no kill moves and no neutral game. Mewtwo only has a few redeeming qualities, such as his amazing recovery and powerful grabs. It is very hard to combo with/against Mewtwo because of his lack of speed and floatiness.\n'),
(16, 'Mr. Game And Watch', 22, '24th-25th', '16th-18th', 'Although GaW is the last character to unlock, he lacks many of the core qualities that make a character good. A few of GaW''s aerials are non-L-cancellable, making him a pretty slow character. GaW''s ground game is generally bad, and has trouble killing when the opponent is not in combo percentage.'),
(17, 'Ness', 23, '11th', '15th', 'Ness is a character that has a few good pokes, but no reliable kill moves. Ness is a very limiting character on-stage and off-stage, as his ground game has short range and his combos often lack a finisher. As well as his bad on-stage, his recovery takes the longest to start up out of any character, and he is vulnerable for all of it. \n'),
(18, 'Peach', 6, '12th-14th', '22nd-23rd', 'Peach is one of the most unique floaty characters in the game because of her float mechanics. By using a technique called ''float cancelling'' Peach is able to suspend herself in mid air and move horizontally, using any aerial attack. Landing lag after float cancelling is reduced, making her have one of the fastest recovery times on attacks\n'),
(19, 'Pichu', 25, '26th', '12th-14th', 'Obviously Nintendo''s joke character in the cast. All electric attacks used by Pichu deal 1-3% to himself. Pichu is also the lightest character in the game, making him prone to dying at extremely low percents, sometimes even earlier than Jigglypuff. \n'),
(20, 'Pikachu', 10, '20th-21st', '12th-14th', 'Pikachu is pretty much the mid-tier Fox. They share many qualities such as quick combo game, ability to run around on the stage, powerful up smash, and linear recovery. Also like Fox, Pikachu is capable of getting kills at high percent with up smash, as well as low percent kills with up-air. Pikachu is a character that thrives in using quick and weak moves to rack up percent or set up for edge guard situations. \n'),
(21, 'Roy', 20, '17th-19th', '4th-5th', 'Roy is the weak version of Marth. Like Marth, his sword contains different hitboxes depending on where your opponent is hit (hilt = strong hit, middle = regular hit, tip = weak hit). Roy is EXTREMELY hard to hit during his up-b animation, but because of his fast falling speed and bad aerial mobility, his recovery is generally very bad.\n'),
(22, 'Samus', 11, '3rd', '24th-25th', 'Samus is a very linear character, as many of her hitboxes only extend out in straight lines. Although Samus is one of the slowest characters in the game, her defense and control of the pace in the match allow her to be a viable defensive character. Samus can control wide ranges of space by using missile cancelling-- and can control close range with her up-b and tilts.\n'),
(23, 'Sheik', 3, '12th-14th', '7th-9th', 'Sheik is one of the deadliest characters in the game. Although she does not have a ton of offensive options, she makes up for it with her defense and simple, yet highly effective combo game. Sheik''s main assets are her tilts, grab combos, and infamous forward-air\n'),
(24, 'Yoshi', 18, '5th', '11th', ' The most unique quality of Yoshi is his shield, which holds many properties that are unique to Yoshi-- such as its hitstun reduction, inability to jump out of shield, and parrying. Additionally, Yoshi does not have an up-b that helps his recovery. Instead this is balanced by his double jump reaching very high, as well as containing ''super armor'', which means that attacks will damage Yoshi, but the hitstun and knockback are lessened VERY greatly depending on percentage.'),
(25, 'Young Link', 15, '17th-19th', '7th-9th', 'Young Link is a fast character with three different projectiles. Typically his playstyle is very hit-and-run as his run and aerial speeds are both very fast. Young Link generally has weak attacks, but the fact that he can maintain such a high speed while throwing projectiles at your opponent makes him an interesting defensive character.\n'),
(26, 'Zelda', 19, '12th-14th', '24th-25th', 'Zelda is a very floaty character who generally does not have many reliable attacks, besides her back-air and forward-air. Both aerials require precision, as only the tip of the hitbox sends opponents flying far. Zelda has the farthest reaching up-b in the game easily, making it relatively difficult to edge guard her.\n');

-- --------------------------------------------------------

--
-- Table structure for table `chartech`
--

DROP TABLE IF EXISTS `chartech`;
CREATE TABLE `chartech` (
`id` int(11) NOT NULL,
  `charid` int(11) NOT NULL,
  `techid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chartech`
--

INSERT INTO `chartech` (`id`, `charid`, `techid`) VALUES
(1, 2, 1),
(4, 6, 2),
(5, 4, 1),
(6, 4, 21),
(7, 5, 22),
(8, 6, 22),
(10, 14, 1),
(11, 18, 24),
(12, 6, 25),
(13, 5, 25),
(15, 2, 26),
(17, 5, 27),
(18, 6, 27);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE `friends` (
`id` int(50) NOT NULL,
  `myid` int(50) NOT NULL,
  `friendid` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `myid`, `friendid`) VALUES
(8, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locals`
--

DROP TABLE IF EXISTS `locals`;
CREATE TABLE `locals` (
`id` int(1) NOT NULL,
  `region` int(1) DEFAULT NULL,
  `profileid` varchar(64) DEFAULT NULL,
  `name` varchar(44) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(11,7) DEFAULT NULL,
  `game` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locals`
--

INSERT INTO `locals` (`id`, `region`, `profileid`, `name`, `latitude`, `longitude`, `game`) VALUES
(2, 1, 'https://www.facebook.com/groups/269052529786948', 'East Coast', 37.9500000, -84.0000000, 2),
(3, 1, 'https://www.facebook.com/groups/134497873392355', 'East Coast', 37.9470848, -83.7225060, 1),
(4, 1, 'https://www.facebook.com/groups/430811007000487', 'Delaware', 39.1564159, -75.5134199, 0),
(5, 1, 'https://www.facebook.com/groups/DMVSSBM', 'Maryland / Virginia / DC', 37.0000000, -79.0145760, 2),
(6, 1, 'https://www.facebook.com/groups/mdvasmash', 'Maryland / Virginia / DC', 37.5000000, -77.0000000, 3),
(7, 1, 'https://www.facebook.com/groups/projectmdva', 'Maryland / Virginia / DC', 38.0000000, -76.5000000, 4),
(8, 1, 'https://www.facebook.com/groups/395469233833958', 'Maryland - College Park', 38.9875571, -76.9361836, 0),
(9, 1, 'https://www.facebook.com/groups/489536424485533', 'Massachusetts - Fall River', 41.6855955, -71.1019620, 4),
(10, 1, 'https://www.facebook.com/groups/167824956563375', 'New England', 42.2499739, -71.2378280, 2),
(11, 1, 'https://www.facebook.com/groups/356948471051413', 'New England', 42.2499739, -71.0000000, 3),
(12, 1, 'https://www.facebook.com/groups/262747973827544', 'New Jersey - Rutgers University', 40.4786710, -74.4317890, 2),
(13, 1, 'https://www.facebook.com/groups/156948507708078', 'New Jersey - South', 40.0583240, -74.4056610, 0),
(14, 1, 'https://www.facebook.com/groups/408295942538051', 'New Jersey - Central', 39.8297280, -74.9789590, 0),
(15, 1, 'https://www.facebook.com/groups/211900915585963', 'New Jersey / New York', 40.4636660, -74.4406130, 3),
(16, 1, 'https://www.facebook.com/groups/350071671730817', 'New Jersey / New York', 40.5305020, -74.3389890, 4),
(17, 1, 'https://www.facebook.com/groups/1386041018274455', 'New Jersey / New York', 40.6056120, -74.2236330, 5),
(18, 1, 'https://www.facebook.com/groups/2200028280', 'New York - Ithaca / Cornell', 42.4534490, -76.4735030, 0),
(19, 1, 'https://www.facebook.com/groups/224824577625283', 'New York - Long Island', 40.7891420, -73.1349600, 2),
(20, 1, 'https://www.facebook.com/groups/364349146941224', 'New York - Long Island', 40.7763820, -73.2843020, 3),
(21, 1, 'https://www.facebook.com/groups/smashingatempire', 'New York - Long Island', 40.7139560, -73.6358640, 0),
(22, 1, 'https://www.facebook.com/groups/279511975480441', 'New York - NYC', 40.7127840, -74.0059410, 2),
(23, 1, 'https://www.facebook.com/groups/310533642332998', 'New York - NYU', 40.7272480, -73.9954510, 0),
(24, 1, 'https://www.facebook.com/groups/385718644870094', 'New York - Schenectady', 42.8142430, -73.9395690, 0),
(25, 1, 'https://www.facebook.com/groups/639367622752544', 'New York - Syracuse', 43.0481220, -76.1474240, 0),
(26, 1, 'https://www.facebook.com/groups/46230006858', 'New York - Upstate / RIT', 40.7127840, -74.0059410, 0),
(27, 1, 'https://www.facebook.com/groups/centralPennSSB', 'Pennsylvania - Central', 41.2967480, -76.3729960, 0),
(28, 1, 'https://www.facebook.com/groups/108078502591099', 'Pennsylvania - Philadelphia', 39.9523350, -75.1637890, 2),
(29, 1, 'https://www.facebook.com/groups/NEOHBURGH', 'Pennsylvania - Pittsburgh / Northeast Ohio', 40.3565090, -79.9192700, 2),
(30, 1, 'https://www.facebook.com/groups/182267851790715', 'Southern Virginia', 37.0592750, -81.5377010, 2),
(31, 1, 'https://www.facebook.com/groups/452275474823750', 'Charlottesville, Virginia', 38.0293060, -78.4766780, 2),
(32, 1, 'https://www.facebook.com/groups/596361677123724', 'Charlottesville, Virginia', 38.0283520, -78.4880450, 4),
(33, 1, 'https://www.facebook.com/groups/182267851790715', 'Norfolk/Virginia Beach', 36.8823350, -76.2999060, 0),
(34, 1, 'https://www.facebook.com/groups/1386540904893386', 'Southwest Virginia', 37.4315730, -78.6568940, 0),
(35, 1, 'https://www.facebook.com/groups/204825246197520', 'Virginia - VCU', 37.5446450, -77.4479900, 0),
(36, 1, 'https://www.facebook.com/groups/408805205918060', 'West Virginia', 38.5976260, -80.4549030, 0),
(37, 2, 'https://www.facebook.com/groups/269052529786948/', 'East Coast', 36.0313320, -72.6855470, 2),
(38, 2, 'https://www.facebook.com/groups/134497873392355/', 'East Coast', 34.4522180, -73.0371090, 1),
(39, 2, 'https://www.facebook.com/groups/336726723087447/', 'Atlantic South General', 41.4016300, -94.9908060, 4),
(40, 2, 'https://www.facebook.com/AlabamaSmashLeague', 'Alabama', 32.3182310, -86.9022980, 0),
(41, 2, 'https://www.facebook.com/groups/285926091523241/', 'Arkansas', 35.2010500, -91.8318330, 0),
(42, 2, 'https://www.facebook.com/groups/304489126305123/', 'Florida', 27.6648270, -81.5157540, 0),
(43, 2, 'https://www.facebook.com/groups/138478079554384/', 'Florida - Central Florida', 27.7127100, -81.5405270, 2),
(44, 2, 'https://www.facebook.com/groups/456656917699611/', 'Florida - Gainesville', 29.6516340, -82.3248260, 3),
(45, 2, 'https://www.facebook.com/groups/247383341960804/', 'Florida - Jacksonville', 30.3321840, -81.6556510, 0),
(46, 2, 'https://www.facebook.com/groups/134182206752487/', 'Florida - Pensacola', 30.4213090, -87.2169150, 0),
(47, 2, 'https://www.facebook.com/groups/1440737036160195/', 'Florida - South Florida 1', 27.4602270, -82.6676730, 0),
(48, 2, 'https://www.facebook.com/pages/Smash-In-Progress/706760066011314', 'Florida - South Florida 2', 27.4504470, -82.5773760, 0),
(49, 2, 'https://www.facebook.com/VersusGamingCenter', 'Florida - South Florida 3', 27.9064690, -81.5740650, 0),
(50, 2, 'https://www.facebook.com/groups/159234920826366/', 'Florida - South Florida', 27.6648270, -81.5157540, 2),
(51, 2, 'https://www.facebook.com/groups/193697467326040/', 'Florida - South West Florida', 27.6656460, -81.5116450, 0),
(52, 2, 'https://www.facebook.com/groups/357576900984630/', 'Florida - Tallahassee', 30.4382560, -84.2807330, 0),
(53, 2, 'https://www.facebook.com/groups/483669795064224/', 'Florida - Tampa Bay', 27.7028710, -82.5834950, 2),
(54, 2, 'https://www.facebook.com/groups/TampaSmash/', 'Florida - Tampa Bay', 27.8366470, -82.5032040, 3),
(55, 2, 'https://www.facebook.com/groups/125733910821001/', 'Florida - University of Florida 2', 25.7885490, -80.3796260, 0),
(56, 2, 'https://www.facebook.com/groups/209198555783942/', 'Georgia', 32.1656220, -82.9000750, 2),
(57, 2, 'https://www.facebook.com/groups/179381782079932/', 'Georgia', 30.3229140, -93.1854220, 3),
(58, 2, 'https://www.facebook.com/groups/1392554534335836/', 'Georgia', 33.1947030, -84.2845670, 4),
(59, 2, 'https://www.facebook.com/groups/133034603414177/', 'Louisiana', 30.9842980, -91.9623330, 0),
(60, 2, 'https://www.facebook.com/groups/352469348160468/', 'Louisiana', 30.0827880, -92.6747630, 2),
(61, 2, 'https://www.facebook.com/LSUSmash', 'Louisiana - LSU', 30.4132580, -91.1800020, 0),
(62, 2, 'https://www.facebook.com/groups/512742878766152/', 'Louisiana - New Orleans', 29.9510660, -90.0715320, 2),
(63, 2, 'https://www.facebook.com/groups/276445842390059/', 'North Carolina', 35.7595730, -79.0193000, 2),
(64, 2, 'https://www.facebook.com/groups/164944006930835/', 'North Carolina', 35.1934210, -77.0334180, 3),
(65, 2, 'https://www.facebook.com/groups/290202017736245/', 'South Carolina', 33.8360810, -81.1637250, 2),
(66, 2, 'https://www.facebook.com/groups/MiddleTNProjectM/', 'Tennessee', 35.5174910, -86.5804470, 2),
(67, 3, 'https://www.facebook.com/groups/mwsmash/', 'Midwest General 1', 39.9097360, -93.5156250, 0),
(68, 3, 'https://www.facebook.com/groups/257285400975347/', 'Midwest General 2', 39.9013090, -92.5872800, 0),
(69, 3, 'https://www.facebook.com/groups/380188912048431/', 'Illinois - Champaign', 40.1164200, -88.2433830, 0),
(70, 3, 'https://www.facebook.com/groups/126804630735563/', 'Illinois - Chicago', 41.8781140, -87.6297980, 2),
(71, 3, 'https://www.facebook.com/groups/1399023747004983/', 'Illinois- Springfield', 39.7817210, -89.6501480, 0),
(72, 3, 'https://www.facebook.com/groups/129015017194089/', 'Illinois South, Kentucky West, Missouri East', 37.5097260, -88.7695310, 0),
(73, 3, 'https://www.facebook.com/groups/171453176258373/', 'Indiana - Carmel', 39.9783710, -86.1180430, 2),
(74, 3, 'https://www.facebook.com/groups/611364705589048/', 'Indiana - Indianapolis', 39.7684030, -86.1580680, 0),
(75, 3, 'https://www.facebook.com/groups/247658661961971/', 'Indiana - Fort Wayne', 41.0792730, -85.1393510, 0),
(76, 3, 'https://www.facebook.com/groups/PurdueSSBO/', 'Indiana - Purdue', 40.4237050, -86.9211950, 0),
(77, 3, 'https://www.facebook.com/groups/382901415171283', 'Indiana - IU Bloomington', 39.1691360, -86.5149050, 0),
(78, 3, 'https://www.facebook.com/groups/1421302704757453/', 'Iowa', 41.8780030, -93.0977020, 0),
(79, 3, 'https://www.facebook.com/groups/ksssb', 'Kansas', 39.0119020, -98.4842460, 0),
(80, 3, 'https://www.facebook.com/groups/734815379867767/', 'Kansas City', 39.0997270, -94.5785670, 4),
(81, 3, 'https://www.facebook.com/groups/271575972914386/', 'Kentucky/Ohio/Indiana', 38.7883450, -84.5507810, 0),
(82, 3, 'https://www.facebook.com/groups/umsmash/', 'Michigan', 42.2808260, -83.7430380, 2),
(83, 3, 'https://www.facebook.com/groups/406757282795167/', 'Michigan', 42.3443350, -83.8201900, 3),
(84, 3, 'https://www.facebook.com/groups/WestMISmash/', 'Michigan - West', 43.8028190, -86.0449220, 0),
(85, 3, 'https://www.facebook.com/groups/258765404305007/', 'Michigan', 42.3849230, -83.5702510, 4),
(86, 3, 'https://www.facebook.com/groups/540421182680998/', 'Minnesota', 46.7295530, -94.6859000, 0),
(87, 3, 'https://www.facebook.com/groups/176623759034371/', 'Minnesota - UMM', 45.5892070, -95.9033780, 0),
(88, 3, 'https://www.facebook.com/groups/323513011041633/', 'Missouri - St. Louis', 38.6270030, -90.1994040, 2),
(89, 3, 'https://www.facebook.com/groups/414566191955018/', 'Missouri - St. Louis', 38.6218030, -90.2365320, 3),
(90, 3, 'https://www.facebook.com/groups/338517279512871/', 'Missouri - Springfield', 37.2089570, -93.2922990, NULL),
(91, 3, 'https://www.facebook.com/groups/199063406858260/', 'Nebraska', 41.4925370, -99.9018130, 2),
(92, 3, 'https://www.facebook.com/groups/105843859488387/', 'Ohio', 40.4172870, -82.9071230, 0),
(93, 3, 'https://www.facebook.com/groups/677137102305269/', 'Ohio - Cincinnati', 39.1031180, -84.5120200, 0),
(94, 3, 'https://www.facebook.com/groups/133757653398073/', 'Ohio - Columbus', 39.9611760, -82.9987940, 2),
(95, 3, 'https://www.facebook.com/groups/302630169803625/', 'Ohio - Columbus', 39.9596880, -83.0074600, 3),
(96, 3, 'https://www.facebook.com/groups/1396649643918505/', 'Ohio - Northwest', 40.8138090, -83.8256840, 2),
(97, 3, 'https://www.facebook.com/groups/470817746279509/', 'Western PA / Northeast OH', 41.2447720, -80.4858400, 0),
(98, 3, 'https://www.facebook.com/groups/466886533331712/', 'South Dakota', 43.9695150, -99.9018130, 0),
(99, 3, 'https://www.facebook.com/groups/411431608918302/', 'Wisconsin', 43.0327610, -87.9071040, 0),
(100, 4, 'https://www.facebook.com/groups/190510254334113/', 'Arizona', 33.4406090, -112.0935060, 2),
(101, 4, 'https://www.facebook.com/groups/252928971439205/', 'Arizona', 32.1384090, -110.9179690, 3),
(102, 4, 'https://www.facebook.com/groups/248367238515394/', 'Colorado', 39.7325380, -104.9688720, 0),
(103, 4, 'https://www.facebook.com/groups/541859482565869/', 'Oklahoma', 35.4675600, -97.5164280, 0),
(104, 4, 'https://www.facebook.com/groups/326887317543/', 'Texas - Amarillo', 35.2219970, -101.8312970, 0),
(105, 4, 'https://www.facebook.com/groups/476448669077840/', 'Texas - Austin', 30.2671530, -97.7430610, 1),
(106, 4, 'https://www.facebook.com/groups/Austin.Melee/', 'Texas - Austin', 30.2680370, -97.7365640, 2),
(107, 4, 'https://www.facebook.com/groups/426773497467785/', 'Texas - Austin', 30.2604020, -97.7520560, 4),
(108, 4, 'http://www.facebook.com/groups/bcsmelee', 'Texas - Bryan-College Station', 30.6275730, -96.3348200, 0),
(109, 4, 'https://www.facebook.com/groups/205428649667016/', 'Texas - College Station', 30.6224020, -96.3410000, 0),
(110, 4, 'https://www.facebook.com/groups/350398944989752/', 'Texas - Dallas-Fort Worth', 32.7554880, -97.3307660, 2),
(111, 4, 'https://www.facebook.com/groups/673233716043745/', 'Texas - El Paso', 31.7699560, -106.4968050, 0),
(112, 4, 'https://www.facebook.com/groups/554204308010763/', 'Texas - Fort Worth', 32.7554880, -97.3307660, 0),
(113, 4, 'https://www.facebook.com/groups/223986011009934/', 'Texas - Houston', 29.7601930, -95.3693900, 2),
(114, 4, 'https://www.facebook.com/groups/197481713674782', 'Texas - San Antonio', 29.4241220, -98.4936280, 2),
(115, 4, 'https://www.facebook.com/groups/122102801187160/', 'Texas - Rio Grande Valley', 26.1502960, -97.9767720, 0),
(116, 4, 'https://www.facebook.com/UtahSmash', 'Utah', 40.7472570, -111.8627930, 0),
(117, 4, 'https://www.facebook.com/groups/35208405538/', 'Utah - Provo/Orem', 40.2617130, -111.6773990, 0),
(118, 4, 'https://www.facebook.com/groups/507726149334644/', 'New Mexico', 35.0659730, -106.6223140, 0),
(119, 5, 'https://www.facebook.com/groups/CentralCaliSmash/', 'CA - Central Cali', 36.6331620, -119.7290040, 0),
(120, 5, 'http://www.facebook.com/groups/276813632366412/', 'CA - NorCal', 37.7446570, -122.4371340, 2),
(121, 5, 'https://www.facebook.com/groups/NorcalBrawl/', 'CA - NorCal', 37.3133830, -121.8988040, 3),
(122, 5, 'https://www.facebook.com/groups/700200659991734/', 'CA - NorCal', 37.3308570, -121.8905640, 4),
(123, 5, 'https://www.facebook.com/groups/SantaCruzMelee/', 'CA - Santa Cruz', 36.9696440, -122.0224000, 2),
(124, 5, 'https://www.facebook.com/groups/124711994367202/', 'CA - Berkeley', 37.8715930, -122.2727470, 2),
(125, 5, 'https://www.facebook.com/groups/251905601637936/', 'CA - Humboldt', 40.7450050, -123.8695090, 0),
(126, 5, 'https://www.facebook.com/groups/479162355483578', 'CA - Orange County', 33.7174710, -117.8311430, 2),
(127, 5, 'https://www.facebook.com/groups/78151322382/', 'CA - San Diego', 32.7157380, -117.1610840, 2),
(128, 5, 'http://www.facebook.com/groups/358902214188040/', 'CA - Santa Barbara', 34.4208310, -119.6981900, 2),
(129, 5, 'https://www.facebook.com/groups/593635670694883/', 'CA - SoCal', 34.0344530, -118.4710690, 1),
(130, 5, 'http://www.facebook.com/groups/368704663144095/', 'CA - SoCal', 34.0299000, -118.2568360, 2),
(131, 5, 'https://www.facebook.com/groups/SSBBsocal/', 'CA - SoCal', 34.2027160, -118.5699460, 3),
(132, 5, 'https://www.facebook.com/groups/SSBPMsocal/', 'CA - SoCal', 33.9205720, -117.4108890, 4),
(133, 5, 'https://www.facebook.com/groups/611100575632206/', 'CA - South Bay', 37.3395920, -121.9235230, 2),
(134, 5, 'https://www.facebook.com/groups/480597648717885/', 'CA - Thousand Oaks', 34.1705610, -118.8375940, 0),
(135, 5, 'https://www.facebook.com/groups/MELEE702/', 'Nevada - Las Vegas', 36.1699410, -115.1398300, 2),
(136, 5, 'https://www.facebook.com/groups/BRAWL702/', 'Nevada - Las Vegas', 36.1728030, -115.2095030, 3),
(137, 5, 'https://www.facebook.com/groups/702PROJECTM/', 'Nevada - Las Vegas', 36.1683680, -115.0968930, 4),
(138, 5, 'https://www.facebook.com/groups/619057094778540/', 'Nevada - Reno', 39.5296330, -119.8138030, 0),
(139, 5, 'https://www.facebook.com/groups/641344915919224/', 'Sacramento Smash', 38.5815720, -121.4944000, 0),
(140, 5, 'https://www.facebook.com/groups/245900615456533/', 'Official Washington New World Order of Melee', 47.1000450, -119.8828130, 0),
(141, 5, 'https://www.facebook.com/groups/642114992487346/', 'Irvine', 33.6839470, -117.7946940, 0),
(142, 5, 'https://www.facebook.com/groups/340535089298820/', 'Portland', 45.5234520, -122.6762070, 0),
(143, 5, 'https://www.facebook.com/groups/283358348346303/', 'Eugene', 44.0520690, -123.0867540, 0),
(144, 5, 'https://www.facebook.com/groups/224872027544762/', 'Corvallis', 44.5645660, -123.2620440, 0),
(145, 5, 'https://www.facebook.com/groups/SCVSSBM/ ', 'Santa Clarita Valley', 34.3796510, -118.5305980, 2),
(146, 1, 'https://www.facebook.com/groups/WorcesterSmashBros/', 'Worcester', 42.2625930, -71.8022930, 0),
(147, 4, 'https://www.facebook.com/groups/350398944989752/', 'DFW', 32.7554880, -97.0000000, 0),
(148, 2, 'https://www.facebook.com/groups/731966200177831/', 'Asheville', 35.5950580, -82.5514870, 0),
(149, 1, 'https://www.facebook.com/groups/46230006858/', 'Rochester ', 43.1610300, -77.6109220, 0),
(150, 5, 'https://www.facebook.com/groups/790683467608502/', 'Fremont', 37.5482700, -121.9885720, 2),
(151, 5, 'https://www.facebook.com/groups/251629451659962/', 'San Luis Obispo', 35.2827520, -120.6596160, 0),
(152, 3, 'https://www.facebook.com/groups/124366774346574/', 'Wichita', 37.6888890, -97.3361110, 2),
(153, 5, 'https://www.facebook.com/groups/everythingsmash/', 'CA - VENTURA COUNTY', 34.2685660, -119.2284390, 0),
(154, 4, 'https://www.facebook.com/groups/GAMelee/', 'Atlanta', 33.7489950, -84.3879820, 2),
(155, 5, 'https://www.facebook.com/groups/1419390711611336/', 'High Desert', 35.1440470, -106.4869710, 2),
(156, 5, 'https://www.facebook.com/groups/619057094778540/', 'Reno', 39.5296330, -119.8138030, 0),
(157, 5, 'https://www.facebook.com/groups/707melee/', '707', 38.2918590, -122.4580360, 2),
(158, 3, 'https://www.facebook.com/groups/KyOhWVa.Smash/', 'Ironton, Ohio', 38.5367470, -82.6829410, 2),
(159, 2, 'https://www.facebook.com/groups/235912859946393', 'Buford', 34.1206560, -84.0043510, 2),
(160, 3, 'https://www.facebook.com/groups/230511403809562/', 'Third Lake', 42.3739110, -88.0109120, 0),
(161, 5, 'https://www.facebook.com/groups/279945308796732/', 'Long Beach', 33.7700500, -118.1937390, 0),
(162, 1, 'https://www.facebook.com/groups/417873421648323/', 'Bedford, MA', 42.4906230, -71.2760090, 2),
(163, 2, 'https://www.facebook.com/groups/159610307409216/', 'Dothan', 31.2232310, -85.3904890, 4);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moves`
--

DROP TABLE IF EXISTS `moves`;
CREATE TABLE `moves` (
`id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `description` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moves`
--

INSERT INTO `moves` (`id`, `name`, `description`) VALUES
(0, 'B Moves', ''),
(1, 'Jab', ''),
(2, 'Tilt', ''),
(3, 'Smash', ''),
(4, 'Aerials', ''),
(5, 'Ground Options', ''),
(6, 'Defensive Options', '');

-- --------------------------------------------------------

--
-- Table structure for table `movesgifs`
--

DROP TABLE IF EXISTS `movesgifs`;
CREATE TABLE `movesgifs` (
`id` int(11) NOT NULL,
  `charid` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` varchar(30) NOT NULL,
  `source` varchar(90) NOT NULL,
  `dataid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=714 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movesgifs`
--

INSERT INTO `movesgifs` (`id`, `charid`, `url`, `description`, `source`, `dataid`) VALUES
(59, 1, 'ElaborateMaleAustraliankestrel', 'Down B on ground', 'Seikend', 0),
(60, 1, 'SmoggyBriefHyracotherium', 'Up B in air', 'Seikend', 0),
(61, 1, 'DangerousPessimisticAmericanredsquirrel', 'Up B on ground', 'Seikend', 0),
(62, 1, 'CourteousWarmFairybluebird', 'Down B in air', 'Seikend', 0),
(63, 1, 'ValidHatefulIraniangroundjay', 'Forward B', 'Seikend', 0),
(64, 1, 'WelldocumentedShoddyBufeo', 'Jab 1', 'Seikend', 1),
(65, 1, 'HardThreadbareHarpseal', 'Jab 2', 'Seikend', 1),
(66, 1, 'WildCheapAntarcticgiantpetrel', 'Low F Tilt', 'Seikend', 2),
(67, 1, 'JitteryHeavenlyAmericanriverotter', 'High F Tilt', 'Seikend', 2),
(68, 1, 'ElasticMedicalAmazonparrot', 'F Tilt', 'Seikend', 2),
(69, 1, 'HardCrazyIndianjackal', 'U Tilt', 'Seikend', 2),
(70, 1, 'HairyGiganticFrigatebird', 'D Tilt', 'Seikend', 2),
(71, 1, 'VagueDamagedHomalocephale', 'U Smash', 'Seikend', 3),
(72, 1, 'EverlastingGenerousAustrianpinscher', 'F Smash', 'Seikend', 3),
(73, 1, 'WarlikeBowedHerald', 'D Smash', 'Seikend', 3),
(74, 1, 'YearlyHonorableArchaeocete', 'U Air', 'Seikend', 4),
(75, 1, 'LinearNervousApatosaur', 'N Air', 'Seikend', 4),
(76, 1, 'DistantShadyCopperhead', 'D Air', 'Seikend', 4),
(77, 1, 'UnderstatedTenseHare', 'B Air', 'Seikend', 4),
(78, 1, 'OddTiredIvorybackedwoodswallow', 'F Air', 'Seikend', 4),
(79, 1, 'OilyWelloffAmericancrow', 'Dash Attack', 'Seikend', 5),
(80, 1, 'CluelessNastyBeardeddragon', 'Running Grab', 'Seikend', 5),
(81, 1, 'IlliterateMadDassierat', 'Standing Grab', 'Seikend', 5),
(82, 1, 'KindheartedUnderstatedAtlasmoth', 'Spot Dodge', 'Seikend', 6),
(83, 1, 'FarflungDeliriousChipmunk', 'Air Dodge', 'Seikend', 6),
(84, 1, 'DamagedFlippantHanumanmonkey', 'Roll Forward', 'Seikend', 6),
(85, 2, 'WarlikeImperfectAsiaticgreaterfreshwaterclam', 'Jab 3', 'Stratocaster', 1),
(86, 2, 'FastPalatableChanticleer', 'Jab 2', 'Stratocaster', 1),
(87, 2, 'ThinSparklingAmazontreeboa', 'High F Tilt', 'Stratocaster', 2),
(88, 2, 'MediumPoliticalHarrier', 'Low F Tilt', 'Stratocaster', 2),
(89, 2, 'EmbellishedLightheartedDormouse', 'U Tilt', 'Stratocaster', 2),
(90, 2, 'SingleOddHare', 'F Air', 'Stratocaster', 4),
(91, 2, 'WeightyLastingDarwinsfox', 'Air Dodge', 'Stratocaster', 6),
(92, 2, 'PleasedImpracticalAlbertosaurus', 'U Smash', 'Stratocaster', 3),
(95, 2, 'SardonicFlakyAustraliansilkyterrier', 'U Air', 'Stratocaster', 4),
(96, 2, 'AmusedReasonableCaimanlizard', 'B Air', 'Stratocaster', 4),
(97, 2, 'SlimyNervousEyelashpitviper', 'Neutral B', 'Stratocaster', 0),
(101, 3, 'ThinIckyGrackle', 'Neutral B', 'Strong Bad', 0),
(102, 3, 'ComplexRevolvingBantamrooster', 'Up B on ground', 'Strong Bad', 0),
(103, 3, 'ObedientAnimatedGuillemot', 'Up B in air', 'Strong Bad', 0),
(104, 3, 'ShorttermAppropriateBlackrussianterrier', 'Jab 1', 'Strong Bad', 1),
(105, 3, 'BaggyNearDragonfly', 'Jab 2', 'Strong Bad', 1),
(106, 3, 'ClumsyTatteredBee', 'F Tilt', 'Strong Bad', 2),
(107, 3, 'SpotlessRewardingJapanesebeetle', 'U Smash', 'Strong Bad', 3),
(108, 3, 'AptBetterDalmatian', 'B Air', 'Strong Bad', 4),
(109, 3, 'DearestBowedArawana', 'U Air', 'Strong Bad', 4),
(110, 3, 'DimwittedCautiousEgg', 'D Air', 'Strong Bad', 4),
(111, 3, 'UnfitTepidBudgie', 'Running Grab', 'Strong Bad', 5),
(112, 3, 'MetallicNewHarrierhawk', 'Air Dodge', 'Strong Bad', 4),
(113, 3, 'ElegantUncomfortableAuklet', 'Down B', 'Strong Bad', 0),
(114, 3, 'BabyishShallowFallowdeer', 'Spot Dodge', 'Strong Bad', 6),
(115, 3, 'OfficialForsakenJackrabbit', 'Forward B', 'Strong Bad', 0),
(116, 3, 'GrotesqueMiniatureFulmar', 'Roll Forward', 'Strong Bad', 6),
(117, 3, 'ClosedAdventurousAlbacoretuna', 'N Air', 'Strong Bad', 4),
(118, 3, 'ObedientScratchyGelding', 'Dash Attack', 'Strong Bad', 5),
(119, 3, 'EqualClosedHaddock', 'Standing Grab', 'Strong Bad', 5),
(120, 3, 'GranularNiceCottontail', 'U Tilt', 'Strong Bad', 2),
(121, 3, 'MilkyDisguisedIbis', 'Roll Backward', 'Strong Bad', 6),
(122, 3, 'NecessaryEnviousCockatoo', 'High F Tilt', 'Strong Bad', 2),
(123, 3, 'AdorableReliableBlacklemur', 'F Smash', 'Strong Bad', 3),
(124, 3, 'HopefulNauticalArrowana', 'Neutral B', 'Strong Bad', 0),
(125, 3, 'AmusedSlushyAchillestang', 'D Tilt', 'Strong Bad', 2),
(126, 3, 'UnimportantVengefulDunlin', 'F Air', 'Strong Bad', 4),
(127, 3, 'SingleEdibleChicken', 'D Smash', 'Strong Bad', 3),
(128, 3, 'EveryImpracticalBackswimmer', 'Low F Tilt', 'Strong Bad', 2),
(129, 3, 'AnguishedInfatuatedBrontosaurus', 'Neutral B (charge)', 'Strong Bad', 0),
(130, 4, 'ClassicRealAfricanclawedfrog', 'Jab 1', 'standardtoaster', 1),
(131, 4, 'BetterLiquidAfricanaugurbuzzard', 'Jab 2', 'standardtoaster', 1),
(132, 4, 'RigidExcellentAdamsstaghornedbeetle', 'Jab 3', 'standardtoaster', 1),
(133, 4, 'CreativeAshamedHoiho', 'F Tilt', 'standardtoaster', 2),
(134, 4, 'RepentantCriminalGardensnake', 'Low F Tilt', 'standardtoaster', 2),
(135, 4, 'ThirdBiodegradableIvorybackedwoodswallow', 'High F Tilt', 'standardtoaster', 2),
(136, 4, 'ComplexFrequentArcticseal', 'D Tilt', 'standardtoaster', 2),
(137, 4, 'LightImpureHoneycreeper', 'F Air', 'standardtoaster', 4),
(138, 4, 'WelllitWellmadeCowbird', 'U Air', 'standardtoaster', 4),
(139, 4, 'LightDishonestCat', 'Dash attack', 'standardtoaster', 5),
(140, 4, 'WarpedShrillCottonmouth', 'F Smash Down', 'standardtoaster', 3),
(141, 4, 'FragrantNastyBluegill', 'D Smash', 'standardtoaster', 3),
(142, 4, 'UntidyAjarJuliabutterfly', 'High F Smash', 'standardtoaster', 3),
(143, 4, 'FarawayGenerousIndigowingedparrot', 'U Smash', 'standardtoaster', 3),
(144, 4, 'DistantSociableAmericankestrel', 'N Air', 'standardtoaster', 4),
(145, 4, 'ZestyBrightAfricanhornbill', 'B Air', 'standardtoaster', 4),
(146, 4, 'KindheartedDisfiguredGenet', 'D Air', 'standardtoaster', 4),
(147, 4, 'ScornfulRevolvingArabianwildcat', 'Standing Grab', 'standardtoaster', 5),
(148, 4, 'GoodnaturedDarkFerret', 'Running grab', 'standardtoaster', 5),
(149, 4, 'WebbedWarlikeHarborporpoise', 'Down B', 'standardtoaster', 0),
(150, 4, 'JoyfulPlayfulAtlanticsharpnosepuffer', 'Up B', 'standardtoaster', 0),
(151, 4, 'TidyGracefulAnole', 'Forward B', 'standardtoaster', 0),
(152, 4, 'RaggedWarmBedbug', 'Air Dodge', 'standardtoaster', 4),
(153, 4, 'InfantileShyHorsechestnutleafminer', 'Forward Roll', 'standardtoaster', 6),
(154, 4, 'ZestySolidCaudata', 'Spot Dodge', 'standardtoaster', 6),
(155, 5, 'NaturalEsteemedIndianhare', 'Neutral B', 'Seikend', 0),
(156, 5, 'WastefulEducatedKilldeer', 'Jab 1', 'Seikend', 1),
(157, 5, 'DeliriousSleepyDamselfly', 'Jab 2', 'Seikend', 1),
(158, 5, 'RealSeveralCommabutterfly', 'Jab 3', 'Seikend', 1),
(159, 5, 'UnluckyPhysicalAruanas', 'F Tilt', 'Seikend', 2),
(160, 5, 'CompetentGenuineKitty', 'High F Tilt', 'Seikend', 2),
(161, 5, 'FabulousGracefulInexpectatumpleco', 'U Tilt', 'Seikend', 2),
(162, 5, 'SardonicUnevenIndigowingedparrot', 'U Air', 'Seikend', 4),
(163, 5, 'OrderlyNecessaryHorsemouse', 'D Air', 'Seikend', 4),
(164, 5, 'MasculineJollyGlobefish', 'Dash Attack', 'Seikend', 5),
(165, 5, 'LeanBeneficialAssassinbug', 'Low F Tilt', 'Seikend', 2),
(166, 5, 'GiantContentIceblueredtopzebra', 'B Air', 'Seikend', 4),
(167, 5, 'OldShyBobcat', 'N Air', 'Seikend', 4),
(168, 5, 'RawBossyIrrawaddydolphin', 'D Tilt', 'Seikend', 2),
(169, 5, 'ForsakenPreciousBlacknorwegianelkhound', 'F Smash', 'Seikend', 3),
(170, 5, 'EvergreenWearyAuklet', 'Neutral B in air', 'Seikend', 4),
(171, 5, 'WarlikeCostlyHippopotamus', 'F Air', 'Seikend', 4),
(172, 5, 'SparseOptimisticAstarte', 'D Smash', 'Seikend', 3),
(173, 5, 'GlamorousDismalBadger', 'U Smash', 'Seikend', 3),
(174, 5, 'PoisedWhisperedDoe', 'Running Grab', 'Seikend', 5),
(175, 5, 'CostlyGratefulHydatidtapeworm', 'Down B', 'Seikend', 0),
(176, 5, 'TangibleSelfreliantBellsnake', 'Forward B in air', 'Seikend', 4),
(177, 5, 'OptimisticSplendidEyelashpitviper', 'Air Dodge', 'Seikend', 4),
(178, 5, 'FlamboyantMiniatureFlea', 'Up B', 'Seikend', 0),
(179, 5, 'BrownAgileInexpectatumpleco', 'Roll Backward', 'Seikend', 6),
(180, 5, 'LegalMajorHogget', 'Roll Forward', 'Seikend', 6),
(181, 5, 'FemaleSafeGallinule', 'Spot Dodge', 'Seikend', 6),
(182, 6, 'EasygoingGraciousHorse', 'Neutral B on ground', 'Stratocaster', 0),
(183, 6, 'EntireMajorAtlasmoth', 'Neutral B in air', 'Stratocaster', 0),
(184, 6, 'HalfFlamboyantElver', 'Forward B in air', 'Stratocaster', 0),
(185, 6, 'DampSeparateDamselfly', 'Down B', 'Stratocaster', 0),
(186, 6, 'JaggedCreepyHuia', 'Up B', 'Stratocaster', 0),
(187, 6, 'YearlyEdibleHarpseal', 'Jab', 'Stratocaster', 1),
(188, 6, 'FirmForsakenAngwantibo', 'Jab 2', 'Stratocaster', 1),
(189, 6, 'SpotlessSameArmadillo', 'Jab 3', 'Stratocaster', 1),
(190, 6, 'SkinnyGrimyDeviltasmanian', 'High F Tilt', 'Stratocaster', 2),
(191, 6, 'PaltryCoarseFowl', 'Low F Tilt', 'Stratocaster', 2),
(192, 6, 'ZigzagSlipperyKoodoo', 'F Tilt', 'Stratocaster', 2),
(193, 6, 'AllTeemingBarnowl', 'D Tilt', 'Stratocaster', 2),
(194, 6, 'MenacingEquatorialHydra', 'U Tilt', 'Stratocaster', 2),
(195, 6, 'BackDistortedAoudad', 'F Smash', 'Stratocaster', 3),
(196, 6, 'PleasantAdventurousKissingbug', 'U Smash', 'Stratocaster', 3),
(197, 6, 'FlatAdorableHorsechestnutleafminer', 'D Smash', 'Stratocaster', 3),
(198, 6, 'AggressiveUnluckyDinosaur', 'N Air', 'Stratocaster', 4),
(199, 6, 'QualifiedCostlyIaerismetalmark', 'U Air', 'Stratocaster', 4),
(200, 6, 'UnequaledHappygoluckyAsianporcupine', 'D Air', 'Stratocaster', 4),
(201, 6, 'KaleidoscopicShabbyDalmatian', 'F Air', 'Stratocaster', 4),
(202, 6, 'ZealousLiquidDuck', 'B Air', 'Stratocaster', 4),
(203, 6, 'LoathsomeBeneficialAmericanbittern', 'Roll Backward', 'Stratocaster', 5),
(204, 6, 'RemorsefulGreatGallowaycow', 'Dash Attack', 'Stratocaster', 5),
(205, 6, 'DeepBlondAngelfish', 'Running Grab', 'Stratocaster', 5),
(206, 6, 'VibrantSevereKarakul', 'Standing Grab', 'Stratocaster', 5),
(207, 6, 'FamiliarBoilingDarklingbeetle', 'Air Dodge', 'Stratocaster', 6),
(208, 6, 'GrayHarmfulGallowaycow', 'Spot Dodge', 'Stratocaster', 6),
(209, 6, 'PrestigiousNextGuineapig', 'Roll Forward', 'Stratocaster', 6),
(210, 7, 'EnviousBogusDodo', 'Neutral B', 'standardtoaster', 0),
(211, 7, 'AthleticCapitalChuckwalla', 'Jab', 'standardtoaster', 1),
(212, 7, 'DapperDeliriousCleanerwrasse', 'High F Tilt', 'standardtoaster', 2),
(213, 7, 'HiddenBigGangesdolphin', 'F Tilt', 'standardtoaster', 2),
(214, 7, 'DisguisedPointedHamster', 'Low F Tilt', 'standardtoaster', 2),
(215, 7, 'VastWarlikeAdmiralbutterfly', 'U Tilt', 'standardtoaster', 2),
(216, 7, 'AgitatedCrazyCub', 'D Tilt', 'standardtoaster', 2),
(217, 7, 'AppropriateCleanJellyfish', 'High F Smash', 'standardtoaster', 3),
(218, 7, 'TintedWelcomeBlueshark', 'D Smash', 'standardtoaster', 3),
(219, 7, 'LazyIllAsianlion', 'B Air', 'standardtoaster', 4),
(220, 7, 'DismalDrearyBobwhite', 'D Air', 'standardtoaster', 4),
(221, 7, 'DependentTidyGalapagospenguin', 'Low F Smash', 'standardtoaster', 3),
(222, 7, 'InbornOrdinaryAffenpinscher', 'Down B', 'standardtoaster', 0),
(223, 7, 'PhysicalDarkAplomadofalcon', 'U Smash', 'standardtoaster', 3),
(224, 7, 'MadeupNiftyFerret', 'Forward B on ground', 'standardtoaster', 0),
(225, 7, 'OptimisticEarlyHornshark', 'Forward B in air', 'standardtoaster', 0),
(226, 7, 'IllinformedTanEsok', 'N Air', 'standardtoaster', 4),
(227, 7, 'EdibleSilverFirebelliedtoad', 'Down B in air', 'standardtoaster', 0),
(228, 7, 'CriminalInexperiencedIndochinahogdeer', 'Up B', 'standardtoaster', 0),
(229, 7, 'LastEducatedFurseal', 'Forward B in air (hit)', 'standardtoaster', 0),
(230, 8, 'WellmadeDifferentFluke', 'Down B', 'Stratocaster', 0),
(231, 8, 'EsteemedFatIndusriverdolphin', 'B Air', 'Stratocaster', 0),
(232, 8, 'VerifiableShrillAustralianshelduck', 'Neutral B', 'Stratocaster', 0),
(233, 8, 'HatefulHomelyDolphin', 'Forward B', 'Stratocaster', 0),
(234, 8, 'TautLoneGrayfox', 'Up B', 'Stratocaster', 0),
(235, 8, 'PoshLameHogget', 'Jab 1', 'Stratocaster', 1),
(236, 8, 'KindFailingCockatiel', 'Jab 2', 'Stratocaster', 1),
(237, 8, 'CalculatingSlightBallpython', 'D Tilt', 'Stratocaster', 2),
(238, 8, 'ChiefPlainBrontosaurus', 'U Tilt', 'Stratocaster', 2),
(239, 8, 'WholeShockingDolphin', 'Low F Tilt', 'Stratocaster', 2),
(240, 8, 'LightheartedAbsoluteAnemone', 'High F Tilt', 'Stratocaster', 2),
(241, 8, 'SpeedyTenseGodwit', 'F Smash', 'Stratocaster', 3),
(242, 8, 'EagerUnsteadyGoral', 'D Smash', 'Stratocaster', 3),
(243, 8, 'BadBossyBass', 'U Smash', 'Stratocaster', 3),
(244, 8, 'AridQuestionableCaecilian', 'N Air', 'Stratocaster', 4),
(245, 8, 'TallShortGalapagoshawk', 'F Air', 'Stratocaster', 4),
(246, 8, 'DisloyalDistortedEasternglasslizard', 'D Air', 'Stratocaster', 4),
(247, 8, 'FalseMemorableGrackle', 'U Air', 'Stratocaster', 4),
(248, 8, 'FrankHeartyGrunion', 'Running Grab', 'Stratocaster', 5),
(249, 8, 'YellowFavoriteBlacknorwegianelkhound', 'Dash Attack', 'Stratocaster', 5),
(250, 8, 'BlandVastIndianabat', 'Roll Backward', 'Stratocaster', 6),
(251, 8, 'WatchfulAntiqueIchneumonfly', 'Roll Forward', 'Stratocaster', 6),
(252, 8, 'DesertedAcidicFattaileddunnart', 'Spot Dodge', 'Stratocaster', 6),
(253, 8, 'IdioticIdolizedErin', 'Air Dodge', 'Stratocaster', 6),
(254, 8, 'UncommonImpressionableAmericancrayfish', 'Standing Grab', 'Stratocaster', 5),
(255, 9, 'WideeyedAgonizingGemsbuck', 'Down B', 'Massive', 0),
(256, 9, 'FineUnknownAffenpinscher', 'Jab 1', 'Massive', 1),
(257, 9, 'SandyMeekEuropeanfiresalamander', 'Jab 2', 'Massive', 1),
(258, 9, 'ImpossibleDarkAntelope', 'F Tilt', 'Massive', 2),
(259, 9, 'GenuineWaterloggedIridescentshark', 'High F Tilt', 'Massive', 2),
(260, 9, 'RewardingDisguisedAztecant', 'Low F Tilt', 'Massive', 2),
(261, 9, 'SelfreliantFakeCero', 'D Tilt', 'Massive', 2),
(262, 9, 'PaleWarmArmyant', 'U Tilt', 'Massive', 2),
(263, 9, 'ShortLazyHammerheadshark', 'B Air', 'Massive', 4),
(264, 9, 'WhiteFailingAmericansaddlebred', 'Air Dodge', 'Massive', 6),
(265, 9, 'SinfulUltimateFanworms', 'Roll Forward', 'Massive', 6),
(266, 9, 'ImmaterialFirstKakarikis', 'F Smash', 'Massive', 3),
(267, 9, 'SaltySlimyBustard', 'U Air', 'Massive', 4),
(268, 9, 'BothSparseBandicoot', 'Neutral B', 'Massive', 0),
(269, 9, 'HiddenSpryFerret', 'N Air', 'Massive', 4),
(270, 9, 'ParallelWarmheartedIchthyostega', 'D Air', 'Massive', 4),
(271, 9, 'PoliteLongCooter', 'F Air', 'Massive', 4),
(272, 9, 'FeistyTheseAtlanticridleyturtle', 'Running Grab', 'Massive', 5),
(273, 9, 'ZanyOffensiveCowrie', 'Forward B', 'Massive', 0),
(274, 9, 'HastyUnequaledGemsbuck', 'Up B', 'Massive', 0),
(275, 9, 'PositiveHoarseDaddylonglegs', 'Dash Attack', 'Massive', 5),
(276, 9, 'PoliticalShortHorseshoecrab', 'Standing Grab', 'Massive', 5),
(277, 9, 'SinfulTenderBushbaby', 'Roll Back', 'Massive', 6),
(278, 10, 'FalseWigglyElephant', 'Forward B in air', 'Shoopman', 0),
(279, 10, 'QuarrelsomeOffbeatDormouse', 'Jab 1', 'Shoopman', 1),
(280, 10, 'DenseLightheartedHypacrosaurus', 'Jab 2', 'Shoopman', 1),
(281, 10, 'FreshKaleidoscopicAnole', 'Jab 3', 'Shoopman', 1),
(283, 10, 'MajesticFavoriteCooter', 'D Tilt', 'Shoopman', 2),
(284, 10, 'GoodScholarlyCooter', 'Standing Grab', 'Shoopman', 5),
(285, 10, 'YawningWelldocumentedFirefly', 'High F Tilt', 'Shoopman', 2),
(286, 10, 'HollowUnrealisticBuzzard', 'Running Grab', 'Shoopman', 5),
(287, 10, 'NeglectedBriefAiredaleterrier', 'Up B', 'Shoopman', 0),
(288, 10, 'InferiorPettyBeauceron', 'F Smash', 'Shoopman', 3),
(289, 10, 'BetterAmbitiousCornsnake', 'Low F Tilt', 'Shoopman', 2),
(290, 10, 'DearGiantChanticleer', 'U Tilt', 'Shoopman', 2),
(291, 10, 'KeyForcefulLark', 'U Smash', 'Shoopman', 3),
(292, 10, 'AridLimpingCassowary', 'D Smash', 'Shoopman', 3),
(293, 10, 'ElectricGrandioseGoldeneye', 'Dash Attack', 'Shoopman', 5),
(294, 10, 'RepulsiveConcernedDaddylonglegs', 'B Air', 'Shoopman', 4),
(295, 10, 'SnappyGreatFairybluebird', 'N Air', 'Shoopman', 4),
(296, 10, 'TerrificEllipticalIrishredandwhitesetter', 'D Air', 'Shoopman', 4),
(297, 10, 'RegularBlissfulArmadillo', 'F Air', 'Shoopman', 4),
(298, 10, 'FirmActualAfricanhornbill', 'Neutral B', 'Shoopman', 0),
(299, 10, 'DecimalExaltedIndianringneckparakeet', 'Down B', 'Shoopman', 0),
(300, 10, 'AcrobaticCharmingAxolotl', 'U Air', 'Shoopman', 4),
(301, 11, 'SparseForcefulDromedary', 'U Smash', 'standardtoaster', 0),
(302, 11, 'NeglectedWiltedAzurevasesponge', 'Jab 1', 'standardtoaster', 1),
(303, 11, 'ChubbyMassiveBug', 'F Tilt', 'standardtoaster', 2),
(304, 11, 'CavernousTornFlamingo', 'D Tilt', 'standardtoaster', 2),
(305, 11, 'UnselfishBeautifulHuman', 'F Smash 2', 'standardtoaster', 3),
(306, 11, 'NaturalColossalAntipodesgreenparakeet', 'N Air', 'standardtoaster', 4),
(307, 11, 'FineCrispCoot', 'B Air', 'standardtoaster', 4),
(308, 11, 'AmplePeskyBluebottlejellyfish', 'U Air', 'standardtoaster', 4),
(309, 11, 'AptWarlikeCockerspaniel', 'D Air', 'standardtoaster', 4),
(310, 11, 'OrneryBleakBongo', 'F Air', 'standardtoaster', 4),
(311, 11, 'UncommonWhirlwindChimpanzee', 'Z Air', 'standardtoaster', 4),
(312, 11, 'TangibleAccurateCur', 'Dash Attack', 'standardtoaster', 5),
(313, 11, 'SpanishWealthyAsianconstablebutterfly', 'Up B', 'standardtoaster', 0),
(314, 11, 'UglyBlankGuppy', 'Running Grab', 'standardtoaster', 5),
(315, 11, 'BogusSandyIrishterrier', 'Up B', 'standardtoaster', 0),
(316, 11, 'EnlightenedAridDunnart', 'Neutral B', 'standardtoaster', 0),
(317, 11, 'JoyfulGloriousFlea', 'Standing Grab', 'standardtoaster', 5),
(318, 11, 'VagueUglyDartfrog', 'Up B in air', 'standardtoaster', 0),
(319, 11, 'FortunateAnguishedHoki', 'Jab 2', 'standardtoaster', 1),
(320, 11, 'RecentElaborateBellsnake', 'Jab 3 (non-rapid)', 'standardtoaster', 1),
(321, 11, 'EveryUnawareIvorybilledwoodpecker', 'D Smash', 'standardtoaster', 3),
(322, 11, 'SpicyFirsthandFallowdeer', 'U Tilt', 'standardtoaster', 2),
(323, 11, 'QuarrelsomeCanineAmericanindianhorse', 'Jab 3 (rapid)', 'standardtoaster', 1),
(324, 12, 'EnragedBasicJaguarundi', 'Jab 1', 'standardtoaster', 1),
(325, 12, 'IllustriousReliableAmbushbug', 'Jab 2', 'standardtoaster', 1),
(326, 12, 'HatefulTestyHog', 'Jab 3', 'standardtoaster', 1),
(327, 12, 'AmbitiousPitifulCockerspaniel', 'High F Tilt', 'standardtoaster', 2),
(328, 12, 'EvergreenFragrantCorydorascatfish', 'F Tilt', 'standardtoaster', 2),
(329, 12, 'AnotherDesertedJabiru', 'Low F Tilt', 'standardtoaster', 2),
(330, 12, 'SerpentineSecondHochstettersfrog', 'N Air', 'standardtoaster', 4),
(331, 12, 'MeatyElatedHalcyon', 'D Tilt', 'standardtoaster', 2),
(332, 12, 'AdorableInfiniteEstuarinecrocodile', 'Neutral B', 'standardtoaster', 0),
(333, 12, 'CleanSecondhandGibbon', 'Up B', 'standardtoaster', 0),
(334, 12, 'ComplicatedEquatorialInsect', 'Down B', 'standardtoaster', 0),
(335, 12, 'DazzlingVigorousGilamonster', 'Forward B (misfire)', 'standardtoaster', 0),
(336, 12, 'ShinyEarlyHammerkop', 'Taunt', 'standardtoaster', 5),
(337, 12, 'BruisedFlakyCaimanlizard', 'U Tilt', 'standardtoaster', 2),
(338, 12, 'InfamousBlindInvisiblerail', 'High F Smash', 'standardtoaster', 3),
(339, 12, 'DenseBriefBarnacle', 'U Smash', 'standardtoaster', 3),
(340, 12, 'WeirdShockingChimneyswift', 'Low F Smash', 'standardtoaster', 3),
(341, 12, 'DefensiveGroundedBarb', 'U Air', 'standardtoaster', 4),
(342, 12, 'OptimalHardtofindIguanodon', 'D Smash', 'standardtoaster', 3),
(343, 12, 'WideDiscreteAcornbarnacle', 'F Air', 'standardtoaster', 4),
(344, 12, 'ImpartialUnfoldedBarb', 'Face Up Get-Up Attack', 'standardtoaster', 6),
(345, 12, 'GlitteringEmbellishedArieltoucan', 'D Air', 'standardtoaster', 4),
(346, 12, 'BruisedSerpentineBudgie', 'B Air', 'standardtoaster', 4),
(347, 12, 'IllJovialDotterel', 'Down B on ground', 'standardtoaster', 0),
(348, 12, 'DearCoarseIndianringneckparakeet', 'Standing Grab', 'standardtoaster', 5),
(349, 12, 'ShowySpectacularAngora', 'Running grab', 'standardtoaster', 5),
(350, 13, 'UnconsciousElectricBlacklemur', 'Forward B', 'Stratocaster', 0),
(351, 13, 'MistyHilariousArrowana', 'Jab 1', 'Stratocaster', 1),
(352, 13, 'MenacingClumsyCockerspaniel', 'Jab 2', 'Stratocaster', 1),
(353, 13, 'SecretEssentialHanumanmonkey', 'Jab 3', 'Stratocaster', 1),
(354, 13, 'UnconsciousTediousHagfish', 'High F Tilt', 'Stratocaster', 2),
(355, 13, 'PeriodicTanChafer', 'F Tilt', 'Stratocaster', 2),
(356, 13, 'FaithfulMeatyCrustacean', 'Low F Tilt', 'Stratocaster', 2),
(357, 13, 'DependentInsecureBug', 'D Tilt', 'Stratocaster', 2),
(358, 13, 'RepentantPerfumedBobwhite', 'U Tilt', 'Stratocaster', 2),
(359, 13, 'ShallowNecessaryChinesecrocodilelizard', 'High F Smash', 'Stratocaster', 3),
(360, 13, 'BoringGoldenGrosbeak', 'U Smash', 'Stratocaster', 3),
(361, 13, 'NextDimAmberpenshell', 'Dash Attack', 'Stratocaster', 5),
(362, 13, 'ForcefulTidyAlligator', 'B Air', 'Stratocaster', 4),
(364, 13, 'HarmlessPolishedJay', 'F Air', 'Stratocaster', 4),
(365, 13, 'AdolescentPleasingBlueandgoldmackaw', 'Down B', 'Stratocaster', 0),
(366, 13, 'LankyGraciousBufflehead', 'Standing Grab', 'Stratocaster', 5),
(367, 13, 'HilariousJubilantDeermouse', 'Up B', 'Stratocaster', 0),
(368, 13, 'DefiniteSizzlingHind', 'Low F Smash', 'Stratocaster', 3),
(369, 13, 'WigglyClosedAustraliancattledog', 'Running Grab', 'Stratocaster', 5),
(370, 13, 'ThirstyCreepyCoral', 'D Smash', 'Stratocaster', 3),
(371, 13, 'CreativeNastyDodobird', 'N Air', 'Stratocaster', 4),
(372, 13, 'ForsakenDisloyalFantail', 'U Air', 'Stratocaster', 4),
(374, 14, 'BarrenShrillFalcon', 'Down B', 'Stratocaster', 0),
(375, 14, 'ImportantTintedApatosaur', 'Forward B 3 (Down)', 'Stratocaster', 0),
(376, 14, 'HeartyFlamboyantGuillemot', 'Neutral B', 'Stratocaster', 0),
(377, 14, 'ValuableBlackChuckwalla', 'Jab 1', 'Stratocaster', 1),
(378, 14, 'DamagedBlondFirecrest', 'Jab 2', 'Stratocaster', 1),
(379, 14, 'BowedAmbitiousGuineapig', 'F Tilt', 'Stratocaster', 2),
(380, 14, 'LikablePlayfulEft', 'D Tilt', 'Stratocaster', 2),
(381, 14, 'CapitalIncompatibleAlaskankleekai', 'U Tilt', 'Stratocaster', 2),
(382, 14, 'WelcomeTatteredBarasingha', 'F Smash', 'Stratocaster', 3),
(383, 14, 'TepidAjarBaiji', 'U Smash', 'Stratocaster', 3),
(384, 14, 'FearfulCorruptHoki', 'D Smash', 'Stratocaster', 3),
(385, 14, 'SpitefulLivelyIntermediateegret', 'N Air', 'Stratocaster', 4),
(386, 14, 'FreshThinAntbear', 'F Air', 'Stratocaster', 4),
(387, 14, 'GrizzledChillyFlyinglemur', 'Dash Attack', 'Stratocaster', 5),
(388, 14, 'GoodHandyJaguarundi', 'B Air', 'Stratocaster', 4),
(389, 14, 'SeparatePassionateJunco', 'Running Grab', 'Stratocaster', 5),
(390, 14, 'PertinentWildAsiansmallclawedotter', 'U Air', 'Stratocaster', 4),
(391, 14, 'DearestEthicalIndianrhinoceros', 'D Air', 'Stratocaster', 4),
(392, 14, 'PessimisticIllinformedBlackcrappie', 'Forward B 3 (neutral)', 'Stratocaster', 0),
(393, 14, 'JubilantDentalAmericancrocodile', 'Forward B 3 (up)', 'Stratocaster', 0),
(394, 14, 'WindyIdleDikdik', 'Forward B 4 (neutral)', 'Stratocaster', 0),
(395, 14, 'MindlessLikableJumpingbean', 'Forward B 4 (down)', 'Stratocaster', 0),
(396, 14, 'TotalQuickInchworm', 'Roll Backward', 'Stratocaster', 6),
(397, 14, 'WellmadeSnappyAfricanharrierhawk', 'Roll Forward', 'Stratocaster', 6),
(398, 14, 'AlarmedHappyDobermanpinscher', 'Forward B 4 (up)', 'Stratocaster', 0),
(399, 14, 'RareFrigidBasenji', 'Forward B 2 (up)', 'Stratocaster', 0),
(400, 14, 'PaltryOrnateDouglasfirbarkbeetle', 'Up B', 'Stratocaster', 0),
(401, 14, 'NippyIlliterateAchillestang', 'Air Dodge', 'Stratocaster', 6),
(402, 14, 'ImmediateCharmingChipmunk', 'Spot Dodge', 'Stratocaster', 6),
(403, 14, 'BabyishMellowIndianabat', 'Standing Grab', 'Stratocaster', 5),
(404, 14, 'WelcomeBlindAsp', 'Forward B 1', 'Stratocaster', 0),
(405, 14, 'WellmadeUnripeCopepod', 'Forward B 2 (neutral & down)', 'Stratocaster', 0),
(406, 15, 'FaithfulDisfiguredFanworms', 'Jab 1', 'standardtoaster', 1),
(407, 15, 'PopularAliveGypsymoth', 'Jab 2', 'standardtoaster', 1),
(408, 15, 'BlondLightheartedFugu', 'F Tilt', 'standardtoaster', 2),
(409, 15, 'GranularTeemingAnteater', 'D Tilt', 'standardtoaster', 2),
(410, 15, 'DifficultWindingIrishterrier', 'D Smash', 'standardtoaster', 3),
(411, 15, 'NeatOrganicBichonfrise', 'U Smash', 'standardtoaster', 3),
(412, 15, 'ShadowyFavorableDogwoodtwigborer', 'F Smash', 'standardtoaster', 3),
(413, 15, 'SatisfiedDismalGallinule', 'B Air', 'standardtoaster', 4),
(414, 15, 'GlossySilkyFattaileddunnart', 'N Air', 'standardtoaster', 4),
(415, 15, 'ImpartialCooperativeBudgie', 'F Air', 'standardtoaster', 4),
(416, 15, 'GoodBlushingFrigatebird', 'Dash Attack', 'standardtoaster', 5),
(417, 15, 'FirstUltimateEthiopianwolf', 'Back Throw', 'standardtoaster', 5),
(418, 15, 'FreeColdCanine', 'High F Tilt', 'standardtoaster', 2),
(419, 15, 'RelievedColdHamadryas', 'Air Dodge', 'standardtoaster', 6),
(420, 15, 'FavoriteHarmoniousAngelfish', 'Down B', 'standardtoaster', 0),
(421, 15, 'JaggedSinfulDiplodocus', 'Standing Grab', 'standardtoaster', 5),
(422, 15, 'DampDistinctIcterinewarbler', 'U Tilt', 'standardtoaster', 2),
(423, 15, 'ImmenseFaithfulEyra', 'Low F Tilt', 'standardtoaster', 2),
(424, 15, 'OblongOldfashionedAsiantrumpetfish', 'U Air', 'standardtoaster', 4),
(425, 15, 'PerfectBestAmericanratsnake', 'D Air', 'standardtoaster', 4),
(426, 15, 'TidyUncommonArmyant', 'Running Grab', 'standardtoaster', 5),
(427, 15, 'OilyDismalCuscus', 'Forward B', 'standardtoaster', 0),
(428, 15, 'RecentOnlyHornet', 'Roll Forward', 'standardtoaster', 6),
(429, 15, 'HorribleLankyFantail', 'Roll Backward', 'standardtoaster', 6),
(430, 15, 'RedConstantAssassinbug', 'Spot Dodge', 'standardtoaster', 6),
(432, 15, 'PortlyGoodBug', 'Forward Throw', 'standardtoaster', 5),
(433, 16, 'FeminineThoseDragonfly', 'Down B', 'standardtoaster', 0),
(434, 16, 'ExcitableShimmeringCoelacanth', 'Down B (after 3 charges)', 'standardtoaster', 0),
(435, 16, 'CraftySmoothClingfish', 'Up B', 'standardtoaster', 0),
(436, 16, 'AngelicFlashyAfricanparadiseflycatcher', 'N Air', 'standardtoaster', 4),
(437, 16, 'JaggedAliveJavalina', 'F Air', 'standardtoaster', 4),
(438, 16, 'FrankFairAmurstarfish', 'Down Air', 'standardtoaster', 4),
(439, 16, 'KeyOptimisticGrassspider', 'Running Grab', 'standardtoaster', 5),
(440, 16, 'MelodicDisfiguredBedlingtonterrier', 'Jab', 'standardtoaster', 1),
(441, 16, 'ScratchyScalyArmyworm', 'U Tilt', 'standardtoaster', 2),
(442, 16, 'GrippingWindingHatchetfish', 'U Smash', 'standardtoaster', 3),
(443, 16, 'CraftyGregariousBird', 'F Smash', 'standardtoaster', 3),
(444, 16, 'HonestValuableGlassfrog', 'U Air', 'standardtoaster', 4),
(445, 16, 'FrighteningWideeyedAmethystsunbird', 'Dash Attack', 'standardtoaster', 5),
(446, 16, 'LimpDecimalEarthworm', 'Neutral B', 'standardtoaster', 0),
(447, 16, 'AgitatedNeatBluemorphobutterfly', 'D Smash', 'standardtoaster', 3),
(448, 16, 'FelineBouncyClam', 'Forward B', 'standardtoaster', 0),
(449, 16, 'EarlyGleamingGardensnake', 'F Tilt', 'standardtoaster', 2),
(451, 16, 'TanWarpedAntipodesgreenparakeet', 'Down Tilt', 'standardtoaster', 2),
(452, 16, 'ReadyGrouchyGiraffe', 'Grab', 'standardtoaster', 5),
(453, 16, 'SillyWiltedKakarikis', 'Jab', 'standardtoaster', 1),
(454, 16, 'PleasedClearDikdik', 'Neutral B (1-8)', 'standardtoaster', 0),
(455, 17, 'SharpCarelessAfricanpiedkingfisher', 'Jab 1', 'standardtoaster', 1),
(456, 17, 'MeaslySecretEyra', 'Jab 3', 'standardtoaster', 1),
(457, 17, 'AssuredAmazingAlpinegoat', 'Jab 2', 'standardtoaster', 1),
(458, 17, 'PortlySlightAmericanavocet', 'High F Tilt', 'standardtoaster', 2),
(459, 17, 'RawAggressiveCuscus', 'Low F Tilt', 'standardtoaster', 2),
(460, 17, 'VigorousVioletCub', 'U Tilt', 'standardtoaster', 2),
(461, 17, 'SlimySaneGartersnake', 'F Smash', 'standardtoaster', 3),
(462, 17, 'WelltodoFluidFrigatebird', 'Forward B', 'standardtoaster', 0),
(463, 17, 'ImpracticalSleepyAtlanticspadefish', 'Up B 1', 'standardtoaster', 0),
(464, 17, 'DentalPettyChickadee', 'Running Grab', 'standardtoaster', 5),
(465, 17, 'SpecificFittingHousefly', 'Down B', 'standardtoaster', 0),
(466, 17, 'SlushyPeriodicEstuarinecrocodile', 'Up B 2', 'standardtoaster', 0),
(467, 17, 'SpiffyJoyousAustralianfurseal', 'Forward B', 'standardtoaster', 0),
(468, 17, 'GreenOblongErne', 'Neutral B', 'standardtoaster', 0),
(469, 17, 'UntriedSaltyGallinule', 'Dash Attack', 'standardtoaster', 5),
(470, 17, 'CornyAcademicHermitcrab', 'Standing Grab', 'standardtoaster', 5),
(471, 17, 'GentleFirsthandGnat', 'U Air', 'standardtoaster', 4),
(472, 17, 'TatteredBareArmyant', 'F Air', 'standardtoaster', 4),
(473, 17, 'DearHeavyBluefintuna', 'B Air', 'standardtoaster', 4),
(474, 17, 'FickleQueasyCockroach', 'D Air', 'standardtoaster', 4),
(475, 17, 'HighlevelSparklingBrahmancow', 'N Air', 'standardtoaster', 4),
(477, 17, 'SpotlessQuarrelsomeHatchetfish', 'Down Smash', 'standardtoaster', 3),
(478, 17, 'FrequentUnawareElkhound', 'Down Tilt', 'standardtoaster', 2),
(479, 18, 'BoldUntriedBlackwidowspider', 'F Tilt', 'Emma Watson''s Boyfriend', 2),
(480, 18, 'MilkyCautiousElectriceel', 'U Tilt', 'Emma Watson''s Boyfriend', 2),
(481, 18, 'FarawayMammothCockerspaniel', 'D smash', 'Emma Watson''s Boyfriend', 3),
(482, 18, 'QuarrelsomeAggressiveIslandcanary', 'F Smash Golf Club', 'Emma Watson''s Boyfriend', 3),
(483, 18, 'SpecificShorttermBurro', 'F Smash Racket', 'Emma Watson''s Boyfriend', 3),
(484, 18, 'ResponsibleImaginaryGoa', 'F Smash Frying Pan', 'Emma Watson''s Boyfriend', 3),
(485, 18, 'VictoriousHideousFlyingfish', 'U smash', 'Emma Watson''s Boyfriend', 3),
(486, 18, 'InformalBrightBantamrooster', 'D Air', 'Emma Watson''s Boyfriend', 4),
(487, 18, 'GrizzledCooperativeGemsbok', 'B Air', 'Emma Watson''s Boyfriend', 4),
(488, 18, 'DishonestGranularAlpinegoat', 'F Air', 'Emma Watson''s Boyfriend', 4),
(489, 18, 'GentleImpartialFoal', 'Running Grab', 'Emma Watson''s Boyfriend', 5),
(490, 18, 'LittlePinkEmperorshrimp', 'Dash Attack', 'Emma Watson''s Boyfriend', 5),
(491, 18, 'DapperOrdinaryBlackbear', 'Veggie Throw Ground', 'Emma Watson''s Boyfriend', 6),
(492, 18, 'WholePowerlessCranefly', 'D Tilt', 'Emma Watson''s Boyfriend', 2),
(493, 18, 'SociableOptimalAvians', 'Forward B on ground', 'Emma Watson''s Boyfriend', 0),
(494, 18, 'CarelessPastelAmericanblackvulture', 'Forward B in air', 'Emma Watson''s Boyfriend', 0),
(495, 18, 'TemptingTanAmphiuma', 'Up B', 'Emma Watson''s Boyfriend', 0),
(496, 18, 'GrizzledPresentCommongonolek', 'Roll Forward', 'Emma Watson''s Boyfriend', 6),
(497, 18, 'ValidDarkHoopoe', 'Spot Dodge', 'Emma Watson''s Boyfriend', 6),
(498, 18, 'AdolescentDecimalClingfish', 'Air Dodge', 'Emma Watson''s Boyfriend', 6),
(499, 18, 'SlushyDefiniteAsiansmallclawedotter', 'Jab 2', 'Emma Watson''s Boyfriend', 1),
(500, 18, 'KeyWelloffAmericankestrel', 'U Air', 'Emma Watson''s Boyfriend', 4),
(501, 18, 'SpectacularIcyAlbertosaurus', 'N Air', 'Emma Watson''s Boyfriend', 4),
(502, 18, 'FamousTornAddax', 'Jab 1', 'Emma Watson''s Boyfriend', 1),
(503, 18, 'YearlyPaltryGalapagosalbatross', 'Down B', 'Emma Watson''s Boyfriend', 0),
(504, 18, 'SlowShyAfricanjacana', 'Grab', 'Emma Watson''s Boyfriend', 5),
(505, 19, 'ZestyOrangeFattaileddunnart', 'U Tilt', 'Seikend', 2),
(506, 19, 'ExemplaryDecimalFawn', 'Spot Dodge', 'Seikend', 6),
(507, 19, 'EvenFaithfulCuttlefish', 'Neutral B in air', 'Seikend', 0),
(508, 19, 'NaturalBlankClumber', 'D Tilt', 'Seikend', 2),
(509, 19, 'SpicySlipperyArchaeocete', 'Jab', 'Seikend', 1),
(510, 19, 'ThreadbareDazzlingGrunion', 'Low F Tilt', 'Seikend', 2),
(511, 19, 'OrderlyImpoliteAfricanwildcat', 'D Air', 'Seikend', 4),
(512, 19, 'HatefulPitifulCirriped', 'High F Tilt', 'Seikend', 2),
(513, 19, 'DeficientAncientArthropods', 'U Smash', 'Seikend', 3),
(514, 19, 'ExcellentLiquidAsianporcupine', 'D Smash', 'Seikend', 3),
(515, 19, 'VictoriousInstructiveFairyfly', 'B Air', 'Seikend', 4),
(516, 19, 'VapidInsistentIchthyosaurs', 'Forward B', 'Seikend', 0),
(517, 19, 'BlaringWarmheartedArthropods', 'Running Grab', 'Seikend', 5),
(518, 19, 'RingedParallelGrasshopper', 'F Air', 'Seikend', 4),
(519, 19, 'LastNaiveAmericanrobin', 'U Air', 'Seikend', 4),
(520, 19, 'OfficialFloweryKoi', 'Roll Forward', 'Seikend', 6),
(521, 19, 'IckyVillainousHoatzin', 'Dash Attack', 'Seikend', 5),
(522, 19, 'MeaslyPassionateButterfly', 'F Smash', 'Seikend', 3),
(523, 19, 'VeneratedPresentKittiwake', 'Standing Grab', 'Seikend', 5),
(524, 19, 'VariableScholarlyCooter', 'Air Dodge', 'Seikend', 6),
(526, 19, 'SleepyFarAmurminnow', 'Forward B in air', 'Seikend', 4),
(527, 20, 'MemorableFrayedDunlin', 'Down B', 'Stratocaster', 0),
(528, 20, 'BriefWearyBaleenwhale', 'Jab', 'Stratocaster', 1),
(529, 20, 'SatisfiedLameEmeraldtreeskink', 'High F Tilt', 'Stratocaster', 2),
(530, 20, 'ExemplaryGiantDesertpupfish', 'Low F Tilt', 'Stratocaster', 2),
(531, 20, 'SoulfulBarrenGonolek', 'U Tilt', 'Stratocaster', 2),
(532, 20, 'IlliterateWhiteHogget', 'D Tilt', 'Stratocaster', 2),
(533, 20, 'EntireVictoriousHyrax', 'D Smash', 'Stratocaster', 3),
(534, 20, 'GoldenBouncyConure', 'F Smash', 'Stratocaster', 3),
(535, 20, 'DirtyWeeklyGoa', 'U Air', 'Stratocaster', 4),
(536, 20, 'PointedFrigidAcouchi', 'Standing Grab', 'Stratocaster', 5),
(537, 20, 'BeneficialMistyAmurratsnake', 'Neutral B in air', 'Stratocaster', 0),
(538, 20, 'JitteryVastBighorn', 'Roll Forward', 'Stratocaster', 6),
(539, 20, 'KindheartedConcreteDowitcher', 'Dash Attack', 'Stratocaster', 5),
(540, 20, 'PeriodicFlippantBlueandgoldmackaw', 'U Smash', 'Stratocaster', 3),
(541, 20, 'CorruptWhisperedCommabutterfly', 'N Air', 'Stratocaster', 4),
(542, 20, 'AliveSarcasticEel', 'Air Dodge', 'Stratocaster', 6),
(543, 20, 'VerifiablePerfumedEyelashpitviper', 'Running Grab', 'Stratocaster', 5),
(544, 20, 'NiftyDismalGoldfish', 'Spot Dodge', 'Stratocaster', 6),
(545, 20, 'OldYoungKiwi', 'Up B', 'Stratocaster', 0),
(546, 20, 'BraveCelebratedEchidna', 'Forward B', 'Stratocaster', 0),
(547, 20, 'MeaslyEdibleGemsbuck', 'Roll Backward', 'Stratocaster', 6),
(548, 20, 'HelplessOpulentErin', 'B Air', 'Stratocaster', 4),
(549, 20, 'FamiliarVeneratedHorse', 'D Air', 'Stratocaster', 4),
(550, 20, 'FrayedPopularBrontosaurus', 'F Air', 'Stratocaster', 4),
(551, 21, 'VioletClosedKid', 'Down B', 'Aizen', 0),
(552, 21, 'YoungLinearAmazondolphin', 'Neutral B', 'Aizen', 0),
(553, 21, 'AffectionateSeparateEarthworm', 'Up B', 'Aizen', 0),
(554, 21, 'PertinentPinkIndianabat', 'Jab 1', 'Aizen', 1),
(555, 21, 'GargantuanGleamingHairstreakbutterfly', 'N Air', 'Aizen', 2),
(556, 21, 'OffensiveViciousCob', 'D Tilt', 'Aizen', 2),
(557, 21, 'GleamingTightGuppy', 'U Tilt', 'Aizen', 2),
(558, 21, 'ScratchyGratefulEagle', 'F Tilt', 'Aizen', 2),
(559, 21, 'ImperturbablePlushGhostshrimp', 'U Smash', 'Aizen', 3),
(560, 21, 'ScarceRichKingfisher', 'D Smash', 'Aizen', 3),
(561, 21, 'GlitteringGaseousIbadanmalimbe', 'F Smash', 'Aizen', 3),
(562, 21, 'HarmoniousWildBoutu', 'F Air', 'Aizen', 4),
(563, 21, 'SpiffyEnlightenedIchneumonfly', 'D Air', 'Aizen', 4),
(564, 21, 'LivelyGrimyIndri', 'B Air', 'Aizen', 4),
(565, 21, 'GlamorousBetterJenny', 'U Air', 'Aizen', 4),
(566, 21, 'ClassicMagnificentKakapo', 'Dash Attack', 'Aizen', 5),
(567, 21, 'AngryLavishFlyingfish', 'Spot Dodge', 'Aizen', 6),
(568, 21, 'TartGiantClumber', 'Forward B 4 (neutral)', 'Aizen', 0),
(569, 21, 'RedThatHuemul', 'Forward B 4 (up)', 'Aizen', 0),
(570, 21, 'NaiveHeavyBallpython', 'Forward B 2 (up)', 'Aizen', 0),
(571, 21, 'HeavyDishonestHairstreakbutterfly', 'Air Dodge', 'Aizen', 6),
(572, 21, 'MeatyBeautifulIndochinesetiger', 'Forward B 3 (up)', 'Aizen', 0),
(573, 21, 'ConstantLastAmericanblackvulture', 'Forward B 2 (neutral & down)', 'Aizen', 0),
(574, 21, 'VelvetyZestyAzurevasesponge', 'Forward B 3 (neutral)', 'Aizen', 0),
(575, 21, 'AncientKaleidoscopicFlyingfish', 'Neutral B in air', 'Aizen', 0),
(576, 21, 'YellowishFortunateEmu', 'Forward B 3 (down)', 'Aizen', 0),
(577, 21, 'HastyGreatAmericankestrel', 'Forward B 4 (down)', 'Aizen', 0),
(578, 21, 'ClutteredUnnaturalCutworm', 'Forward B 1', 'Aizen', 0),
(579, 21, 'RevolvingAbsoluteGiraffe', 'Grab', 'Aizen', 5),
(580, 21, 'ColossalGentleBustard', 'Roll Back', 'Aizen', 6),
(581, 21, 'ConstantWanBream', 'Roll Forward', 'Aizen', 6),
(582, 21, 'PettyCheapBlacklab', 'Running Grab', 'Aizen', 5),
(583, 22, 'FlamboyantGiganticHuia', 'Up B', 'knihT', 0),
(584, 22, 'DaringVacantBluetonguelizard', 'Jab 1', 'knihT', 1),
(585, 22, 'WealthyDistantArgentineruddyduck', 'B Air', 'knihT', 4),
(586, 22, 'RashFantasticGecko', 'D Air', 'knihT', 4),
(587, 22, 'MealyGrandAmericansaddlebred', 'High F Tilt', 'knihT', 2),
(588, 22, 'PoshOblongBlackpanther', 'Forward B in air (smash b)', 'knihT', 0),
(589, 22, 'PepperyMediocreAardwolf', 'D Smash', 'knihT', 3),
(590, 22, 'UnpleasantCommonAfricanhornbill', 'U Smash', 'knihT', 3),
(591, 22, 'BeautifulMasculineHind', 'Jab 2', 'knihT', 1),
(592, 22, 'GleefulAnxiousHammerkop', 'Down B', 'knihT', 0),
(593, 22, 'OblongDesertedAnophelesmosquito', 'Forward B on ground (smash b)', 'knihT', 0),
(594, 22, 'TotalComposedJackal', 'Neutral B (full charge)', 'knihT', 0),
(595, 22, 'SandyNauticalEel', 'Forward B in air (tilt b)', 'knihT', 0),
(596, 22, 'BlandAngelicAnaconda', 'Forward B on ground (tilt b)', 'knihT', 0),
(597, 22, 'CarelessSpicyLadybug', 'Neutral B', 'knihT', 0),
(598, 22, 'DisastrousFreshFerret', 'Up B in air', 'knihT', 0),
(599, 22, 'WarmheartedSelfishCoati', 'Air Dodge', 'knihT', 6),
(600, 22, 'ShadyFoolhardyBasil', 'Roll Backward', 'knihT', 6),
(601, 22, 'QuaintJovialHectorsdolphin', 'Dash Attack', 'knihT', 5),
(602, 22, 'HauntingOccasionalCapybara', 'Spot Dodge', 'knihT', 6),
(603, 22, 'OldElaborateAlligatorsnappingturtle', 'D Tilt', 'knihT', 2),
(604, 22, 'ArtisticGloomyBullmastiff', 'Running Grab', 'knihT', 5),
(605, 22, 'SlushyInsignificantAltiplanochinchillamouse', 'Standing Grab', 'knihT', 5),
(606, 22, 'IgnorantDisguisedBinturong', 'F Air', 'knihT', 4),
(607, 22, 'PlumpAngryDugong', 'F Smash', 'knihT', 3),
(608, 22, 'UnsteadyDizzyComet', 'Low F Tilt', 'knihT', 2),
(609, 22, 'ReflectingInsignificantAnt', 'N Air', 'knihT', 4),
(610, 22, 'HandyOrneryAstrangiacoral', 'Roll Forward', 'knihT', 6),
(611, 22, 'ParchedWebbedAmazonparrot', 'U Tilt', 'knihT', 2),
(612, 22, 'RightInfiniteAlbino', 'U Air', 'knihT', 4),
(613, 23, 'SameFlippantAbyssiniangroundhornbill', 'Up B', 'Stratocaster', 0),
(614, 23, 'ElegantVelvetyGreatargus', 'Jab 1', 'Stratocaster', 1),
(615, 23, 'LameGlaringAmericanrobin', 'Jab 3', 'Stratocaster', 1),
(616, 23, 'ImpureHealthyCod', 'Jab 2', 'Stratocaster', 1),
(617, 23, 'DeliciousCoordinatedGodwit', 'D Tilt', 'Stratocaster', 2),
(618, 23, 'LavishTanDotterel', 'F Tilt', 'Stratocaster', 2),
(619, 23, 'FlippantRequiredAfricanpiedkingfisher', 'N Air', 'Stratocaster', 4),
(620, 23, 'SecondBigheartedCrocodile', 'F Air', 'Stratocaster', 4),
(621, 23, 'HappyOrneryHanumanmonkey', 'Dash Attack', 'Stratocaster', 5),
(622, 23, 'HiddenFittingGrebe', 'Standing Grab', 'Stratocaster', 5),
(623, 23, 'PersonalGiddyIcterinewarbler', 'U Tilt', 'Stratocaster', 2),
(624, 23, 'SomberLargeAss', 'Roll Backward', 'Stratocaster', 6),
(625, 23, 'ShoddyAppropriateAegeancat', 'Running Grab', 'Stratocaster', 5),
(626, 23, 'DevotedQuerulousArgentineruddyduck', 'Spot Dodge', 'Stratocaster', 6),
(627, 23, 'IgnorantFearlessElephantbeetle', 'Roll Forward', 'Stratocaster', 6),
(628, 23, 'CoarseShadowyHypsilophodon', 'F Smash', 'Stratocaster', 3),
(629, 23, 'WatchfulNauticalAidi', 'Forward B', 'Stratocaster', 0),
(630, 23, 'OldfashionedWatchfulDromedary', 'B Air', 'Stratocaster', 4),
(631, 23, 'PoorRaggedAlligatorgar', 'D Air', 'Stratocaster', 4),
(632, 23, 'ThriftyMetallicHornedtoad', 'Neutral B (charged)', 'Stratocaster', 0),
(633, 23, 'TightLameLamb', 'Air Dodge', 'Stratocaster', 6),
(634, 23, 'JauntyGreenJunco', 'Down B', 'Stratocaster', 0),
(635, 23, 'AnxiousOblongBobwhite', 'Down Smash', 'Stratocaster', 3),
(636, 23, 'InbornDamagedIndianpalmsquirrel', 'Neutral B in air', 'Stratocaster', 0),
(637, 23, 'AccomplishedInsidiousJohndory', 'U Air', 'Stratocaster', 4),
(638, 23, 'TatteredWarpedBushsqueaker', 'Up Smash', 'Stratocaster', 3),
(639, 24, 'ShamefulNecessaryDobermanpinscher', 'Jab 1', 'mastermoo420', 1),
(640, 24, 'SolidShowyCoqui', 'U Tilt', 'mastermoo420', 2),
(641, 24, 'CorruptAmbitiousAiredaleterrier', 'F Tilt', 'mastermoo420', 2),
(642, 24, 'AngelicGrimyAfricanaugurbuzzard', 'D Tilt', 'mastermoo420', 2),
(643, 24, 'SnarlingAdmirableDragonfly', 'U Smash', 'mastermoo420', 3),
(644, 24, 'SparklingQuestionableAmericantoad', 'Roll Backward', 'mastermoo420', 6),
(645, 24, 'DismalGorgeousEstuarinecrocodile', 'U Air', 'mastermoo420', 4),
(646, 24, 'RevolvingIncredibleDalmatian', 'Jab 2', 'mastermoo420', 1),
(647, 24, 'TintedGlassGarpike', 'Dash Attack', 'mastermoo420', 5),
(648, 24, 'CoordinatedGiganticJay', 'F Smash', 'mastermoo420', 3),
(649, 24, 'HatefulIdenticalHen', 'D Smash', 'mastermoo420', 3),
(650, 24, 'ValuableAlarmedHammerkop', 'Standing Grab', 'mastermoo420', 5),
(651, 24, 'MindlessMajesticCockatiel', 'Down B from ground', 'mastermoo420', 0),
(652, 24, 'HiddenPlasticCrossbill', 'Air Dodge', 'mastermoo420', 6),
(653, 24, 'TenseMajorCatfish', 'D Air', 'mastermoo420', 4),
(654, 24, 'IcyHollowAlaskajingle', 'B Air', 'mastermoo420', 4),
(655, 24, 'NastyBasicAsp', 'Running Grab', 'mastermoo420', 5),
(656, 24, 'OrneryCalmChinesecrocodilelizard', 'Neutral B', 'mastermoo420', 0),
(657, 24, 'OpenUnrulyKangaroo', 'Up B', 'mastermoo420', 0),
(658, 24, 'SpitefulDeterminedBuckeyebutterfly', 'F Air', 'mastermoo420', 4),
(659, 24, 'ZanyNextHermitcrab', 'Ground Dodge', 'mastermoo420', 6),
(660, 24, 'AshamedAnnualGoldfinch', 'N-Air', 'mastermoo420', 4),
(661, 24, 'EqualGenuineIberianchiffchaff', 'Roll Forward', 'mastermoo420', 6),
(662, 25, 'SingleImmediateGermanshepherd', 'Up B', 'standardtoaster', 0),
(663, 25, 'FittingZanyHagfish', 'Jab 2', 'standardtoaster', 1),
(664, 25, 'DishonestVapidCicada', 'U Air', 'standardtoaster', 4),
(665, 25, 'PreciousGenerousGoldfish', 'B Air', 'standardtoaster', 4),
(666, 25, 'GlossyYearlyDassie', 'Down Tilt', 'standardtoaster', 2),
(667, 25, 'SpeedyHarmoniousGalapagossealion', 'Roll Forward', 'standardtoaster', 6),
(668, 25, 'RemoteSentimentalAngwantibo', 'Roll Backward', 'standardtoaster', 6),
(669, 25, 'IndelibleFlippantCutworm', 'Air Dodge', 'standardtoaster', 6),
(670, 25, 'AgreeableEssentialGrouper', 'Z Air', 'standardtoaster', 4),
(671, 25, 'VengefulPerfumedAddax', 'F Air', 'standardtoaster', 4),
(672, 25, 'ParallelIdealisticAnhinga', 'Neutral B (startup)', 'standardtoaster', 0),
(673, 25, 'PassionateFreshHogget', 'Up B in air', 'standardtoaster', 0),
(674, 25, 'ImprobableVapidGermanspitz', 'N Air', 'standardtoaster', 4),
(675, 25, 'MajorDefensiveDungenesscrab', 'F Tilt', 'standardtoaster', 2),
(676, 25, 'TornWideAndeancondor', 'Jab 1', 'standardtoaster', 1),
(677, 25, 'UnacceptableBigheartedElectriceel', 'Neutral B', 'standardtoaster', 0),
(678, 25, 'HardBlaringBrownbear', 'Down B', 'standardtoaster', 0),
(679, 25, 'TiredGracefulIndigobunting', 'Forward B (end)', 'standardtoaster', 0),
(680, 25, 'ConsciousVacantFlea', 'Forward B (start)', 'standardtoaster', 0),
(681, 25, 'UniqueFondChrysalis', 'Dash Attack', 'standardtoaster', 5),
(682, 25, 'BiodegradableBewitchedChupacabra', 'Running Grab', 'standardtoaster', 5),
(683, 25, 'ImmenseRepentantGourami', 'Down Air', 'standardtoaster', 4),
(684, 25, 'HandyMetallicLabradorretriever', 'Down Smash', 'standardtoaster', 3),
(685, 25, 'LankyDependentGlassfrog', 'F Smash 2', 'standardtoaster', 3),
(686, 25, 'UnfitOccasionalIceblueredtopzebra', 'Grab', 'standardtoaster', 5),
(687, 25, 'SociableChiefIbisbill', 'Jab 3', 'standardtoaster', 1),
(688, 25, 'SentimentalConcernedBedlingtonterrier', 'Spot Dodge', 'standardtoaster', 6),
(689, 25, 'MixedPoliticalHarlequinbug', 'Up Smash', 'standardtoaster', 3),
(690, 25, 'GrimCluelessDorking', 'Up Tilt', 'standardtoaster', 2),
(691, 26, 'DismalUntimelyGoral', 'U Tilt', 'mastermoo420', 3),
(692, 26, 'PinkIllfatedIraniangroundjay', 'D Smash', 'mastermoo420', 3),
(693, 26, 'WeightySkinnyAfricanrockpython', 'Forward B', 'mastermoo420', 0),
(694, 26, 'OddInexperiencedDesertpupfish', 'Roll Backward', 'mastermoo420', 6),
(695, 26, 'SoreColorfulJavalina', 'N Air', 'mastermoo420', 4),
(696, 26, 'BasicPettyAmericanlobster', 'Down B', 'mastermoo420', 0),
(697, 26, 'CircularFrenchChrysomelid', 'Air Dodge', 'mastermoo420', 6),
(698, 26, 'ColossalEasygoingCrayfish', 'Roll Forward', 'mastermoo420', 6),
(699, 26, 'SomberTenderAvocet', 'Standing Grab', 'mastermoo420', 5),
(700, 26, 'FluidIcyGalah', 'B Air', 'mastermoo420', 4),
(701, 26, 'SaneMajesticIchneumonfly', 'F Air', 'mastermoo420', 4),
(702, 26, 'HighlevelRegalLark', 'Running Grab', 'mastermoo420', 5),
(703, 26, 'ShinyUntriedBrontosaurus', 'D Air', 'mastermoo420', 4),
(704, 26, 'ElaborateAccurateIberianmidwifetoad', 'Neutral B', 'mastermoo420', 0),
(705, 26, 'NeighboringPositiveAlligator', 'U Air', 'mastermoo420', 4),
(706, 26, 'UnderstatedCheapBellfrog', 'D Tilt', 'mastermoo420', 4),
(707, 26, 'BrokenCostlyGrison', 'Dash attack', 'mastermoo420', 5),
(708, 26, 'ImpressionableRecklessKouprey', 'F Smash', 'mastermoo420', 3),
(709, 26, 'InfiniteInnocentAcornbarnacle', 'F Tilt', 'mastermoo420', 2),
(710, 26, 'DismalClosedAmericanpainthorse', 'Spot Dodge', 'mastermoo420', 6),
(711, 26, 'ShamelessExhaustedAmericanindianhorse', 'Jab', 'mastermoo420', 6),
(712, 26, 'HarshForcefulArabianwildcat', 'Up B', 'mastermoo420', 0),
(713, 26, 'TatteredAffectionateAfricanelephant', 'U Smash', 'mastermoo420', 3);

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
CREATE TABLE `submissions` (
`id` int(11) NOT NULL,
  `url` varchar(90) NOT NULL,
  `source` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `pageid` int(11) NOT NULL,
  `dataid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `url`, `source`, `description`, `pageid`, `dataid`) VALUES
(22, 'SmartMessyFly', '', 'The Moon taking advantage of underused m', 1, 23),
(23, 'YoungInfantileGoshawk', '', 'Kevin Toy going OFF', 1, 6),
(28, 'ContentBleakEel', 'TNE Falcon Round Robin ', 'ledge-pushed up-air into up-air. Followed by pivot grab, up-throw onto platform, reverse nair tech-chase into pivot weak-knee, hard knee. ', 1, 2),
(29, 'GenerousYellowishKillifish', 'Max Shen', 'Edge cancelled Ken Combo', 1, 14),
(30, 'MeaslyOddballCowrie', '', 'Shroomed showing how to finish with f-air', 1, 4),
(31, 'BogusEagerAvocet', 'NMW', 'S2J getting an amazing conversion, covering many options in knockdown situations', 0, 26),
(32, 'IlliterateVagueCrab', 'djloreddit', 'The Top 4 Wavedashers in Melee. ', 0, 1),
(33, 'NextDecimalAfricanmolesnake', 'TBH4', 'mango, using waveshining to own set up for a double shine dair destruction of leffen', 0, 27),
(34, 'GrippingEverlastingArthropods', 'Kadano / http://smashboards.co', 'Marthâ€™s ledgedashstall (aka haxdash), easiest perfect execution with controller inputs, completely intangible', 0, 13),
(35, 'DimIckyAztecant', 'dsad', 'dsad', 0, 1),
(36, 'DimIckyAztecant', 'dsadsa', 'dsadsa', 0, 1),
(37, 'SnarlingHideousGreatwhiteshark', 'dsadsa', 'dash dance 11', 0, 11),
(38, 'SkinnyCorruptHake', 'dsad', 'dsadsa', 0, 1),
(39, 'dimmicky', 'dsa', 'dsa', 0, 1),
(40, 'SnarlingHideousGreatwhiteshark', 'sdad', 'sdas', 1, 6),
(41, 'SnarlingHideousGreatwhiteshark', 'sdad', 'sdas', 1, 6),
(42, 'SnarlingHideousGreatwhiteshark', 'sdad', 'sdas', 1, 6),
(43, 'SnarlingHideousGreatwhiteshark', 'sdad', 'sdas', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `submissionsgroup`
--

DROP TABLE IF EXISTS `submissionsgroup`;
CREATE TABLE `submissionsgroup` (
`id` int(11) NOT NULL,
  `name` varchar(130) NOT NULL,
  `fb` varchar(290) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissionsgroup`
--

INSERT INTO `submissionsgroup` (`id`, `name`, `fb`, `latitude`, `longitude`) VALUES
(4, 'Santa Cruz Melee', 'https://www.facebook.com/groups/SantaCruzMelee/', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `submissionstournament`
--

DROP TABLE IF EXISTS `submissionstournament`;
CREATE TABLE `submissionstournament` (
`id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `fb_id` int(60) NOT NULL,
  `bracket` varchar(150) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `first` varchar(90) NOT NULL,
  `second` varchar(90) NOT NULL,
  `third` varchar(90) NOT NULL,
  `stream` varchar(45) NOT NULL,
  `attending` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `host` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `techgif`
--

DROP TABLE IF EXISTS `techgif`;
CREATE TABLE `techgif` (
`id` int(11) NOT NULL,
  `techID` int(11) NOT NULL,
  `url` varchar(120) NOT NULL,
  `description` varchar(300) NOT NULL,
  `source` varchar(120) DEFAULT NULL,
  `frameDataJson` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `techgif`
--

INSERT INTO `techgif` (`id`, `techID`, `url`, `description`, `source`, `frameDataJson`) VALUES
(1, 1, 'SkinnyCorruptHake', 'The longest wavedash (Luigi) and the shortest (Peach).', 'http://www.reddit.com/r/smashbros/comments/1mlr3n/best_wavedashluigi_vs_worst_wavedashpeach/', '[{"frame":11,"buttons":[""],"ctrlStick":["270","100"]},{"frame":12,"buttons":[""],"ctrlStick":["270","100"]},{"frame":13,"buttons":[""],"ctrlStick":["270","100"]},{"frame":14,"buttons":[""],"ctrlStick":["270","100"]},{"frame":15,"buttons":["y"],"ctrlStick":[]},{"frame":16,"buttons":["l"],"ctrlStick":[]},{"frame":17,"buttons":[""],"ctrlStick":["315","100"]},{"frame":18,"buttons":[""],"ctrlStick":["315","100"]},{"frame":19,"buttons":[""],"ctrlStick":["315","100"]},{"frame":20,"buttons":[""],"ctrlStick":["315","100"]},{"frame":21,"buttons":[""],"ctrlStick":["315","100"]}]'),
(2, 1, 'ForkedGloomyHairstreakbutterfly', 'Continuous Wavedashes with Marth.', NULL, '[{"frame":2,"buttons":[""],"ctrlStick":["270","100"]},{"frame":4,"buttons":["y"],"ctrlStick":[]},{"frame":5,"buttons":["l"],"ctrlStick":["225","100"]},{"frame":6,"buttons":[""],"ctrlStick":["225","100"]},{"frame":7,"buttons":[""],"ctrlStick":["225","100"]},{"frame":8,"buttons":[""],"ctrlStick":["225","100"]},{"frame":22,"buttons":[""],"ctrlStick":["270","100"]},{"frame":23,"buttons":["y"],"ctrlStick":[]},{"frame":24,"buttons":["l"],"ctrlStick":[]},{"frame":25,"buttons":[""],"ctrlStick":["225","100"]},{"frame":25,"buttons":[""],"ctrlStick":["225","100"]},{"frame":26,"buttons":[""],"ctrlStick":[]},{"frame":44,"buttons":[""],"ctrlStick":["270","100"]},{"frame":45,"buttons":["y"],"ctrlStick":[]},{"frame":46,"buttons":["l"],"ctrlStick":["315","100"]},{"frame":47,"buttons":[""],"ctrlStick":["315","100"]},{"frame":48,"buttons":[""],"ctrlStick":["315","100"]},{"frame":49,"buttons":[""],"ctrlStick":["315","100"]},{"frame":64,"buttons":[""],"ctrlStick":["270","100"]},{"frame":65,"buttons":["y"],"ctrlStick":[]},{"frame":66,"buttons":["l"],"ctrlStick":["315","100"]},{"frame":67,"buttons":[""],"ctrlStick":["315","100"]},{"frame":68,"buttons":[""],"ctrlStick":["315","100"]},{"frame":69,"buttons":[""],"ctrlStick":["315","100"]}]'),
(17, 7, 'EcstaticHorribleDragon', 'A pivot contains a few frames of dashing, followed by a single frame where your character is standing up straight. On this frame, you can use any move as if your character is standing still.', NULL, ''),
(4, 2, 'SeveralCompassionateBlackwidowspider', 'A series of frame-perfect multi shines at 1/4 speed.', NULL, ''),
(12, 16, 'SpottedWhiteBordercollie', 'Hit (L or R) and (Up) within 20 frames of hitting the wall while in hitstun', NULL, ''),
(13, 5, 'SeveralUnlinedEsok', 'Comparing the heights from a full jump and a short hop.', NULL, ''),
(6, 4, 'FirmImmediateCivet', 'Two Links performing a down aerial. The red Link L-cancels, and can input his shield in half the time of the green Link.', 'http://www.reddit.com/r/smashbros/comments/1mzq7e/the_importance_of_lcancelling/', '[{"frame":7,"buttons":["y"],"ctrlStick":[]},{"frame":30,"buttons":["a"],"ctrlStick":["270","100"]},{"frame":31,"buttons":[""],"ctrlStick":["270","100"]},{"frame":32,"buttons":[""],"ctrlStick":["270","100"]},{"frame":33,"buttons":[""],"ctrlStick":["270","100"]},{"frame":34,"buttons":[""],"ctrlStick":["270","100"]},{"frame":35,"buttons":[""],"ctrlStick":["270","100"]},{"frame":39,"buttons":["l"],"ctrlStick":[]},{"frame":40,"buttons":["l"],"ctrlStick":[]},{"frame":41,"buttons":["l"],"ctrlStick":[]},{"frame":42,"buttons":["l"],"ctrlStick":[]},{"frame":43,"buttons":["l"],"ctrlStick":[]},{"frame":44,"buttons":["l"],"ctrlStick":[]},{"frame":60,"buttons":["r"],"ctrlStick":[]},{"frame":61,"buttons":["r"],"ctrlStick":[]},{"frame":62,"buttons":["r"],"ctrlStick":[]},{"frame":63,"buttons":["r"],"ctrlStick":[]},{"frame":64,"buttons":["r"],"ctrlStick":[]},{"frame":65,"buttons":["r"],"ctrlStick":[]},{"frame":66,"buttons":["r"],"ctrlStick":[]},{"frame":67,"buttons":["r"],"ctrlStick":[]},{"frame":68,"buttons":["r"],"ctrlStick":[]},{"frame":69,"buttons":["r"],"ctrlStick":[]},{"frame":70,"buttons":["r"],"ctrlStick":[]},{"frame":71,"buttons":["r"],"ctrlStick":[]},{"frame":72,"buttons":["r"],"ctrlStick":[]},{"frame":73,"buttons":["r"],"ctrlStick":[]},{"frame":74,"buttons":["r"],"ctrlStick":[]},{"frame":75,"buttons":["r"],"ctrlStick":[]},{"frame":76,"buttons":["r"],"ctrlStick":[]},{"frame":77,"buttons":["r"],"ctrlStick":[]},{"frame":78,"buttons":["r"],"ctrlStick":[]},{"frame":79,"buttons":["r"],"ctrlStick":[]},{"frame":80,"buttons":["r"],"ctrlStick":[]},{"frame":81,"buttons":["r"],"ctrlStick":[]},{"frame":82,"buttons":["r"],"ctrlStick":[]},{"frame":83,"buttons":["r"],"ctrlStick":[]},{"frame":84,"buttons":["r"],"ctrlStick":[]},{"frame":85,"buttons":["r"],"ctrlStick":[]},{"frame":86,"buttons":["r"],"ctrlStick":[]},{"frame":87,"buttons":["r"],"ctrlStick":[]},{"frame":88,"buttons":["r"],"ctrlStick":[]},{"frame":89,"buttons":["r"],"ctrlStick":[]},{"frame":90,"buttons":["r"],"ctrlStick":[]},{"frame":91,"buttons":["r"],"ctrlStick":[]},{"frame":92,"buttons":["r"],"ctrlStick":[]},{"frame":93,"buttons":["r"],"ctrlStick":[]},{"frame":94,"buttons":["r"],"ctrlStick":[]},{"frame":95,"buttons":["r"],"ctrlStick":[]},{"frame":96,"buttons":["r"],"ctrlStick":[]},{"frame":97,"buttons":["r"],"ctrlStick":[]},{"frame":98,"buttons":["r"],"ctrlStick":[]},{"frame":99,"buttons":["r"],"ctrlStick":[]},{"frame":100,"buttons":["r"],"ctrlStick":[]},{"frame":101,"buttons":["r"],"ctrlStick":[]},{"frame":102,"buttons":["r"],"ctrlStick":[]},{"frame":103,"buttons":["r"],"ctrlStick":[]},{"frame":104,"buttons":["r"],"ctrlStick":[]},{"frame":105,"buttons":["r"],"ctrlStick":[]},{"frame":106,"buttons":["r"],"ctrlStick":[]},{"frame":107,"buttons":["r"],"ctrlStick":[]},{"frame":108,"buttons":["r"],"ctrlStick":[]},{"frame":109,"buttons":["r"],"ctrlStick":[]},{"frame":110,"buttons":["r"],"ctrlStick":[]},{"frame":111,"buttons":["r"],"ctrlStick":[]},{"frame":112,"buttons":["r"],"ctrlStick":[]}]'),
(8, 13, 'DimIckyAztecant', 'Falco''s firestall, 1x speed, latest possible inputs', 'Kadano', '[{"frame":1,"buttons":[""],"ctrlStick":["270","100"]},{"frame":12,"buttons":["y"],"ctrlStick":[]},{"frame":16,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":17,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":18,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":19,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":20,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":21,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":22,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":23,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":24,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":25,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":26,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":27,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":28,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":29,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":30,"buttons":["b"],"ctrlStick":["90","100"]}]'),
(9, 11, 'FrightenedBruisedAstrangiacoral', 'Fox performing a frame-perfect dash-dance in Melee.', 'http://www.reddit.com/r/smashbros/comments/1nuxc2/dash_dance/', ''),
(15, 13, 'TatteredTediousDormouse', 'Sheik demonstrating a Shino-Stall. The blue represents invulnerability', 'Kadano', '[{"frame":9,"buttons":[""],"ctrlStick":["270","100"]},{"frame":14,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":15,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":16,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":17,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":18,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":19,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":20,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":21,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":22,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":23,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":24,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":25,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":26,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":27,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":28,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":29,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":30,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":31,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":32,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":33,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":34,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":35,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":36,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":37,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":38,"buttons":["b"],"ctrlStick":["90","100"]},{"frame":39,"buttons":["b"],"ctrlStick":["90","100"]}]'),
(11, 12, 'SilverDimwittedDouglasfirbarkbeetle', 'A meteor cancel used in a recovery off-stage.', NULL, ''),
(14, 8, 'LeanWhimsicalBubblefish', 'A wall jump can be used to mix up your opponent, and change up engages.', NULL, ''),
(16, 6, 'SoulfulPreciousIslandcanary', 'A demonstration of a ledge hop.', NULL, '[{"frame":16,"buttons":[""],"ctrlStick":["270","100"]},{"frame":17,"buttons":[""],"ctrlStick":["225","100"]},{"frame":18,"buttons":[""],"ctrlStick":["225","100"]},{"frame":19,"buttons":[""],"ctrlStick":["225","100"]},{"frame":20,"buttons":[""],"ctrlStick":["225","100"]},{"frame":21,"buttons":[""],"ctrlStick":["225","100"]},{"frame":22,"buttons":[""],"ctrlStick":["225","100"]},{"frame":23,"buttons":[""],"ctrlStick":["225","100"]},{"frame":24,"buttons":[""],"ctrlStick":["225","100"]},{"frame":25,"buttons":[""],"ctrlStick":["225","100"]},{"frame":26,"buttons":[""],"ctrlStick":["225","100"]},{"frame":27,"buttons":[""],"ctrlStick":["225","100"]},{"frame":28,"buttons":[""],"ctrlStick":["225","100"]},{"frame":29,"buttons":["y"],"ctrlStick":[]},{"frame":30,"buttons":[""],"ctrlStick":["45","100"]},{"frame":31,"buttons":[""],"ctrlStick":["45","100"]},{"frame":32,"buttons":[""],"ctrlStick":["45","100"]},{"frame":33,"buttons":[""],"ctrlStick":["45","100"]},{"frame":34,"buttons":[""],"ctrlStick":["45","100"]},{"frame":35,"buttons":[""],"ctrlStick":["45","100"]},{"frame":36,"buttons":[""],"ctrlStick":["45","100"]},{"frame":37,"buttons":[""],"ctrlStick":["45","100"]},{"frame":38,"buttons":[""],"ctrlStick":["45","100"]},{"frame":39,"buttons":[""],"ctrlStick":["45","100"]},{"frame":40,"buttons":[""],"ctrlStick":["45","100"]},{"frame":41,"buttons":[""],"ctrlStick":["45","100"]},{"frame":60,"buttons":[""],"ctrlStick":["270","100"]},{"frame":61,"buttons":[""],"ctrlStick":["225","100"]},{"frame":62,"buttons":[""],"ctrlStick":["225","100"]},{"frame":63,"buttons":[""],"ctrlStick":["225","100"]},{"frame":64,"buttons":[""],"ctrlStick":["225","100"]},{"frame":65,"buttons":[""],"ctrlStick":["225","100"]},{"frame":66,"buttons":[""],"ctrlStick":["225","100"]},{"frame":67,"buttons":[""],"ctrlStick":["225","100"]},{"frame":68,"buttons":[""],"ctrlStick":["225","100"]},{"frame":69,"buttons":[""],"ctrlStick":["225","100"]},{"frame":70,"buttons":[""],"ctrlStick":["225","100"]},{"frame":71,"buttons":[""],"ctrlStick":["225","100"]},{"frame":72,"buttons":["y"],"ctrlStick":["225","100"]},{"frame":73,"buttons":[""],"ctrlStick":["45","100"]},{"frame":74,"buttons":[""],"ctrlStick":["45","100"]},{"frame":75,"buttons":[""],"ctrlStick":["45","100"]},{"frame":76,"buttons":[""],"ctrlStick":["45","100"]},{"frame":77,"buttons":[""],"ctrlStick":["45","100"]},{"frame":78,"buttons":[""],"ctrlStick":["45","100"]},{"frame":79,"buttons":[""],"ctrlStick":["45","100"]},{"frame":80,"buttons":[""],"ctrlStick":["45","100"]},{"frame":81,"buttons":[""],"ctrlStick":["45","100"]},{"frame":82,"buttons":[""],"ctrlStick":["45","100"]},{"frame":83,"buttons":[""],"ctrlStick":["45","100"]},{"frame":84,"buttons":[""],"ctrlStick":["45","100"]}]'),
(18, 10, 'UnfitAnotherFlea', 'An example of what happens when you don''t crouch cancel.', NULL, ''),
(19, 10, 'EnlightenedIncompleteAnteater', 'An example of what happens when crouch canceling is used.', NULL, ''),
(20, 7, 'DelayedSmoggyGrison', 'An example of a pivot Foward Smash', NULL, ''),
(21, 17, 'SleepyGoodBoutu', 'A non jump canceled grab (dash-grab)', NULL, '[{"frame":33,"buttons":[""],"ctrlStick":["0","100"]},{"frame":34,"buttons":[""],"ctrlStick":["0","100"]},{"frame":35,"buttons":[""],"ctrlStick":["0","100"]},{"frame":36,"buttons":[""],"ctrlStick":["0","100"]},{"frame":37,"buttons":[""],"ctrlStick":["0","100"]},{"frame":38,"buttons":[""],"ctrlStick":["0","100"]},{"frame":39,"buttons":[""],"ctrlStick":["0","100"]},{"frame":40,"buttons":[""],"ctrlStick":["0","100"]},{"frame":41,"buttons":["z"],"ctrlStick":[]}]'),
(22, 17, 'TheseFondIndiancow', 'A jump canceled grab (stand-grab)', NULL, '[{"frame":30,"buttons":[""],"ctrlStick":["0","100"]},{"frame":31,"buttons":[""],"ctrlStick":["0","100"]},{"frame":32,"buttons":[""],"ctrlStick":["0","100"]},{"frame":33,"buttons":[""],"ctrlStick":["0","100"]},{"frame":34,"buttons":[""],"ctrlStick":["0","100"]},{"frame":35,"buttons":[""],"ctrlStick":["0","100"]},{"frame":36,"buttons":[""],"ctrlStick":["0","100"]},{"frame":37,"buttons":[""],"ctrlStick":["0","100"]},{"frame":38,"buttons":[""],"ctrlStick":["0","100"]},{"frame":39,"buttons":[""],"ctrlStick":["0","100"]},{"frame":40,"buttons":["y"],"ctrlStick":[]},{"frame":41,"buttons":["z"],"ctrlStick":[]}]'),
(23, 19, 'UnsteadySoggyFrigatebird', 'A neutral tech allows you to quickly stand up where you land', NULL, ''),
(24, 19, 'PaltryParallelAmericancrow', 'A right tech will make your character roll right before landing', NULL, ''),
(25, 19, 'PortlyAdvancedDamselfly', 'A left tech will make your character roll left before landing', NULL, ''),
(26, 18, 'SnarlingHideousGreatwhiteshark', 'Canceling run with a jump canceled up smash', NULL, '[{"frame":27,"buttons":[""],"ctrlStick":["90","100"]},{"frame":28,"buttons":[""],"ctrlStick":["90","100"]},{"frame":29,"buttons":[""],"ctrlStick":["90","100"]},{"frame":30,"buttons":["a"],"ctrlStick":["90","100"]},{"frame":31,"buttons":["a"],"ctrlStick":["90","100"]},{"frame":32,"buttons":["a"],"ctrlStick":["90","100"]},{"frame":77,"buttons":[""],"ctrlStick":["90","100"]},{"frame":78,"buttons":[""],"ctrlStick":["90","100"]},{"frame":79,"buttons":[""],"ctrlStick":["90","100"]},{"frame":80,"buttons":[""],"ctrlStick":["90","100"]},{"frame":81,"buttons":["a"],"ctrlStick":["90","100"]},{"frame":82,"buttons":["a"],"ctrlStick":["90","100"]},{"frame":82,"buttons":["a"],"ctrlStick":["90","100"]},{"frame":24,"buttons":[""],"ctrlStick":["0","100"]},{"frame":25,"buttons":[""],"ctrlStick":["0","100"]},{"frame":26,"buttons":[""],"ctrlStick":["0","100"]},{"frame":68,"buttons":[""],"ctrlStick":["180","100"]},{"frame":69,"buttons":[""],"ctrlStick":["180","100"]},{"frame":70,"buttons":[""],"ctrlStick":["180","100"]},{"frame":71,"buttons":[""],"ctrlStick":["180","100"]},{"frame":72,"buttons":[""],"ctrlStick":["180","100"]},{"frame":73,"buttons":[""],"ctrlStick":["180","100"]},{"frame":74,"buttons":[""],"ctrlStick":["180","100"]},{"frame":75,"buttons":[""],"ctrlStick":["180","100"]},{"frame":76,"buttons":[""],"ctrlStick":["180","100"]}]'),
(27, 16, 'FatherlyAnimatedAmericanwarmblood', 'Hit (L or R) to wall tech within 20 frames of hitting the wall while in hitstun', NULL, ''),
(28, 11, 'AngryDearBassethound', 'Dash dancing can be used to properly space your character as well as playing mind games with your opponent', NULL, ''),
(29, 20, 'DeadCoarseFlamingo', 'Demonstrating the different direction choices for DI', 'http://www.reddit.com/r/smashbros/comments/1pgo1x/the_importance_of_di/', ''),
(30, 21, 'EnormousFewGnat', 'Wave Lands demonstrated on BattleField platforms', 'kv016', ''),
(31, 22, 'SnappyBlissfulChickadee', 'The added mobility of short hop lasering', 'kv016', ''),
(32, 23, 'HelplessUnfortunateFlickertailsquirrel', 'PewPewU powershielding a Falco laser to get a laser reset', NULL, ''),
(33, 24, 'IdenticalThirstyDog', 'The Peach on the right uses L canceling, while the Peach on the left uses Float Canceling. Notice how the amount of landing lag is the same!', NULL, ''),
(34, 25, 'WideBlushingDiamondbackrattlesnake', 'MewTwo performing a Jab Reset in order to push Fox into a neutral position to continue a combo', NULL, ''),
(35, 26, 'DeepColorfulAfricanwilddog', 'S2J demonstrating tech chasing by predicting where his opponent is going to tech and adjusting accordingly', NULL, ''),
(36, 27, 'LegalInnocentEastrussiancoursinghounds', 'A frame perfect Fox Wave Shine', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `techinfo`
--

DROP TABLE IF EXISTS `techinfo`;
CREATE TABLE `techinfo` (
`id` int(11) NOT NULL,
  `techID` int(11) NOT NULL,
  `description` varchar(400) DEFAULT NULL,
  `smashwiki` varchar(90) DEFAULT NULL,
  `inputs` varchar(45) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COMMENT='Table used to store general information regarding a technique.';

--
-- Dumping data for table `techinfo`
--

INSERT INTO `techinfo` (`id`, `techID`, `description`, `smashwiki`, `inputs`) VALUES
(1, 2, 'A double shine (or multi shine, triple shine, etc.) is the repeated use of Reflector as an attack by either Fox or Falco. It is performed by jump-cancelling a Reflector and using a second Reflector just after leaving the ground, timed so that Fox or Falco will quickly land and allow the pattern to be repeated.', 'http://www.ssbwiki.com/Double_shine', '(Down + B) , (Jump) , (Down + B)'),
(2, 1, 'A wavedash is a technique in Super Smash Bros. Melee that is performed by air dodging diagonally into the ground, causing the character to slide a short distance.', 'http://www.ssbwiki.com/wavedash', '(Jump)->immediate (Diagonal Air Dodge)'),
(16, 7, 'Using the frame at which a character turns during a dash-dance, in which any normal ground options are available as if the character were standing still.\r\n', 'http://www.ssbwiki.com/Pivoting', '(Left) , (Right) or vice versa.'),
(4, 4, 'A technique that allows characters to act faster than usual when landing in the middle of an aerial attack.', 'http://www.ssbwiki.com/L-canceling', '(L or R or Z) within 7 frames of landing '),
(5, 5, 'The act of pressing the jump button and letting go before the character leaves the ground. This will result in a jump that is lower than a normal jump.', 'http://www.ssbwiki.com/Short_hop', '(QUICK Jump)'),
(17, 19, 'Used to quickly recover from a falling animation before landing. You can choose to tech neutral, right roll, or left roll.', 'http://www.ssbwiki.com/tech', '(L or R or Z) upon landing'),
(6, 8, 'A technique some characters can use to jump away from walls. Captain Falcon, Falco, Fox, Mario, Pichu, Samus, Young Link, and Sheik can all wall jump.\r\n', 'http://www.ssbwiki.com/Wall_jump', '(Away from wall) upon touching.'),
(7, 9, 'Jump-canceling may refer to two different techniques in Super Smash Bros. Melee: canceling a jump by using an attack, or jumping while using the shield.', NULL, '(Shield) + (Jump) OR (Jump) + (Up Smash)'),
(8, 10, 'By crouching before getting hit by an attack, some aspect of the attack will be weakened. Both knockback and hitstun will be lessened.', 'http://www.ssbwiki.com/Crouch_cancel', '(CROUCH) before impending attack.'),
(9, 13, 'A technique that allows your character to re-grab the ledge with slight invulnerability.', 'http://www.ssbwiki.com/Ledgestall', '(Character Dependent)'),
(10, 12, 'Meteor cancelling is the act of instantly negating the downwards knockback of a meteor smash by jumping or using an up b after being hit.', 'http://www.ssbwiki.com/Meteor_smash#Meteor_cancelling', '(Jump or Up B) after being hit'),
(11, 11, 'Dash-dancing is performed by tapping the analog stick left and right rapidly while on the ground, effectively dashing to the left and to the right alternately.', 'http://www.ssbwiki.com/Dash-dancing', '(Left), (Right)'),
(12, 6, 'Edge hopping is a technique used to return on-stage from the ledge. It entails dropping from the ledge (by pressing either "back" or "down" on the control stick) and immediately double-jumping.', 'http://www.ssbwiki.com/Edge_hopping', '(Down or Back) , (Jump)'),
(13, 16, 'The act of teching off of a wall during hitstun', 'http://www.ssbwiki.com/tech#Wall_tech', '(L or R) before landing in falling animation'),
(18, 20, 'Changing the angle of trajectory with the analog stick while being hit.', 'http://www.ssbwiki.com/Directional_influence', '(Direction)[hold] after being hit'),
(14, 17, 'Cancelling a jump before grabbing allows your character to perform a standing grab. This is a vital technique when running in for a grab because it replaces the slow dash-grab with a quicker standing grab.', 'http://www.ssbwiki.com/Jump-canceled_grab', '(Jump) followed immediately by (Z)'),
(15, 18, 'A jump-canceled up smash (JC up-smash) is a technique where a character interrupts a dash or run with a jump, which itself is then jump-canceled with an up-smash.', NULL, '(Jump) followed immediately by (Up Smash)'),
(19, 21, 'Wavelands are wavedashes performed when jumping onto platforms to increase mobility across the stage. It can also be used when falling from an empty hop to fake out or bait opponents.', 'http://www.ssbwiki.com/wavedash#Wavelanding', NULL),
(20, 22, 'Shorthop lasers take advantage of canceling the ending lag of Falco''s lasers by landing. By short hopping, firing a laser, and fast falling, Falco can fire lasers at a much faster rate than when standing. Combining this added mobility while firing lasers will help lock down and stop an opponents approach. ', 'http://supersmashbros.wikia.com/wiki/Short_hop_laser', NULL),
(21, 23, ' Using your shield against projectiles right when an attack''s hitbox is about to connect will reflect the projectile in the opposite direction, dealing 50% damage and knockback', 'http://www.ssbwiki.com/Powershield', '(L or R) right before an attack'),
(22, 24, 'Float canceling is a bug relating to floating. If Peach uses an aerial attack while floating, landing during the attack (whether still floating or not) will skip landing lag entirely and result in a normal landing instead.', 'http://www.ssbwiki.com/Floating#Float_canceling', NULL),
(23, 25, 'Jab resets is a technique that is performed by jabbing an opponent while they are knocked down. The jab will force the opponent to stand up, where the opponent can then hit them with almost any move they desire', 'http://www.ssbwiki.com/jab_reset', NULL),
(24, 26, 'tech chasing is the act of following your opponent after a knockdown. There are three options of techs, left roll, right roll, and neutral. Tech chasing is the act of punishing either of the three options with an attack', 'http://www.ssbwiki.com/Tech-chasing', ''),
(25, 27, 'A wave shine is a wavedash done immediately out of a shine. It can be done by Fox and Falco.', 'http://www.ssbwiki.com/Waveshine', '(Down + B) followed by (Wave Dash)');

-- --------------------------------------------------------

--
-- Table structure for table `techs`
--

DROP TABLE IF EXISTS `techs`;
CREATE TABLE `techs` (
`id` int(11) NOT NULL,
  `tech` varchar(32) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `techs`
--

INSERT INTO `techs` (`id`, `tech`) VALUES
(1, 'Wave Dash'),
(2, 'Multi Shine'),
(20, 'Directional Influence'),
(4, 'L Cancel'),
(5, 'Short hop'),
(6, 'Ledge Hop'),
(7, 'Pivot'),
(8, 'Wall Jump'),
(19, 'Tech'),
(10, 'Crouch Cancel'),
(11, 'Dash Dance'),
(12, 'Meteor Cancel'),
(13, 'Ledge Stall'),
(16, 'Wall Tech'),
(17, 'Jump Canceled Grab'),
(18, 'Jump Canceled Up Smash'),
(21, 'Wave Land'),
(22, 'Short Hop Laser'),
(23, 'Power Shielding'),
(24, 'Float Canceling'),
(25, 'Jab Reset'),
(26, 'Tech Chasing'),
(27, 'Wave Shine');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE `throttle` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(4) NOT NULL DEFAULT '0',
  `banned` tinyint(4) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 2, NULL, 0, 0, 0, NULL, NULL, NULL),
(2, 3, NULL, 0, 0, 0, NULL, NULL, NULL),
(3, 4, NULL, 0, 0, 0, NULL, NULL, NULL),
(4, 6, NULL, 0, 0, 0, NULL, NULL, NULL),
(5, 7, NULL, 0, 0, 0, NULL, NULL, NULL),
(6, 8, NULL, 0, 0, 0, NULL, NULL, NULL),
(7, 9, NULL, 0, 0, 0, NULL, NULL, NULL),
(8, 10, NULL, 0, 0, 0, NULL, NULL, NULL),
(9, 11, NULL, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

DROP TABLE IF EXISTS `upcoming`;
CREATE TABLE `upcoming` (
`id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `fb_id` varchar(130) NOT NULL,
  `bracket` varchar(250) NOT NULL,
  `class` varchar(35) NOT NULL DEFAULT 'event-info',
  `start` date NOT NULL,
  `end` date NOT NULL,
  `first` varchar(90) NOT NULL,
  `second` varchar(90) NOT NULL,
  `third` varchar(90) NOT NULL,
  `stream` varchar(90) NOT NULL,
  `attending` int(11) NOT NULL,
  `location` varchar(90) NOT NULL,
  `host` varchar(90) NOT NULL,
  `vods` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`id`, `title`, `fb_id`, `bracket`, `class`, `start`, `end`, `first`, `second`, `third`, `stream`, `attending`, `location`, `host`, `vods`) VALUES
(1, 'Do You Fox Wit it', '722984804448159', 'http://Showdownesports.challonge.com/SFGameNight13/', 'event-success', '2014-11-15', '2014-11-16', '', '', '', 'showdownsmash', 0, '', 'NorCal', '3048'),
(2, 'adsad', '', '', 'event-info', '2014-11-13', '2014-11-14', '', '', '', '', 0, '', '', ''),
(3, 'sadsasdeq', '', '', 'event-info', '2014-11-03', '2014-11-05', '', '', '', '', 0, '', '', ''),
(4, '21321321', '', '', 'event-info', '2014-11-02', '2014-11-08', '', '', '', '', 0, '', '', ''),
(5, 'sadsa', '', '', 'event-info', '2014-11-06', '2014-11-07', '', '', '', '', 0, '', '', ''),
(6, '21321', '', '', 'event-info', '2014-11-01', '2014-11-02', '', '', '', '', 0, '', '', ''),
(7, 'six', '', '', 'event-info', '2014-11-03', '2014-11-04', '', '', '', '', 0, '', '', ''),
(8, 'sevenupcoming', '', '', 'event-info', '2014-11-23', '2014-11-24', '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usergif`
--

DROP TABLE IF EXISTS `usergif`;
CREATE TABLE `usergif` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `url` varchar(90) NOT NULL,
  `description` varchar(130) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergif`
--

INSERT INTO `usergif` (`id`, `userid`, `url`, `description`) VALUES
(5, 2, 'MeaslyOddballCowrie', ''),
(6, 2, 'MeaslyOddballCowrie', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
`id` int(11) NOT NULL,
  `image` varchar(130) NOT NULL,
  `facebook` varchar(90) NOT NULL,
  `location` varchar(130) NOT NULL,
  `twitch` varchar(90) NOT NULL,
  `userid` int(11) NOT NULL,
  `vod` varchar(130) NOT NULL,
  `twitter` varchar(90) NOT NULL,
  `main` int(11) NOT NULL,
  `sponsor` varchar(90) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` int(11) NOT NULL,
  `friendcode` varchar(12) NOT NULL,
  `garpr` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `image`, `facebook`, `location`, `twitch`, `userid`, `vod`, `twitter`, `main`, `sponsor`, `latitude`, `longitude`, `friendcode`, `garpr`) VALUES
(9, 'LoganCollingwood.jpg', 'logan6694', 'Santa Cruz', 'xuaqua', 2, 'QtTpszuKXqA', 'logan6694', 21, 'Smash Lounge', 36.985, -122, '123456789124', ''),
(10, '', 'MIOMPewPewU', 'Bay Area', 'pewpewu', 3, '', 'miom_pewpewu', 14, 'Melee it On Me', 0, 0, '123456789123', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(4) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(2, 'logan6694@gmail.com', 'drft', '$2y$10$2Hnv3/rjsmXXirsm32WHueroCj4xx3cdxd5Sw0dLXvpfAnEZlfnKW', NULL, 1, NULL, NULL, '2014-12-03 00:17:49', '$2y$10$Xhp6nTrPdOVwNZwLhYKOWeQEG7Pb6vq7mQGJacrIntAlkGoeLJTZm', NULL, NULL, NULL, '2014-09-07 06:29:24', '2014-12-03 08:17:49'),
(3, 'pewpewu@smashlounge.com', 'pewpewu', '$2y$10$i.c0NvJYHicX9C6BjbPH1u5YF2b6p6K0S.g/9vcaeurN9cnwJrzLG', NULL, 1, NULL, NULL, '2014-09-07 18:08:05', '$2y$10$hxU/bA.sdGiDm01bsheNM.HG5hWtqItDVPr4KgTb1jjFs0qzY1rFm', NULL, NULL, NULL, '2014-09-08 01:07:57', '2014-09-08 01:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chargif`
--
ALTER TABLE `chargif`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charinfo`
--
ALTER TABLE `charinfo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chartech`
--
ALTER TABLE `chartech`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moves`
--
ALTER TABLE `moves`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movesgifs`
--
ALTER TABLE `movesgifs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissionsgroup`
--
ALTER TABLE `submissionsgroup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissionstournament`
--
ALTER TABLE `submissionstournament`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techgif`
--
ALTER TABLE `techgif`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techinfo`
--
ALTER TABLE `techinfo`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `techID` (`techID`);

--
-- Indexes for table `techs`
--
ALTER TABLE `techs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usergif`
--
ALTER TABLE `usergif`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_activation_code_index` (`activation_code`), ADD KEY `users_reset_password_code_index` (`reset_password_code`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chargif`
--
ALTER TABLE `chargif`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=302;
--
-- AUTO_INCREMENT for table `charinfo`
--
ALTER TABLE `charinfo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `chartech`
--
ALTER TABLE `chartech`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `moves`
--
ALTER TABLE `moves`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `movesgifs`
--
ALTER TABLE `movesgifs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=714;
--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `submissionsgroup`
--
ALTER TABLE `submissionsgroup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `submissionstournament`
--
ALTER TABLE `submissionstournament`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `techgif`
--
ALTER TABLE `techgif`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `techinfo`
--
ALTER TABLE `techinfo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `techs`
--
ALTER TABLE `techs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usergif`
--
ALTER TABLE `usergif`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;