DROP TABLE IF EXISTS `zodiac`; 
CREATE TABLE `zodiac` 
(
    `id`	INT,
    `name`	VARCHAR(512),
    `unicode_character`	VARCHAR(512),
    `gloss`	VARCHAR(512),
    `period`	VARCHAR(512),
    `zodiac_element`	VARCHAR(512),
    `linkspic`	VARCHAR(512)
);

INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('1', 'Aries', 'constellar/zodiac/Aries_symbol.svg.png', 'Ram', 'March 20 – April 20', 'fire', 'constellar/zodiac/aries.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('2', 'Taurus', 'constellar/zodiac/Taurus_symbol.svg.png', 'Bull', 'April 20 – May 21', 'Earth', 'constellar/zodiac/taurus.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('3', 'Gemini', 'constellar/zodiac/Geminiu_symbol.svg.png', 'Twins', 'May 21 – June 21', 'Air ', 'constellar/zodiac/gemini.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('4', 'Cancer', 'constellar/zodiac/Cancer_symbol.svg.png', 'Crab', 'June 21 – July 23', 'Water', 'constellar/zodiac/cancer.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('5', 'Leo', 'constellar/zodiac/Leo_symbol.svg.png', 'Lion', 'July 23 – August 23', 'fire', 'constellar/zodiac/leo.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('6', 'Virgo', 'constellar/zodiac/Virgo._symbol.svg.png', 'Maiden', 'August 23 – September', 'Earth', 'constellar/zodiac/virgo.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('7', 'Libra', 'constellar/zodiac/Libra_symbol.svg.png', 'Scales', 'September 23 – October', 'Air ', 'constellar/zodiac/libra.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('8', 'Scorpio', 'constellar/zodiac/Scorpio_symbol.svg.png', 'Scorpion', 'October 23 – November', 'Water', 'constellar/zodiac/scorpio.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('9', 'Sagittarius', 'constellar/zodiac/Sagittarius_symbol.svg.png', '(Centaur) Archer', 'November 22 – December 22', 'fire', 'constellar/zodiac/sagittarius.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('10', 'Capricorn', 'constellar/zodiac/Aries_symbol.svg.png', '"Mountain Goat or ""Goat-horned"" Sea-Goat"', 'December 22 – January', 'Earth', 'constellar/zodiac/aries.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('11', 'Aquarius', 'constellar/zodiac/Aquarius_symbol.svg.png', 'Water-Bearer', 'January 20 – February', 'air sign', 'constellar/zodiac/aquarius.jpg');
INSERT INTO `zodiac` (`id`, `name`, `unicode_character`, `gloss`, `period`, `zodiac_element`, `linkspic`) VALUES ('12', 'Pisces', 'constellar/zodiac/Pisces_symbol.svg.png', 'Fish', 'February 18 – March 20', 'Water', 'constellar/zodiac/pisces.jpg');
