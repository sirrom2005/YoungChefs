/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.6.17 : Database - young_chefs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`young_chefs` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `young_chefs`;

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_name` varchar(45) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `bio` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `profile` */

insert  into `profile`(`id`,`url_name`,`type`,`title`,`name`,`photo`,`bio`) values (1,'chef-latoya-panton',1,'Chef','Latoya Panton','chef_latoya_panton.jpg','<p>Latoya Panton, owner and chef of Delicious Occasions Catering and   Cooking Classes. A cooking class instructor, caterer and personal chef,   she studied Institutional and Catering Management at the University of   Technology. </p>\n<p>She has successfully taught children and adults to cook for   the past 10 years.</p>\n<p>Latoya believes that good food is an important   ingredient to quality living. With students from as young as 4 years of   age, she believes that exposing children to healthy food habits from an   early age will help to develop a lifelong appreciation for good food and   its beneficial effects on health. Cooking is a way to bring families   together and create memories that will last a lifetime.</p>\n<p>\n  Each summer   for the past 10 years Latoya has been inviting children who are   passionate about food into her classroom kitchen for a summer of cooking   and fun. <strong>The Young Chefs Cooking Club</strong> was started as an extension to the summer classes for those children who wanted to continue cooking beyond the Summer.</p>\n<p>\n  Now   in its&rsquo; third year the cooking club is actively engaging young foodies   to express their passion for food in creative ways during the after   school and Saturday classes.</p>\n<p>The young chefs have been given the   opportunity to be a part of public food events such as Simply Red (Heart   Foundation Fundraiser), World Diabetes Day Celebrations and B3Parenting   Expo.</p>\n<p>In club activities include an annual Christmas Cook Off, a   Tasting of French Foods at the end of the Easter term and the Young   Chefs restaurant at the end of the summer term. Latoya has designed her   classes to not only teach children to cook but also to help them build   their confidence and self-reliance.</p>\n<p>Passionate about food, Latoya   has been dedicating her life to exposing both adults and children to the   wonders of the foods around us, developing creative ways to utilize our   local foods and the pleasures that come from growing, preparing and   eating your own home grown foods.</p>');

/*Table structure for table `recipes` */

DROP TABLE IF EXISTS `recipes`;

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `ingredients` blob NOT NULL,
  `preparation` blob NOT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `chef_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `recipes` */

insert  into `recipes`(`id`,`name`,`ingredients`,`preparation`,`photo`,`chef_id`) values (1,'Goug&egrave;res','Servings: Makes about 50\r\n<ul>\r\n  <li>6 tablespoons (¾ stick) unsalted butter, cut into pieces</li>\r\n  <li>¾ teaspoon salt</li>\r\n  <li>Pinch of nutmeg</li>\r\n  <li>1¼ cups all-purpose flour</li>\r\n  <li>4 large eggs</li>\r\n  <li>6 ounces (1½ cups) grated Comté cheese or Gruyère</li>\r\n  <li>½ teaspoon freshly ground black pepper</li>\r\n  <li>1 large egg yolk</li>\r\n</ul>','<ol>\r\n  <li>Preheat oven to 400°. Bring butter, salt, nutmeg, and 1 cup   water to a boil in a medium saucepan, stirring until butter is melted.   Remove from heat, add flour, and stir to combine.</li>\r\n  <li>Cook mixture   over medium heat, stirring vigorously with a wooden spoon, until mixture   pulls away from sides of pan and forms a ball, about 2 minutes.   Continue to cook, stirring vigorously, until a dry film forms on bottom   and sides of pan and dough is no longer sticky, about 2 minutes longer.   Remove pan from heat and let dough cool slightly, about 2 minutes. Mix   in whole eggs one at a time, incorporating fully between additions. Mix   in cheese and pepper.</li>\r\n  <li>Scrape dough into a piping bag fitted with   a ½&rdquo; round tip (alternatively, use a plastic bag with a ½&rdquo; opening cut   diagonally from 1 corner). Pipe 1inch rounds about 2inches apart onto 2   parchment-lined baking sheets. Whisk egg yolk and 1 tsp. water in a   small bowl; brush rounds with egg wash.</li>\r\n  <li>Bake gougères until puffed and golden and dry in the center (they should sound hollow when tapped), 20–25 minutes.</li>\r\n  <li><strong>DO AHEAD:</strong> Dough can be made 4 hours ahead. Cover and chill. Gougères can be baked 2 hours ahead; reheat before serving.</li>\r\n</ol>','gougres.jpg',1),(2,'Salmon Mousse','<ul>\r\n  <li>4 ounces smoked salmon</li>\r\n  <li>2 tablespoons heavy cream</li>\r\n  <li>1 (8 ounce) package cream cheese, softened</li>\r\n  <li>1/2 lemon, juiced</li>\r\n  <li>1/2 teaspoon dried dill weed to taste</li>\r\n  <li>salt and pepper to taste</li>\r\n  <li>1 ounce salmon roe</li>\r\n</ul>','<ol>\r\n  <li>Place smoked salmon in a blender or food processor</li>\r\n  <li>blend until smooth. </li>\r\n  <li>Mix in heavy cream, cream cheese, juice of half of a lemon, dried dill weed, salt and pepper.</li>\r\n  <li>Blend to desired consistency.</li>\r\n</ol>','salmon_mousse.jpg',1),(3,'Cheese Souffle','<ul>\r\n<li>Butter, room temperature, for greasing the souffle</li>\r\n<li>2 tablespoons grated Parmesan</li>\r\n<li>1 1/2 ounces (3 tablespoons) butter</li>\r\n<li>3 tablespoons flour</li>\r\n<li>1 teaspoon dry mustard</li>\r\n<li>1/2 teaspoon garlic powder</li>\r\n<li>1/8 teaspoon kosher salt</li>\r\n<li>1 1/3 cups milk, hot</li>\r\n<li>4 large egg yolks (2 1/2 ounces by weight)</li>\r\n<li>6 ounces sharp Cheddar</li>\r\n<li>5 egg whites plus 1 tablespoon water (5 1/2 ounces by weight plus 1/2 ounce water)</li>\r\n<li>1/2 teaspoon cream of tartar</li>\r\n</ul>','1. Use room temperature butter to grease an 8-inch souffle mold. Add the   grated Parmesan and roll around the mold to cover the sides. Cover with   plastic wrap and place into the freezer for 5 minutes.<br>\r\n<br>\r\n2. Preheat oven to 375 degrees F.<br>\r\n<br>\r\n3. In a small saucepan, heat the butter. Allow all of the water to cook out.<br>\r\n<br>\r\n4.   In a separate bowl combine the flour, dry mustard, garlic powder, and   kosher salt. Whisk this mixture into the melted butter. Cook for 2   minutes.<br>\r\n<br>\r\n5. Whisk in the hot milk and turn the heat to high. Once the mixture reaches a boil, remove from the heat.<br>\r\n<br>\r\n6.   In a separate bowl, beat the egg yolks to a creamy consistency. Temper   the yolks into the milk mixture, constantly whisking. Remove from the   heat and add the cheese. Whisk until incorporated.<br>\r\n<br>\r\n7. In a   separate bowl, using a hand mixer, whip the egg whites and cream of   tartar until glossy and firm. Add 1/4 of the mixture to the base.   Continue to add the whites by thirds, folding very gently.<br>\r\n<br>\r\n8.   Pour the mixture into the souffle. Fill the souffle to 1/2-inch from the   top. Place on an aluminum pie pan. Bake in the oven for 35 minutes.\r\n','cheese_souffle.jpg',1),(4,'Sweet or Savory Pate a Choux','<ul>\r\n  <li>1 cup water</li>\r\n  <li>3/4 stick butter (6 tablespoons)</li>\r\n  <li>1 tablespoon sugar plus 1/8 teaspoon salt (for sweet)</li>\r\n  <li>1 teaspoon salt (for savory)</li>\r\n  <li>5 3/4 ounces flour</li>\r\n  <li>1 cup eggs, about 4 large eggs and 2 whites</li>\r\n</ul>','Preheat oven to 425 degrees F.\r\n<ol>\r\n  <li>Boil water, butter, and salt or sugar.</li>\r\n  <li>Add flour and remove from heat. Work mixture together and return to heat.</li>\r\n  <li>Continue working the mixture until all flour is incorporated and dough forms a ball (about 2 to 3 minutes).</li>\r\n  <li> Transfer   mixture into bowl of a standing mixer and let cool for 3 or 4 minutes.   With mixer on stir or lowest speed add eggs, 1 at a time, making sure   the first egg is completely incorporated before continuing.</li>\r\n  <li>Once   all eggs have been added and the mixture is smooth put dough into   piping bag fitted with a round tip. Pipe immediately into golfball-size   shapes, 2 inches apart onto parchment lined sheet pans.</li>\r\n  <li> Cook   for 10 minutes, then turn the oven down to 350 degrees F and bake for 10   more minutes or until golden brown. Once they are removed from the oven   pierce  the bottoms with a paring knife immediately to release steam.</li>\r\n</ol>','sweet_savory_pate_choux.jpg',1),(5,'Chocolate Souffle','<ul>\r\n<li>7 ounces finely chopped bittersweet or semisweet chocolate</li>\r\n<li>4 tablespoons unsalted butter, plus for preparing the moulds</li>\r\n<li>1 1/2 teaspoons pure vanilla extract</li>\r\n<li>3 large egg yolks</li>\r\n<li>3 tablespoons warm water</li>\r\n<li>1/2 cup sugar, plus 2 tablespoons</li>\r\n<li>8 large egg whites, room temperature</li>\r\n<li>1/2 teaspoon fresh lemon juice</li>\r\n<li>Confectioners\' sugar for garnish</li>\r\n<li>Add Checked Items To Grocery List</li>\r\n</ul>','<p>Brush 6 (6-ounce) ramekins with soft butter, then coat with sugar. Put   the prepared ramekins in the freezer. (This can be done a day ahead.)\r\nSet an oven rack in lower third of the oven and preheat to 400 degrees F.</p>\r\n<p>Put   the chocolate and butter in a medium heatproof bowl. Bring a saucepan   filled with an inch or so of water to a very slow simmer; set the bowl   over, but not touching, the water. Stir the chocolate occasionally until   melted and smooth. Remove from heat and stir in vanilla extract. Set   aside.</p>\r\n<p>Combine the egg yolks and warm water in the bowl of a   standing mixer or large bowl and beat until frothy. Gradually add 2   tablespoons sugar, and continue beating until ribbons form, about 5   minutes. Very lightly fold the yolks into the chocolate mixture. (Rinse   the bowl well, if using for beating the egg whites.)</p>\r\n<p>Remove   prepared ramekins from freezer. Put the egg whites in the bowl of a   standing mixer, or large non-reactive bowl, add the lemon juice. Beat on   medium until frothy; then gradually add the remaining 1/2 cup of sugar   and increase speed to high. Beat until the whites hold a stiff but not   dry peak.</p>\r\n<p>Working quickly, fold about a third of the egg whites   into the chocolate to lighten; then fold in remaining whites until   blended. Gently ladle or spoon the souffle mixture into the ramekins,   and place on a baking sheet. (Level off the surface with a straight   edge, scraping any excess mixture back into the bowl.)</p>\r\n<p>Immediately   bake until the souffle rises about 1 1/2 inches from the ramekins, and   the tops are touched with brown, about 18 to 20 minutes. Remove from   oven, dust with confectioners\' sugar and serve immediately.</p>\r\n','chocolate_souffle.jpg',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
